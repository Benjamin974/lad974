<template>
	<div>
		<v-container>
			<div class="d-flex justify-space-between">
				<h1 class="title-trait">{{ company.name }}</h1>
				<div style="width: 250px">
					<v-text-field color="purple darken-2" v-model="search" hide-details prepend-icon="mdi-magnify"
						label="nom de produit" single-line></v-text-field>
				</div>
			</div>

		</v-container>
		<v-container class="mt-10">
			<v-row v-if="search == ''" class="d-flex justify-center" no-gutters>
				<v-col v-for="(product, key) in products" :key="key" lg="3" md="6" sm="12">
					<CardProduct :product="product" />
				</v-col>
				<h1 v-if="products.length == 0" style="color: gray">
					IL N'Y A PAS D'ARTICLE DANS CE MAGASIN
				</h1>
			</v-row>
			<v-row v-if="search != ''" class="d-flex justify-center" no-gutters>
				<v-col v-for="(product, key) in filteredList" :key="key" lg="3" md="6" sm="12">
					<CardProduct :product="product" />
				</v-col>
				<h1 v-if="filteredList.length == 0" style="color: gray">
					IL N'Y A PAS D'ARTICLE DANS CE MAGASIN
				</h1>
			</v-row>
			<div class="text-center pt-2 mb-12">
				<v-pagination :length="pagination.pageCount" color="blue lighten-1" v-model="pagination.page"
					@input="nextPageProducts" circle></v-pagination>
			</div>
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
		padding-top: 3px;
		box-shadow: 1px 1px 3px #9e0000;
	}

	.white--text:nth-child(2) {
		font-weight: bold;
		font-size: 1.2rem;
	}

	.white--text:last-child {
		text-align: right;
	}
}
</style>
<script src="./company" />