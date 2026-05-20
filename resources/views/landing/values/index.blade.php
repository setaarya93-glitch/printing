<section class="py-20 md:py-24 bg-dark-blue text-white overflow-hidden relative" id="values">
    {{-- Background Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] md:w-[800px] h-[400px] md:h-[800px] bg-white/5 rounded-full blur-[80px] md:blur-[120px]"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter leading-tight mb-6 text-white">
                Kenapa Harus Pilih <span class="text-white italic pr-4" style="transform: skewX(-10deg); display: inline-block;">FastPrinting</span> Creative?
            </h2>
            <p class="text-white/80 text-base md:text-lg font-medium max-w-2xl mx-auto leading-relaxed">
                Kami menghadirkan standar cetak terbaik dengan mengutamakan kepraktisan, kecepatan, dan kualitas premium bagi Anda.
            </p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @php
                $values = [
                    ['title' => 'Pelayanan Responsif & Profesional', 'desc' => 'Mulai dari konsultasi, desain, pembayaran hingga pengiriman, kami selalu siap membantu dengan komunikasi yang cepat dan jelas.'],
                    ['title' => 'Trusted oleh Ribuan Customer', 'desc' => 'Sejak 2022, dipercaya customer dari Yogyakarta hingga Singapore dengan pelayanan yang transparan dan bertanggung jawab.'],
                    ['title' => 'Quality Control Terjamin', 'desc' => 'Setiap produk melewati proses pengecekan kualitas sebelum dikirim ke customer.'],
                    ['title' => 'Harga Terjangkau & Kompetitif', 'desc' => 'Tersedia harga satuan maupun grosir dengan kualitas terbaik dan harga yang tetap ramah.'],
                    ['title' => 'Proses Cepat & Praktis', 'desc' => 'Bisa ambil langsung ke workshop, instant delivery area Jogja, atau kirim via ekspedisi ke seluruh Indonesia.'],
                ];
            @endphp

            @foreach($values as $value)
                <div class="flex flex-col items-center text-center p-6 md:p-8 rounded-[24px] bg-white/5 border border-white/10 hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="mb-5">
                        <div class="w-12 h-12 rounded-full border-2 border-white/30 flex items-center justify-center group-hover:border-white group-hover:bg-white transition-all duration-300">
                            <svg class="w-5 h-5 text-white group-hover:text-dark-blue transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg md:text-xl font-bold uppercase tracking-tight text-white mb-3">{{ $value['title'] }}</h4>
                        <p class="text-white/70 text-sm md:text-base leading-relaxed">{{ $value['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

