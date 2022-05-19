<template>
	<v-container class="fill-height">
		<v-row class="pa-15" align="center" justify="center">
			<v-toolbar color="#2F53B9" flat>
				<v-toolbar-title style="color: white">Identifiez-vous</v-toolbar-title>
				<v-spacer />
			</v-toolbar>
			<v-card-text>
				<v-form ref="form" v-model="valid" :lazy-validation="lazy" class="pa-15 hidden-sm-and-down">
					<v-text-field label="Email de connexion" v-model="user.email" name="login" :rules="emailRules"
						prepend-icon="mdi-account" type="text" />

					<v-text-field autocomplete="on" id="password-user" label="Mot de passe" v-model="user.password"
						:rules="pwdRules" name="password" prepend-icon="mdi-lock" type="password"
						@keydown.enter="connection" />
				</v-form>
				<v-form ref="form" v-model="valid" :lazy-validation="lazy" class="hidden-md-and-up">
					<v-text-field label="Email de connexion" v-model="user.email" name="login" :rules="emailRules"
						prepend-icon="mdi-account" type="text" />

					<v-text-field id="password" autocomplete="on" label="Mot de passe" v-model="user.password"
						:rules="pwdRules" name="password" prepend-icon="mdi-lock" type="password"
						@keydown.enter="connection" />
				</v-form>
			</v-card-text>
			<v-card-actions class="bottom-login">
				Pas encore inscrit ? <v-btn class="ml-2 mr-3" outlined text color="primary" to="/register">
					Inscription</v-btn>
				<v-btn outlined color="success" :disabled="!valid" @click="connection">Connexion</v-btn>
				<div class="mb-5">

				</div>
				<div class="ml-7" style="color: red">
					<span>{{ erreur }}</span>
				</div>
			</v-card-actions>
		</v-row>
	</v-container>
</template>

<script lang="ts" src='./login'>
</script>

<style lang="scss">
.bottom-login {
	display: flex;
	align-items: center;
	justify-content: center;
	width: 600px;
}
</style>