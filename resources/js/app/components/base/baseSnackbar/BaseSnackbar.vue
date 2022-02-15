<template>
	<div>
		<v-snackbar
			v-model="contentSnackbar.etat"
			:timeout="timeout"
			:color="contentSnackbar.color"
		>
			{{ contentSnackbar.text }}
			<template v-slot:action>
				<v-btn text @click="contentSnackbar.etat = false">Fermer</v-btn>
			</template>
		</v-snackbar>
	</div>
</template>

<script src='./baseSnackbar' />