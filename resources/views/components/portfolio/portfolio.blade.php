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

    .swiper-button-prev::after,
    .swiper-button-next::after {
        content: none !important;
    }

    /* Method 2: Hide the pseudo-element completely */
    .swiper-button-prev:after,
    .swiper-button-next:after {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        width: 0 !important;
        height: 0 !important;
        font-size: 0 !important;
    }

    /* Method 3: Zero out the content */
    .swiper-button-prev:after {
        content: '' !important;
        font-size: 0 !important;
    }

    .swiper-button-next:after {
        content: '' !important;
        font-size: 0 !important;
    }

    /* Style your custom icons */
    .custom-prev i,
    .custom-next i {
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custom-prev:hover i {
        transform: scale(1.1);
    }

    .custom-next:hover i {
        transform: scale(1.1);
    }

    /* Pagination dots */
    .swiper-pagination-bullet {
        width: 20px !important;
        height: 20px !important;
        background: rgba(255, 255, 255, 0.3) !important;
        background: linear-gradient(to right, #2c3255, #423047) !important;

        opacity: 1 !important;
    }

    .swiper-pagination-bullet-active {
        background: #ffd25d !important;
        padding: 3px;
        border-color: #423047;
        transform: scale(1.5);

    }

    /* Responsive adjustments */
    @media (max-width: 1280px) {
        .swiper-slide[data-active="true"] {
            width: 400px !important;
        }

        .swiper-slide:hover:not([data-active="true"]) {
            width: 400px !important;
        }
    }

    @media (max-width: 1024px) {
        .swiper-slide[data-active="true"] {
            width: 350px !important;
        }

        .swiper-slide:hover:not([data-active="true"]) {
            width: 350px !important;
        }
    }

    @media (max-width: 640px) {

        .swiper-slide,
        .swiper-slide[data-active="true"],
        .swiper-slide:hover:not([data-active="true"]) {
            width: 300px !important;
            height: 400px !important;
        }
    }
</style>




<div class="min-h-[800px] py-12">

    <!-- Header Section -->
    <div class="relative w-full text-center flex flex-col items-center justify-center px-4 md:px-0 mb-12">
        <p class="text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center justify-center gap-2">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
            Portfolio
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>

        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mt-6">
            Explore Our Creative
            <span class="font-medium mt-2 text-[#F2C65A] font-marcellus block">
                Journey <br class="hidden md:block" />
                Crafting Success Through
            </span>
        </h2>
    </div>

    <!-- Swiper Container - Show 4 cards at a time -->
    <div class="swiper-container mt-10 max-w-[1400px] mx-auto px-4 relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
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



                <!-- Card 5 -->
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


                <!-- Card 5 -->
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



                <!-- Card 5 -->
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


                <!-- Card 5 -->
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
            <div class="mt-10 flex items-center justify-between w-full px-16">
                <!-- Pagination on the left -->
                <div class="swiper-pagination !relative !mt-0 !w-auto !left-0"></div>

                <!-- Controls Container - Full width below cards -->
                <div class="mt-10 flex items-center justify-between w-full">
                    <!-- Pagination on the left -->
                    <div class="swiper-pagination !relative !mt-0 !w-auto !left-0"></div>

                    <!-- Navigation buttons on the right -->
                    <div class="flex items-center gap-4">
                        <div class="custom-prev prev-btn !text-[#437bcd] border-[#437bcd]  border !w-12 !h-12 rounded-xl 
            !flex !items-center !justify-center !static !mt-0 !translate-y-0 !left-auto !right-auto">
                            <i class="ri-arrow-left-up-line text-xl"></i>
                        </div>

                        <div class="custom-next !text-[#437bcd] border-[#437bcd]  border !w-12 !h-12 rounded-xl 
            !flex !items-center !justify-center !static !mt-0 !translate-y-0 !left-auto !right-auto">
                            <i class="ri-arrow-right-up-line text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Pagination dots -->
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper
            const swiper = new Swiper('.mySwiper', {
                // Show 4 cards at once
                slidesPerView: 4,
                spaceBetween: 20,
                centeredSlides: false,
                loop: false,

                // Navigation
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },

                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },

                // Breakpoints for responsiveness
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                },

                // Initial slide - make 4th card active (index 3)
                initialSlide: 3,

                // Update on slide change
                on: {
                    init: function () {
                        updateActiveCard(this.activeIndex);
                    },
                    slideChange: function () {
                        updateActiveCard(this.activeIndex);
                    },
                }
            });



            // Function to update active card state
            function updateActiveCard(activeIndex) {
                const slides = document.querySelectorAll('.swiper-slide');

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

            // Initialize the 4th card as active
            updateActiveCard(3);
        });



    </script>