<section class="py-20 md:py-24 bg-white overflow-hidden" id="testimoni">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Apa Kata <span class="gradient-text italic pr-4" style="transform: skewX(-10deg); display: inline-block;">Mereka</span>
            </h2>
            <p class="text-gray-500 font-medium max-w-2xl mx-auto text-sm md:text-base">
                Bukti nyata kualitas kami melalui lensa pelanggan.
            </p>
        </div>

        <div class="relative group">
            {{-- Carousel Container --}}
            <div id="testimonial-carousel" class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar gap-6 pb-12 cursor-grab active:cursor-grabbing">
                @php
                    $testimonials = [
                        [
                            'name' => 'Sarah Johnson',
                            'role' => 'Ilustrator Freelance',
                            'text' => 'Warnanya sangat akurat! Sebagai ilustrator, saya sangat pemilih soal cetakan.',
                            'img' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=800&auto=format&fit=crop'
                        ],
                        [
                            'name' => 'Dimas Pratama',
                            'role' => 'Founder Startup',
                            'text' => 'Butuh 500 stiker dalam 24 jam. Mereka kirim dalam 18 jam! Kualitas gila.',
                            'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop'
                        ],
                        [
                            'name' => 'Amanda Putri',
                            'role' => 'Head of Marketing',
                            'text' => 'Solusi efisien dan harga bersaing. Tim kreatif mereka sangat membantu.',
                            'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop'
                        ],
                        [
                            'name' => 'Rizky Ramadhan',
                            'role' => 'Content Creator',
                            'text' => 'Cetak merchandise di sini hasilnya selalu memuaskan. Gen Z banget!',
                            'img' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=800&auto=format&fit=crop'
                        ],
                    ];
                @endphp

                @foreach($testimonials as $testi)
                    <div class="flex-none w-[85%] md:w-[450px] snap-center">
                        <div class="relative h-[500px] md:h-[600px] rounded-[32px] md:rounded-[48px] overflow-hidden group/card shadow-2xl">
                            <img src="{{ $testi['img'] }}" alt="{{ $testi['name'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110">
                            <div class="absolute inset-0 bg-linear-to-t from-fast-dark via-fast-dark/20 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12">
                                <div class="flex text-soft-green mb-4">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                                <p class="text-white text-lg md:text-2xl font-bold italic mb-6 leading-tight uppercase tracking-tight" style="transform: skewX(-5deg)">
                                    "{{ $testi['text'] }}"
                                </p>
                                <div class="flex items-center space-x-4">
                                    <div class="h-px w-8 bg-primary"></div>
                                    <div>
                                        <h4 class="text-white font-black text-sm md:text-lg uppercase tracking-widest">{{ $testi['name'] }}</h4>
                                        <p class="text-primary text-[10px] md:text-xs font-bold uppercase tracking-[0.2em]">{{ $testi['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Navigation Buttons --}}
            <div class="flex justify-center mt-8 space-x-4">
                <button onclick="scrollCarousel(-1)" class="w-12 h-12 md:w-16 md:h-16 rounded-full border-2 border-gray-100 flex items-center justify-center text-fast-dark hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button onclick="scrollCarousel(1)" class="w-12 h-12 md:w-16 md:h-16 rounded-full border-2 border-gray-100 flex items-center justify-center text-fast-dark hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
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

<script>
    function scrollCarousel(direction) {
        const carousel = document.getElementById('testimonial-carousel');
        const scrollAmount = 450; // Width of card + gap
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    // Drag to scroll functionality
    const slider = document.getElementById('testimonial-carousel');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });
</script>
