<section class="py-20 md:py-24 bg-gray-50" id="product" x-data="{ activeCategory: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Produk <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Premium</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base mb-10">
                Kualitas cetak terbaik dengan harga transparan dan pengerjaan kilat.
            </p>

            {{-- Filter Buttons --}}
            <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-12">
                @php
                    $categories = [
                        ['id' => 'all', 'label' => 'Semua'],
                        ['id' => 'branding', 'label' => 'Branding'],
                        ['id' => 'marketing', 'label' => 'Marketing'],
                        ['id' => 'apparel', 'label' => 'Apparel'],
                        ['id' => 'packaging', 'label' => 'Packaging'],
                        ['id' => 'stickers', 'label' => 'Stickers'],
                    ];
                @endphp

                @foreach($categories as $cat)
                    <button 
                        @click="activeCategory = '{{ $cat['id'] }}'"
                        :class="activeCategory === '{{ $cat['id'] }}' ? 'bg-fast-blue text-white shadow-lg shadow-fast-blue/30 border-fast-blue' : 'bg-white text-gray-500 border-gray-100 hover:border-fast-blue/30'"
                        class="px-5 py-2.5 md:px-8 md:py-3 rounded-full text-[10px] md:text-xs font-black uppercase tracking-widest border-2 transition-all duration-300 italic"
                        style="transform: skewX(-10deg)"
                    >
                        {{ $cat['label'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">
            @php
                $products = [
                    [
                        'category' => 'branding',
                        'title' => 'Kartu Nama',
                        'price' => 'Rp 45rb',
                        'unit' => '/box',
                        'detail' => 'Art Carton 260gr, cetak 2 sisi.',
                        'img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'category' => 'stickers',
                        'title' => 'Stiker Vinyl',
                        'price' => 'Rp 25rb',
                        'unit' => '/A3',
                        'detail' => 'Tahan air, potong pola custom.',
                        'img' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bde3?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'category' => 'marketing',
                        'title' => 'Banner',
                        'price' => 'Rp 35rb',
                        'unit' => '/meter',
                        'detail' => 'Bahan Flexi, warna awet outdoor.',
                        'img' => 'https://images.unsplash.com/photo-1586075010633-2470acfd8e8b?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'category' => 'apparel',
                        'title' => 'T-Shirt DTF',
                        'price' => 'Rp 85rb',
                        'unit' => '/pcs',
                        'detail' => 'Cotton Combed 30s, sablon DTF.',
                        'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'category' => 'packaging',
                        'title' => 'Box Kemasan',
                        'price' => 'Rp 5.5rb',
                        'unit' => '/pcs',
                        'detail' => 'Corrugated/Ivory, custom size.',
                        'img' => 'https://images.unsplash.com/photo-1595079676339-1534801ad6cf?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'category' => 'marketing',
                        'title' => 'Flyer & Brosur',
                        'price' => 'Rp 150rb',
                        'unit' => '/rim',
                        'detail' => 'Art Paper 120gr, cetak offset.',
                        'img' => 'https://images.unsplash.com/photo-1562654508-4c389886a11a?q=80&w=800&auto=format&fit=crop'
                    ],
                ];
            @endphp

            @foreach($products as $product)
                <div 
                    x-show="activeCategory === 'all' || activeCategory === '{{ $product['category'] }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="group bg-white rounded-[24px] md:rounded-[40px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-gray-100"
                >
                    {{-- Product Image --}}
                    <div class="relative h-40 md:h-64 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-3 right-3 md:top-6 md:right-6">
                            <span class="bg-fast-blue text-white text-[8px] md:text-xs font-black px-2 md:px-4 py-1 md:py-2 rounded-full shadow-lg italic uppercase tracking-widest" style="transform: skewX(-10deg)">
                                {{ $product['price'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Product Info --}}
                    <div class="p-4 md:p-10 flex-grow flex flex-col">
                        <h3 class="text-xs md:text-2xl font-black text-fast-dark uppercase tracking-tight mb-1 md:mb-3 leading-tight line-clamp-1">
                            {{ $product['title'] }}
                        </h3>
                        <p class="text-[6px] md:text-xs font-bold uppercase tracking-[0.2em] mb-2 md:mb-4 text-gray-400">
                            <span class="text-fast-blue">{{ $product['price'] }}</span> {{ $product['unit'] }}
                        </p>
                        <p class="text-gray-500 text-[8px] md:text-base font-medium mb-4 md:mb-8 leading-relaxed line-clamp-2 md:line-clamp-3">
                            {{ $product['detail'] }}
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center justify-center w-full bg-fast-dark hover:bg-fast-blue text-white rounded-xl md:rounded-2xl py-2 md:py-4 text-[8px] md:text-sm font-black uppercase tracking-widest transition-all group/btn">
                                <span class="hidden md:inline">Pesan Sekarang</span>
                                <span class="md:hidden">Pesan</span>
                                <svg class="w-2 h-2 md:w-4 md:h-4 ml-1 md:ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
