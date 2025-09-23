@include("layouts.header")
<main class="mt-24 font-dusha">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-80">
        <div class="text-center relative z-10 text-4xl">
            <span class="text-primary">Agenda</span> <br>
            <span class="text-primary">Kreasi <span class="text-secondary">Desa</span> </span> <br>
            <span class="text-primary">Sambiganen</span>
        </div>
    </div>

    <!-- main section -->
    <section>
        <!-- organization icon -->
        <div class="bg-primary">
            <div class="p-4 flex justify-between mx-auto w-11/12 sm:justify-center sm:gap-36">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="0" tabindex="0" src="{{asset('assets/img/Industri.png')}}" alt="">
                <img class="w-20 bg-black rounded-lg cursor-pointer icon organization-icon hover:outline hover:outline-secondary hover:outline-4 hover:outline-offset-2 focus:outline focus:outline-secondary focus:outline-4 focus:outline-offset-2" slide-index="1" tabindex="0" src="{{asset('assets/img/karang-taruna-sm.png')}}" alt="">
            </div>
        </div>
        <!-- organization icon end -->

        <div id="swiper-lembaga" class="swiper mx-auto w-11/12 my-10 text-white pb-[54px]">
            <div class="swiper-wrapper font-sans">
                <!-- karang taruna description -->
                <div class="swiper-slide bg-primary rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>Industri</span>
                            <span>Desa Wringinanom</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, dikenal sebagai sentra industri genteng dan batu bata. Industri ini telah menjadi tulang punggung perekonomian desa, 
                        di mana banyak warga yang terlibat dalam proses produksi hingga distribusi. Genteng dan batu bata buatan Desa Wringinanom terkenal akan kualitasnya yang kokoh dan tahan lama,
                        menjadikannya pilihan utama untuk kebutuhan konstruksi di daerah sekitar.
                        </p>
                    </div>
                </div>
                <!-- karang taruna description end -->
                <!-- BPD description -->
                <div class="swiper-slide bg-turqoise rounded-lg h-auto">
                    <div class=" p-12">
                        <!-- title -->
                        <div class="font-bold mb-4 flex flex-col items-center">
                            <span>Kesenian</span>
                            <span>Desa Wringinanom</span>
                        </div>
                        <!-- title end -->
            
                        <p class=" text-justify">
                        Desa Wringinanom juga kaya akan seni budaya tradisional yang terus dilestarikan oleh masyarakat. Kesenian seperti Gajah-gajahan dan Reog Songo Mulang Joyo menjadi identitas desa yang selalu ditampilkan dalam berbagai acara adat dan perayaan.
                        Selain itu, seni Karawitan dan Gong Gumbeng menambah keberagaman budaya desa, menghadirkan keindahan harmoni musik tradisional yang diwariskan dari generasi ke generasi.
                        Melalui berbagai kesenian ini, Desa Wringinanom tidak hanya menjaga warisan budaya tetapi juga memperkuat ikatan sosial masyarakat.
                        </p>
                    </div>
                </div>
                <!-- BPD description end -->
            </div>
            <div class="swiper-pagination !bottom-0"></div>
        </div>
    </section>
</main>
@include("layouts.footer")