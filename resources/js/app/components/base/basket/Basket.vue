<template>
	<v-menu offset-y open-on-hover :close-on-content-click="false">
		<template v-slot:activator="{ on }">
			<v-btn v-on="on" text color="success">
				<v-badge color="success" :content="quantite" :value="quantite">
					<v-icon>mdi-basket-fill</v-icon>
				</v-badge>
			</v-btn>
		</template>
		<div style="max-height: 400px; overflow: auto">
			<v-list class="d-flex align-center flex-column mt-2">
				<v-btn
					to="/step-command"
					v-if="quantite > 0"
					class="white--text mb-6"
					color="#2F53B9"
					>voir le panier</v-btn
				>
				<v-list-item v-for="(product, index) in itemBasket" :key="index">
					<v-list-item-title>
						<v-card>
							<div class="cardBasket">
								<v-card-title style="background-color: white; border-radius: 3px" class="mb-3">
									<v-img
										:src="product.picture"
										height="100px"
										width="100px"
									></v-img>
								</v-card-title>
								<v-card-text>
									<span class="subtitle-2 px-0">{{ product.name }}</span>
									<v-text-field
										dark
										type="number"
										min="0"
										v-model="product.quantite"
										@input="updateQuantity(product)"
									></v-text-field>
								</v-card-text>
							</div>

							<div>
								<v-card-subtitle></v-card-subtitle>
							</div>
						</v-card>
					</v-list-item-title>
				</v-list-item>

				<span to="/basket" v-if="quantite == 0" text color="#2f53b9">Vide</span>
			</v-list>
		</div>
	</v-menu>
</template>

<script src="./basket" />
<style lang="scss">
.cardBasket {
	background-color: #2f53b9;
	color: white;
	border-radius: 5px;
	padding: 10px;
}
</style>