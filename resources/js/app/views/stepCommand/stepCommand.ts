import { EventBus } from '../../eventBus';
import { basketServices } from '../../_services/basketServices';

//@ts-ignore
import { VStripeCard } from 'v-stripe-elements/lib'

//@ts-ignore
import _ from 'lodash'
import { apiService } from '../../_services/apiService';
import axios from 'axios';
export default {
  components: {
    VStripeCard
  },
  data() {
    return {
      panel: [0],

      api_key: 'pk_test_51KDuErCLeLtq3NkeHRRPq1lxIr4LtN6qs9fOXlSd0Q6a612MStQri7SsUwxC88U3LqkhTJjo5IsjJe46VHDmmvhb007euCXqNc',
      // Commande
      source: null,

      name: '',
      addPaymentStatus: 0,
      addPaymentStatusError: '',

      commande: {
        commandList: {},
        livraison: {
          name: '',
          pays: '',
          ville: '',
          address: '',
          postal_code: '',
        },
        facturation: {
          name: '',
          pays: '',
          ville: '',
          address: '',
          postal_code: '',
        },
      },

      e1: 1,
      selectable: false,
      snackbar: false,
      text: "",
      timeout: 3000,
      idCommande: '',
      currentUser: null,
      lazy: false,
      valid: true,
      rulesCP: (v: any) => {
        if (!v.trim()) return true;
        if (!isNaN(parseFloat(v)) && v >= 0 && v <= 99999) return true;
        return 'Code postal à 5 chiffres';
      },

    }
  },
  created() {
    let self: any = this;
    self.getBasket();

  },
  mounted() {
    let self: any = this;

    self.loadIntent();
  },
  methods: {
    loadIntent() {
      let self: any = this;

      apiService.get('/api/v1/user/setup-intent')
        .then(function (response: any) {
          self.intentToken = response.data;
        }.bind(this));
    },

    getBasket() {
      let self: any = this;

      self.commande.commandList = basketServices.getBasket();
    },

    cancel() {
      let self: any = this;

      if (confirm('Voulez annuler la commande ?')) {
        self.$router.push('/basket')
      }

    },

    commander() {
      let self: any = this;
      let price: number = 0;
      if (!self.selectable) {
        _.assign(self.commande.facturation, self.commande.livraison)
      }
      for (const property in self.commande.commandList) {

        price += (self.commande.commandList[property].price * self.commande.commandList[property].quantite);
      }
      self.commande.price = price;
      self.e1 = 3
      apiService.post('/api/command/take-command', self.commande).then(({ data }) => {
        self.idCommande = data.id;
      })
      let itemBasket: any = [];
      let quantite = 0;
      basketServices.delBasket();

    },

    async getFacture() {
      let self: any = this;
      try {
        const facture = await axios.post(`/api/facture`, { id: self.idCommande, client: 1 }, { responseType: 'arraybuffer' });
        const responseData = facture.data;
        this.downloadPDF(responseData);
      } catch (error) {
        console.log(error)
      }
    },

    downloadPDF(responseData: any) {
      var a = document.createElement('a');
      var url = window.URL.createObjectURL(new Blob([responseData], { type: 'application/pdf' }));
      a.href = url;
      a.download = 'facture';
      a.click();
      window.URL.revokeObjectURL(url);
    },
    process() {
      let self: any = this;
      apiService.post('/api/command/' + self.idCommande + '/paiement', {
        id: self.source.id
      }).then(response => {
        console.log(response.data.status.order_status)
        self.snackbar = true;
        self.text = "Votre commande à bien été effectué";
        EventBus.$emit('clear', "Votre commande à bien été effectué")

        basketServices.delBasket();
        self.e1 = 4

      })
    },

  }
}