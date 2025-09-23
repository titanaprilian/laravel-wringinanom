@include("layouts.header")
<main class="font-dusha mt-24">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10">
            <span class="text-4xl text-primary"> Gallery <span class="text-secondary">Desa</span></span> <br>
            <span class="text-4xl text-primary">Sambiganen</span>
        </div>
    </div>

    <!-- galery section -->
    <section class="mx-auto w-11/12">
        <!-- img content -->
        <div class="my-10 grid grid-cols-2 gap-4">
            @foreach ($images->chunk(8) as $imageGroup) {{-- Split into groups of 8 (2x4 per column) --}}
            <div class="flex flex-col gap-4 sm:grid sm:grid-cols-2 sm:gap-4">
                @foreach ($imageGroup->chunk(4) as $column) {{-- Split into two columns, each containing 4 images --}}
                <div class="flex flex-col gap-4">
                    @foreach ($column as $image)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $image->photo_path) }}"
                            alt="{{ $image->title }}"
                            class="myImg rounded-2xl w-full cursor-pointer">
                        <div class="absolute bottom-10 left-6 text-white">
                            <span class="text-2xl">{{ $image->title }}</span>
                            <p>{{ $image->title }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        <!-- modal img content -->
        <div id="myModal" class="modal mt-24 py-10 hidden fixed z-10 left-0 top-0 w-full h-full bg-black bg-opacity-50 overflow-auto">
            <span class="close absolute top-0 right-9 text-white text-5xl font-bold cursor-pointer animate-zoom hover:text-[#bbb]">&times;</span>
            <img class="modal-content m-auto block w-11/12 max-w-max h-5/6 max-h-max animate-zoom" id="img01">
            <div id="caption" class=" m-auto block w-4/5 text-center text-white"></div>
        </div>
        <!-- modal img content end -->
    </section>
</main>
@include("layouts.footer")