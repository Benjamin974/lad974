
<template>
	<v-container class="d-flex align-center flex-column">
		<v-simple-table style="width: 800px">
			<template v-slot:default>
				<thead>
					<tr>
						<th class="text-left"></th>
						<th class="text-left">Produit</th>
						<th class="text-left">Quantite</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="(product, key) in basket" :key="key">
						<td><img :src="product.picture" alt="" width="100px" height="100px" /></td>
						<td>{{ product.name }}</td>
						<td>
							<v-text-field
								type="number"
								v-model="product.quantite"
								@input="updateQuantity(product)"
							></v-text-field>
						</td>
					</tr>
				</tbody>
			</template>
		</v-simple-table>
		<div style="width: 800px" class="d-flex justify-end">
			<v-btn
				class="mt-10"
				style="color: white"
				color="#2f53b9"
				@click="commander"
			>
				Commander
			</v-btn>
		</div>
	</v-container>
</template>

<script src="./basket" />