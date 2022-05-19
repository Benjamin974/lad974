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
      page: 1,
      pagination: {
        visible: 10,
        pageCount: 0,
      },
      dialog: false,
      search: ''
    }
  },
  computed: {
    filteredList() {
      let self: any = this;

      return self.products.filter((product: any) => {
        return product.name.toLowerCase().includes(self.search.toLowerCase())
      })
    }
  },
  created() {
    let self: any = this;

    self.getCompany();
    self.nextPageProducts(1);
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
          if (product.quantite != 0) {
            self.products.push(product);
          }
        });
      })
    },
    nextPageProducts(page: any): void {
      let self: any = this;
      self.products = [];
      apiService.get('/api/product/get/' + self.$route.params.id + '?page=' + page).then(({ data }) => {
        data.data.forEach((product: any) => {
          if (product.quantite != 0) {
            self.products.push(product);
          }
        });
        self.pagination.pageCount = data.meta.last_page
      })
    }
  }
}