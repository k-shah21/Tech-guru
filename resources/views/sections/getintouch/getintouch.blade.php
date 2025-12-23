<section
    class="relative overflow-hidden flex flex-col justify-center items-center text-center py-28 gap-36 md:px-0">

    <!-- BG RADIAL GLOW -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div
            class="w-[600px] h-[600px] lg:w-[700px] lg:h-[700px]
                   -translate-x-64 rounded-full blur-[150px] opacity-80
                   bg-[radial-gradient(circle,_rgba(80,120,255,0.25),_rgba(0,0,0,0))]">
        </div>
    </div>

    <!-- MARQUEE -->
    <div class="marquee-container">
        <div
            class="marquee-track gradient-text text-[200px] font-bold leading-64 font-marcellus">
            GET IN TOUCH * GET IN TOUCH *
            GET IN TOUCH * GET IN TOUCH *
        </div>
    </div>

    <!-- LEFT BG IMAGE -->
    <div
        class="contact-two__bg hidden 2xl:block"
        style="background-image:url('images/backgrounds/contact-two-bg.jpg');">
    </div>

    <!-- CONTENT GRID -->
    <div
        class="relative z-10 mx-auto px-6 grid xl:grid-cols-2 gap-x-10 gap-5 items-center max-w-5xl">

        <!-- FORM -->
        <div class="contact-two__right order-2 w-full xl:w-[610px]">
            <x-contact-form />
        </div>

        <!-- LEFT CONTENT -->
        <div class="order-1 text-white text-start">
            <x-section-heading subtitle="Get In Touch" align="left">
                Conversation<span class="text-[#edc458] font-normal"> Reach Out Anytime</span>
            </x-section-heading>

            <p class="text-[#c5c8cd] max-w-lg mb-10 text-xl">
                We're here to listen! Whether you have questions, feedback,
                or just want to say hello.
            </p>

            <ul class="contact-two__contact-list">
                <li>
                    <div class="icon"><span><i class="ri-mail-add-line"></i></span></div>
                    <div class="content"> <span class="block">Email Us</span> <a href="/" class="text-2xl" data-text="info@domain.com"> info@domain.com </a> </div>
                </li>
                <li>
                    <div class="icon"><span><i class="ri-phone-line"></i></span></div>
                    <div class="content"> <span class="block">Contact US</span> <a href="/" data-text="+99 (00) 567 780" class="text-2xl">+99 (00) 567 780</a> </div>
                </li>
                <li>
                    <div class="icon"><span><i class="ri-map-pin-line"></i></span></div>
                    <div class="content"> <span class="block">Our Address</span> <a href="/" data-text="1629 N. Dixie Avenue, Kentucky, 42701" class="text-2xl">1629 N. Dixie Avenue, Kentucky, 42701</a> </div>
                </li>
            </ul>
        </div>
    </div>

    <img
        src="images/shapes/contact-two-shape-1.png"
        class="hidden 2xl:block absolute right-0 -bottom-10 float-vertical"
        alt="contact-two-shape" />

</section>


<style>
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        position: absolute;
        top: -30px;
    }

    .marquee-track {
        display: inline-flex;
        animation: marquee 35s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .marquee-track:hover {
        animation-play-state: paused;
    }

    .gradient-text {
        text-transform: uppercase;
        background: linear-gradient(rgba(255, 255, 255, .05) 0%, rgba(255, 255, 255, 0) 67.4%);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
        display: inline-flex;
        font-style: normal;
        cursor: pointer;
    }

    .contact-two__bg {
        z-index: 1;
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px;
        width: calc(25% - 85px);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
    }

    .contact-two__contact-list {
        width: 100%;
        margin-top: 30px;
        display: block;
        position: relative;
    }

    .contact-two__contact-list li {
        background-color: rgba(255, 255, 255, .04);
        border: 1px solid rgba(255, 255, 255, .1);
        margin-top: 12px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 20px !important;
        padding: 19px 15px 13px;
        position: relative;
    }

    .contact-two__contact-list li .icon {
        z-index: 1;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        display: flex;
        position: relative;
        transition: all 3s ease-in;
    }

    .contact-two__contact-list li:hover .icon::after {
        opacity: 1;
    }


    .contact-two__contact-list li .icon:before {
        content: "";
        z-index: -1;
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        border-radius: 16px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .contact-two__contact-list li .icon::after {
        content: "";
        opacity: 0;
        z-index: -1;
        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        border-radius: 16px;
        transition: all .5s;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }


    .contact-two__contact-list li .icon span {
        color: #fff;
        font-size: 24px !important;
        display: inline-block;
        position: relative;
    }

    .contact-two__contact-list li .content {
        flex: 1;
        display: block;
        position: relative;
    }

    .contact-two__contact-list li .content span {
        text-transform: capitalize;
        -webkit-text-fill-color: transparent;
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        -webkit-background-clip: text;
        background-clip: text;
        font-size: 16px;
        font-weight: 500;
        line-height: 16px;
    }

    .contact-two__contact-list li .content p {
        color: #fff;
        margin-top: 1px;
        font-size: 24px;
        font-weight: 500;
        line-height: 31px;
    }

    .contact-two__contact-list li .content a {
        position: relative;
        display: inline-block;
        color: #c5c8cd;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-two__contact-list li .content a::after {
        content: attr(data-text);
        position: absolute;
        left: 0;
        top: 0;
        width: 0%;
        overflow: hidden;
        white-space: nowrap;
        color: #edc458;
        transition: width 0.4s ease;
    }

    .contact-two__contact-list li .content a:hover::after {
        width: 100%;
    }


    /* Form */
    .contact-two__right {
        background-color: rgba(255, 255, 255, .05);
        border-radius: 20px;
        padding: 35px;
        display: block;
        position: relative;
    }

    .contact-one__form {
        display: block;
        position: relative;
        align-items: start;
    }

    /* ROW + GRID SYSTEM */
    .row {
        margin: 0 30px;
        flex-wrap: wrap;
        display: flex;
    }

    .row {
        --bs-gutter-x: 30px;
    }

    /* INPUT AREA */
    .contact-one__input-title {
        color: #c5c8cd;
        margin-bottom: 7px;
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
    }

    .contact-one__input-icon {
        position: absolute;
        top: 14px;
        right: 16px;
    }

    .contact-one__input-icon i {
        font-size: 20px;
    }

    .contact-one__input-title {
        color: #c5c8cd;
        margin-bottom: 7px;
        font-size: 16px;
        font-weight: 700;
        text-align: start;
    }

    /* Form Container */
    .contact-two__right {
        background-color: rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 35px;
        position: relative;
        text-align: start;
    }
</style>