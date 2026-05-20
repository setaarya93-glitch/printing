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
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.50 (1).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.50 (2).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.50 (3).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.50.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.51.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.52.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.53.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.54 (1).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.54 (2).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.54.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.55 (1).jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.55.jpeg'),
                        asset('TESTI/WhatsApp Image 2026-05-20 at 20.21.56.jpeg'),
                    ];
                @endphp

                @foreach($testimonials as $testi)
                    <div class="flex-none w-[75%] md:w-[350px] snap-center">
                        <div class="relative h-[450px] md:h-[550px] rounded-[24px] md:rounded-[32px] overflow-hidden group/card shadow-xl bg-gray-50 border border-gray-100 flex items-center justify-center">
                            <img src="{{ $testi }}" alt="Testimoni Fastprinting Creative" class="w-full h-full object-contain p-2 transition-transform duration-700 group-hover/card:scale-105">
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
        const scrollAmount = 374; // Width of card (350) + gap (24)
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
