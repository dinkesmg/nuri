<template>
    <img
        :src="logoSrc"
        :alt="altText"
        :style="{ width: width, height: height }"
        class="logo"
    />
</template>

<script setup>
import { defineProps } from "vue";

const props = defineProps({
    logoSrc: {
        type: String,
        default: "/assets/logo/logo.png", // Ganti dengan lokasi default logo
    },
    altText: {
        type: String,
        default: "Logo",
    },
    width: {
        type: String,
        default: "100px", // Default width jika tidak ditentukan
    },
    height: {
        type: String,
        default: "auto", // Default height jika tidak ditentukan
    },
});
</script>

<style scoped>
/* Tambahkan gaya tambahan jika perlu */
.logo {
    /* Tambahkan gaya default untuk logo */
}
</style>
