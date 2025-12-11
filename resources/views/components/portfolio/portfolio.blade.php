<style>
    .slick-dots {
        bottom: 0px;
        rotate: 90deg;
    }

    .slick-dots li button {
        width: 14px;
        height: 14px;
        padding: 0;
        border-radius: 9999px;
        background: linear-gradient(to right, #2c3255, #423047);
        opacity: 1 !important;
        transition: all 0.3s ease !important;
        border: none;
    }

    /* Remove default slick dot icon */
    .slick-dots li button:before {
        content: "" !important;
    }

    /* Hover scale */
    .slick-dots li button:hover {
        transform: scale(1.2);
    }

    /* ACTIVE DOT */
    .slick-dots li.slick-active button {
        background: #ffd25d !important;
        transform: scale(1.25) !important;
        border: 2px solid transparent !important;
        border-radius: 9999px !important;
        border-image: linear-gradient(to right, #2c3255, #423047) 1 !important;
    }

    .responsive .slick-track {
        height: 500px !important;
        display: flex !important;
        gap: 30px;
    }

    .responsive .slick-slide {
        flex: 0 0 200px !important;
        transition: all 0.4s ease;
    }

    .responsive .slick-slide:hover {
        flex: 0 0 500px !important;
    }

    .slick-current {
        flex: 0 0 500px !important;
    }

    .slick-active:nth-child(4) {
        flex: 0 0 200px !important;

    }
</style>

<section class="min-h-[800px] py-12 relative overflow-hidden">

    <!-- Header Section -->
    <div class="relative w-full text-center flex flex-col items-center justify-center px-4 md:px-0 mb-12 z-50">
        <p class="text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center justify-center gap-2">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
            Portfolio
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>

        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mt-6">
            Explore Our Creative
            <span class="font-medium mt-2 text-[#F2C65A] font-marcellus ">
                Journey <br class="hidden md:block" />
                Crafting Success Through
            </span>
        </h2>
    </div>

    <div class="absolute inset-0 flex items-center justify-start pointer-events-none z-[2]">
        <div
            class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px] translate-x-20 rounded-full blur-[100px] opacity-100 bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
        </div>

        {{-- background images --}}
        <img src="images/shapes/portfolio-two-shape-1.png" alt=""
            class="absolute z-1 sca pointer-events-none float-vertical opacity-10">
    </div>

    <div class="absolute inset-0 flex items-center justify-end pointer-events-none">
        <!-- GLOW BACKGROUND -->
        <div
            class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px] translate-x-20 rounded-full blur-[100px] opacity-100 bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))] z-[2]">
        </div>
    </div>

    <div class="mt-10 max-w-[1400px] mx-auto px-4 relative z-30">
        <div class="responsive">
            <!-- Card 1 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-1.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Innovative Solutions, <br />powerful results
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-2.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Transforming Ideas Into <br />Digital Excellence
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-3.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Driving success Through<br />technology
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-4.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Explore How We've Empowered Businesses <br />with Innovative Tech Solutions
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 1 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-1.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Innovative Solutions, <br />powerful results
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-2.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Transforming Ideas Into <br />Digital Excellence
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-3.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Driving success Through<br />technology
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-4.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Explore How We've Empowered Businesses <br />with Innovative Tech Solutions
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>



            <!-- Card 1 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-1.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Innovative Solutions, <br />powerful results
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-2.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Transforming Ideas Into <br />Digital Excellence
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-3.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Driving success Through<br />technology
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="single-portfolio-two__bg group relative h-[500px] overflow-hidden rounded-3xl">
                <img src="images/project/portfolio-2-4.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-500 group-hover:opacity-40">
                <div
                    class="absolute opacity-100 left-10 bottom-10 translate-y-1/2 text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap group-hover:opacity-0 z-10">
                    Explore How We've Empowered Businesses <br />with Innovative Tech Solutions
                </div>
                <div
                    class="absolute bottom-8 left-8 w-[80%] opacity-0 z-10 transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                    <button
                        class="h-12 w-12 p-4 rounded-full bg-[#4786f6] flex justify-center items-center hover:scale-110 transition-transform"
                        aria-label="View project">
                        ➜
                    </button>
                    <div>
                        <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                            Empowering Businesses with Cutting-Edge IT
                        </h2>
                        <p class="text-white/80 text-sm mb-4">
                            Explore How We've Empowered Businesses with Innovative Tech Solutions
                        </p>
                    </div>
                </div>
            </div>



        </div>

        <div class="mt-10 flex items-center justify-between w-full px-4">

            <div class="relative mt-0 w-auto ps-6 ml-10 slick-dots">
                <ul></ul>
            </div>

            <div class="flex items-center gap-4">
                <div
                    class="custom-prev text-[#437bcd] border-[#437bcd] border w-12 h-12 rounded-xl 
                    flex items-center justify-center cursor-pointer hover:bg-[#437bcd] hover:text-white transition-all">
                    <i class="ri-arrow-left-up-line text-xl"></i>
                </div>

                <div
                    class="custom-next text-[#437bcd] border-[#437bcd] border w-12 h-12 rounded-xl 
                    flex items-center justify-center cursor-pointer hover:bg-[#437bcd] hover:text-white transition-all">
                    <i class="ri-arrow-right-up-line text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    $(document).ready(function () {
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 700,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: false,
            autoplaySpeed: 3000,
            prevArrow: $('.custom-prev'),
            nextArrow: $('.custom-next'),
            appendDots: $('.slick-dots'),

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // Function to handle the 4th card being 500px wide
        function updateCardWidths() {
            const slider = $('.responsive');
            const currentSlide = slider.slick('slickCurrentSlide');
            const slides = $('.responsive .slick-slide');

            // Reset all slides to 200px
            slides.css('flex', '0 0 200px');

            // Find the 4th slide in the current view
            const fourthSlideIndex = currentSlide + 3;
            const fourthSlide = $(`.responsive .slick-slide[data-slick-index="${fourthSlideIndex}"]`);

            if (fourthSlide.length) {
                // Set the 4th slide to 500px
                fourthSlide.css('flex', '0 0 500px');
            }
        }

        // Initial update
        updateCardWidths();

        // Update on slide change
        $('.responsive').on('afterChange', function () {
            updateCardWidths();
        });

        $(document).on('mouseenter', '.responsive .slick-slide', function () {
            const slides = $('.responsive .slick-slide');
            slides.css('flex', '0 0 200px');
            $(this).css('flex', '0 0 500px');
        });

        // When mouse leaves, restore the 4th card to 500px
        $(document).on('mouseleave', '.responsive .slick-slide', function () {
            // Only update if we're not hovering over any slide
            if (!$('.responsive .slick-slide:hover').length) {
                updateCardWidths();
            }
        });
    });
</script>