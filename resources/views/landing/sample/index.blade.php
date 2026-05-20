<section class="py-20 md:py-24 bg-light-gray overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12 md:mb-16 gap-6 md:gap-8">
            <div class="max-w-xl text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                    Produk <span class="gradient-text italic pr-4"
                        style="transform: skewX(-10deg); display: inline-block;">Terlaris</span>
                </h2>
                <p class="text-gray-500 font-medium text-sm md:text-base">
                    Hasil nyata untuk klien nyata. Lihat kualitas pekerjaan kami di berbagai bahan dan format.
                </p>
            </div>
            <div class="flex justify-center md:justify-end">
                <a href="#"
                    class="inline-flex items-center space-x-2 font-black uppercase tracking-widest text-xs md:text-sm text-fast-dark hover:text-primary transition-colors group">
                    <span>Lihat Semua Karya</span>
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white flex items-center justify-center border border-gray-100 group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
            @php
                $samples = [
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.15.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.16 (1).jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.16.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.21.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.24.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.26 (1).jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.26 (2).jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.26.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.27 (1).jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.27 (2).jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.27.jpeg'),
                    asset('TERLARIS/WhatsApp Image 2026-05-20 at 20.22.28.jpeg'),
                ];
            @endphp

            @foreach($samples as $sample)
                <div class="group relative overflow-hidden rounded-[24px] md:rounded-[32px] aspect-square shadow-sm">
                    <img src="{{ $sample }}" alt="Sample Terlaris Fastprinting Creative"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
            @endforeach
        </div>
    </div>
</section>