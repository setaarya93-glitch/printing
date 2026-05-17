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
                    ['title' => 'Gantungan Kunci Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Sticker Cutting', 'img' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bde3?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Print A3+ Custom', 'img' => 'https://images.unsplash.com/photo-1561070791-26c113006238?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Buku', 'img' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Plakat Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Standee Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Charm Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1597843798165-27a1ee904323?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Photocard Holder Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Poster', 'img' => 'https://images.unsplash.com/photo-1580136579312-94651dfd596d?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Flyer', 'img' => 'https://images.unsplash.com/photo-1562654508-4c389886a11a?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Banner', 'img' => 'https://images.unsplash.com/photo-1586075010633-2470acfd8e8b?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Calender', 'img' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Mug Sublime', 'img' => 'https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Tali Lanyard', 'img' => 'https://images.unsplash.com/photo-1628157582853-a796fa650a6a?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'PVC ID Card', 'img' => 'https://images.unsplash.com/photo-1618005198143-e5283b519a7f?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Pin Button', 'img' => 'https://images.unsplash.com/photo-1551269901-5c5e14c25df7?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Pin Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Pop Socket', 'img' => 'https://images.unsplash.com/photo-1584438784894-089d6a128f3e?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Tuding Ngaji Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1606206591513-adbfdd0a9693?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Hangtag', 'img' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Akrilik Block 1 cm', 'img' => 'https://images.unsplash.com/photo-1618005198143-e5283b519a7f?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Photocard', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Handfan / Kipas Custom', 'img' => 'https://images.unsplash.com/photo-1528642463367-2253501d51a1?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Kartu Nama', 'img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Nota NCR', 'img' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Phonestrap Akrilik UV', 'img' => 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Voucher / Kupon Undian Perforasi', 'img' => 'https://images.unsplash.com/photo-1554080353-a576cf803bda?q=80&w=400&auto=format&fit=crop'],
                    ['title' => 'Tiket Gelang', 'img' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=400&auto=format&fit=crop'],
                ];
            @endphp

            @foreach($products as $index => $product)
                <div x-show="showAll || {{ $index }} < 8" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    class="group bg-white rounded-[20px] md:rounded-[32px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col border border-gray-100">
                    <div class="relative h-32 md:h-48 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}"
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