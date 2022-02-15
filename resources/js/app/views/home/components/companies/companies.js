import { apiService } from '../../../../_services/apiService'
export default {
  data() {
    return {
      companies: []
    }
  },

  created() {
    this.getCompanies();
  },

  methods: {
    getCompanies() {
      apiService.get('/api/company/best').then(({ data }) => {
        data.data.forEach(_company => {
          this.companies.push(_company);
        });
      })
    },
    goCompany(id) {
      return this.$router.push('/company/' + id);
    }
  },
}