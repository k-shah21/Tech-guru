<section class="relative flex flex-col lg:flex-row grow">

    <!-- SIDEBAR -->
    <x-hero.heroSide />

    <!-- MAIN HERO CONTENT -->
    <div class="grid grid-cols-1 lg:grid-cols-2 items-start gap-10 min-h-[70vh] 
                px-6 sm:px-10 md:px-3 !2xl:pl-48 w-full py-4">

        <div class="flex justify-center items-center  gap-10 min-h-[70vh] 
            px-1 sm:px-2 md:px-12 xl:pl-24 3xl:pl-48 w-full">

            <!-- TEXT SIDE -->
            <div class="flex flex-col gap-5 grow">

                <div class="flex items-start gap-2 bg-white/10 text-xs sm:text-sm w-fit px-3 py-1 
                    rounded-full border border-[#edc458]">
                    <span>🔒</span>
                    <p>IT Solutions Designed for Your Success</p>
                </div>

                <h1
                    class="mt-4 text-4xl sm:text-4xl md:text-5xl xl:text-6xl font-medium 2xl:font-bold text-left !leading-[56px] xl:!leading-[76px]">
                    <span class="text-[#edc458] font-normal md:font-medium font-marcellus">Techguru</span>
                    - Smart <br />Solutions for a <br />
                    <span>Connected world</span>
                </h1>

                <p class="mt-4 text-gray-300 max-w-md text-lg sm:text-xl text-left">
                    From strategic IT consulting to seamless implementation, we deliver tailored
                    solutions that drive efficiency.
                </p>

                <div class="mt-6 flex flex-col sm:flex-row items-start gap-4">
                    <button class="thm-btn ">Get Started →</button>

                    <span class="btn-border">
                        <button class="thm-btn main-slider-two__btn-box-2">
                            Read More <span>→</span>
                        </button>
                    </span>

                </div>

            </div>

            <!-- FLOATING SHIELD ICON (DESKTOP ONLY) -->
            <div class="hidden md:block absolute top-[10%] right-[10%] md:right-14 lg:right-[40%] ">
                <div class="w-[70px] h-[70px] bg-blue-500/20 rounded-full backdrop-blur-sm shadow-lg 
                    flex items-center justify-center float-animate">
                    <div class="w-[50px] h-[50px] bg-blue-500/80 rounded-full shadow-xl 
                        flex items-center justify-center">
                        <img src="{{ asset('images/icon/main-slider-shield-check-icon.png') }}"
                            class="opacity-90 object-contain" />
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE BUTTONS (DESKTOP ONLY) -->
            <div class="hidden md:flex absolute top-1/3 right-5 md:right-14 flex-col gap-5 z-30">
                <button class="border border-white/40 rounded-xl px-4 py-2 hover:bg-white/10 transition">
                    <i class="fa-solid fa-arrow-left rotate-45 text-lg"></i>
                </button>
                <button class="border border-white/40 rounded-xl px-4 py-2 hover:bg-white/10 transition">
                    <i class="fa-solid fa-arrow-right rotate-45 text-lg"></i>
                </button>
            </div>

</section>