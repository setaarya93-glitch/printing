<section class="py-20 md:py-24 bg-white overflow-hidden" id="testimoni">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-fast-dark uppercase tracking-tighter mb-4">
                Apa Kata <span class="gradient-text italic pr-4" style="transform: skewX(-10deg); display: inline-block;">Mereka</span>
            </h2>
            
        </div>

        <div class="relative group">
            {{-- Carousel Container --}}
            <div id="testimonial-carousel" class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar gap-6 pb-12 cursor-grab active:cursor-grabbing">
                @php
                    $testimonials = [
                        '/TESTI/1.jpeg',
                        '/TESTI/2.jpeg',
                        '/TESTI/3.jpeg',
                        '/TESTI/4.jpeg',
                        '/TESTI/5.jpeg',
                        '/TESTI/6.jpeg',
                        '/TESTI/7.jpeg',
                        '/TESTI/8.jpeg',
                        '/TESTI/9.jpeg',
                        '/TESTI/10.jpeg',
                        '/TESTI/11.jpeg',
                        '/TESTI/12.jpeg',
                        '/TESTI/13.jpeg',
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
