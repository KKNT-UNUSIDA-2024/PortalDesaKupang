<x-portal-layout>

<section class="">
<div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <div class="flex justify-center items-center pt-4">
        <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
</section>
<br>
<section>
    <div>
        <h1 class="text-5xl text-center font-thin text-gray-900 dark:text-white ">SELAMAT DATANG DI BUMDES DESA KUPANG</h1>
        <br>
        <h2 class="text-3xl text-center text-gray-500 dark:text-white">Tempat di mana keindahan alam dan semangat berkarya bertemu! Di kaki Bukit Kayu Putih yang memukau, Desa Kupang menawarkan pesona alam yang menenangkan sekaligus menjadi pusat inovasi lokal melalui Badan Usaha Milik Desa (BUMDes). BUMDes Desa Kupang mengelola berbagai unit usaha yang memberdayakan potensi lokal, termasuk pembuatan pupuk kompos organik, produksi tahu berkualitas, dan pembuatan paving yang memperkokoh infrastruktur desa. Setiap produk yang dihasilkan tidak hanya berkontribusi pada perekonomian desa, tetapi juga memperkuat kearifan lokal dan menjaga kelestarian lingkungan</h2>
       <br>
       <h2 class="text-3xl text-center text-gray-500 dark:text-white">Dengan berkunjung ke Desa Kupang, Anda tidak hanya dapat menikmati pemandangan indah Bukit Kayu Putih, tetapi juga melihat langsung bagaimana BUMDes kami berperan dalam memajukan desa. Setiap dukungan Anda berarti turut serta dalam upaya meningkatkan kesejahteraan masyarakat Desa Kupang dan melestarikan keindahan alam yang ada. Mari bersama-sama membangun desa yang lebih baik dan lestari!</h2>
    </div>
</section>
<br>
<section>

<!-- Cards -->
<div class="flex justify-center space-x-8 mt-20 ">
            <!-- Card 1 -->
            <div class="bg-white text-black p-6 rounded-lg shadow-lg max-w-xs">
                
                <img src="{{ asset('images/image1.jpg') }}" alt="Product Image" class="rounded-t-lg w-full">
                <div class="mt-4">
                    <h2 class="text-lg font-bold">Product 1</h2>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 text-sm">★★★★★</span>
                        <span class="ml-2 text-gray-500 text-sm">(5.0)</span>
                    </div>
                    <p class="text-lg font-semibold mt-4">$599</p>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600">Add to cart</button>
                </div>
            </div>
             <!-- Card 2 -->
             <div class="bg-white text-black p-6 rounded-lg shadow-lg max-w-xs">
                <img src="{{ asset('images/image2.jpg') }}" alt="Product Image" class="rounded-t-lg w-full">
                <div class="mt-4">
                    <h2 class="text-lg font-bold">Product 2</h2>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 text-sm">★★★★★</span>
                        <span class="ml-2 text-gray-500 text-sm">(5.0)</span>
                    </div>
                    <p class="text-lg font-semibold mt-4">$599</p>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600">Add to cart</button>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white text-black p-6 rounded-lg shadow-lg max-w-xs">
                <img src="{{ asset('images/image2.jpg') }}" alt="Product Image" class="rounded-t-lg w-full">
                <div class="mt-4">
                    <h2 class="text-lg font-bold">Product 3</h2>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 text-sm">★★★★★</span>
                        <span class="ml-2 text-gray-500 text-sm">(5.0)</span>
                    </div>
                    <p class="text-lg font-semibold mt-4">$599</p>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600">Add to cart</button>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white text-black p-6 rounded-lg shadow-lg max-w-xs">
                <img src="{{ asset('images/image1.jpg') }}" alt="Product Image" class="rounded-t-lg w-full">
                <div class="mt-4">
                    <h2 class="text-lg font-bold">Product 4</h2>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 text-sm">★★★★★</span>
                        <span class="ml-2 text-gray-500 text-sm">(5.0)</span>
                    </div>
                    <p class="text-lg font-semibold mt-4">$599</p>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600">Add to cart</button>
                </div>
            </div>
                      
</section>









</x-portal-layout>
