@include("layouts.header")
<main class="font-dusha mt-24">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10 text-4xl">
            <span class="text-primary">Berita <span class="text-secondary">Desa</span></span> <br>
            <span class="text-primary">Sambiganen</span>
        </div>
    </div>

    <!-- news section -->
    <section class="w-11/12 mx-auto my-4">
        <div class="my-4">
            <span class="p-2 px-4 bg-primary rounded-md text-white">Berita</span>
        </div>
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
            @foreach ($allNews as $news)
            <!-- news -->
            <div class="p-4 w-11/12 mx-auto shadow-lg relative">
                <img src="{{ asset("storage/" . $news->photo_path)}}" alt="" class="rounded-2xl w-auto">
                <div class="flex gap-2 absolute bottom-40 left-6">
                    <!-- Loop through categories -->
                    @foreach ($news->categories as $category)
                    <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $category->name }}</span>
                    @endforeach

                    <!-- Loop through locations -->
                    @foreach ($news->locations as $location)
                    <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $location->name }}</span>
                    @endforeach
                </div>

                <!-- news title -->
                <p class="my-2">{{$news->title}}</p>

                <!-- description -->
                <div class="my-2">{!! Str::limit($news->content, 50, "...") !!}</div>

                <a href="{{ route('berita.get', ["id" => $news->id]) }}">
                    <p class="border-[#DBE2EA] border-2 rounded-md p-2 text-[#7C9CBF] inline-block">Selengkapnya</p>
                </a>
            </div>
            <!-- news end -->
            @endforeach
    </section>

</main>
@include("layouts.footer")