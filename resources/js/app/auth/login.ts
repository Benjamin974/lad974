import { authenticationService } from "../_services/authenticationService";

//@ts-ignore
import _ from 'lodash'

export default {

  data() {
    return {
      user: {
        email: '',
        password: ''
      },
      emailRules: [
        (v: any) => !!v || "E-mail requis",
        (v: any) => /.+@.+\..+/.test(v) || "Ce champ doit être un email"
      ],
      pwdRules: [(v: any) => !!v || "Mot de passe requis"],
      lazy: false,
      valid: true,
      loading: false,
      returnUrl: "",
      erreur: '',
      from: null
    };
  },
  created() {
    let self: any = this;

    if (authenticationService.currentUserValue) {
      return self.$router.push('/products');
    }

    self.returnUrl = self.$route.query.returnUrl || "/";
  },

  beforeRouteEnter(to: any, from: any, next: any) {
    next((vm: any) => {
      setTimeout(() => {
        vm.from = from
      }, 1000)
    });
  },

  methods: {
    connection() {
      let self: any = this;

      self.loading = true;
      authenticationService.login(self.user).then(
        (user: any) => {
          if (user == 'Utilisateur suspendu') {
            self.erreur = 'Utilisateur suspendu'
          } else if (user == 'login invalide') {
            self.erreur = 'mot de passe ou email oublié'
          } else {
            for (let i = 0; i < 4; i++) {
              if (user == 'tentative restant: ' + i) {
                self.erreur = 'tentative restant: ' + i;
              }
              else if (user == "trop de tentative, vous pourrez reessayer dans 1 heure") {
                self.erreur = 'trop de tentative, vous pourrez reessayer dans 1 heure'
              } else if (_.isObject(user)) {
                self.erreur = '';
                self.from.fullPath == '/step-command' ? self.$router.push(self.from.fullPath) : self.$router.back();
                break
              }

            }
          }
        },
        (error: any) => {
          self.loading = false;
        }
      );
    }
  }
};