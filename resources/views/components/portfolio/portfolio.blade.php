<style>
    /* Custom styles for the portfolio slider */
    .swiper-slide {
        transition: width 0.5s ease-in-out !important;
    }

    .swiper-slide[data-active="true"] {
        z-index: 10 !important;
    }

    /* Ensure proper spacing */
    .swiper-wrapper {
        align-items: center;
        padding: 20px 0;
    }

    /* Hide Swiper default navigation icons */
    .swiper-button-prev::after,
    .swiper-button-next::after {
        content: none !important;
    }

    /* Custom pagination dots - limit to 3 bullets */
    .swiper-pagination {
        display: flex !important;
        justify-content: flex-start !important;
        gap: 12px !important;
    }

    .swiper-pagination-bullet {
        width: 20px !important;
        height: 20px !important;
        background: linear-gradient(to right, #2c3255, #423047) !important;
        opacity: 1 !important;
        margin: 0 4px !important;
        cursor: pointer;
        transition: all 0.3s ease !important;
    }

    .swiper-pagination-bullet:hover {
        transform: scale(1.2);
    }

    .swiper-pagination-bullet-active {
        background: #ffd25d !important;
        transform: scale(1.5) !important;
        box-shadow: 0 0 10px rgba(255, 210, 93, 0.5);
    }

    /* Custom navigation buttons */
    .custom-prev:hover,
    .custom-next:hover {
        background-color: #437bcd !important;
        color: white !important;
    }

    /* Responsive adjustments */
    @media (max-width: 1280px) {
        .swiper-slide[data-active="true"] {
            width: 400px !important;
        }

        .swiper-slide:hover:not([data-active="true"]) {
            width: 400px !important;
        }

        .swiper-pagination-bullet {
            width: 16px !important;
            height: 16px !important;
        }
    }

    @media (max-width: 1024px) {
        .swiper-slide[data-active="true"] {
            width: 350px !important;
        }

        .swiper-slide:hover:not([data-active="true"]) {
            width: 350px !important;
        }

        .swiper-pagination-bullet {
            width: 14px !important;
            height: 14px !important;
        }
    }

    @media (max-width: 768px) {
        .swiper-pagination {
            gap: 8px !important;
        }

        .swiper-pagination-bullet {
            width: 12px !important;
            height: 12px !important;
        }

        .swiper-pagination-bullet-active {
            transform: scale(1.3) !important;
        }
    }

    @media (max-width: 640px) {

        .swiper-slide,
        .swiper-slide[data-active="true"],
        .swiper-slide:hover:not([data-active="true"]) {
            width: 300px !important;
            height: 400px !important;
        }

        .swiper-pagination-bullet {
            width: 10px !important;
            height: 10px !important;
        }

        .custom-prev,
        .custom-next {
            width: 40px !important;
            height: 40px !important;
        }
    }

    @media (max-width: 480px) {

        .swiper-slide,
        .swiper-slide[data-active="true"],
        .swiper-slide:hover:not([data-active="true"]) {
            width: 280px !important;
            height: 380px !important;
        }

        .swiper-pagination {
            gap: 6px !important;
        }

        .swiper-pagination-bullet {
            width: 8px !important;
            height: 8px !important;
        }

        .swiper-pagination-bullet-active {
            transform: scale(1.2) !important;
        }
    }
</style>

<section class="min-h-[800px] py-12 relative overflow-hidden ">

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
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100
                bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
        </div>

        {{-- background images --}}
        <img src="images/shapes/portfolio-two-shape-1.png" alt=""
            class="absolute z-1 sca pointer-events-none float-vertical opacity-10 ">
    </div>

    <div class="absolute inset-0 flex items-center justify-end pointer-events-none">

        <!-- GLOW BACKGROUND -->
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100
                bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))] z-[2]">
        </div>


    </div>





    <!-- Swiper Container - Show 4 cards at a time -->
    <div class="swiper-container mt-10 max-w-[1400px] mx-auto px-4 relative z-30">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper z-20">
                <!-- Card 1 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl  
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-1.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <!-- Vertical text -->
                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Transforming Ideas Into Digital Excellence
                    </div>

                    <!-- Expanded content -->
                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
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
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-2.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Digital Marketing Solutions
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Digital Marketing Excellence
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Comprehensive digital marketing strategies
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-3.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Web Development Projects
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Modern Web Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Responsive and modern web solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - This will be active by default -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out !w-[500px]" data-active="true">

                    <img src="images/project/portfolio-2-4.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         opacity-90 transition-all duration-500"></div>

                    <!-- Hidden vertical text since card is expanded -->
                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         hidden">
                        UI/UX Design Projects
                    </div>

                    <!-- Expanded content - visible by default for 4th card -->
                    <div class="absolute bottom-8 left-8 w-[80%] opacity-100 
                         transition-all duration-500 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                UI/UX Design Excellence
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                User-centered design solutions for better engagement
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-3.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-1.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Card 7 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-2.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-3.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-4.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Card 10 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-4.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 11 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-4.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 12 -->
                <div class="group swiper-slide relative h-[500px] overflow-hidden rounded-3xl 
                    transition-all duration-500 ease-in-out w-[200px] hover:!w-[500px]" data-active="false">

                    <img src="images/project/portfolio-2-4.jpg" class="absolute inset-0 h-full w-full object-cover transition-all duration-500
                         group-hover:opacity-40">

                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black 
                         group-hover:opacity-90 transition-all duration-500"></div>

                    <div class="absolute left-4 bottom-10 translate-y-1/2 
                         text-white text-xl font-semibold -rotate-90 origin-left whitespace-nowrap 
                         group-hover:hidden">
                        Mobile App Development
                    </div>

                    <div class="absolute bottom-8 left-8 w-[80%] opacity-0 
                         transition-all duration-500 group-hover:opacity-100 flex gap-4 items-center">
                        <button class="h-12 w-12 p-3 rounded-full bg-[#4786f6] flex justify-center items-center 
                            hover:scale-110 transition-transform" aria-label="View project">
                            ➜
                        </button>
                        <div>
                            <h2 class="text-white text-2xl lg:text-3xl font-bold mb-2 leading-tight">
                                Mobile Application Development
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                Cross-platform mobile solutions
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Controls Container - Full width below cards -->
            <div class="mt-10 flex items-center justify-between w-full px-4">
                <!-- Swiper Pagination Dots (left side) -->
                <div class="swiper-pagination !relative !mt-0 !w-auto !left-0"></div>

                <!-- Navigation buttons on the right -->
                <div class="flex items-center gap-4">
                    <div
                        class="custom-prev prev-btn !text-[#437bcd] border-[#437bcd] border !w-12 !h-12 rounded-xl 
                    !flex !items-center !justify-center !static !mt-0 cursor-pointer hover:bg-[#437bcd] hover:!text-white transition-all">
                        <i class="ri-arrow-left-up-line text-xl"></i>
                    </div>

                    <div
                        class="custom-next !text-[#437bcd] border-[#437bcd] border !w-12 !h-12 rounded-xl 
                    !flex !items-center !justify-center !static !mt-0 cursor-pointer hover:bg-[#437bcd] hover:!text-white transition-all">
                        <i class="ri-arrow-right-up-line text-xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Swiper with group sliding
        const swiper = new Swiper('.mySwiper', {
            // Show 4 cards at once
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: false,
            loop: false,

            // Group slides by 4 (12 total cards / 4 per group = 3 groups)
            slidesPerGroup: 4,

            // Navigation
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },

            // Enable Swiper's pagination dots
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 3, // Show only 3 main bullets for 3 groups
            },

            // Breakpoints for responsiveness
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 20,
                },
            },

            // Initial slide
            initialSlide: 0,

            // Update on slide change
            on: {
                init: function () {
                    updateActiveCard(this.activeIndex);
                    limitPaginationBullets();
                },
                slideChange: function () {
                    updateActiveCard(this.activeIndex);
                },
                slideChangeTransitionEnd: function () {
                    updateActiveCard(this.activeIndex);
                },
                resize: function () {
                    limitPaginationBullets();
                }
            }
        });

        // Function to limit pagination bullets to 3 (for 3 groups of 4 cards)
        function limitPaginationBullets() {
            // Get all pagination bullets
            const bullets = document.querySelectorAll('.swiper-pagination-bullet');

            // We want only 3 bullets for 12 cards (3 groups of 4)
            // Swiper's dynamicBullets should handle this, but we'll ensure it
            if (bullets.length > 3) {
                // Hide extra bullets
                bullets.forEach((bullet, index) => {
                    if (index >= 3) {
                        bullet.style.display = 'none';
                    } else {
                        bullet.style.display = 'block';
                    }
                });
            }
        }

        // Function to update active card state
        function updateActiveCard(activeIndex) {
            const slides = document.querySelectorAll('.swiper-slide');

            // First, reset all cards to inactive state
            slides.forEach((slide, index) => {
                const isActive = index === activeIndex;
                slide.setAttribute('data-active', isActive);

                if (isActive) {
                    // Make this card expanded
                    slide.style.width = '500px';
                    // Show expanded content
                    const expandedContent = slide.querySelector('.absolute.bottom-8');
                    if (expandedContent) {
                        expandedContent.classList.remove('opacity-0');
                        expandedContent.classList.add('opacity-100');
                    }
                    // Hide vertical text
                    const verticalText = slide.querySelector('.-rotate-90');
                    if (verticalText) {
                        verticalText.classList.add('hidden');
                    }
                } else {
                    // Reset other cards to collapsed state
                    slide.style.width = '200px';
                    // Hide expanded content
                    const expandedContent = slide.querySelector('.absolute.bottom-8');
                    if (expandedContent && !slide.classList.contains('group-hover')) {
                        expandedContent.classList.remove('opacity-100');
                        expandedContent.classList.add('opacity-0');
                    }
                    // Show vertical text
                    const verticalText = slide.querySelector('.-rotate-90');
                    if (verticalText) {
                        verticalText.classList.remove('hidden');
                    }
                }
            });
        }

        // Handle hover interactions
        const slides = document.querySelectorAll('.swiper-slide');

        slides.forEach(slide => {
            // On hover
            slide.addEventListener('mouseenter', function (e) {
                // Only expand if not already active
                if (this.getAttribute('data-active') === 'false') {
                    this.style.width = '500px';

                    // Show expanded content
                    const expandedContent = this.querySelector('.absolute.bottom-8');
                    if (expandedContent) {
                        expandedContent.classList.remove('opacity-0');
                        expandedContent.classList.add('opacity-100');
                    }

                    // Hide vertical text
                    const verticalText = this.querySelector('.-rotate-90');
                    if (verticalText) {
                        verticalText.classList.add('hidden');
                    }

                    // Force Swiper to update layout
                    swiper.update();
                }
            });

            // On mouse leave
            slide.addEventListener('mouseleave', function (e) {
                // Only collapse if not the active slide
                if (this.getAttribute('data-active') === 'false') {
                    this.style.width = '200px';

                    // Hide expanded content
                    const expandedContent = this.querySelector('.absolute.bottom-8');
                    if (expandedContent) {
                        expandedContent.classList.remove('opacity-100');
                        expandedContent.classList.add('opacity-0');
                    }

                    // Show vertical text
                    const verticalText = this.querySelector('.-rotate-90');
                    if (verticalText) {
                        verticalText.classList.remove('hidden');
                    }

                    // Force Swiper to update layout
                    swiper.update();
                }
            });

            // On click - make this card active and center it
            slide.addEventListener('click', function (e) {
                // Don't trigger if clicking on the arrow button
                if (e.target.closest('button')) return;

                const slideIndex = Array.from(slides).indexOf(this);
                swiper.slideTo(slideIndex);
            });
        });

        // Initialize
        updateActiveCard(0);

        // Limit bullets initially
        limitPaginationBullets();
    });
</script>