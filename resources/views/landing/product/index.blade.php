<section class="py-20 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Produk <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Premium</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base">
                Jelajahi berbagai produk cetak berkualitas tinggi yang dirancang untuk membuat brand Anda menonjol.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
            @php
                $products = [
                    ['title' => 'Kartu Nama', 'desc' => 'Tekstur premium & opsi foil.', 'icon' => '📇'],
                    ['title' => 'Stiker & Label', 'desc' => 'Die-cut, vinyl, & tahan air.', 'icon' => '🏷️'],
                    ['title' => 'Banner & Poster', 'desc' => 'Format besar resolusi tinggi.', 'icon' => '🖼️'],
                    ['title' => 'Pakaian Custom', 'desc' => 'Kaos, hoodie & lainnya.', 'icon' => '👕'],
                    ['title' => 'Box Kemasan', 'desc' => 'Kemasan brand custom.', 'icon' => '📦'],
                    ['title' => 'Kit Pemasaran', 'desc' => 'Flyer, brosur & folder.', 'icon' => '📚'],
                    ['title' => 'Alat Tulis Kreatif', 'desc' => 'Buku catatan & amplop.', 'icon' => '✉️'],
                    ['title' => 'Merchandise', 'desc' => 'Mug, gantungan kunci & tumbler.', 'icon' => '🎁'],
                ];
            @endphp

            @foreach($products as $product)
                <div class="group bg-white p-6 md:p-8 rounded-[24px] md:rounded-[32px] shadow-sm hover:shadow-xl transition-all duration-500 border border-transparent hover:border-fast-blue/20">
                    <div class="text-3xl md:text-4xl mb-4 md:mb-6 group-hover:scale-110 transition-transform duration-300">{{ $product['icon'] }}</div>
                    <h3 class="text-base md:text-xl font-bold text-fast-dark mb-1 md:mb-2 uppercase tracking-tight leading-tight">{{ $product['title'] }}</h3>
                    <p class="text-gray-400 text-[10px] md:text-sm mb-4 md:mb-6 line-clamp-2">{{ $product['desc'] }}</p>
                    <a href="#" class="inline-flex items-center text-[10px] md:text-sm font-black text-fast-blue group-hover:text-fast-green transition-colors uppercase tracking-widest">
                        Lihat Harga
                        <svg class="w-3 h-3 md:w-4 md:h-4 ml-1 md:ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
