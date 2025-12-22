<style>
    .testimonial-two__single {
        -o-transition: all .5s ease;
        z-index: 1;
        background: linear-gradient(270deg, #1d253f 0%, #242e4b 100%);
        border: 2px solid rgba(255, 255, 255, .1);
        border-radius: 40px;
        margin-left: 30px;
        padding: 0 0 30px 30px;
        transition: all .5s;
        display: block;
        position: relative;
    }

    .testimonial-two__single:before {
        content: "";
        -webkit-mask-composite: xor;
        -o-transition: all .5s ease;
        visibility: hidden;
        opacity: 0;
        z-index: 0;
        background: linear-gradient(90deg, #3d72fc, #5cb0e9) border-box;
        border: 2px solid transparent;
        border-radius: 40px;
        transition: all .5s;
        position: absolute;
        top: -2px;
        bottom: -2px;
        left: -2px;
        right: -2px;
        -webkit-mask-image: linear-gradient(#fff 0, #fff 0), linear-gradient(#fff 0, #fff 0);
        -webkit-mask-position: 0 0, 0 0;
        -webkit-mask-size: auto, auto;
        -webkit-mask-repeat: repeat, repeat;
        -webkit-mask-clip: padding-box, border-box;
        -webkit-mask-origin: padding-box, border-box;
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        -webkit-mask-source-type: auto, auto;
        mask-mode: match-source, match-source;
    }

    .testimonial-two__single:hover:before {
        opacity: 1;
        visibility: visible;
    }

    .testimonial-two__single-inner:before {
        content: "";
        z-index: -1;
        background-color: rgba(217, 217, 217, .05);
        border-radius: 50%;
        width: 92px;
        height: 92px;
        position: absolute;
        top: -40px;
        right: 0;
    }

    .testimonial-two__single-inner:after {
        content: "";
        z-index: -1;
        background-color: rgba(217, 217, 217, .05);
        border-radius: 50%;
        width: 92px;
        height: 92px;
        position: absolute;
        top: -20px;
        right: -40px;
    }

    .testimonialSwiper {
        padding: 60px 0 80px 0;
    }

    .testimonial-two__single {
        z-index: 1000;
        border: 1px solid rgba(255, 255, 255, 0.1);
        height: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transition: none !important;
    }

    .testimonial-two__single:hover {
        transform: none !important;
        width: 100% !important;
        height: 100% !important;
    }

    .img {
        display: block;
    }

    /* Pagination styling */
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #a8b2c5;
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        background: #edc458;
        opacity: 1;
    }

    /* Center navigation buttons at bottom */
    .swiper-navigation-container {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 40;
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .swiper-slide:hover {
        transform: none !important;
        scale: 1 !important;
    }
</style>

<section class="relative w-full py-28">

    <x-section-heading subtitle="Testimonials" align="center" class="!leading-[75px]">
        Customer Experiences <br /> That
        <span class="text-[#edc458] font-marcellus font-medium tracking-wider">Speak Volumes</span>
    </x-section-heading>


    {{-- BackGround Gredient --}}
    <div class="absolute -left-44 top-0 pointer-events-none z-[1]">
        <div
            class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20 rounded-full blur-[100px] opacity-100 bg-[radial-gradient(circle,_rgba(67,123,205,0.4),_rgba(0,0,0,0))]">
        </div>
    </div>
    <div class="absolute -right-44 top-40 flex items-center justify-start pointer-events-none z-[2]">
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100
                bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
        </div>
    </div>

    <!--  Container -->
    <div class="testimonialSwiper max-w-6xl mx-auto px-4 ">

        <div class="flex justify-center flex-row gap-10">

            <!-- SLIDE 1 -->
            <div class="relative z-30 !w-[400px] ">

                <div class="bg-[#202944] border testimonial-two__single  !p-8 relative w-full">

                    <div class="testimonial-two__single-inner overflow-hidden absolute inset-0 "></div>
                    <div class="flex gap-1 mb-4">
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                    </div>

                    <p class="text-[#c5c8cd] leading-relaxed text-base tracking-wide">
                        Absolutely fantastic experience! The team exceeded our expectations and delivered a solution
                        that perfectly met our needs.
                    </p>

                    <div class="flex items-center gap-8 mt-6 overflow-visible">
                        <img src="images/testimonial/testimonial-1-1.jpg"
                            class="w-14 h-14 rounded-full border border-white absolute -left-8" alt="">
                        <div class="ms-4">
                            <p class="text-white font-semibold text-xl">James Anderson</p>
                            <p class="text-[#a8b2c5] text-md mt-2">Product Designer</p>
                        </div>

                        <i class="ri-double-quotes-r text-6xl text-blue-400 ml-auto mt-5"></i>

                    </div>
                </div>
            </div>

            <!-- SLIDE 1 -->
            <div class="relative z-30 !w-[400px] ">

                <div class="bg-[#202944] border testimonial-two__single  !p-8 relative w-full">

                    <div class="testimonial-two__single-inner overflow-hidden absolute inset-0 "></div>
                    <div class="flex gap-1 mb-4">
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                    </div>

                    <p class="text-[#c5c8cd] leading-relaxed text-base tracking-wide">
                        Absolutely fantastic experience! The team exceeded our expectations and delivered a solution
                        that perfectly met our needs.
                    </p>

                    <div class="flex items-center gap-8 mt-6 overflow-visible">
                        <img src="images/testimonial/testimonial-1-1.jpg"
                            class="w-14 h-14 rounded-full border border-white absolute -left-8" alt="">
                        <div class="ms-4">
                            <p class="text-white font-semibold text-xl">James Anderson</p>
                            <p class="text-[#a8b2c5] text-md mt-2">Product Designer</p>
                        </div>

                        <i class="ri-double-quotes-r text-6xl text-blue-400 ml-auto mt-5"></i>

                    </div>
                </div>
            </div>

            <!-- SLIDE 1 -->
            <div class=" relative z-30 !w-[400px] ">

                <div class="bg-[#202944] border testimonial-two__single  !p-8 relative w-full">

                    <div class="testimonial-two__single-inner overflow-hidden absolute inset-0 "></div>
                    <div class="flex gap-1 mb-4">
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-fill text-2xl font-light text-[#edc458]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                        <i class="ri-star-s-line text-2xl font-light text-[#a8b2c5]"></i>
                    </div>

                    <p class="text-[#c5c8cd] leading-relaxed text-base tracking-wide">
                        Absolutely fantastic experience! The team exceeded our expectations and delivered a solution
                        that perfectly met our needs.
                    </p>

                    <div class="flex items-center gap-8 mt-6 overflow-visible">
                        <img src="images/testimonial/testimonial-1-1.jpg"
                            class="w-14 h-14 rounded-full border border-white absolute -left-8" alt="">
                        <div class="ms-4">
                            <p class="text-white font-semibold text-xl">James Anderson</p>
                            <p class="text-[#a8b2c5] text-md mt-2">Product Designer</p>
                        </div>

                        <i class="ri-double-quotes-r text-6xl text-blue-400 ml-auto mt-5"></i>

                    </div>
                </div>
            </div>

        </div>


    </div>

</section>



<script>
    new Swiper(".testimonialSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            575: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1199: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1350: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        }

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                if (index < 4) {
                    return `<span class="${className}"></span>`;
                }
                return "";
            }
        }
    });
</script>