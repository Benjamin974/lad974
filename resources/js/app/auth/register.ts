import { authenticationService } from "../_services/authenticationService";

//@ts-ignore
import _ from 'lodash'
import { apiService } from "../_services/apiService";
import { EventBus } from "../eventBus";

export default {

  data() {
    return {
      user: {
        name: '',
        email: '',
      },
      password: '',
      passwordValidation: '',
      emailRules: [
        (v: any) => !!v || "E-mail requis",
        (v: any) => /.+@.+\..+/.test(v) || "Ce champ doit être un email"
      ],
      nameRules: [
        (v: any) => !!v || "Le nom est requis"
      ],
      pwdRules: [(v: any) => !!v || "Mot de passe requis"],
      lazy: false,
      valid: true,
      loading: false,
      returnUrl: "",
      erreur: ''
    };
  },
  watch: {
    passwordValidation: function (val: any) {
      const self: any = this;
      if (val != self.password) {
        self.erreur = "Le mot de passe n'est pas identique"
        self.valid = false;
      }
      else {
        self.erreur = "";
        self.valid = true;
      }

    },
    password: function (val: any) {
      const self: any = this;
      val == '' ? self.erreur = '' : null;
    }

  },
  created() {
    let self: any = this;

    if (authenticationService.currentUserValue) {
      return self.$router.push('/products');
    }

    self.returnUrl = self.$route.query.returnUrl || "/";
  },
  methods: {
    register() {
      let self: any = this;

      self.loading = true;

      apiService.post('/api/register', { name: self.user.name, email: self.user.email, password: self.password, id_role: 1 }).then((response: any) => {
        console.log(response);
        EventBus.$emit('updateSnack', { etat: true, text: "vous êtes desormais inscrit", color: 'success' })
        self.$router.push('/login')

      })
    }
  }
};