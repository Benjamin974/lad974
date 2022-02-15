<template>
	<div style="display: flex; justify-content: center; margin-top: 3vh">
		<v-card width="60%" height="530px" class="elevation-0 d-flex flex-column justify-space-between">
			<v-card-title>
				<h3>Tout mes articles</h3>
				<v-spacer></v-spacer>
				<v-text-field
					v-model="search"
					append-icon="mdi-magnify"
					label="Rechercher"
					single-line
					hide-details
				></v-text-field>
			</v-card-title>
			<v-data-table
				:headers="headers"
				:items="products"
				:search="search"
				:page.sync="page"
				:items-per-page="itemsPerPage"
				class="elevation-1"
				hide-default-footer
				@page-count="pageCount = $event"
			></v-data-table>
			<div class="text-center pt-2">
				<v-pagination v-model="page" :length="pageCount"></v-pagination>
			</div>
		</v-card>
	</div>
</template>

<script src="./articles" />