import { EventBus } from "../../../../eventBus";
import { authenticationService } from "../../../../_services/authenticationService";
import { basketServices } from "../../../../_services/basketServices";
import router from "../../../../routes";

export default {
  props: {
    product: {
      default: function () {
        return {}
      }
    }
  },
  data() {
    return {
      quantite: 0,
      text: "",
      timeout: 3000,
      currentUser: null,

    }
  },

  computed: {
    isChecked(): any {
      let self: any = this;
      return self.currentUser;
    },
  },

  created() {
    let self: any = this;
    authenticationService.currentUser.subscribe((x) => (self.currentUser = x));
  },

  methods: {

    commander() {
      let self: any = this;
      if (self.isChecked) {
        if (self.product.quantite < self.quantite) {
          self.text = "Il n'y a pas assez de produit";
          EventBus.$emit('updateSnack', { etat: true, text: self.text })

          self.quantite = 0
        } else {
          basketServices.addProducts(self.product, self.quantite)
          self.text = "Vous avez commandé " + self.quantite + " produit";
          EventBus.$emit('updateSnack', { etat: true, text: self.text, color: 'error' })
          EventBus.$emit('addProductInBasket', false);
          self.quantite = 0
        }
      } else {
        EventBus.$emit('updateSnack', { etat: true, text: 'connectez-vous pour pouvoir commander', color: 'error' })
        router.push('/login');
      }
    },
  }
}