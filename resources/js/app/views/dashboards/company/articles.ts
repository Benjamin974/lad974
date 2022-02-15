import { apiService } from "../../../_services/apiService";
import { authenticationService } from "../../../_services/authenticationService";

export default {
  data() {
    return {
      currentUser: authenticationService.currentUserValue,
      search: '',
      headers: [
        {
          text: 'Nom de l\'article',
          align: 'start',
          sortable: false,
          value: 'name',
        },
        { text: 'Description', value: 'description' },
        { text: 'Quantité', value: 'quantite' },
        { text: 'Prix', value: 'price' }
      ],
      products: [],
      page: 1,
      pageCount: 0,
      itemsPerPage: 5,
    }
  },

  created() {
    let self: any = this;
    self.getProducts();
  },

  methods: {
    getProducts(): void {
      let self: any = this;
      apiService.get('/api/company/find/user/' + self.currentUser.id).then(({ data }) => {
        data[0].products.forEach((product: any) => {
          self.products.push(product);
        });
      })
    }
  }
}