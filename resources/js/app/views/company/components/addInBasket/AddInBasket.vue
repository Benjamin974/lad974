<template>
	<div class="text-center">
		<v-menu top :offset-x="true" :close-on-content-click="false">
			<template v-slot:activator="{ on, attrs }">
				<v-btn color="primary" text v-bind="attrs" v-on="on">
					Ajouter au panier
				</v-btn>
			</template>

			<v-list>
				<v-list-item>
					<v-text-field
						v-model="quantite"
						label="Combien ?"
						type="number"
						min="0"
						:max="product.quantite"
					></v-text-field>
				</v-list-item>
				<v-list-item class="justify-end">
					<v-btn
						@click="commander"
						text
						:disabled="quantite == 0 || quantite > product.quantite"
						icon
						><v-icon color="orange lighten-4">mdi-basket-fill</v-icon></v-btn
					>
				</v-list-item>
			</v-list>
		</v-menu>
	</div>
</template>

<script src="./addInBasket" />