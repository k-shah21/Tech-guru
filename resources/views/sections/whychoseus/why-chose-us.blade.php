<!-- Why CHOOSE us -->
<section class="relative bg-[#0a1a2f] py-12 xl:py-[148px] overflow-hidden ">

    <!-- Gredient BACKGROUND -->
    <div class="absolute inset-0 flex items-center justify-start pointer-events-none">
        <div class="w-[600px] h-[600px] lg:w-[700px] lg:h-[700px]
                -translate-x-20
                rounded-full blur-[150px] opacity-80
                bg-[radial-gradient(circle,_rgba(80,120,255,0.65),_rgba(0,0,0,0))]">
        </div>
    </div>

    <!-- Gredient BACKGROUND -->
    <div class="absolute inset-0 flex items-center justify-end pointer-events-none">

        <!-- GLOW BACKGROUND -->
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100
                bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
        </div>

        <!-- IMAGE ON TOP -->
        <img src="images/shapes/why-choose-one-shape-3.png"
            class="absolute -top-20 z-10 sca pointer-events-none float-vertical opacity-10" alt="">

    </div>



    <div class="relative z-10 max-w-[1400px] mx-auto 
            px-4 sm:px-6 lg:px-8 
            grid gap-y-16  xl:grid-cols-12 gap-x-20 xl:gap-x-28 items-center">

        <!-- LEFT IMAGE BLOCK -->
        <div class="relative flex justify-center order-2 md:w-[670px] mx-auto border col-span-7">

            <!-- Main Image -->
            <img src="images/resources/about-one-img-1.jpg" alt="Why choose us" class="scale-100" width="670"
                height="610">

            <!-- Floating Badge -->
            <div class="absolute  left-1.5 -top-12">
                <div class="w-16 h-16 sm:w-[80px] sm:h-[80px] bg-[#43a872]/20 rounded-full backdrop-blur-sm shadow-lg 
                    flex items-center justify-center float-animate">
                    <div class="w-12 h-12 sm:w-[60px] sm:h-[60px] bg-[#43a872] rounded-full shadow-xl 
                        flex items-center justify-center">
                        <img src="{{ asset('images/icon/main-slider-shield-check-icon.png') }}"
                            class="opacity-90 object-contain" />
                    </div>
                </div>
            </div>

            <!-- Floating Shape -->
            <img src="images/shapes/why-choose-one-shape-2.png" alt=""
                class="hidden xl:block absolute -left-36 bottom-36 float-left-right">

        </div>


        <!-- RIGHT CONTENT -->
        <div class="text-white order-1 why-choose-custom md:mx-20 xl:mx-0 col-span-5">


            <x-section-heading subtitle="Why choose us" align="left">
                Elevate Growth <span class="text-[#edc458] font-marcellus font-normal tracking-tight">
                    with Our Best Cutting-Edge IT
                </span>
                Solutions for Success
            </x-section-heading>

            <p class="text-gray-300 max-w-lg mb-10 text-lg sm:text-xl">
                Innovating and empowering businesses with tailored solutions
                for success and growth. Innovating and empowering.
            </p>

            <ul class="flex gap-8 flex-col max-w-md">
                <li>
                    <h4 class="font-semibold">Camping Launches</h4>
                    <input type="range" max="100" value="80" disabled class="range-slider second w-full">
                </li>

                <li>
                    <h4 class="font-semibold">Innovation Design</h4>
                    <input type="range" max="100" value="70" disabled class="range-slider w-full">
                </li>
            </ul>

            <div class="flex flex-col sm:flex-row items-start gap-6 mt-10">

                <button class="bg-gradient-to-r from-[#3e75fc] to-[#58a8ec] text-white px-6 py-3 
                       rounded-3xl font-medium flex items-center gap-2 hover:opacity-90 transition">
                    About us
                    <i class="ri-arrow-right-line"></i>
                </button>

                <div class="flex gap-3 items-center justify-center">
                    <img src="images/resources/why-choose-one-client-img.jpg" alt="" class="rounded-full w-12 h-12">

                    <h2 class="text-left">
                        Thomas Alison
                        <span class="text-[#edc458] block font-normal text-sm">Founder and CEO</span>
                    </h2>
                </div>
            </div>

        </div>

    </div>

</section>

<style>
    .range-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        border-radius: 9999px;
        background: linear-gradient(to right, #3e74fb, #5eafea7b);
        outline: none;
        cursor: pointer;
        opacity: 1;
    }

    .range-slider.second {
        background: linear-gradient(to right, #6564d0, #ef577b);
    }

    .range-slider::-webkit-slider-thumb,
    .range-slider.second::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 16px;
        width: 16px;
        background: white;
        border-radius: 50%;
        border: 3px solid #3e74fb;
        cursor: pointer;
    }

    .range-slider.second::-webkit-slider-thumb {
        border-color: #ef577b;
    }

    @keyframes float-vertical {
        0% {
            transform: translateY(-10px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    .float-vertical {
        animation: float-vertical 3s ease-in-out infinite;
    }

    @keyframes floatY {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .float-animate {
        animation: floatY 10s ease-in-out infinite;
    }


    @keyframes float-left-right {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(30px);
        }

        /* move right */
        100% {
            transform: translateX(0);
        }
    }

    .float-left-right {
        animation: float-left-right 2s ease-in-out infinite;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .why-choose-custom {
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>