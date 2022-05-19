import { apiService } from "../../_services/apiService";

export default {
  data() {
    return {
      companies: []
    }
  },

  created() {
    let self: any = this;

    self.getCompanies();
  },

  methods: {
    getCompanies() {
      let self: any = this;
      apiService.get('/api/company/get').then(({ data }) => {
        console.log(data);
        data.data.forEach((_company: any) => {
          self.companies.push(_company);
        });
      })
    },
    goCompany(id: number) {
      let self: any = this;

      return self.$router.push('/company/' + id);
    }
  },
}