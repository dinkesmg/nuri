<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
const currentYear = new Date().getFullYear(); // Determining the current year
</script>

<template>
    <div
        class="min-h-screen flex flex-col justify-between items-center pt-6 sm:pt-0 bg-gradient-to-br from-green-500 to-blue-400"
    >
        <!-- Logo Section -->
        <div class="bg-white bg-opacity-100 p-4 rounded-full shadow-lg">
            <Link href="/">
                <ApplicationLogo
                    class="w-24 h-24 fill-current text-green-600"
                    width="300px"
                    height="auto"
                />
            </Link>
        </div>

        <!-- Main Login Box -->
        <div
            class="w-full sm:max-w-lg mt-6 px-10 py-8 bg-white shadow-lg overflow-hidden sm:rounded-lg border border-green-300"
        >
            <slot />
        </div>

        <!-- Footer -->
        <footer
            class="w-full text-center py-4 mt-8 bg-white bg-opacity-90 text-gray-700"
        >
            <p>
                &copy; {{ currentYear }} Team DKK Semarang. All rights reserved.
            </p>
        </footer>
    </div>
</template>

<style scoped>
/* Green and blue gradient styling inspired by BPJS */
.bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, #007e33, #0096d6);
}
</style>
