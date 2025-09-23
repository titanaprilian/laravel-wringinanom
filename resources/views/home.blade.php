@include("layouts.header")
<main class="min-h-screen">
    <!-- Joglo Burammm -->
    <section class="relative min-h-screen mb-16 font-poppins">
        <div class="relative">
            <!-- hero img -->
            <div class="bg-hero-image bg-center bg-cover h-screen bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-screen after:opacity-50">
            </div>

            <!-- Search Bar -->
            <div class="absolute bottom-60 left-1/2 -translate-x-1/2 flex flex-col items-center w-full space-y-8">
                <!-- Search Bar -->
                <div class="relative w-11/12 max-w-md animate-zoom">
                    <form method="GET" action="{{ route('berita.search') }}" class="relative">
                        <input
                            type="text"
                            name="query"
                            class="w-full px-6 py-3 rounded-full border border-white/50 bg-black/30 text-white placeholder-white/80 focus:outline-none backdrop-blur-md"
                            placeholder="Cari Berita...">
                        <button class="absolute right-6 top-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </form>
                </div>


                <!-- Social Links - Mobile -->
                <div class="flex justify-center gap-8 mt-4 animate-zoom">
                    <a href="" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/em.svg')}}" alt="email" class="w-8 h-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/ig.svg')}}" alt="instagram" class="w-8 h-8">
                    </a>
                    <a href="https://www.tiktok.com/@pemdes.wringinanom?_t=ZS-8uHVZEqJsbS&_r=1" target="_blank" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/tt.svg')}}" alt="tiktok" class="w-8 h-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/fb.svg')}}" alt="facebook" class="w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="container mx-auto px-4 space-y-16 overflow-hidden">
        <!-- Kisah kisah -->
        <section class="flex flex-row gap-8 md:justify-center md:gap-16 md:px-24 fade-in-sec-one">
            <div class="w-1/2 space-y-4">
                <div class="space-y-2">
                    <h1 class="font-dusha text-3xl md:text-4xl text-primary">Sambinganen</h1>
                    <h2 class="font-dusha text-2xl md:text-3xl text-cyan">Kisahku</h2>
                </div>
                <p class="font-poppins text-sm md:text-base text-gray-700">
                    Desa Sambinganen adalah sebuah desa yang kaya akan kearifan lokal dan warisan budaya yang telah dilestarikan secara turun-temurun. 
                </p>
                <div>
                    <a
                        class=" bg-yellow max-w-fit block py-2 px-6 rounded-lg text-sm text-center font-poppins"
                        href="{{ route('sejarah')}}">Selengkapnya..</a>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4">
                <img src="{{asset('assets/img/kisah.png')}}" alt="Wringinanom" class="w-full rounded-lg object-cover" />
            </div>
        </section>

        <!-- Unduh Dokumen -->
        <section class="w-full px-0">
            <!-- MOBILE -->
            <div class="flex items-start sm:items-center sm:justify-center gap-4 md:hidden fade-in-sec-two">
                <h2 class="text-4xl font-dusha font-bold text-black">Unduh Dokumen<br>Atau Surat</h2>
                <div class="bg-yellow text-black my-auto text-4xl text-center py-4 px-4 rounded-lg glow-btn">
                    <a href="{{ route('surat-surat') }}">
                        <p>Klik di sini</p>
                    </a>
                </div>
            </div>
            <!-- DESKT -->
            <div class="hidden md:flex bg-yellow w-full py-6 flex-row justify-center items-center text-white mb-0 fade-in-sec-two">
                <div class="flex items-center gap-4 first">
                    <p class="font-bold text-left">Ada yang <br> Ingin Disampaikan?</p>
                    <a href="{{ route('pengaduan') }}" class="bg-white p-3 rounded-lg hover:scale-110 transition-all ease-in-out duration-100">
                        <img src="{{asset('assets/img/inbox.png')}}" alt="Email Icon" class="w-12 h-12" />
                    </a>
                </div>
                <div class="flex items-center gap-4 ml-8 second">
                    <p class="font-bold text-left">Unduh Dokumen <br> atau Surat!</p>
                    <a href="{{ route('surat-surat') }}" class="bg-white p-3 rounded-lg hover:scale-110 transition-all ease-in-out duration-100">
                        <img src="{{asset('assets/img/up.png')}}" alt="Upload Icon" class="w-12 h-12" />
                    </a>
                </div>
            </div>
        </section>



        <!-- News -->
        <!-- Berita Terbaru - Desktop Only -->
        <section class="w-full hidden lg:block bg-white fade-in-sec-three">
            <div class="container mx-auto px-24 py-12 max-w-[1400px]">
                <div class="flex items-center justify-center gap-16 mx-12">
                    <div class="w-1/2 space-y-6 max-w-xl pl-12">
                        <h2 class="text-primary text-2xl font-dusha">Berita Terbaru</h2>
                        <h3 class="font-poppins text-2xl font-bold leading-relaxed">
                            <a href="{{ route('berita.get', ["id" => $news->id]) }}">{{ $news->title }}</a>
                        </h3>
                        <div class="flex gap-3">
                            <!-- Loop through categories -->
                            @foreach ($news->categories as $category)
                            <span class="bg-primary text-white px-6 py-2 text-sm rounded font-ibm">{{ $category->name }}</span>
                            @endforeach
                            <!-- Loop through locations -->
                            @foreach ($news->locations as $location)
                            <span class="bg-primary text-white px-6 py-2 text-sm rounded font-ibm">{{ $location->name }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('berita') }}" class="inline-block bg-yellow text-white px-8 py-3 rounded font-poppins text-sm hover:opacity-90 detail">
                            Lihat semua berita>>>
                        </a>
                    </div>
                    <div class="w-1/2 max-w-xl pr-12">
                        <img
                            src="{{asset('storage/' . $news->photo_path)}}"
                            alt="Karnafal"
                            class="w-full h-[250px] object-cover rounded-lg shadow-lg" />
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-white relative">
            <!-- Desktop Layout -->
            <div class="w-full lg:px-0 px-4 fade-in-sec-four">
                <div class="hidden lg:block desktop">
                    <div class="w-full bg-gradient-header overflow-hidden">
                        <h2 class="font-dusha text-3xl text-white text-center py-4">Berita</h2>
                    </div>

                    <div class="bg-skyblue py-8">
                        <div class="grid grid-cols-12 gap-4 px-4">
                            <!-- First row: One large image spanning 8 columns -->
                            <div class="col-span-8">
                                <div class="bg-yellow h-[400px] rounded-lg">
                                    @isset($allNews[0])
                                    <a href="{{ route('berita.get', [$allNews[0]->id]) }}">
                                        <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[0]->photo_path) }}" alt="">
                                    </a>
                                    @endisset
                                </div>
                            </div>

                            <!-- First row: Two small images spanning 4 columns -->
                            <div class="col-span-4 space-y-4">
                                @isset($allNews[1])
                                <div class="bg-yellow h-[190px] rounded-lg">
                                    <a href="{{ route('berita.get', [$allNews[1]->id]) }}">
                                        <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[1]->photo_path) }}" alt="">
                                    </a>
                                </div>
                                @endisset
                                @isset($allNews[2])
                                <div class="bg-yellow h-[190px] rounded-lg">
                                    <a href="{{ route('berita.get', [$allNews[2]->id]) }}">
                                        <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[2]->photo_path) }}" alt="">
                                    </a>
                                </div>
                                @endisset
                            </div>

                            <!-- Second row: Three small images, each spanning 4 columns -->
                            @isset($allNews[3])
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg">
                                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[3]->photo_path) }}" alt="">
                                </div>
                            </div>
                            @endisset
                            @isset($allNews[4])
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg">
                                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[4]->photo_path) }}" alt="">
                                </div>
                            </div>
                            @endisset
                            @isset($allNews[5])
                            <div class="col-span-4">
                                <div class="bg-yellow h-[190px] rounded-lg">
                                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $allNews[5]->photo_path) }}" alt="">
                                </div>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>

                <!-- Mobile Layout -->
                <div class="lg:hidden grid grid-cols-1 md:grid-cols-2 gap-4 mobile">
                    <h2 class="font-dusha text-3xl text-primary text-center mb-12">News</h2>
                    <article class="rounded-lg overflow-hidden shadow-lg bg-white">
                        <div class="relative">
                            <img src="{{asset('storage/' . $news->photo_path)}}" alt="{{ $news->title }}" class="w-full h-48 object-cover" />
                            <div class="absolute bottom-0 left-0 p-4 flex gap-2">
                                <!-- Loop through categories -->
                                @foreach ($news->categories as $category)
                                <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $category->name }}</span>
                                @endforeach

                                <!-- Loop through locations -->
                                @foreach ($news->locations as $location)
                                <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $location->name }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-4 text-left space-y-4">
                            <h3 class="font-poppins font-bold text-lg">{{ $news->title }}</h3>
                            <p class="font-ibm text-darkGray">{{Str::limit($news->content, 50, "...")}}</p>
                            <a href="{{ route('berita.get', ["id" => $news->id]) }}" class="inline-block font-ibm border border-darkGray text-darkGray hover:bg-gray-100 px-4 py-2 rounded transition">
                                Selengkapnya
                            </a>
                        </div>
                    </article>
                </div>

                <div class="lg:hidden bg-red-400 text-center text-white rounded-lg px-8 py-2 mt-8 max-w-fit mx-auto detail">
                    <a href="{{ route('berita') }}" class="font-poppins">
                        <p>Lihat semua berita</p>
                    </a>
                </div>
            </div>
        </section>



        <!-- Komen/Timbal Balik -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4 md:hidden fade-in-sec-five">
            <div class="flex items-start sm:items-center sm:justify-center gap-4">
                <h2 class="text-xl font-dusha font-bold text-black">Ada Yang Ingin<br>Di Sampaikan</h2>
                <a href="{{ route('pengaduan') }}" class="bg-yellow text-white py-2 px-4 rounded-lg">Kirim di sini</a>
            </div>
        </section>


        <!-- Agenda Kreasi-->
        <section class="w-11/12 mx-auto mt-16 fade-in-sec-six">
            <!-- Mobile Version -->
            <div class="block md:hidden mobile">
                <h2 class="text-3xl font-dusha text-primary mb-8 text-center">Agenda Kreasi</h2>
                <div class="grid grid-cols-1 gap-8 justify-center">
                    @foreach ($creations as $creation)
                    <div class="text-center creation-item">
                        <img src="{{asset('storage/' . $creation->photo_path)}}" alt="Kesenian" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" />
                        <a href="{{ route('kreasi', ['slide' => $loop->index]) }}" class="inline-block bg-red-400 text-white px-6 py-2 rounded-lg">{{ $creation->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Desktop Version -->
            <div class="hidden md:block desktop">
                <div class="relative">
                    <div class="bg-primary rounded-lg p-8 overflow-hidden">
                        <h2 class="text-4xl font-dusha text-white mb-12 text-center">Agenda Kreasi</h2>
                        <div class="grid grid-cols-[auto_1fr_auto] gap-8 items-center px-8">
                            <h3 class="text-2xl font-dusha text-white text-right">Kesenian</h3>
                            <div class="grid grid-cols-2 gap-16">
                                @foreach ($creations as $creation)
                                <a href="{{ route('kreasi', ['slide' => $loop->index]) }}" class="bg-white rounded-lg p-4 h-[200px] flex items-center justify-center">
                                    <img class="w-full h-full" src="{{ asset('storage/' . $creation->photo_path) }}" alt="{{ $creation->title }}">
                                </a>
                                @endforeach
                            </div>
                            <h3 class="text-2xl font-dusha text-white text-left">Industri</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lembaga -->
        <section class="w-11/12 mx-auto mt-16 text-center fade-in-sec-seven">
            <h2 class="text-3xl font-dusha text-primary mb-8">Lembaga Yang Ada Di Desa Sambiganen</h2>
            <!-- Mobile-->
            <div class="grid grid-cols-2 md:hidden gap-8 justify-center mobile">
                @foreach ($organizations as $organization)
                <div class="text-center lembaga-item-mobile">
                    <img src="{{asset('storage/' . $organization->photo_path)}}" alt="{{ $organization->title }}" class="w-32 h-32 mx-auto rounded-full mb-4" />
                    <h3 class="font-bold mb-2">{{ $organization->title }}</h3>
                    <a href="{{ route('lembaga', ['slide' => $loop->index]) }}" class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">More</a>
                </div>
                @endforeach
            </div>

            <!-- Desktop View -->
            <div class="hidden md:flex flex-wrap justify-center gap-8 desktop">
                @foreach ($organizations as $organization)
                <a href="{{ route('lembaga', ['slide' => $loop->index]) }}" class="flex flex-col items-center lembaga-item-desktop">
                    <div class="bg-primary w-40 h-40 flex items-center justify-center text-black font-bold rounded-lg">
                        <img class="w-full h-full rounded-full" src="{{ asset('storage/' . $organization->photo_path) }}" alt="{{ $organization->title }}">
                    </div>
                    <p class="mt-2 font-bold">{{ $organization->title }}</p>
                </a>
                @endforeach
            </div>
        </section>



        <!-- Demographics mobile -->
        <section class="text-center space-y-6 md:hidden fade-in-sec-eight-mobile">
            <h2 class="font-dusha text-2xl text-primary">Demografis</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="space-y-2 item">
                    <h3 class="font-dusha text-5xl text-black">{{$demographic->dusun}}</h3>
                    <p class="font-dusha  text-primary uppercase">DUSUN</p>
                </div>
                <div class="space-y-2 item">
                    <h3 class="text-5xl font-dusha text-black">{{$demographic->rukun_warga}}</h3>
                    <p class="font-dusha text-primary uppercase">RUKUN WARGA</p>
                </div>
                <div class="space-y-2 item">
                    <h3 class="text-5xl font-dusha text-black">{{$demographic->rukun_tetangga}}</h3>
                    <p class="font-dusha text-primary uppercase">RUKUN TETANGGA</p>
                </div>
                <div class="space-y-2 item">
                    <h3 class="text-5xl font-dusha text-black">{{ $demographic->jiwa }}</h3>
                    <p class="text-sm font-dusha text-primary uppercase">JIWA</p>
                </div>
            </div>
        </section>

        <!-- Demographics Desk -->
        <section class="text-center hidden md:block w-full mt-0 fade-in-sec-eight-desktop">
            <div class="bg-gradient-header text-white py-3 rounded-t-lg">
                <h2 class="font-dusha text-2xl">Demografis dan Geografis</h2>
            </div>
            <div class="bg-white py-6 px-4 rounded-b-lg">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-center justify-center">
                    <!-- Dusun -->
                    <div class="flex flex-col items-center space-y-2 item">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-4xl rounded-full shadow-lg">
                            {{ $demographic->dusun }}
                        </div>
                        <p class="font-dusha text-lg text-black">Dusun</p>
                    </div>

                    <!-- Rukun Warga -->
                    <div class="flex flex-col items-center space-y-2 item">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-4xl rounded-full shadow-lg">
                            {{ $demographic->rukun_warga }}
                        </div>
                        <p class="font-dusha text-lg text-black">Rukun Warga</p>
                    </div>

                    <!-- Rukun Tetangga -->
                    <div class="flex flex-col items-center space-y-2 item">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-4xl rounded-full shadow-lg">
                            {{ $demographic->rukun_tetangga }}
                        </div>
                        <p class="font-dusha text-lg text-black">Rukun Tetangga</p>
                    </div>

                    <!-- Jiwa -->
                    <div class="flex flex-col items-center space-y-2 item">
                        <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center bg-primary text-white font-dusha text-4xl md:text-4xl rounded-full shadow-lg">
                            {{ $demographic->jiwa }}
                        </div>
                        <p class="font-dusha text-lg text-black">Jiwa</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Geographic -->
        <section class="text-center space-y-6">
            <h2 class="font-dusha text-2xl text-cyan-700 lg:hidden">Geografis</h2>
            <div class="w-full h-[400px] rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2285.628181002434!2d112.5296592561572!3d-7.399809071003929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skantor%20kepala%20desa%20Kec.%20Wringinanom%20!5e0!3m2!1sid!2sid!4v1739505876770!5m2!1sid!2sid"
                    class="w-full h-full"
                    style="border:0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>
</main>

@push('scripts')
@vite('resources/js/homeAnimation.js')
@endpush

@include("layouts.footer")