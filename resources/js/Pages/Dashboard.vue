<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- Header Section with Gradient Background and Larger Text -->
        <template #header>
            <div
                class="bg-gradient-to-br from-green-500 to-blue-400 text-center py-8 rounded-lg shadow-lg mb-8"
            >
                <h2 class="text-4xl font-extrabold text-white tracking-wider">
                    NURI
                </h2>
                <p class="text-lg text-white font-semibold mt-2">
                    National Unified Climate Response and Disease Analysis With
                    Prediction System
                </p>
            </div>
        </template>

        <!-- Main Content -->
        <div class="py-12 bg-gradient-to-t from-blue-50 to-white min-h-screen">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 space-y-10">
                <!-- Deskripsi Section -->
                <div
                    class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-green-500"
                >
                    <h3 class="text-2xl font-bold text-green-600 mb-4">
                        Deskripsi
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        NURI (National Unified Climate Response and Disease
                        Analysis With Prediction System) adalah inovasi yang
                        dirancang untuk mengatasi tantangan kesehatan di
                        Indonesia akibat perubahan iklim. Dengan menggunakan
                        data iklim dari BMKG, polusi dari KLHK, data kepesertaan
                        BPJS berdasarkan jenis penyakit dan wilayah dari 2016
                        hingga 2023, NURI memanfaatkan kecerdasan buatan dan
                        analisis big data. Prediksi yang dihasilkan terkait
                        potensi peningkatan kasus penyakit yang berhubungan
                        dengan iklim.
                    </p>
                </div>

                <!-- Tujuan Section -->
                <div
                    class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-blue-500"
                >
                    <h3 class="text-2xl font-bold text-blue-600 mb-4">
                        Tujuan
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        NURI dikembangkan dengan memanfaatkan kecerdasan buatan
                        dan analisis big data untuk mengidentifikasi,
                        klasterisasi penyakit berdasarkan pola iklim, serta
                        pengembangan sistem prediksi untuk mendukung pengambilan
                        keputusan dalam upaya pencegahan dan penanganan kasus
                        penyakit di Indonesia.
                    </p>
                </div>

                <!-- Latar Belakang Section -->
                <div
                    class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-yellow-500"
                >
                    <h3 class="text-2xl font-bold text-yellow-600 mb-4">
                        Latar Belakang
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Indonesia sebagai negara kepulauan tropis menghadapi
                        tantangan kesehatan akibat perubahan iklim, termasuk
                        peningkatan kasus penyakit menular dan tidak menular.
                        Cuaca ekstrem, perubahan suhu, tingkat polusi udara dan
                        pola hujan yang tidak teratur berdampak pada penyebaran
                        penyakit seperti demam berdarah dan infeksi saluran
                        pernapasan. Pemahaman mengenai hubungan antara faktor
                        iklim dan kejadian penyakit masih terbatas, menghambat
                        upaya pencegahan dan penanganan yang efektif oleh sektor
                        kesehatan.
                    </p>
                </div>

                <!-- Dampak Section -->
                <div
                    class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-red-500"
                >
                    <h3 class="text-2xl font-bold text-red-600 mb-4">Dampak</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Dampak inovasi NURI mencakup peningkatan efektivitas
                        dalam pencegahan dan penanganan penyakit terkait
                        perubahan iklim di Indonesia. Sistem ini memungkinkan
                        lembaga kesehatan untuk mengambil langkah pencegahan
                        yang lebih tepat dan cepat, mengurangi dampak penyakit,
                        serta meningkatkan respons terhadap lonjakan kasus.
                        Dengan pendekatan berbasis data, NURI juga memperkuat
                        kolaborasi antar instansi, mendukung kesehatan
                        masyarakat yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Additional custom styling for enhanced visuals */
.bg-gradient-to-br {
    background: linear-gradient(to bottom right, #009688, #4caf50);
}

.bg-gradient-to-t {
    background: linear-gradient(to top, #e3f2fd, #ffffff);
}

.shadow-lg {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.border-t-4 {
    border-top-width: 4px;
}
</style>
