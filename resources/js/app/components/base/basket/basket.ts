import { EventBus } from '../../../eventBus';
import { authenticationService } from '../../../_services/authenticationService';
import { basketServices } from '../../../_services/basketServices';
export default {
  data() {
    return {
      quantite: 0,
      itemBasket: [],
    }
  },



  created() {
    let self: any = this;
    self.getBasket();
    authenticationService.currentUser.subscribe((x) => (self.currentUser = x));
    EventBus.$on('clear', (value: any) => {
      self.itemBasket = []
      self.quantite = 0
    })
  },


  methods: {
    getBasket() {
      let self: any = this;

      self.quantite = basketServices.quantiteBasketSize()
      self.initTable(basketServices.getBasket());
      EventBus.$on('basketLength', (quantite: any) => {
        self.quantite = quantite
        self.initTable(basketServices.getBasket());
      })

    },

    initTable(itemBasket: any) {
      let self: any = this;
      self.itemBasket = []
      let counter = 0;
      let BreakException = {}
      try {
        for (let key in itemBasket) {
          let item = itemBasket[key]
          self.itemBasket.push(item)
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
          product.quantite += 1
        }
      }
    }
  }
}