<template>
	<v-container>
		<v-stepper v-model="e1" elevation="0">
			<v-stepper-header>
				<v-stepper-step :complete="e1 > 1" step="1">Confirmation de commande</v-stepper-step>

				<v-divider></v-divider>

				<v-stepper-step :complete="e1 > 2" step="2">Adresse livraison/facturation</v-stepper-step>

				<v-divider></v-divider>

				<v-stepper-step step="3">Paiement</v-stepper-step>
			</v-stepper-header>

			<v-stepper-items style="margin: 10vh 0 !important">
				<v-stepper-content step="1">
					<div
						style="font-weight: bold;margin-bottom: 20px; font-size: 2rem; background-color:#FF6D6D; color: white; padding: 5px; width: 180px; text-align: center">
						Total : {{ total }}€
					</div>
					<v-row>

						<v-col cols="12" sm="12" md="3" lg="3" v-for="(item, key) in commande.commandList" :key="key">
							<v-card class="mb-10 card-product-stepper" style="width: 100% !important">
								<v-list-item>
									<v-list-item-content>
										<v-list-item-title class="d-flex justify-center"><img
												:src="item.picture == null ? '/storage/images/logo_img.png' : item.picture"
												alt="" width="100px" height="100px" /></v-list-item-title>
										<div class="card-content">
											<v-list-item-title>{{ item.name }}</v-list-item-title>
											<v-list-item-subtitle class="price">
												{{ item.price }} €</v-list-item-subtitle>
											<v-list-item-subtitle>quantite : {{ item.quantite }}</v-list-item-subtitle>
										</div>
									</v-list-item-content>
								</v-list-item>
							</v-card>
						</v-col>
					</v-row>
					<div class="d-flex justify-space-between" style="width: 100%; margin: 10vh 0 !important">
						<v-btn text @click="cancel" color="error">retour</v-btn>

						<v-btn color="#2f53b9" class="white--text" @click="e1 = 2">Continuer</v-btn>
					</div>
				</v-stepper-content>

				<v-stepper-content step="2" class="mb-5">
					<v-container>
						<div
							style="font-weight: bold;margin-bottom: 20px; font-size: 2rem; background-color:#FF6D6D; color: white; padding: 5px; width: 180px; text-align: center">
							Total : {{ total }}€
						</div>
						<v-form ref="form" v-model="valid" :lazy-validation="lazy">
							<div>
								<h3 class="mb-5">Adresse de livraison</h3>
								<v-row>
									<v-text-field v-model="commande.livraison.name" class="pa-2" md="4" label="nom"
										required :rules="[(v) => !!v || 'champs requis']"></v-text-field>
									<v-text-field v-model="commande.livraison.pays" class="pa-2" md="4" label="pays"
										required :rules="[(v) => !!v || 'champs requis']"></v-text-field>
								</v-row>
								<v-row>
									<v-text-field v-model="commande.livraison.ville" class="pa-2" md="4" label="ville"
										:rules="[(v) => !!v || 'champs requis']" required></v-text-field>
									<v-text-field v-model="commande.livraison.address" class="pa-2" md="4"
										label="adresse" :rules="[(v) => !!v || 'champs requis']" required>
									</v-text-field>
									<v-text-field v-model="commande.livraison.postal_code" class="pa-2" type="number"
										md="4" label="code postal" :rules="[rulesCP]" required></v-text-field>
								</v-row>
							</div>
							<v-switch v-model="selectable" label="Adresse de facturation différente ?"></v-switch>
							<div v-if="selectable">
								<h3>Adresse de facturation</h3>
								<v-row>
									<v-text-field v-model="commande.facturation.name" class="pa-2" md="4" label="nom"
										:rules="[(v) => !!v || 'champs requis']" required></v-text-field>
									<v-text-field v-model="commande.facturation.pays" class="pa-2" md="4" label="pays"
										:rules="[(v) => !!v || 'champs requis']" required></v-text-field>
								</v-row>
								<v-row>
									<v-text-field v-model="commande.facturation.ville" class="pa-2" md="4" label="ville"
										:rules="[(v) => !!v || 'champs requis']" required></v-text-field>
									<v-text-field v-model="commande.facturation.address" class="pa-2" md="4"
										label="adresse" :rules="[(v) => !!v || 'champs requis']" required>
									</v-text-field>
									<v-text-field v-model="commande.facturation.postal_code" class="pa-2" md="4"
										type="number" label="code postal" min="0" max="99999" :rules="[rulesCP]"
										required></v-text-field>
								</v-row>
							</div>
						</v-form>
					</v-container>

					<div class="d-flex justify-space-between" style="width: 100%; margin: 10vh 0 !important">
						<v-btn text color="error">retour</v-btn>

						<v-btn color="#2f53b9" class="white--text" @click="commander" :disabled="!valid">Commander
						</v-btn>
					</div>
				</v-stepper-content>
				<v-stepper-content step="3">
					<div
						style="font-weight: bold;margin-bottom: 20px; font-size: 2rem; background-color:#FF6D6D; color: white; padding: 5px; width: 180px; text-align: center">
						Total : {{ total }}€
					</div>
					<v-stripe-card v-model="source" :api-key="api_key"></v-stripe-card>
					<v-btn color="primary" class="mt-10" @click="process" :disabled="!source">Payer</v-btn>
				</v-stepper-content>
				<v-stepper-content step="4">
					<div class="d-flex justify-space-between">
						<v-btn text @click="getFacture()">Télécharger votre facture
							<v-icon class="pl-5">mdi-arrow-down-bold-circle-outline</v-icon>
						</v-btn>
					</div>
				</v-stepper-content>
			</v-stepper-items>
		</v-stepper>
		<v-snackbar v-model="snackbar" :timeout="timeout" color="success">
			{{ text }}
			<v-btn color="error" text @click="snackbar = false">Fermer</v-btn>
		</v-snackbar>
	</v-container>
</template>

<style lang="scss">
.card-product-stepper {
	.v-list-item {
		padding: 0 !important;

		.v-list-item__content {
			position: relative !important;

			.card-content {
				.price {
					color: white !important;
					padding: 5px;
					background-color: #ff6d6d;
					top: 0;
					position: absolute;
				}
			}
		}
	}
}
</style>
<script src="./stepCommand" />