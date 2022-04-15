<template>
	<div>
		<v-app-bar color="white py-1" dense light absolute height="55px">
			<v-toolbar-title> <img class="mb-2" style="margin-bottom: 0 !important; margin-top:1vh !important;" src="/storage/images/logo.png" alt="" width="100px" height="100px"></v-toolbar-title>

			<v-spacer></v-spacer>

			<v-btn text to="/" class="mr-3" color="primary"> Accueil </v-btn>
			<v-btn text to="/companies" class="mr-3" color="primary">
				Commerces
			</v-btn>
			<!-- <v-btn text class="mr-3" color="primary"> Commande </v-btn> -->
			<v-btn
				text
				to="/register"
				v-if="!isChecked"
				class="mr-3 button-text"
				color="primary"
			>
				S'inscrire
			</v-btn>
			<Basket />
			<v-btn
				text
				to="/login"
				v-if="!isChecked"
				class="button-text"
				color="#FF6D6D"
			>
				<v-icon>mdi-login</v-icon>
			</v-btn>
			<v-btn
				text
				@click="logout()"
				v-if="isChecked"
				class="button-text"
				color="#FF6D6D"
			>
				<v-icon>mdi-logout</v-icon>
			</v-btn>
		</v-app-bar>
	</div>
</template>

<script>
import router from "../routes";
import Basket from "../components/base/basket/Basket.vue";
import { authenticationService } from "../_services/authenticationService";
export default {
	data() {
		return {
			currentUser: null,
		};
	},
	components: {
		Basket,
	},
	created() {
		authenticationService.currentUser.subscribe((x) => (this.currentUser = x));
	},

	computed: {
		isChecked() {
			return this.currentUser;
		},
	},
	methods: {
		logout() {
			authenticationService.logout();
			router.push("/login");
		},
	},
};
</script>