<template>
	<div>
		<v-container>
			<h1 class="title-trait">{{ company.name }}</h1>
		</v-container>
		<v-container class="mt-10">
			<v-row class="d-flex justify-center" no-gutters>
				<v-col v-for="(product, key) in products" :key="key" lg="4" md="6" sm="12">
					<CardProduct :product="product" />
				</v-col>
				<h1 v-if="products.length == 0" style="color:gray"> IL N'Y A PAS D'ARTICLE DANS CE MAGASIN</h1>
			</v-row>
		</v-container>
	</div>
</template>
<style lang="scss">
.title-trait {
	width: fit-content;
	border-bottom: 5px solid black;
}
.v-image__image--cover {
	background-size: contain;
}

.card-text {
	background-color: #2f53b9;
	.white--text:first-child {
		font-weight: bold;
		font-size: 1.3rem;
	}
	.white--text:last-child {
		text-align: right;
	}
}
</style>
<script src="./company" />