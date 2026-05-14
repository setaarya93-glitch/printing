<section class="py-20 md:py-24 bg-gray-50" id="product">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Produk <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Premium</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base">
                Kualitas cetak terbaik dengan harga transparan dan pengerjaan kilat.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            @php
                $products = [
                    [
                        'title' => 'Kartu Nama Executive',
                        'price' => 'Rp 45.000',
                        'unit' => '/box',
                        'detail' => 'Bahan Art Carton 260gr, laminasi doff/glossy, cetak 2 sisi.',
                        'img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Stiker Vinyl Die-Cut',
                        'price' => 'Rp 25.000',
                        'unit' => '/lembar A3',
                        'detail' => 'Tahan air, warna tajam, potong pola custom sesuai desain.',
                        'img' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bde3?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Banner / Spanduk',
                        'price' => 'Rp 35.000',
                        'unit' => '/meter',
                        'detail' => 'Bahan Flexi China/Korea, warna awet luar ruangan.',
                        'img' => 'https://images.unsplash.com/photo-1586075010633-2470acfd8e8b?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'T-Shirt Custom DTF',
                        'price' => 'Rp 85.000',
                        'unit' => '/pcs',
                        'detail' => 'Cotton Combed 30s, sablon DTF kualitas tinggi, awet.',
                        'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Box Kemasan Brand',
                        'price' => 'Rp 5.500',
                        'unit' => '/pcs (min. 100)',
                        'detail' => 'Bahan Corrugated/Ivory, cetak full color custom size.',
                        'img' => 'https://images.unsplash.com/photo-1595079676339-1534801ad6cf?q=80&w=800&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Flyer & Brosur',
                        'price' => 'Rp 150.000',
                        'unit' => '/rim',
                        'detail' => 'Art Paper 120gr/150gr, cetak offset kualitas tinggi.',
                        'img' => 'https://images.unsplash.com/photo-1562654508-4c389886a11a?q=80&w=800&auto=format&fit=crop'
                    ],
                ];
            @endphp

            @foreach($products as $product)
                <div class="group bg-white rounded-[40px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-gray-100">
                    {{-- Product Image --}}
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-6 right-6">
                            <span class="bg-fast-blue text-white text-xs font-black px-4 py-2 rounded-full shadow-lg italic uppercase tracking-widest" style="transform: skewX(-10deg)">
                                {{ $product['price'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Product Info --}}
                    <div class="p-8 md:p-10 flex-grow flex flex-col">
                        <h3 class="text-xl md:text-2xl font-black text-fast-dark uppercase tracking-tight mb-3 leading-tight">
                            {{ $product['title'] }}
                        </h3>
                        <p class="text-gray-400 text-[10px] md:text-xs font-bold uppercase tracking-[0.2em] mb-4">
                            Mulai dari <span class="text-fast-blue">{{ $product['price'] }}</span> {{ $product['unit'] }}
                        </p>
                        <p class="text-gray-500 text-sm md:text-base font-medium mb-8 leading-relaxed line-clamp-3">
                            {{ $product['detail'] }}
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="inline-flex items-center justify-center w-full btn-primary py-4 text-sm font-black uppercase tracking-widest group/btn">
                                <span>Pesan Sekarang</span>
                                <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
