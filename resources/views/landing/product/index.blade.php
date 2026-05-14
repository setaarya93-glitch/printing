<section class="py-20 md:py-24 bg-gray-50" id="product" x-data="{ activeCategory: 'all', showAll: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Layanan <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Cetak Lengkap</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base mb-10">
                Solusi digital printing terlengkap untuk segala kebutuhan bisnis dan personal Anda.
            </p>

            {{-- Filter Buttons (Single Horizontal Row) --}}
            <div class="relative mb-12">
                <div class="flex overflow-x-auto hide-scrollbar gap-2 md:gap-4 pb-4 md:justify-center px-4 -mx-4 md:mx-0">
                    @php
                        $categories = [
                            ['id' => 'all', 'label' => 'Semua'],
                            ['id' => 'marketing', 'label' => 'Pemasaran & Promosi'],
                            ['id' => 'packaging', 'label' => 'Pembungkusan & Label'],
                            ['id' => 'stationery', 'label' => 'Dokumen & Kantor'],
                            ['id' => 'merchandise', 'label' => 'Merchandise & Hadiah'],
                            ['id' => 'large_format', 'label' => 'Cetakan Besar'],
                        ];
                    @endphp

                    @foreach($categories as $cat)
                        <button 
                            @click="activeCategory = '{{ $cat['id'] }}'; showAll = false"
                            :class="activeCategory === '{{ $cat['id'] }}' ? 'bg-fast-blue text-white shadow-lg shadow-fast-blue/30 border-fast-blue' : 'bg-white text-gray-500 border-gray-100 hover:border-fast-blue/30'"
                            class="flex-none px-5 py-2.5 md:px-8 md:py-3 rounded-full text-[10px] md:text-xs font-black uppercase tracking-widest border-2 transition-all duration-300 italic"
                            style="transform: skewX(-10deg)"
                        >
                            {{ $cat['label'] }}
                        </button>
                    @endforeach
                </div>
                {{-- Fade effect for scroll --}}
                <div class="md:hidden absolute right-0 top-0 bottom-4 w-12 bg-linear-to-l from-gray-50 to-transparent pointer-events-none"></div>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            @php
                $products = [
                    // Pemasaran & Promosi
                    ['cat' => 'marketing', 'title' => 'X-Banner / Roll-up', 'price' => 'Rp 85rb', 'img' => 'https://images.unsplash.com/photo-1586075010633-2470acfd8e8b?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'marketing', 'title' => 'Flyer / Brosur', 'price' => 'Rp 150rb', 'img' => 'https://images.unsplash.com/photo-1562654508-4c389886a11a?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'marketing', 'title' => 'Business Card', 'price' => 'Rp 45rb', 'img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'marketing', 'title' => 'Katalog / Booklet', 'price' => 'Rp 25rb', 'img' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=400&auto=format&fit=crop'],
                    
                    // Pembungkusan & Label
                    ['cat' => 'packaging', 'title' => 'Sticker Produk', 'price' => 'Rp 25rb', 'img' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bde3?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'packaging', 'title' => 'Kotak Custom', 'price' => 'Rp 5.5rb', 'img' => 'https://images.unsplash.com/photo-1595079676339-1534801ad6cf?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'packaging', 'title' => 'Paper Bag', 'price' => 'Rp 3.5rb', 'img' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'packaging', 'title' => 'Hang Tag', 'price' => 'Rp 15rb', 'img' => 'https://images.unsplash.com/photo-1606206591513-adbfdd0a9693?q=80&w=400&auto=format&fit=crop'],

                    // Dokumen & Kantor
                    ['cat' => 'stationery', 'title' => 'Notebook / Jurnal', 'price' => 'Rp 35rb', 'img' => 'https://images.unsplash.com/photo-1531346878377-a5be20888e57?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'stationery', 'title' => 'PVC ID Card', 'price' => 'Rp 15rb', 'img' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'stationery', 'title' => 'Buku Resit / NCR', 'price' => 'Rp 20rb', 'img' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'stationery', 'title' => 'Sijil / Certificate', 'price' => 'Rp 10rb', 'img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=400&auto=format&fit=crop'],

                    // Merchandise & Hadiah
                    ['cat' => 'merchandise', 'title' => 'T-Shirt Custom', 'price' => 'Rp 85rb', 'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'merchandise', 'title' => 'Mug Seramik', 'price' => 'Rp 35rb', 'img' => 'https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'merchandise', 'title' => 'Tote Bag', 'price' => 'Rp 45rb', 'img' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'merchandise', 'title' => 'Keychain Acrylic', 'price' => 'Rp 12rb', 'img' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=400&auto=format&fit=crop'],

                    // Cetakan Besar
                    ['cat' => 'large_format', 'title' => 'Signage Kedai', 'price' => 'Rp 500rb', 'img' => 'https://images.unsplash.com/photo-1563906267088-b029e7101114?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'large_format', 'title' => 'Canvas Art', 'price' => 'Rp 120rb', 'img' => 'https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'large_format', 'title' => 'Custom Wallpaper', 'price' => 'Rp 75rb', 'img' => 'https://images.unsplash.com/photo-1615529328331-f8917597711f?q=80&w=400&auto=format&fit=crop'],
                    ['cat' => 'large_format', 'title' => 'Standee Acrylic', 'price' => 'Rp 150rb', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop'],
                ];
            @endphp

            @foreach($products as $index => $product)
                <div 
                    x-show="(activeCategory === 'all' || activeCategory === '{{ $product['cat'] }}') && (showAll || {{ $index }} < 8)"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="group bg-white rounded-[20px] md:rounded-[32px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col border border-gray-100"
                >
                    <div class="relative h-32 md:h-48 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-2 right-2 md:top-4 md:right-4">
                            <span class="bg-fast-blue text-white text-[7px] md:text-xs font-black px-2 md:px-3 py-1 rounded-full shadow-lg italic uppercase tracking-widest" style="transform: skewX(-10deg)">
                                {{ $product['price'] }}
                            </span>
                        </div>
                    </div>

                    <div class="p-3 md:p-6 flex-grow flex flex-col">
                        <h3 class="text-[10px] md:text-base font-black text-fast-dark uppercase tracking-tight mb-1 md:mb-2 leading-tight line-clamp-1">
                            {{ $product['title'] }}
                        </h3>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center justify-center w-full bg-fast-dark hover:bg-fast-blue text-white rounded-lg md:rounded-xl py-1.5 md:py-3 text-[7px] md:text-[10px] font-black uppercase tracking-widest transition-all group/btn">
                                <span>Pesan</span>
                                <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Show More Button --}}
        <div class="mt-12 text-center">
            <button 
                @click="showAll = !showAll"
                class="inline-flex items-center space-x-2 bg-white text-fast-dark px-10 py-4 rounded-full font-black uppercase tracking-widest border-2 border-gray-100 hover:border-fast-blue hover:text-fast-blue transition-all duration-300 shadow-sm italic"
                style="transform: skewX(-10deg)"
            >
                <span x-text="showAll ? 'Sembunyikan Produk' : 'Lihat Semua Produk'"></span>
                <svg :class="showAll ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
        </div>
    </div>
</section>

<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
