import { EventBus } from '../../../eventBus'


export default {

  data() {
      return {
          timeout: 3000,
          contentSnackbar: {
              text: '',
              color: 'success',
              etat: false
          }
      }
  },

  created() {
      const self: any = this;
      EventBus.$on('updateSnack', (contentSnackbar: any) => {
          self.contentSnackbar.etat = contentSnackbar.etat
          self.contentSnackbar.text = contentSnackbar.text
          self.contentSnackbar.color = contentSnackbar.color
      })
  }


}