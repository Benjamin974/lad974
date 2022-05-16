<template>
	<div class="text-center">
		<v-dialog v-model="dialog" width="950" :retain-focus="false">
			<template v-slot:activator="{ on, attrs }">
				<v-card
					class="mx-auto my-12 card-product"
					max-width="374"
					:hover="true"
					v-bind="attrs"
					v-on="on"
				>
					<v-img height="250" :src="product.picture == null ? '/storage/images/logo_img.png' : product.picture"></v-img>

					<v-divider></v-divider>

					<v-card-text class="card-text">
						<div class="white--text product-price">{{ product.price }} €</div>
						<div class="white--text">{{ product.name }}</div>
						<div class="white--text">Disponible : {{ product.quantite }}</div>
					</v-card-text>
				</v-card>
			</template>
			<v-card class="d-flex justify-space-around dialog-product" height="380">
				<div class="img">
					<v-img :src="product.picture == null ? '/storage/images/logo_img.png' : product.picture" height="100%"></v-img>
				</div>
				<div class="contents">
					<v-card-title class="text-h5 d-flex justify-space-between">
						{{ product.name }}

						<div class="price">{{ product.price }} €</div>
					</v-card-title>

					<v-card-text style="height: 160px">
						<p>{{ product.description }}</p>

						<p>Il en reste {{ product.quantite }} dans le magasin</p>
					</v-card-text>

					<v-divider></v-divider>

					<v-card-actions>
						<v-spacer></v-spacer>
						<AddInBasket :product="product" />
					</v-card-actions>
				</div>
			</v-card>
		</v-dialog>
	</div>
</template>

<script src="./cardProduct" />

<style lang="scss">
.card-product {
	position: relative;
	.product-price {
		background-color: #ff6d6d;
		color: white;
		font-size: 1rem;
		padding: 0 10px;
		position: absolute;
		top: 10px;
		left: -10px;
	}
}
.img,
.contents {
	height: 300px;
	width: 350px;

	.price {
		background-color: #ff6d6d;
		color: white;
		font-size: 1rem;
		padding: 0 10px;
	}
}

@media (max-width: 700px) {
	.dialog-product {
		background-color: red;
	}
}
</style>