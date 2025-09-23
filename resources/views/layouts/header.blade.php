<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Wringinanom</title>

  <!-- Fonts -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=IBM+Plex+Sans:wght@300;400;500;700&display=swap');
  </style>
  <!-- Swiper (If you use it) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  @vite('resources/css/app.css')
  <script src="{{asset('assets/js/navbar.js')}}"></script>
  <script type="module" src="{{asset('assets/js/swiper.js')}}"></script>
  <script src="{{asset('assets/js/dokumen.js')}}"></script>
  <script src="{{asset('assets/js/galery.js')}}"></script>
  <script src="{{asset('assets/js/form.js')}}"></script>
  <script src="{{asset('assets/js/dtks.js')}}"></script>
</head>

<body class="overflow-x-hidden">
  <header class="bg-primary fixed top-0 left-0 right-0 z-20">
    <nav class="mx-auto w-11/12 py-4 text-white font-dusha md:flex md:justify-between md:items-center">
      <div class="flex justify-between">
        <!-- LEFT SIDE -->
        <a href="{{route('home')}}" class="flex justify-between gap-2">
          <img class="h-16 w-16" src="{{asset('assets/img/logo.svg')}}" alt="logo ponorogo">
          <div class="flex flex-col justify-center">
            <h1 class="text-lg">Desa Sambiganen</h1>
            <div>
              <p class="text-sm leading-4">Kec. Ngrayun, Kab. Ponorogo <br /> Jawa Timur</p>
            </div>
          </div>
        </a>
        <!-- RIGHT SIDE -->
        <div onclick="toggleDropdownMenu('hamburger-list')"
          class="flex justify-center items-center cursor-pointer md:hidden">
          <i class="fa-solid fa-bars fa-2xl"></i>
          <i class="fa-solid fa-xmark fa-2xl hidden"></i>
        </div>
      </div>

      <!-- Dropdown -->
      <div id="hamburger-list" class="font-bold hidden md:flex sm:items-center gap-5 space-y-5 md:space-y-0 mt-5 md:mt-0">
        <!-- profil -->
        <div onmouseover="openDropdown('dropdown-profil')" onmouseleave="closeDropdown('dropdown-profil')"
          class="relative">
          <div onclick="toggleDropdown('dropdown-profil'), rotateArrow('profil')" id="profil"
            class="flex gap-1 items-center cursor-pointer">
            <span>Profil</span>
            <img class="h-5 w-5 transition-all ease-in-out duration-200" src="{{asset('assets/img/arrow.svg')}}">
          </div>

          <!-- dd profil -->
          <div id="dropdown-profil"
            class="pl-4 hidden py-5 md:absolute md:px-2 md:pt-10 md:bg-primary md:rounded md:w-max md:min-w-[150px]">
            <ul class="space-y-5">
              <li>
                <a clas href="{{route('sejarah')}}">
                  <p>Sejarah</p>
                </a>
              </li>
              <li>
                <a clas href="{{route('lembaga')}}">
                  <p>Lembaga</p>
                </a>
              </li>
              <li>
                <a clas href="{{route('agenda')}}">
                  <p>Agenda Kreasi</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- surat dan dokumen -->
        <div onmouseover="openDropdown('dropdown-surat-dan-dokumen')"
          onmouseleave="closeDropdown('dropdown-surat-dan-dokumen')" class="relative">
          <div onclick="toggleDropdown('dropdown-surat-dan-dokumen'), rotateArrow('surat-dan-dokumen')"
            id="surat-dan-dokumen" class="flex gap-1 items-center cursor-pointer">
            <span>Surat dan Dokumen</span>
            <img class="h-5 w-5 transition-all ease-in-out duration-200" src="{{asset('assets/img/arrow.svg')}}">
          </div>

          <!-- dd surat dan dokumen -->
          <div id="dropdown-surat-dan-dokumen"
            class="pl-4 hidden py-5 md:absolute md:px-2 md:pt-10 md:bg-primary md:rounded md:w-max md:min-w-[150px]">
            <ul class="space-y-5">
              <li><a href="/dokumen?tab=persyaratan">
                  <p>Persyaratan</p>
                </a>
              </li>
              <li>
                <a href="/dokumen?tab=surat">
                  <p>Surat</p>
                </a>
              </li>
              <li><a href="/dokumen?tab=dokumen">
                  <p>Dokumen</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- anggaran -->
        <div onmouseover="openDropdown('dropdown-anggaran')" onmouseleave="closeDropdown('dropdown-anggaran')"
          class="relative">
          <div onclick="toggleDropdown('dropdown-anggaran'), rotateArrow('anggaran')" id="anggaran"
            class="flex gap-1 items-center cursor-pointer">
            <span>Anggaran</span>
            <img class="h-5 w-5 transition-all ease-in-out duration-200" src="{{asset('assets/img/arrow.svg')}}">
          </div>


          <!-- dd anggaran -->
          <div id="dropdown-anggaran"
            class="pl-4 hidden py-5 md:absolute md:px-2 md:pt-10 md:bg-primary md:rounded md:w-max md:min-w-[150px]">
            <ul class="space-y-5">
              @foreach ($budgetYearList as $budgetYear)
              <li class="{{ $loop->index === 0 ? "" : "my-5" }}">
                <a href="{{ route('anggaran', ["year" => $budgetYear]) }}">
                  <p>Tahun {{ $budgetYear - 1 }} - {{ $budgetYear }}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <!-- news -->
        <div>
          <a href="{{ route('berita') }}"><span>Berita</span></a>
        </div>

        <!-- dtks -->
        <div><a href="/dtks"><span>DTKS</span></a></div>

        <!-- Galery -->
        <div>
          <a href="{{ route('galeri') }}"><span>Galery</span></a>
        </div>

        <!-- pengaduan -->
        <div>
          <a href="{{ route('pengaduan') }}"><span>Pengaduan</span></a>
        </div>
      </div>
    </nav>

    <style>
      .clip-polygon {
        clip-path: polygon(100% 10%, 60% 50%, 100% 100%, 0% 100%, 0% 10%);
      }
    </style>
  </header>