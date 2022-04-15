import { EventBus } from "../../../../eventBus";
import { authenticationService } from "../../../../_services/authenticationService";
import { basketServices } from "../../../../_services/basketServices";

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
    }
  },

  methods: {

    commander() {
      let self: any = this;
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
    },
  }
}