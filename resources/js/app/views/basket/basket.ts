import { basketServices } from '../../_services/basketServices';
import { EventBus } from '../../eventBus';
export default {
  data() {
    return {
      basketContent: [],
      basket: [],
      itemBasket: [],
      id: [],
      quantite: [],
      itemProduct: {},
    }
  },

  created() {
    let self: any = this;

    self.getBasket();
    EventBus.$on('basket', (basket: any) => {
      self.basket = basket
    })
  },

  methods: {
    getBasket() {
      let self: any = this;

      self.basket = basketServices.getBasket();
      self.initTable(basketServices.getBasket());
      EventBus.$on('basketLength', (quantite: any) => {
        self.quantite = quantite
        self.initTable(basketServices.getBasket());
      })
    },

    commander() {
      let self: any = this;

      self.$router.push('/step-command')
    },

    initTable(itemProduct: any) {
      let self: any = this;

      self.itemProduct = []
      let counter = 0;
      let BreakException = {}
      try {
        for (let key in itemProduct) {
          let item = itemProduct[key]
          self.itemProduct.push(item)
          counter++
          if (counter === 3) {
            throw BreakException
          }
        }
      }
      catch (e) {
        if (e !== BreakException) {
          throw e
        }
      }
    },

    updateQuantity(product: any) {

      if (product.quantite == 0) {
        if (confirm('êtes vous sur de vouloir supprimer ce produit ?')) {
          basketServices.replaceQuantity(product)
        } else {
          product.quantite = 1;

        }
      }
    },
  }


}