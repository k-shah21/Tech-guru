<style>
    .gradient-ring-pink,
    .gradient-ring-blue {
        position: absolute;
    }

    .gradient-ring-pink::before,
    .gradient-ring-blue::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 2px;
        border-radius: 100%;
        -webkit-mask: radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
        mask: radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
    }

    .gradient-ring-pink::before {
        background: linear-gradient(90deg, #5098F1, #FF4F8B);
    }

    .gradient-ring-blue::before {
        background: linear-gradient(90deg, #5098F1, #5098F1);
    }

    .float-horizontal {
        animation: floatX 3s ease-in-out infinite;
    }

    @keyframes floatX {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(20px);
        }

        100% {
            transform: translateX(0);
        }
    }
</style>



<section
    class="relative h-auto overflow-hidden flex flex-col justify-center items-center text-center py-12 md:py-28 gap-4  lg:gap-36 md:px-0">

    <img src="images/backgrounds/process-two-bg.jpg" class="absolute inset-0 w-full h-full object-cover opacity-20 z-0">

    <div class="absolute bottom-0 left-0 w-full h-[400px]
            bg-gradient-to-t from-[#0b1a2c] to-transparent
            pointer-events-none z-[1]">
    </div>

    <!-- CONTENT -->
    <div class="relative z-30 w-full text-center flex flex-col items-center gap-2 px-4 md:px-0 mb-12 z-10">

        <p class="text-[#4FA0FF] tracking-wider text-xs sm:text-sm font-medium flex items-center justify-center gap-2">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
            Working Process
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>

        <h2 class="text-3xl sm:text-5xl tracking-wider my-8 font-bold leading-snug lg:w-1/2">
            Our Seamless Process<span class="text-[#edc458] font-marcellus font-normal tracking-tight">
                From Concept to Creation
            </span>
        </h2>
    </div>

    <!-- PROCESS WRAPPER -->
    <div
        class="flex flex-col lg:flex-row max-w-6xl gap-8 lg:gap-32 lg:gap-x-12 mx-auto justify-center items-center !px-6 md:px-0 z-40">

        <!-- Block 01 -->
        <div class="text-center z-40 relative">

            <img src="images/shapes/process-two-shape-1.png"
                class="hidden lg:block absolute -top-16 -right-28 float-horizontal z-0">

            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-blue"></div>
                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#5098f1] to-[#5098f1]
                        flex items-center justify-center text-white text-4xl font-bold shadow-lg z-30">
                    01
                </div>
            </div>

            <h3 class="text-xl sm:text-2xl lg:text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>

            <!-- Mobile + Tablet (with <br>) -->
            <p class="text-gray-300 leading-relaxed inline block lg:hidden">
                Once the strategy is in place, we move to <br /> designing and developing your vision.
                Our team <br /> collaborates closely to bring your ideas to life.
            </p>

            <p class="text-gray-300 leading-relaxed inline hidden lg:block">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>

        <!-- Block 02 -->
        <div class="text-center lg:-translate-y-[90px] z-40 relative ">

            <!-- FLOATING SHAPE -->
            <img src="images/shapes/process-two-shape-2.png"
                class="hidden lg:block absolute top-6 -right-32 float-horizontal z-0">

            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-pink"></div>
                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#2685f8] to-[#FF4F8B]
                        flex items-center justify-center text-white text-4xl font-bold shadow-lg z-30">
                    02
                </div>
            </div>

            <h3 class="text-xl sm:text-2xl lg:text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>
            <!-- Mobile + Tablet (with <br>) -->
            <p class="text-gray-300 leading-relaxed inline block lg:hidden">
                Once the strategy is in place, we move to <br /> designing and developing your vision.
                Our team <br /> collaborates closely to bring your ideas to life.
            </p>

            <p class="text-gray-300 leading-relaxed inline hidden lg:block">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>

        <!-- Block 03 -->
        <div class="text-center z-40">

            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-blue"></div>
                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#5098f1] to-[#5098f1]
                        flex items-center justify-center text-white text-4xl font-bold shadow-lg z-10">
                    03
                </div>
            </div>

            <h3 class="text-xl sm:text-2xl lg:text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>
            <!-- Mobile + Tablet (with <br>) -->
            <p class="text-gray-300 leading-relaxed inline block lg:hidden">
                Once the strategy is in place, we move to <br /> designing and developing your vision.
                Our team <br /> collaborates closely to bring your ideas to life.
            </p>

            <p class="text-gray-300 leading-relaxed inline hidden lg:block">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>

    </div>
</section>