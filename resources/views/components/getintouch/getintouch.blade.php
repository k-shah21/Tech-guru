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
        max-width: 410px;
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
</style>

<section class="relative  overflow-hidden flex flex-col justify-center items-center text-center py-28 gap-36 md:px-0">

    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="w-[600px] h-[600px] lg:w-[700px] lg:h-[700px]
                -translate-x-64
                rounded-full blur-[150px] opacity-80
                bg-[radial-gradient(circle,_rgba(80,120,255,0.25),_rgba(0,0,0,0))]">
        </div>
    </div>

    <div class="marquee-container">
        <div class="marquee-track gradient-text text-[200px] font-bold leading-64 font-marcellus">
            GET IN TOUCH * GET IN TOUCH *
            GET IN TOUCH * GET IN TOUCH *
        </div>
    </div>

    <div class="contact-two__bg hidden 2xl:block"
        style="background-image: url('images/backgrounds/contact-two-bg.jpg');">
    </div>


    <div class="relative z-10 mx-auto px-6 grid xl:grid-cols-2 gap-x-10 gap-5 items-center max-w-5xl">

        <!-- RIGHT FORM BLOCK -->
        <div class="contact-two__right order-2 w-full h-auto 
            xl:w-[610px]">

            <form action="{{ route('contact.store') }}" method="POST" class="contact-one__form w-full">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div>
                        <h4 class="contact-one__input-title">Full Name</h4>
                        <div class="relative w-full">
                            <input type="text" name="full_name" placeholder="Thomas Alison"
                                class="w-full bg-transparent border border-[#2a3b59] text-white rounded-xl px-5 py-4 pr-12 focus:outline-none" />
                            <span class="contact-one__input-icon absolute right-4 top-5 text-gray-400">
                                <i class="ri-user-line"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <h4 class="contact-one__input-title">Email Address</h4>
                        <div class="relative w-full">
                            <input type="email" name="email" placeholder="thomas@domain.com"
                                class="w-full bg-transparent border border-[#2a3b59] text-white rounded-xl px-5 py-4 pr-12 focus:outline-none" />
                            <span class="contact-one__input-icon absolute right-4 top-5 text-gray-400">
                                <i class="ri-mail-line"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div>
                        <h4 class="contact-one__input-title">Phone Number</h4>
                        <div class="relative w-full">
                            <input type="text" name="phone" placeholder="+12 (00) 123 4567 890"
                                class="w-full bg-transparent border border-[#2a3b59] text-white rounded-xl px-5 py-4 pr-12 focus:outline-none" />
                            <span class="contact-one__input-icon absolute right-4 top-5 text-gray-400">
                                <i class="ri-phone-line"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <h4 class="contact-one__input-title">Subject</h4>
                        <div class="relative w-full">
                            <select name="subject"
                                class="w-full bg-transparent border border-[#2a3b59] text-gray-400 rounded-xl px-5 py-4 pr-12 focus:outline-none appearance-none cursor-pointer">
                                <option value="">Select a Service</option>
                                <option value="Web Development">Web Development</option>
                                <option value="App Development">App Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                            </select>
                            <span class="absolute right-4 top-5 text-gray-400 pointer-events-none">
                                <i class="ri-arrow-down-s-line text-xl"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2">
                        <h4 class="contact-one__input-title">Inquiry about</h4>
                        <div class="relative w-full">
                            <textarea name="message" rows="6" placeholder="Write your message"
                                class="w-full bg-transparent border border-[#2a3b59] text-white rounded-xl px-5 py-4 pr-12 focus:outline-none"></textarea>
                            <span class="contact-one__input-icon absolute right-4 top-5 text-gray-400">
                                <i class="ri-edit-box-line"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8 text-left">
                    <button type="submit"
                        class="px-8 py-3 rounded-xl text-white font-semibold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] hover:opacity-90 transition-all">
                        Submit Now →
                    </button>


                </div>

                {{-- Toast Message --}}
                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-[-20px]"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-[-20px]" x-init="setTimeout(() => show = false, 5000)"
                        class="fixed top-5 right-5 p-4 bg-green-500 text-white rounded-lg flex items-center justify-between shadow-lg z-50">
                        <span>{{ session('success') }}</span>
                        <button @click="show = false" class="ml-4 font-bold text-xl leading-none">✕</button>
                    </div>
                @endif
            </form>


        </div>

        <!-- LEFT CONTENT -->
        <div class="text-white order-1 text-start">

            {{-- Heading --}}
            <p class="text-[#4FA0FF] tracking-wider  ext-sm font-medium  flex items-center justify-start gap-2 ">
                <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>Get In Touch
                <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
            </p>

            <h2 class="text-4xl lg:text-4xl font-medium tracking-wide my-6">
                Conversation
                <span class="text-[#edc458] font-marcellus"> Reach <br /> Out Anytime
                </span>
            </h2>


            <p class="text-[#c5c8cd] max-w-lg mb-10 text-xl">
                We're here to listen! Whether you have
                questions, feedback, or just want to say hello,
                feel free to reach out.
            </p>

            <ul class="contact-two__contact-list">
                <li>
                    <div class="icon"><span><i class="ri-mail-add-line"></i></span></div>
                    <div class="content">
                        <span class="block">Email Us</span>
                        <a href="/" class="text-2xl" data-text="info@domain.com">
                            info@domain.com
                        </a>

                    </div>
                </li>

                <li>
                    <div class="icon"><span><i class="ri-phone-line"></i></span></div>
                    <div class="content">
                        <span class="block">Contact US</span>
                        <a href="/" data-text="+99 (00) 567 780" class="text-2xl">+99 (00) 567 780</a>
                    </div>
                </li>

                <li>
                    <div class="icon"><span><i class="ri-map-pin-line"></i></span></div>
                    <div class="content">
                        <span class="block">Our Address</span>
                        <a href="/" data-text="1629 N. Dixie Avenue, Kentucky, 42701" class="text-2xl">1629 N. Dixie
                            Avenue, Kentucky, 42701</a>
                    </div>
                </li>
            </ul>


        </div>

    </div>


    {{-- BG RIght Images --}}
    <img src="images/shapes/contact-two-shape-1.png" alt=""
        class="hidden 2xl:block absolute right-0 -bottom-10 float-vertical">
</section>