<style>
    .about-two__img-box,
    .about-two__img {
        display: block;
        position: relative;
    }

    .about-two__left {
        margin-top: 15px;
        margin-right: 5px;
        display: block;
        position: relative;
    }

    .about-two__img img {
        border-radius: 48px;
        width: 100%;
    }

    .about-two__img-2 {
        width: 100%;
        max-width: 336px;
        position: absolute;
        bottom: -129px;
        right: -112px;
    }

    .about-two__img-2:before {
        content: "";
        border: 4px solid #08111f;
        border-radius: 48px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .about-two__client-box {
        text-align: center;
        background-color: #0b192c;
        z-index: 1;
        border-radius: 24px;
        width: 100%;
        max-width: 226px;
        margin-top: 16px;
        margin-left: 28px;
        padding: 18px 10px 16px;
        display: block;
        position: relative;
    }

    .about-two__shape-1 {
        -webkit-mask-composite: xor;
        z-index: -1;
        background: linear-gradient(-135deg, #fa5674 0%, #6065d4 52%, rgba(96, 101, 212, 0) 81%) border-box;
        border: 3px solid transparent;
        border-radius: 65px;
        width: 410px;
        height: 566px;
        position: absolute;
        top: -28px;
        right: -28px;
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

    .about-two__client-box:before {
        content: "";
        -webkit-mask-composite: xor;
        z-index: -1;
        background: linear-gradient(90deg, #3d72fc, #5cb0e9) border-box;
        border: 1px solid transparent;
        border-radius: 24px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
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

    .about-two__client-img-list {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-two__client-img-list li {
        position: relative;
    }

    .about-two__client-img-list li:not(:first-child) {
        margin-left: -20px;
    }

    .about-two__client-img {
        max-width: 40px;
    }

    .about-two__client-img img {
        width: 100%;
        border-radius: 50%;
        border: 2px solid #08111f;
        background: #08111f;
    }

    .about-two__client-text {
        color: #fff;
        margin-top: 12px;
    }

    .plus-icon {
        width: 40px;
        height: 40px;
        background: #edc458;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: 700;
        color: #08111f;
        border: 2px solid #08111f;
        cursor: pointer;
    }


    @media only screen and (min-width: 360px) and (max-width: 768px) {

        .about-two__img-2 {
            width: 100%;
            max-width: 336px;
            position: relative;
            left: 0 !important;
            bottom: -20px !important;

        }

        .about-two__client-box {
            margin-left: 0;
            margin-top: 30px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .about-two__left {
            width: 650px;
            margin: 0 auto;
        }

        .about-two__img-2 {
            width: 100%;
            max-width: 336px;
            position: absolute;
            bottom: -129px;
            right: -22px;
        }
    }

    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .about-two__left {
            max-width: 890px !important;
            width: 100%;
            margin: 0 auto;

        }

    }

    @media only screen and (min-width: 1200px) and (max-width: 2550px) {
        .about-two__left {
            max-width: 620px;
            margin: 30px auto 0;

        }

        .about-two__img-2 {
            width: 100%;
            max-width: 306px;
            position: absolute;
            bottom: -129px;
            right: -100px;
        }

    }

    .about-two__call-icon {
        position: relative;
        border-radius: 50%;
        background: #08111f;
        width: 3rem;
        height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        z-index: 0;
    }

    /* Gradient ring */
    .about-two__call-icon::before {
        content: "";
        -webkit-mask-composite: xor;
        z-index: -1;
        background: linear-gradient(90deg, #3d72fc, #5cb0e9) border-box;
        border: 1px solid transparent;
        border-radius: 50%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
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

    .about-two__call-icon:after {
        content: "";
        filter: blur(16.5px);
        z-index: -1;
        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        width: 25px;
        height: 25px;
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>

<!-- ABOUT SECTION -->
<section class="relative bg-[#0a1a2f] py-12 lg:py-[140px] overflow-hidden">

    <!-- CENTRAL GLOW BACKGROUND -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
                    rounded-full blur-[150px] opacity-40
                    bg-[radial-gradient(circle,_rgba(80,120,255,0.65),_rgba(0,0,0,0))]">
        </div>
    </div>

    <div
        class="relative z-10 md:max-w-[720px] lg:max-w-[920px] max-w-[1400px]  [@media(min-width:1200px)]:grid-cols-2 mx-auto grid lg:gap-7  gap-y-4 gap-x-16  px-4 items-center justify-start lg:justify-center">

        <!-- Left CONTENT -->
        <div class="about-two__left">
            <div class="about-two__img-box">
                <div class="about-two__img">
                    <img src="images/resources/about-two-img-1.jpg" width="495" height="474" alt="">
                </div>
                <div class="about-two__img-2">
                    <img src="images/resources/about-two-img-2.jpg" width="336" height="344" alt="">
                </div>
                <div class="about-two__shape-1"></div>
            </div>
            <div class="about-two__client-box">
                <ul class="about-two__client-img-list">
                    <li>
                        <div class="about-two__client-img">
                            <img src="images/resources/about-four-client-img-1-1.jpg" alt="" width="36" height="35">
                        </div>
                    </li>
                    <li>
                        <div class="about-two__client-img">
                            <img src="images/resources/about-four-client-img-1-2.jpg" alt="" width="36" height="35">
                        </div>
                    </li>
                    <li>
                        <div class="about-two__client-img">
                            <img src="images/resources/about-four-client-img-1-3.jpg" alt="" width="36" height="35">
                        </div>
                    </li>
                    <li class="client-plus">
                        <div class="about-two__client-img plus-icon">
                            <i class="ri-add-line"></i>
                        </div>
                    </li>

                </ul>
                <p class="about-two__client-text">
                    120K Satisfied Client
                </p>
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="text-white md:mt-6 lg:mt-0 text-left flex flex-col items-center max-w-[617px] md:max-w-[720px] lg:max-w-[920px]">

            <div class="mx-auto  xl:max-w-full">


                <x-section-heading subtitle="About Us" align="left">
                    Unlock Your Business <span class="text-[#edc458] font-normal">Potential with Our Best Cutting-Edge </span> Solutions to Grow
                </x-section-heading>

                <p class="text-gray-300 max-w-lg mb-10 !mt-4 text-xl">
                    Transform your business with our innovative IT solutions, tailored to address your unique
                    challenges and drive growth in today’s digital landscape.
                </p>

                <hr class="border-t border-dashed pt-6 border-white/30" />

                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-300 mb-8 text-lg w-5/6">
                    <div class="flex gap-3"><i class="ri-checkbox-circle-line"></i> Customized Solutions for Every
                        Business</div>
                    <div class="flex gap-3"><i class="ri-checkbox-circle-line"></i> Scalable Infrastructure for
                        Growth
                    </div>
                    <div class="flex gap-3"><i class="ri-checkbox-circle-line"></i> Enhanced Security and Data
                        Protection</div>
                    <div class="flex gap-3"><i class="ri-checkbox-circle-line"></i> Continuous monitoring & expert
                        support</div>
                </div>

                <hr class="border-t border-dashed pt-2 border-white/30" />

                <div class="flex flex-wrap items-center gap-4 md:gap- mt-2 md:mt-8 lg:mt-4">

                    <div class="flex justify-center items-center md:border-r">
                        <h3 class="text-4xl font-bold text-[#edc458]">25+</h3>
                        <p class="text-gray-300 text-sm w-1/2">Years of Experience</p>
                    </div>

                    <div class="flex items-center gap-4 md:border-r pe-5">
                        <div class="about-two__call-icon w-12 h-12 flex items-center justify-center text-xl overflow-hidden">
                            <i class="ri-customer-service-2-line"></i>
                        </div>

                        <div>
                            <p class="text-blue-400 text-sm">Call Us For Inquiry</p>
                            <p class="text-white font-semibold text-lg">+00 (123) 456767</p>
                        </div>
                    </div>

                    <button class="thm-btn !rounded-full">Learn More →</button>

                </div>

            </div>

        </div>

    </div>
</section>