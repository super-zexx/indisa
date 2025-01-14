<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Landing Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Header/Banner Promo -->
    <div class="relative">
        <div class="bg-red-600 text-white p-2 text-center text-sm">
            🔥 Promo Spesial! Diskon 25% untuk pembelian pertama
        </div>
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-8 px-4 text-center">
            <h1 class="text-3xl font-bold mb-2">Sepatu Sport Premium</h1>
            <p class="text-xl">Kenyamanan dan Gaya dalam Setiap Langkah</p>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="max-w-md mx-auto p-4">
        <!-- Product Image Carousel -->
        <div id="product-carousel" class="relative mb-6" data-carousel="static">
            <div class="overflow-hidden relative h-80 rounded-lg">
                <div class="duration-700 ease-in-out absolute inset-0">
                    <img src="https://contents.mediadecathlon.com/p2606751/k$5211ddac45b25d0224e88eb6ddac9ff3/sepatu-jogging-pria-run-active-biru-tua-kalenji-8559090.jpg?f=1920x0&format=auto"
                        class="block w-full h-full object-cover" alt="Product 1">
                </div>
            </div>
        </div>


        <!-- Price and Features -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <span class="text-3xl font-bold text-gray-900">Rp 8939.000</span>
                    <span class="ml-2 line-through text-gray-500">Rp 1.199.000</span>
                </div>
                <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">25% OFF</span>
            </div>

            <!-- Features -->
            <div class="space-y-4 mb-6">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Bahan Premium Import</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Garansi 1 Tahun</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Free Ongkir Seluruh Indonesia</span>
                </div>
            </div>
        </div>

        <!-- COD Section -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-lg font-semibold text-yellow-800">Bayar di Tempat (COD)</h3>
            </div>
            <p class="mt-2 text-yellow-700">Pembayaran mudah, bisa bayar setelah barang sampai!</p>
        </div>

        <!-- Testimonials -->
        <div class="mb-20">
            <h2 class="text-2xl font-bold mb-4">Testimonial Pembeli</h2>
            <div class="space-y-4">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center mb-2">
                        <img src="/api/placeholder/40/40" class="w-10 h-10 rounded-full" alt="User">
                        <div class="ml-3">
                            <h4 class="font-semibold">Ahmad S.</h4>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Kualitas premium, nyaman dipakai. Pengiriman cepat dan pelayanan mantap!"
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center mb-2">
                        <img src="/api/placeholder/40/40" class="w-10 h-10 rounded-full" alt="User">
                        <div class="ml-3">
                            <h4 class="font-semibold">Sarah W.</h4>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Worth it banget! Barang sesuai foto, COD lancar. Recommended seller!"</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed Bottom WhatsApp Button -->
    <div class="fixed bottom-0 left-0 right-0 p-4 bg-white border-t border-gray-200">
        <a href="https://wa.me/6281234567890"
            class="block w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg text-center">
            <div class="flex items-center justify-center">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.828z" />
                </svg>
                Pesan Sekarang via WhatsApp
            </div>
        </a>
    </div>
</body>

</html>
