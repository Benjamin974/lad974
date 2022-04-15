<template>
	<div>
		<v-container class="mt-10">
			<h2>Commerce les mieux notés</h2>

			<v-row>
				<v-col v-for="(company, key) in companies" :key="key">
					<v-card class="mx-auto my-12" max-width="374" :hover="true" @click="goCompany(company.id)">
						<v-img height="250" :src="company.picture"></v-img>

						<v-card-title><h3>{{ company.name }}</h3></v-card-title>

						<v-card-text>
							<v-row align="center" class="mx-0">
								<v-rating
									:value="company.note"
									color="amber"
									dense
									half-increments
									readonly
									size="14"
								></v-rating>

								<div class="grey--text ms-4">{{ company.note }}</div>
							</v-row>
						</v-card-text>

						<v-divider class="mx-4"></v-divider>

						<v-card-text>
							<div class="text--primary">Ville: {{ company.city }}</div>
							<div class="text--primary">Secteur: {{ company.secteur }}</div>
						</v-card-text>
					</v-card>
				</v-col>
			</v-row>
			<div class="d-flex justify-center">
				<v-btn color="#2f53b9" class="white--text mb-6" to="/companies">Voir tout les commerces</v-btn>
			</div>
		</v-container>
	</div>
</template>

<script src="./companies.js" />