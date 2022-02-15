//@ts-ignore
import AddInBasket from '../addInBasket/AddInBasket'
import { EventBus } from '../../../../eventBus'

export default {
  components: {
    AddInBasket
  },

  props: {
    product: {
      default: function () {
        return {}
      }
    }
  },
  data() {
    return {
      dialog: false,
    }
  },
  created() {
    EventBus.$on('addProductInBasket', (value: boolean) => {
      const self: any = this;
      self.dialog = value;
    })
  }
}