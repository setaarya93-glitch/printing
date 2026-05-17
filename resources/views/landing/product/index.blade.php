<section class="py-20 md:py-24 bg-light-gray" id="product" x-data="{ showAll: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Your <span class="gradient-text italic pr-4"
                    style="transform: skewX(-10deg); display: inline-block;">Printing Solution</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base mb-10">
                Fast process, trusted, service excellent & affordable price
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            @php
                $products = [
                    ['title' => 'Ganci UV', 'file' => 'GANCI UV.jpeg'],
                    ['title' => 'Sticker Die Cut', 'file' => 'STICKER DIE CUT.jpeg'],
                    ['title' => 'Print A3', 'file' => 'PRINT A3.jpeg'],
                    ['title' => 'Buku Custom', 'file' => 'BUKU CUSTOM.jpeg'],
                    ['title' => 'Plakat UV Print', 'file' => 'PLAKAT UV PRINT.jpeg'],
                    ['title' => 'Stande Akrilik UV', 'file' => 'STANDE AKRILIK UV.jpeg'],
                    ['title' => 'Charm Akrilik', 'file' => 'CHARM AKRILIK.jpeg'],
                    ['title' => 'Card Holder Akrilik UV', 'file' => 'CARD HOLDER AKRILIK UV.jpeg'],
                    ['title' => 'Poster', 'file' => 'POSTER.jpeg'],
                    ['title' => 'Flyer', 'file' => 'FLYER.jpeg'],
                    ['title' => 'Banner', 'file' => 'BANNER 2.jpeg'],
                    ['title' => 'Kalender', 'file' => 'KALENDER.jpeg'],
                    ['title' => 'Mug', 'file' => 'MUG.jpeg'],
                    ['title' => 'Lanyard', 'file' => 'LANYARD.jpeg'],
                    ['title' => 'PVC ID Card', 'file' => 'PVC ID CARD.jpeg'],
                    ['title' => 'Pin Button', 'file' => 'PIN BUTTON.jpeg'],
                    ['title' => 'Pin Akrilik UV', 'file' => 'PIN AKRILIK UV.jpeg'],
                    ['title' => 'Pop Socket Akrilik UV Print', 'file' => 'POP SOCKET AKRILIK UV PRINT.jpeg'],
                    ['title' => 'Tuding Ngaji', 'file' => 'TUDING NGAJI.jpeg'],
                    ['title' => 'Hang Tag', 'file' => 'HANG TAG.jpeg'],
                    ['title' => 'Stande Block UV', 'file' => 'STANDE BLOCK UV.jpeg'],
                    ['title' => 'Photocard', 'file' => 'PHOTOCARD.jpeg'],
                    ['title' => 'Handfan', 'file' => 'HANDFAN.jpeg'],
                    ['title' => 'Kartu Nama', 'file' => 'KARTU NAMA.jpeg'],
                    ['title' => 'Nota NCR', 'file' => 'NOTA NCR.jpeg'],
                    ['title' => 'Phonestrip', 'file' => 'PHONESTRIP.jpeg'],
                    ['title' => 'Voucher Perforasi', 'file' => 'VOUCHER PERFORASI.jpeg'],
                    ['title' => 'Notebook', 'file' => 'NOTEBOOK.jpeg'],
                    ['title' => 'Mini Plakat UV', 'file' => 'MINI PLAKAT UV.jpeg'],
                ];
            @endphp

            @foreach($products as $index => $product)
                <div x-show="showAll || {{ $index }} < 8" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    class="group bg-white rounded-[20px] md:rounded-[32px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col border border-gray-100">
                    <div class="relative h-32 md:h-48 overflow-hidden">
                        <img src="{{ asset('FOTO PRODUCT/' . $product['file']) }}" alt="{{ $product['title'] }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <div class="p-3 md:p-6 flex-grow flex flex-col">
                        <h3
                            class="text-[10px] md:text-base font-black text-fast-dark uppercase tracking-tight mb-1 md:mb-2 leading-tight line-clamp-1">
                            {{ $product['title'] }}
                        </h3>
                        <div class="mt-auto">
                            <a href="https://wa.me/6285150769003?text=Halo%20Fastprinting%20Creative,%20saya%20mau%20pesan%20{{ urlencode($product['title']) }}"
                                target="_blank"
                                class="inline-flex items-center justify-center w-full bg-fast-dark hover:bg-primary text-white rounded-lg md:rounded-xl py-1.5 md:py-3 text-[7px] md:text-[10px] font-black uppercase tracking-widest transition-all group/btn">
                                <span>Pesan</span>
                                <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Show More Button --}}
        <div class="mt-12 text-center">
            <button @click="showAll = !showAll"
                class="inline-flex items-center space-x-2 bg-white text-fast-dark px-10 py-4 rounded-full font-black uppercase tracking-widest border-2 border-gray-100 hover:border-primary hover:text-primary transition-all duration-300 shadow-sm italic"
                style="transform: skewX(-10deg)">
                <span x-text="showAll ? 'Sembunyikan Produk' : 'Lihat Semua Produk'"></span>
                <svg :class="showAll ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>
</section>