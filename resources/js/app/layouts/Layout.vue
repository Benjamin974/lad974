<template>
	<v-app>
		<link
			href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css"
			rel="stylesheet"
		/>
		<div class="container mb-10">
			<navbar></navbar>
		</div>
		<div class="main mb-10">
			<router-view></router-view>
			<baseSnackbar />
		</div>
		<div class="footer" style="position: absolute; bottom: 0; width: 100%">
			<footerLayout />
		</div>
	</v-app>
</template>

<script>
import Navbar from "../navigations/Navbar";
import FooterLayout from "../navigations/Footer";
import BaseSnackbar from "../components/base/baseSnackbar/BaseSnackbar";
export default {
	components: {
		BaseSnackbar,
		Navbar,
		FooterLayout,
	},
};
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap');
.v-application--wrap {
	font-family: 'Josefin Sans', sans-serif !important;
}
</style>