<?php get_header(); ?>

<!-- Start introduction -->
<div class="max-w-screen-lg px-6 pb-12 mx-auto my-12">
    <img width="280" src="<?php echo bunababycare_asset('images/logo.svg') ?>" alt="Logo Bunababycare">
    <p class="mt-6 font-serif text-2xl italic font-bold text-gray-500">
        Baby and Materity Care.
    </p>
    <p class="max-w-screen-md mt-2 text-3xl font-medium text-gray-700">
        Kami telah berkarya sejak 2018 dan dipercaya oleh ribuan ibu dan bayi menjadi pelayanan homecare ternama di Bandung dan Cimahi.
    </p>
    <p class="mt-6 text-lg text-gray-600">
        Bagi setiap orang tua, setiap detik yang dilalui dengan hadirnya buah hati adalah moment terindah. Dan perkembangan fisiologis dari hamil, bersalin, nifas, menyusui sejatinya kado berharga bagi wanita.
    </p>
    <p class="mt-4 text-lg text-gray-600">
        Kami hadir sebagai solusi Ayah dan Bunda dalam menjadi sahabat kesehatan seputar kebidanan, mempersiapkan diri sedari pra nikah, kehamilan, nifas, perawatan bayi hingga pemantauan pertumbuhan bisa dilakukan dengan nyaman dan praktis di rumah.
    </p>
    <div class="flex flex-col gap-2 mt-4 md:flex-row">
        <a href="https://www.instagram.com/bunababy_care"
            class="flex items-center w-64 px-4 py-2 font-semibold leading-6 text-white transition-colors duration-200 border border-transparent hover:opacity-80 bg-fuchsia-700 rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                <circle cx="12" cy="12" r="3"></circle>
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
            </svg>    
            <span class="ml-2">Ikuti kami di Instagram</span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=628997897991&text=Halo+Bunababy_Care.+Perkenalkan+saya+dengan+%28Isi+Nama%29.+Lokasi+saya+di+%28Sebutkan+alamat+jelas%29.+Ingin+reservasi+treatment+%28sebutkan%29.+Thank+you"
            class="flex items-center w-64 px-4 py-2 font-semibold leading-6 text-white transition-colors duration-200 bg-green-600 border border-transparent hover:opacity-80 rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
            </svg>
            <span class="ml-2">Pesan Treatment</span>
        </a>
    </div>
</div>
<!-- End introduction -->

<!-- Start Testimonials -->
<div class="bg-white">
    <div class="max-w-screen-lg px-6 mx-auto py-14">
        <h2 class="mb-2 text-3xl font-semibold">Testimonial</h2>
        <div class="py-4">
            <p class="font-semibold">Fitri Nurmalasari</p>
            <div class="mt-2" x-data="{ rating: 5, ratings: [1,2,3,4,5] }">
                <div class="flex space-x-1">
                    <template x-for="(star, index) in ratings" :key="index">
                        <div
                            aria-hidden="true"
                            class="w-8 h-8 rounded-sm cursor-pointer fill-current text-slate-400 focus:outline-none focus:shadow-outline"
                            x-bind:class="{
                                'text-yellow-400': rating >= star,
                            }">
                            <svg class="transition duration-150 w-15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </template>
                </div>
            </div>
            <p class="text-gray-600">
            Seneng banget setelah tau bunababycare udh bisa on-site, buatku sih pelayanan yang paling paripurna adalah ketika dilayanin dari hati, karena semua yg dari hati akan diterima ke hati... Cieeee... Dan ga usah diragukan semua treatment nya dikerjain dari hati, harga terjangkau dengan service yang excellent, semuanya ramah, dan yang paling penting selalu menenangkan.. its works!!! Aku bisa lebih tenang dan pd sebagai ibu...
            </p>
        </div>
        <a href="https://www.google.com/search?q=bunababycare#lrd=0x2e68e521cbe08f8b:0xb44d0217840f5963,1,,," target="_blank" class="mt-4 text-primary">Lihat Testimonial Lainnya</a>
    </div>
</div>
<!-- End Testimonials -->

<?php
get_footer();
