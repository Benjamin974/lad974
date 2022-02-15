<template>
	<v-container class="fill-height">
		<v-row class="pa-15" align="center" justify="center">
			<v-toolbar color="#2F53B9" flat>
				<v-toolbar-title style="color: white">Inscrivez-vous</v-toolbar-title>
				<v-spacer />
			</v-toolbar>
			<v-card-text>
				<v-form
					ref="form"
					v-model="valid"
					:lazy-validation="lazy"
					class="pa-15 hidden-sm-and-down"
				>
					<v-text-field
						label="Email"
						v-model="user.email"
						name="login"
						:rules="emailRules"
						prepend-icon="mdi-account"
						type="text"
					/>
					<v-text-field
						label="Name"
						v-model="user.name"
						name="login"
						:rules="nameRules"
						prepend-icon="mdi-account"
						type="text"
					/>

					<v-text-field
						id="password"
						autocomplete="on"
						label="Mot de passe"
						v-model="password"
						:rules="pwdRules"
						name="password"
						prepend-icon="mdi-lock"
						type="password"
					/>

					<v-text-field
						id="password-validation"
						autocomplete="on"
						label="Valider le Mot de passe"
						v-model="passwordValidation"
						name="password-validation"
						prepend-icon="mdi-lock"
						type="password"
						@keydown.enter="register"
					/>
				</v-form>
			</v-card-text>
			<v-card-actions>
				<v-btn outlined color="primary" to="/login"
					>Vous avez déjà un compte ?</v-btn
				>
				<v-btn outlined color="success" :disabled="!valid" @click="register"
					>S'inscrire</v-btn
				>
				<div class="ml-7">
					<span style="color: red">{{ erreur }}</span>
				</div>
			</v-card-actions>
		</v-row>
	</v-container>
</template>

<script src='./register'>
</script>