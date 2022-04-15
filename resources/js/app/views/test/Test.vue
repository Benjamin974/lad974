<template>
	<div class="d-flex justify-center align-center" style="height: 500px">
		<div style="width: 300px" class="d-flex flex-column align-center">
			<h4 style="letter-spacing: 0.4rem">67241423</h4>

			<v-otp-input length="4" v-model="otp"></v-otp-input>
			<div
				style="
					width: 50px;
					height: 50px;
					background-color: red;
					border-radius: 100%;
				"
				:class="{ active: isActive }"
			></div>
		</div>
	</div>
</template>

<style lang="scss">
.active {
	background-color: green !important;
}
</style>
<script>
export default {
	data() {
		return {
			otp: 0,
			isActive: false,
		};
	},

	watch: {
		otp(newVal) {
			if (newVal == 6472) {
        this.isActive = true;
			} else {
        this.isActive = false;
			}
		},
	},
};
</script>