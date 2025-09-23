<footer class="bg-primary">
    <div class="container mx-auto w-11/12 py-4 text-white lg:flex lg:px-4 lg:justify-center lg:gap-20 lg:items-center">
        <div class="flex justify-between font-dusha lg:flex-col lg:justify-normal lg:gap-5 lg:flex-1 lg:max-w-[375px]">
            <!-- LEFT SIDE -->
            <a href="{{ route('home') }}" class="flex gap-2">
                <img class="h-16 w-16 lg:h-24 lg:w-24" src="{{asset('assets/img/logo.svg')}}" alt="logo ponorogo">
                <div class="flex flex-col justify-center lg:gap-2">
                    <h1 class="text-lg lg:text-3xl">Desa Sambiganen</h1>
                    <div>
                        <p class="text-xs md:text-sm leading-4">Kec. Ngrayun, Kab. Ponorogo <br /> Jawa Timur</p>
                    </div>
                </div>
            </a>

            <!-- LAPOR KANG -->
            <div class="hidden lg:block font-dusha px-4 py-2 rounded-xl bg-white/50">
                <a href="{{ route('pengaduan') }}">
                    <p>Lapor kang...</p>
                </a>
            </div>

            <!-- RIGHT SIDE -->
            <div class="flex justify-center items-center gap-4">
                <!-- Social Links - Mobile -->
                <div class="flex justify-center gap-2 md:gap-6 mt-4 animate-zoom">
                    <a href="" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/em.svg')}}" alt="email" class="w-6 h-6 md:w-8 md:h-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/ig.svg')}}" alt="instagram" class="w-6 h-6 md:w-8 md:h-8">
                    </a>
                    <a href="https://www.tiktok.com/@pemdes.wringinanom?_t=ZS-8uHVZEqJsbS&_r=1" target="_blank" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/tt.svg')}}" alt="tiktok" class="w-6 h-6 md:w-8 md:h-8"">
                    </a>
                    <a href=" #" class="hover:opacity-80 transition-opacity duration-300">
                        <img src="{{asset('assets/img/fb.svg')}}" alt="facebook" class="w-6 h-6 md:w-8 md:h-8">
                    </a>
                </div>
            </div>
        </div>

        <!-- BOTTOM SIDE -->
        <div class=" flex flex-col gap-4 mt-4 lg:flex-1 lg:max-w-[375px] font-poppins">
            <!-- UPPER SIDE -->
            <div class="flex justify-between lg:gap-16">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Profil</h3>
                    <a href="{{ route('sejarah') }}" class="text-sm block">Sejarah</a>
                    <a href="{{ route('agenda') }}" class="text-sm block">Struktur</a>
                    <a href="{{ route('sejarah') }}" class="text-sm block">Lembaga Desa</a>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Anggaran</h3>
                    <a href="{{ route('anggaran') }}" class="text-sm">Tahun 2023</a>
                    <a href="{{ route('anggaran') }}" class="text-sm block">Tahun 2024</a>
                </div>
            </div>
            <!-- LOWER SIDE -->
            <div class="flex justify-between lg:gap-16">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Surat dan Dokumen</h3>
                    <a href="{{ route('surat-surat') }}" class="text-sm block">Kehilangan</a>
                    <a href="{{ route('surat-surat') }}" class="text-sm block">Keterangan Tidak Mampu</a>
                    <a href="{{ route('surat-surat') }}" class="text-sm block">Lembaga Desa</a>
                </div>
                <div>
                    <a href="{{ route('berita') }}">
                        <h3 class="text-lg font-semibold mb-2 w-20">Berita</h3>
                    </a>
                </div>
            </div>
        </div>

        <!-- kontak dan alamat -->
        <div class="flex flex-col">
            <!-- Kontak -->
            <div class="font-poppins">
                <p class="font-medium text-lg my-2 lg:mt-0 lg:mb-2">Kontak</p>
                <!-- logo email -->
                <div class="flex gap-4 mb-4">
                    <img src="{{ asset('assets/img/email.svg')}}" alt="email.svg" class=" bg-white w-8 rounded p-1">
                    <p class="font-medium outline outline-2 outline-white p-1 rounded">dummyemail@gmail.com</p>
                </div>

                <!-- logo telepon -->
                <div class="flex gap-4 mb-4">
                    <img src="{{ asset('assets/img/phone.svg')}}" alt="phone.svg" class="bg-white w-8 rounded p-1">
                    <p class="font-medium outline outline-2 outline-white p-1 rounded">+dummyphonenumber</p>
                </div>
            </div>

            <!-- alamat -->
            <div class="font-poppins">
                <p class="font-medium text-lg my-2">Alamat</p>
                <p>Desa Sambiganen,</p>
                <p>Kecamatan Ngrayun, Kabupaten Ponorogo</p>
            </div>
        </div>



        <!-- LAPOR KANG -->
        <div class="lg:hidden max-w-[400px] mx-auto mt-4 font-dusha px-4 py-2 rounded-xl bg-white/50">
            <a href="{{ route('pengaduan') }}">
                <p>Lapor kang...</p>
            </a>
        </div>
    </div>

    <!-- watermark -->
    <p class="font-poppins font-medium text-white text-center py-4">Copyright 2025 - Apakah perlu diganti</p>

</footer>

<!-- Stack for page-specific scripts -->
@stack('scripts')
</body>

</html>