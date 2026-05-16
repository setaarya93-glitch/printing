<section class="py-20 md:py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 md:mb-16 gap-6 md:gap-8">
            <div class="max-w-xl text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                    Sampel <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Produk</span>
                </h2>
                <p class="text-gray-500 font-medium text-sm md:text-base">
                    Hasil nyata untuk klien nyata. Lihat kualitas pekerjaan kami di berbagai bahan dan format.
                </p>
            </div>
            <div class="flex justify-center md:justify-end">
                <a href="#" class="inline-flex items-center space-x-2 font-black uppercase tracking-widest text-xs md:text-sm text-fast-dark hover:text-primary transition-colors group">
                    <span>Lihat Semua Karya</span>
                    <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white flex items-center justify-center border border-gray-100 group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7"/></svg>
                    </div>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
            @php
                $samples = [
                    ['img' => 'https://images.unsplash.com/photo-1589330273594-fade1ee91647?q=80&w=800&auto=format&fit=crop', 'category' => 'Branding', 'title' => 'Kartu Nama Minimalis'],
                    ['img' => 'https://images.unsplash.com/photo-1595079676339-1534801ad6cf?q=80&w=800&auto=format&fit=crop', 'category' => 'Packaging', 'title' => 'Desain Box Ramah Lingkungan'],
                    ['img' => 'https://images.unsplash.com/photo-1586075010633-2470acfd8e8b?q=80&w=800&auto=format&fit=crop', 'category' => 'Prints', 'title' => 'Poster Event High-Gloss'],
                    ['img' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bde3?q=80&w=800&auto=format&fit=crop', 'category' => 'Marketing', 'title' => 'Kit Branding Perusahaan'],
                    ['img' => 'https://images.unsplash.com/photo-1517816743773-6e0fd518b4a6?q=80&w=800&auto=format&fit=crop', 'category' => 'Merchandise', 'title' => 'Pakaian Cetak Custom'],
                    ['img' => 'https://images.unsplash.com/photo-1526289037004-212f5f1a5ee9?q=80&w=800&auto=format&fit=crop', 'category' => 'Stickers', 'title' => 'Label Vinyl Vibrant'],
                ];
            @endphp

            @foreach($samples as $sample)
                <div class="group relative overflow-hidden rounded-[24px] md:rounded-[32px] aspect-square shadow-sm">
                    <img src="{{ $sample['img'] }}" alt="{{ $sample['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-linear-to-t from-fast-dark/80 via-transparent to-transparent opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-4 md:p-8">
                        <p class="text-[8px] md:text-xs font-black uppercase tracking-[0.2em] text-primary mb-1 md:border-b md:border-primary/30 md:pb-1 md:w-fit">{{ $sample['category'] }}</p>
                        <h4 class="text-sm md:text-xl font-bold text-white uppercase tracking-tight leading-tight">{{ $sample['title'] }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
