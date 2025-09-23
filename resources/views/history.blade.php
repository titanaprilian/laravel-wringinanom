@include("layouts.header")
<main class="mt-24 font-dusha">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary">Sambiganen</span> <br>
            <span class="text-4xl text-secondary">Kisahku</span>
        </div>
    </div>

    <!-- main section -->
    <section class="mx-auto w-11/12 py-5 font-poppins">
        <!-- Visi -->
        <div class="text-center mb-10">
            <h1 class="font-dusha text-4xl text-primary">Visi</h1>
            @if ($vision)   
                <p class="italic font-bold">
                    {{$vision->vision}}
                </p>
            @else
                <p class="italic font-bold">
                    Tidak ada data visi.
                </p>
            @endif
        </div>
        <!-- Visi end -->

        <!-- misi -->
        <div>
            <h1 class="font-dusha text-4xl text-secondary text-center">Misi</h1>
            @if ($vision->mission->isNotEmpty())
                <ol class=" list-decimal list-inside text-justify font-sans font font-normal">
                    @foreach ($vision->mission as $mission)
                        <li class="my-4">{{$mission->mission}}</li>
                    @endforeach
                </ol>

            @else
                <p class="text-center font-sans font font-normal">
                    Tidak ada data misi.
                </p>
            @endif
        </div>
        <!-- misi end -->

        <!-- sejarah -->
        <div class="bg-primary text-white py-2 rounded-xl">
            <!-- title -->
            <div class="w-11/12 mx-auto flex flex-col gap-4 sm:flex-row sm:justify-center sm:gap-36 sm:items-center">
                <div>
                    <h1 class="font-dusha text-4xl text-center">Cerita Rakyat <br> Sambinganen</h1>
                </div>
                <img class="mx-auto sm:m-0 sm:w-1/2" src="{{asset('assets/img/bg-history.svg')}}" alt="">
            </div>
            <div class="w-11/12 mx-auto text-justify font-sans">
                @if ($history)
                    {!! $history->content !!}
                @else
                    <p class="text-center">Tidak ada data sejarah.</p>
                @endif
                <p>diganti dengan filament</p>
            </div>
        </div>
        <!-- sejarah end -->

        <!-- perangkat desa -->
        <div class="font-dusha my-16">
            <!-- title -->
            <div class="text-center text-4xl mb-10">
                <span class="text-primary">Perangkat <span class="text-secondary">Desa</span> <br> Sambinganen</span>
            </div>
            <!-- title end -->

            @if ($villageOfficials->isNotEmpty())
                <!-- swiper perangkat desa -->
                <div id="swiper-perangkat-desa" class="swiper pb-[54px]">
                    <div class="swiper-wrapper">
                        @foreach ($villageOfficials as $official)
                            <div class="swiper-slide flex flex-col items-center">
                                        <img class="w-44 rounded-t-3xl" src="{{asset('storage/' . $official->photo)}}" alt="{{ $official->name }}">
                                        <div class="bg-black/30 text-white text-center absolute w-44 bottom-0 py-2">
                                            <span>{{ $official->name }}</span>
                                            <p class="border-white border-t-2">{{ $official->position }}</p>
                                        </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination relative mt-4"></div>
                </div>
                <!-- swiper perangkat desa end -->

            @else
                <p class="text-center">Tidak ada data perangkat desa.</p>
            @endif
        </div>
    </section>
</main>
@include("layouts.footer")