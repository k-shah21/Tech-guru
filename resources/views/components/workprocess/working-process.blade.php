<style>
    .gradient-ring-pink {
        position: absolute;
    }

    .gradient-ring-pink::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 2px;
        border-radius: 100%;
        background: linear-gradient(90deg, #5098F1, #FF4F8B);
        -webkit-mask:
            radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
        mask:
            radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
    }

    .gradient-ring-blue {
        position: absolute;
    }

    .gradient-ring-blue::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 2px;
        border-radius: 100%;
        background: linear-gradient(90deg, #5098F1, #5098F1);
        -webkit-mask:
            radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
        mask:
            radial-gradient(farthest-side, #0000 calc(100% - 1px), #000 0);
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
    class="relative h-[810px] overflow-hidden flex flex-col justify-center items-center text-center py-28 gap-36 md:px-0">




    <img src="images/backgrounds/process-two-bg.jpg" class="absolute inset-0 w-full h-full object-cover opacity-20 z-0">



    <!-- BOTTOM GRADIENT (200px height) -->
    <div class="absolute bottom-0 left-0 w-full h-[400px]
            bg-gradient-to-t from-[#0b1a2c] to-transparent
            pointer-events-none z-[1]">
    </div>


    <!-- CONTENT -->
    <div
        class="relative z-30 w-full text-center  flex flex-col gap- items-center justify-center gap-2 px-4 md:px-0 mb-12 z-10">
        <p class="text-[#4FA0FF] tracking-wider  text-sm font-medium  flex items-center justify-center gap-2 ">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span> Working Process
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>


        <h2 class="text-4xl md:text-4xl font-bold text-white leading-tight mt-6">
            Our Seamless Process
        </h2>

        <h2 class="text-3xl md:text-4xl font-medium mt-2 text-[#F2C65A] font-marcellus">
            From Concept to Creation
        </h2>
    </div>

    <div class="flex flex-col max-w-6xl  gap-32 mx-auto md:flex-row justify-center items-center px-24 md:px-0 z-40">

        <div class="text-center z-40 relative">

            <img src="images/shapes/process-two-shape-1.png" alt=""
                class="absolute -top-6 -right-36 float-horizontal  z-0">

            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-blue"></div>

                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#5098f1] to-[#5098f1]
    flex items-center justify-center text-white text-4xl font-bold shadow-lg z-30">
                    01
                </div>
            </div>


            <!-- Title -->
            <h3 class="text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>

            <!-- Description -->
            <p class="text-gray-300 leading-relaxed">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>

        <div class="text-center -translate-y-20 z-40 relative">


            <img src="images/shapes/process-two-shape-2.png" alt=""
                class="absolute top-6 -right-40 float-horizontal  z-0">



            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-pink"></div>

                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#2685f8] to-[#FF4F8B]
    flex items-center justify-center text-white text-4xl font-bold shadow-lg z-30">
                    02
                </div>
            </div>


            <!-- Title -->
            <h3 class="text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>

            <!-- Description -->
            <p class="text-gray-300 leading-relaxed">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>

        <div class="text-center z-40">

            <div class="relative mx-auto w-20 h-20 mb-6">
                <div class="absolute inset-0 scale-[1.25] -translate-y-2 z-0 gradient-ring-blue"></div>

                <div class="relative w-full h-full rounded-full bg-gradient-to-r from-[#5098f1] to-[#5098f1]
    flex items-center justify-center text-white text-4xl font-bold shadow-lg z-10">
                    03
                </div>
            </div>


            <!-- Title -->
            <h3 class="text-2xl font-semibold text-white mb-3">
                Design and Development
            </h3>

            <!-- Description -->
            <p class="text-gray-300 leading-relaxed">
                Once the strategy is in place, we move to designing and developing your vision.
                Our team collaborates closely to bring your ideas to life.
            </p>

        </div>


    </div>

</section>