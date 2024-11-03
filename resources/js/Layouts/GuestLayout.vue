<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-green-500 to-blue-400"
    >
        <!-- Latar Belakang Transparan untuk Logo -->
        <div class="bg-white bg-opacity-100 p-4 rounded-full shadow-lg">
            <Link href="/">
                <ApplicationLogo
                    class="w-24 h-24 fill-current text-green-600"
                    width="300px"
                    height="auto"
                />
            </Link>
        </div>

        <!-- Kotak Login Utama yang Diperbesar -->
        <div
            class="w-full sm:max-w-lg mt-6 px-10 py-8 bg-white shadow-lg overflow-hidden sm:rounded-lg border border-green-300"
        >
            <slot />
        </div>
    </div>
</template>

<style scoped>
/* Gradien hijau dan biru ala BPJS */
.bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, #007e33, #0096d6);
}
</style>
