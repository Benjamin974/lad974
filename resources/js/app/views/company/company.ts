import { apiService } from "../../_services/apiService";
//@ts-ignore
import CardProduct from './components/cardProduct/CardProduct.vue'
export default {
  components: {
    CardProduct
  },
  data() {
    return {
      products: [],
      company: {},
      dialog: false
    }
  },
  created() {
    let self: any = this;

    self.getCompany();
    self.getProducts();
  },

  methods: {
    getCompany(): void {
      let self: any = this;

      apiService.get('/api/company/find/' + self.$route.params.id).then(({ data }) => {
        self.company = data.data;
      })
    },
    getProducts(): void {
      let self: any = this;

      apiService.get('/api/product/get/' + self.$route.params.id).then(({ data }) => {
        data.data.forEach((product: any) => {
          self.products.push(product);
        });
      })
    }
  }
}