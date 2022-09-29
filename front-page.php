<?php get_header(); ?>

<div>
    <!-- Start Header -->
    <div class="bg-white">
        <div class="max-w-screen-lg px-6 py-6 mx-auto md:px-0">
            <div class="flex items-center justify-center sm:justify-between">
                <div>
                    <img width="220" src="<?php echo bunababycare_asset('images/logo.svg') ?>" alt="Logo Bunababycare">
                </div>
                <div class="hidden sm:block">
                    <ul class="flex items-center gap-6">
                        <li class="text-sm font-semibold leading-tight tracking-widest text-gray-600 uppercase">
                            <a href="#about">About Us</a>
                        </li>
                        <li class="text-sm font-semibold leading-tight tracking-widest text-gray-600 uppercase">
                            <a href="#treatment">Treatment</a>
                        </li>
                        <li class="text-sm font-semibold leading-tight tracking-widest text-gray-600 uppercase">
                            <a href="#testimoni">Testimoni</a>
                        </li>
                        <li class="text-sm font-semibold leading-tight tracking-widest text-gray-600 uppercase">
                            <a href="#faq">FAQ</a>
                        </li>
                        <li class="text-sm font-semibold leading-tight tracking-widest text-gray-600 uppercase">
                            <a href="#booking">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Hero -->
    <div class="bg-white">
        <div class="max-w-screen-lg px-6 pt-20 pb-40 mx-auto md:px-0">
            <div class="flex flex-col items-center text-center">
                <p class="max-w-screen-md text-4xl font-bold text-[#f80592]">
                    Kami telah berkarya sejak 2018
                </p>
                <p class="mt-4 text-lg text-gray-700">
                    Dipercaya oleh ribuan ibu dan bayi menjadi pelayanan homecare ternama di Bandung dan Cimahi.
                </p>
                <div class="flex justify-center mt-8 text-[#b95bc7]">
                    <a href="#" rel="noopener" target="_blank" class="flex items-center font-semibold focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="5" width="18" height="14" rx="4"></rect>
                            <path d="M10 9l5 3l-5 3z"></path>
                        </svg>
                        <span class="ml-2 tracking-wider">LIHAT VIDEO</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Team -->
    <div class="-mt-32">
        <div class="max-w-screen-md px-6 py-12 mx-auto md:px-0">
            <div class="">
                <img loading="lazy" class="overflow-hidden rounded-lg shadow-lg" src="<?php echo bunababycare_asset('images/team.jpg') ?>">
                <p class="mt-6 text-lg text-center text-gray-600">Tim BunaBaby Care merupakan tenaga kesehatan bidan yang telah memiliki sertifikat pelatihan baby spa.</p>
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Start introduction -->
    <div class="bg-[#da949c] text-white" id="about">
        <div class="max-w-screen-lg px-6 py-16 mx-auto text-lg md:px-0">
            <div class="flex flex-col gap-8 sm:flex-row sm:items-center">
                <div class="flex-shrink-0 ">
                    <img loading="lazy" class="rounded-lg" width="300" src="<?php echo bunababycare_asset('images/ibu-anak.jpg') ?>">
                </div>
                <div>
                    <p class="">
                        Bagi setiap orang tua, setiap detik yang dilalui dengan hadirnya buah hati adalah moment terindah. Dan perkembangan fisiologis dari hamil, bersalin, nifas, menyusui sejatinya kado berharga bagi wanita.
                    </p>
                    <p class="mt-4 ">
                        Kami hadir sebagai solusi Ayah dan Bunda dalam menjadi sahabat kesehatan seputar kebidanan, mempersiapkan diri sedari pra nikah, kehamilan, nifas, perawatan bayi hingga pemantauan pertumbuhan bisa dilakukan dengan nyaman dan praktis di rumah.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End introduction -->

    

    <!-- Start Klinik -->
    <div class="bg-white">
        <div class="max-w-screen-lg px-6 mx-auto md:px-0 py-14">
            <div class="grid grid-cols-2 gap-6 ">
                <div class="col-span-1">
                    <img loading="lazy" class="rounded-lg" src="<?php echo bunababycare_asset('images/klinik/1.jpg') ?>">
                </div>
                <div class="col-span-1">
                    <img loading="lazy" class="rounded-lg" src="<?php echo bunababycare_asset('images/klinik/2.jpg') ?>">
                </div>
                <div class="col-span-1">
                    <img loading="lazy" class="rounded-lg" src="<?php echo bunababycare_asset('images/klinik/3.jpg') ?>">
                </div>
                <div class="col-span-1">
                    <img loading="lazy" class="rounded-lg" src="<?php echo bunababycare_asset('images/klinik/4.jpg') ?>">
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2">
                <div class="">
                    <img loading="lazy" class="rounded-lg" src="<?php echo bunababycare_asset('images/klinik/depan.jpg') ?>">
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="py-4 text-center">
                        <h2 class="mb-2 font-serif text-5xl font-semibold lg:text-7xl">Klinik</h2>
                        <p class="text-gray-600">
                        Jalan Cihanjuang Komplek Nata Endah Blok N No. 170 Cibabat, Kec. Cimahi Utara, Kota Cimahi
                        </p>
                    </div>
                    <a href="https://goo.gl/maps/mLWKbcKvio5aFgj76" target="_blank" class="mt-4 text-primary">
                        Lihat di Google Maps
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End Klinik -->

    <!-- Start Layanan -->
    <div id="treatment">
        <div class="max-w-screen-md px-6 py-24 mx-auto md:px-0">
            <h2 class="mb-2 font-serif text-5xl font-semibold lg:text-7xl">Pilihan Treatment</h2>
            <div class="mt-8 space-y-6">
                <div class="flex flex-col items-center sm:gap-6 sm:items-center sm:flex-row">
                    <div class="order-2 text-center sm:order-1">
                        <h3 class="text-xl font-bold uppercase lg:text-3xl">Baby Treatment</h3>
                        <p class="mt-2 text-gray-600 lg:text-lg">Pijat bayi sehat, pijat balita, brain gym, pijat pediatrik, pijat stimulasi anak, baby spa, Cukur Bayi, Tindik, Tumbuh Kembang Anak, Mandi Ceria</p>
                    </div>
                    <div class="inline-flex justify-end flex-shrink-0 order-1 sm:order-2">
                        <img loading="lazy" width="200" src="<?php echo bunababycare_asset('images/baby-treatment.svg') ?>" alt="baby treatment">
                    </div>
                </div>
                
                <div class="flex flex-col items-center sm:gap-6 sm:items-center sm:flex-row">
                    <div class="flex-shrink-0">
                        <img loading="lazy" width="200" src="<?php echo bunababycare_asset('images/newborn.svg') ?>" alt="baby treatment">
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold uppercase lg:text-3xl">Newborn Package</h3>
                        <p class="mt-2 text-gray-600 lg:text-lg">Mandi, Jemur, Perawatan tali pusat, pemeriksaan ibu dan bayi, pijat bayi, pijat oksitosin/breastcare, praktek belajar memandikan bayi untuk orangtua, pijat nifas, totok wajah, scrub</p>
                    </div>
                </div>

                <div class="flex flex-col items-center sm:gap-6 sm:items-center sm:flex-row">
                    <div class="order-2 text-center sm:order-1">
                        <h3 class="text-xl font-bold uppercase lg:text-3xl">Buna Treatment</h3>
                        <p class="mt-2 text-gray-600 lg:text-lg">Pijat ibu hamil, periksa ibu hamil, totok wajah, pijat ibu nifas, pijat oksitosin, pijat rintik hujan, Prenatal Gentle Yoga, Breastcare, pijat punggung titik oksitosin, konsultasi ASI, Pijat Gelombang Cinta untuk menstimulasi konstraksi alami bumil, periksa hamil, afirmasi untuk persalinan lancar, totok bersinar</p>
                    </div>
                    <div class="inline-flex justify-end flex-shrink-0 order-1 sm:order-2">
                        <img loading="lazy" width="200" src="<?php echo bunababycare_asset('images/buna-treatment.svg') ?>" alt="baby treatment">
                    </div>
                </div>

                <div class="flex flex-col items-center sm:gap-6 sm:items-center sm:flex-row">
                    <div class="flex-shrink-0">
                        <img loading="lazy" width="200" src="<?php echo bunababycare_asset('images/bunababy-class.svg') ?>" alt="baby treatment">
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold uppercase lg:text-3xl">Bunababy Class</h3>
                        <p class="mt-2 text-gray-600 lg:text-lg">Persiapan Persalinan, Kelas Laktasi, New Born Care, Tumbuh Kembang Anak</p>
                    </div>
                </div>
            </div>

            <div class="py-6 text-center sm:text-left">
                <a href="https://api.whatsapp.com/send?phone=628997897991&text=Halo+Bunababy_Care.+Perkenalkan+saya+dengan+%28Isi+Nama%29.+Lokasi+saya+di+%28Sebutkan+alamat+jelas%29.+Mau+bertanya+" target="_blank" class=" text-primary">Hubungi admin untuk lihat pricelist</a>
            </div>

        </div>
    </div>
    <!-- End Layanan -->

    <!-- Start Testimonials -->
    <div id="testimoni" class="py-12 bg-white">
        <div class="max-w-screen-md px-6 py-4 mx-auto md:px-0">
            <h2 class="mb-2 font-serif text-5xl font-semibold lg:text-7xl">Real Testimonial</h2>
            <p class="text-gray-600">dari bunda yang sudah merasakan manfaat treatment</p>
        </div>
        <div class="py-2">
            <div class="flex snap-x scroll-pl-4 gap-2 space-x-4 overflow-x-auto px-8 py-2 sm:scroll-pl-6 sm:space-x-8 md:scroll-pl-[calc(50%-20rem)] lg:scroll-pl-[calc(50%-25rem)]">
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/1.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/2.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/3.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/4.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/5.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/6.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/7.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/8.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/9.jpg') ?>" />
                </div>
                <div class="flex-none w-64 snap-start">
                    <img loading="lazy" src="<?php echo bunababycare_asset('images/testimonials/10.jpg') ?>" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start FAQ -->
    <div id="faq" class="bg-white ">
        <div class="max-w-screen-lg px-6 mx-auto md:px-0 py-14">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-3">
                <div class="col-span-1">
                    <img loading="lazy" class="ml-8" src="<?php echo bunababycare_asset('images/faq.svg') ?>" alt="faq" />
                    <div class="pr-0 -mt-16 text-right sm:pr-12">
                        <h2 class="mb-2 font-serif text-5xl font-semibold lg:text-7xl">faq</h2>
                        <p class="text-gray-600">yang paling sering ditanyakan</p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="space-y-4">
                        <div>
                            <p class="font-semibold text-gray-700">
                                Wilayah jangkauan Homecare daerah mana aja?
                            </p>
                            <p class="mt-2 text-gray-600">
                                Saat ini BunaBaby menjangkau Kota Bandung, Kabupaten Bandung, Kab. Bandung Barat dan Cimahi.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-700">
                                Gimana cara reservasinya?
                            </p>
                            <p class="mt-2 text-gray-600">
                                Gampang Bunda, cukup dengan menghubungi admin melalui tombol whatsapp yang ada pada website ini, duduk manis di rumah dan tunggu tim bidan datang sesuai jadwal.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-700">
                                Untuk onsite di klinik apakah harus booking dulu?
                            </p>
                            <p class="mt-2 text-gray-600">
                                Untuk onsite pun booking dulu ya bun. Soalnya supaya pas datang langsung treatment, jadi bayinya nyaman tidak harus lama menunggu.
                            </p>
                        </div>
                    </div>
                    <div class="py-4">
                        <a href="https://api.whatsapp.com/send?phone=628997897991&text=Halo+Bunababy_Care.+Perkenalkan+saya+dengan+%28Isi+Nama%29.+Lokasi+saya+di+%28Sebutkan+alamat+jelas%29.+Mau+bertanya+" target="_blank" class="mt-4 text-primary">Hubungi admin bila ada pertanyaan lain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Start Instagram -->
    <!-- <div class="bg-white ">
        <div class="max-w-screen-md px-6 mx-auto border-t md:px-0 py-14">
            <h2 class="mb-2 text-3xl font-semibold">Ikuti Kami di Instagram</h2>
            <div class="py-4">

            </div>
            <a href="https://www.instagram.com/bunababy_care"
                class="flex items-center w-64 px-4 py-2 font-semibold leading-6 text-white transition-colors duration-200 border border-transparent hover:opacity-80 bg-fuchsia-700 rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                    <circle cx="12" cy="12" r="3"></circle>
                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                </svg>    
                <span class="ml-2">@bunababy_care</span>
            </a>
        </div>
    </div> -->
    <!-- End Instagram -->

    <!-- Start Booking -->
    <div id="booking" class="bg-[#da949c] text-white">
        <div class="max-w-screen-md px-8 mx-auto sm:px-0 py-14">
            <h2 class="mb-2 font-serif text-5xl font-semibold text-center lg:text-7xl">Alur Booking</h2>
            <div class="py-4">
                <ul class="grid gap-2 sm:gap-6 sm:grid-cols-3">
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">1</div>
                        <div class="ml-2 text-lg leading-tight">Booking Via WA</div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">2</div>
                        <div class="ml-2 text-lg leading-tight">Deal Deal-an Waktu Treatment</div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">3</div>
                        <div class="ml-2 text-lg leading-tight">Mengisi Form Order</div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">4</div>
                        <div class="ml-2 text-lg leading-tight">Dikirim Totalan</div>
                    </li>
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">5</div>
                        <div class="ml-2 text-lg leading-tight">Bayar DP = Booked Slot</div>
                    </li>
                    </li>
                    <li class="flex items-center">
                        <div class="text-5xl font-bold leading-none opacity-60">6</div>
                        <div class="ml-2 text-lg leading-tight">Treatment Deh!</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Booking -->

    <div class="py-8 bg-[#da949c]"></div>

    <!-- Start WhatsApp -->
    <div class=""
        x-intersect="$store.waButton.show = false"
        x-intersect:leave="$store.waButton.show = true"
    >
    <div class="max-w-screen-sm px-6 mx-auto sm:px-0">
        <div class="relative flex flex-col items-center px-6 py-8 bg-white rounded-lg -mt-14 sm:flex-row sm:py-4">
            <p class="flex-grow pb-2 text-lg font-normal text-gray-700 sm:text-center sm:pb-0">Sudah siap untuk treatment?</p>
            <a href="https://api.whatsapp.com/send?phone=628997897991&text=Halo+Bunababy_Care.+Perkenalkan+saya+dengan+%28Isi+Nama%29.+Lokasi+saya+di+%28Sebutkan+alamat+jelas%29.+Ingin+reservasi+treatment+%28sebutkan%29.+Thank+you"
                    class="flex items-center w-64 px-4 py-2 font-semibold leading-6 text-white transition-colors duration-200 bg-green-500 border border-transparent hover:opacity-80 rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                    </svg>
                    <span class="ml-2">Booking Sekarang</span>
                </a>
        </div>
    </div>

    <!-- End WhatsApp -->

</div>

<?php
get_footer();
