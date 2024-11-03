<script setup>
import { onMounted } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

onMounted(() => {
    const vizContainer = document.getElementById("vizContainer");
    const vizElement = vizContainer.getElementsByTagName("object")[0];

    // Set width and height based on original dimensions of Tableau (adjust if necessary)
    vizElement.style.width = "1670px"; // Sesuaikan dengan lebar asli Tableau
    vizElement.style.height = "2297px"; // Sesuaikan dengan tinggi asli Tableau

    // Load Tableau script
    const scriptElement = document.createElement("script");
    scriptElement.src = "https://public.tableau.com/javascripts/api/viz_v1.js";
    vizElement.parentNode.insertBefore(scriptElement, vizElement);
});
</script>

<template>
    <Head title="Monitoring Kasus Kepersertaan" />

    <AuthenticatedLayout>
        <!-- Header with Gradient Background -->
        <template #header>
            <div
                class="bg-gradient-to-br from-green-500 to-blue-400 px-6 py-4 rounded-lg shadow-md"
            >
                <h2 class="font-semibold text-xl text-white leading-tight">
                    Monitoring Kasus Kepersertaan
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-full mx-auto px-4 lg:px-6">
                <!-- Embed Tableau Visualization -->
                <div class="bg-white shadow-md rounded-lg mt-8 p-6">
                    <div
                        class="tableauPlaceholder"
                        id="vizContainer"
                        style="position: relative; width: 100%; height: auto"
                    >
                        <noscript>
                            <a href="#">
                                <img
                                    alt="HOME"
                                    src="https://public.tableau.com/static/images/Bo/Book1j_16894983558260/HOME/1_rss.png"
                                    style="border: none"
                                />
                            </a>
                        </noscript>
                        <object
                            class="tableauViz"
                            style="width: 1670px; height: 2297px"
                        >
                            <param
                                name="host_url"
                                value="https%3A%2F%2Fpublic.tableau.com%2F"
                            />
                            <param name="embed_code_version" value="3" />
                            <param name="site_root" value="" />
                            <param
                                name="name"
                                value="Book1j_16894983558260/HOME"
                            />
                            <param name="tabs" value="no" />
                            <param name="toolbar" value="yes" />
                            <param
                                name="static_image"
                                value="https://public.tableau.com/static/images/Bo/Book1j_16894983558260/HOME/1.png"
                            />
                            <param name="animate_transition" value="yes" />
                            <param name="display_static_image" value="yes" />
                            <param name="display_spinner" value="yes" />
                            <param name="display_overlay" value="yes" />
                            <param name="display_count" value="yes" />
                            <param name="language" value="en-US" />
                            <param name="ignore_sticky_session" value="yes" />
                        </object>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Gradien hijau-biru untuk header dan nav */
.tableauPlaceholder {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.tableauViz {
    max-width: 100%; /* Agar Tableau responsive jika layar lebih kecil */
    height: auto; /* Mengatur height secara otomatis jika layar lebih kecil */
}
</style>
