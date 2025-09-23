@include("layouts.header")
<main class="mt-24 font-dusha">
    <div class="bg-hero-image bg-center bg-cover h-64 bg-no-repeat flex items-center justify-center after:absolute after:left-0 after:right-0 after:bg-after after:w-screen after:h-64 after:opacity-50">
        <div class="text-center relative z-10 text-4xl">
            <span class="text-primary"> Anggaran <br> <span class="text-secondary">Desa</span></span> <br>
            <span class="text-primary">Sambiganen</span>
        </div>
    </div>

    <!-- main content -->
    <section class="mx-auto w-11/12 mt-8">
        <!-- menu button -->
        <div class="flex justify-between">
            <div class="text-xl">
                <p>Info Grafik APBD</p>
                <p>Realisasi Tahun Anggaran {{ $year }}</p>
            </div>
            <button class="bg-primary text-white px-4 rounded-xl">{{ $year }}</button>
        </div>
        <!-- menu button end -->

        <!-- pendapatan -->
        <div class="mt-8">
            <h2 class="text-center text-2xl text-secondary">Pendapatan</h2>
            <!-- pendapatan content -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach ($budgetData['pendapatan'] as $budget)
                <div class="bg-slate-50 my-5 rounded-xl w-4/5 mx-auto {{ $budget->is_total ? "sm:col-span-3 sm:w-4/5" : "sm:w-full"}}">
                    <p class="{{ $budget->is_total ? 'bg-[#F07167]' : 'bg-secondary' }} text-white p-1 rounded-t-lg w-auto">{{$budget->name}}</p>
                    <p class="text-center text-2xl">Rp. {{ number_format($budget->amount, 0, ',', '.') }}</p>
                </div>
                @endforeach
            </div>
            <!-- pendapatan content end -->
        </div>
        <!-- pendapatan end -->

        <!-- belanja -->
        <div class="mt-8">
            <h2 class="text-center text-2xl text-secondary">Belanja</h2>

            <!-- belanja content -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 justify-center">
                @foreach ($budgetData['belanja'] as $index => $budget)
                <div class="bg-slate-50 my-5 rounded-xl mx-auto {{ $budget->is_total ? 'sm:col-span-3 sm:w-4/5' : 'sm:w-full' }}">
                    <p class="{{ $budget->is_total ? 'bg-[#F07167]' : 'bg-secondary' }} text-white p-1 rounded-t-lg w-auto">{{$budget->name}}</p>
                    <p class="text-center text-2xl">Rp. {{ number_format($budget->amount, 0, ',', '.') }}</p>
                </div>
                @endforeach
                <!-- pembiayaan netto end -->
            </div>
            <!-- belanja 2 end -->


        </div>
        <!-- belanja end -->

        <!-- prioritas dana desa -->
        <div class="mt-8">
            <h2 class="text-center text-2xl text-secondary">Prioritas Dana Desa</h2>

            <!-- prioritas dana desa content -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- bantuan langsung -->
                @foreach ($budgetData['prioritas'] as $index => $budget)
                <div class="bg-slate-50 my-5 rounded-xl mx-auto {{ $budget->is_total ? 'sm:col-span-3 sm:w-4/5' : 'sm:w-full' }}">
                    <p class="{{ $budget->is_total ? 'bg-[#F07167]' : 'bg-secondary' }} text-white p-1 rounded-t-lg w-auto">{{$budget->name}}</p>
                    <p class="text-center text-2xl">Rp. {{ number_format($budget->amount, 0, ',', '.') }}</p>
                </div>
                @endforeach
            </div>
            <!-- prioritas dana desa content end -->
        </div>
        <!-- prioritas desa end -->

        <!-- rencana kegiatan pembangunan -->
        <div class="my-8">
            <h2 class="text-center text-2xl text-secondary">Rencana Kegiatan Pembangunan <br> Infrastruktur</h2>
            <!-- rencana kegiatan content -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach ($budgetData['pembangunan'] as $index => $budget)
                <div class="bg-slate-50 my-5 rounded-xl mx-auto {{ $budget->is_total ? 'sm:col-span-3 sm:w-4/5' : 'sm:w-full' }}">
                    <p class="{{ $budget->is_total ? 'bg-[#F07167]' : 'bg-secondary' }} text-white p-1 rounded-t-lg w-auto">{{$budget->name}}</p>
                    <p class="text-center text-2xl">Rp. {{ number_format($budget->amount, 0, ',', '.') }}</p>
                </div>
                @endforeach
                <!-- cadangan boss end -->
            </div>
            <!-- rencana kegiatan content end -->
        </div>
    </section>
</main>
@include("layouts.footer")