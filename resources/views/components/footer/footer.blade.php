<style>
    .list-unstyled {
        padding-left: 0;
    }

    .site-footer-two__contact-list {
        position: relative;
        margin-top: 80px !important;
    }



    .site-footer-two__contact-list li:before {
        content: "";
        background: linear-gradient(90deg, #8f88ff 14%, rgba(143, 136, 255, 0) 100%);
        height: 1px;
        position: absolute;
        top: -30px;
        left: 0;
        right: 169px;
    }

    /* Icon circle */
    .site-footer-two__contact-icon {
        z-index: 1;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        display: flex;
        position: relative;
        overflow: hidden;
    }

    /* Icon gradient background */
    .site-footer-two__contact-icon::before {
        content: "";
        z-index: -1;
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        position: absolute;
        inset: 0;
    }

    .site-footer-two__contact-icon:before {
        content: "";
        z-index: -1;
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .site-footer-two__contact-icon span {
        color: #fff;
        font-size: 18px;
        position: relative;
    }

    .site-footer-two__contact-content {
        flex: 1;
        margin-left: 15px;
    }

    .site-footer-two__contact-title {
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: 500;
    }

    .site-footer-two__contact-info {
        color: #fff;
        font-size: 16px;
        line-height: 24px;
    }

    .site-footer-two__contact-info a {
        display: block;
        color: #fff;
    }

    .site-footer-two__contact-list li {
        gap: 5px;
        display: flex;
        position: relative;
        margin-top: 50px;

    }

    .link-underline {
        position: relative;
        font-weight: 400;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: var(--font-marcellus);
    }

    .link-underline::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0%;
        height: 2px;
        background-color: #edc458;
        transition: width 0.3s ease, right 0.3s ease;
    }

    .link-underline:hover::after {
        width: 100%;
        right: 0;
        left: auto;
    }

    .footer-widget-two__support::before {
        content: "";
        opacity: 0.2;
        width: 1px;
        position: absolute;
        top: 0px;
        bottom: 0px;
        left: -60px;
        background: linear-gradient(rgb(96, 101, 213) 0%, rgba(250, 86, 116, 0) 100%);
        z-index: 1000;
    }

    .follow-us {
        -webkit-text-fill-color: transparent;
        font-size: 40px;
        font-weight: 500;
        line-height: 40px;
        background: linear-gradient(270deg, rgb(250, 86, 116) 0%, rgb(96, 101, 212) 100%) text;
    }

    .site-footer-two__social-box-inner a:before {
        content: "";
        transform-origin: 50%;
        transform-style: preserve-3d;
        z-index: -1;
        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        border-radius: 50%;
        transition: all .4s cubic-bezier(.62, .21, .45, 1.52);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        transform: scale(0);
    }

    .site-footer-two__social-box-inner {
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        display: flex;
        position: relative;
    }
</style>


<footer class="text-gray-600 body-font relative overflow-hidden px-4 lg:px-8">
    <div
        class="container relative z-30 max-w-7xl px-3 py-12 mx-auto grid grid-cols-1 md:grid-cols-10 gap-8 items-center">
        <div class="md:col-span-5 xl:col-span-4">
            <div class="bg-[#313C50] h-[424px] rounded-[40px] p-12 text-center md:text-left">
                <img src="{{ asset('images/resources/footer-logo.png') }}" alt="footer logo">

                <ul class="list-unstyled site-footer-two__contact-list mt-6">
                    <!-- Contact Info -->
                    <li class="contact-item flex items-start gap-4 mb-6">
                        <div class="site-footer-two__contact-icon">
                            <span><i class="ri-contacts-book-2-line"></i></span>
                        </div>
                        <div class="site-footer-two__contact-content">
                            <h5 class="site-footer-two__contact-title text-white font-medium mb-1">Contact Info</h5>
                            <p class="site-footer-two__contact-info text-[#c5c8cd]">
                                <a href="" class="block hover:text-[#edc458]">info@domain.com</a>
                                <a href="" class="block hover:text-[#edc458]">+99 (00) 567 780</a>
                            </p>
                        </div>
                    </li>

                    <!-- Location -->
                    <li class="contact-item flex items-start gap-4">
                        <div class="site-footer-two__contact-icon">
                            <span><i class="ri-map-pin-2-line"></i></span>
                        </div>
                        <div class="site-footer-two__contact-content">
                            <h5 class="site-footer-two__contact-title text-white font-medium mb-1">Location</h5>
                            <p class="site-footer-two__contact-info text-[#c5c8cd]">
                                123 Main Street, Apt 4B New York,<br>NY 10001 USA
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Portfolio Column -->
        <div class="footer-widget font-semibold md:col-span-5 xl:col-span-2 md:pl-8">
            <p class="text-[#4FA0FF] tracking-wider text-2xl font-medium mb-6">
                Portfolio
            </p>
            <nav class="list-none flex flex-col gap-2">
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        About Us
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Pricing
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Blogs
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Careers
                    </a>
                </li>
            </nav>
        </div>

        <!-- Support Column -->
        <div class="footer-widget font-semibold mt-6 xl:mt-0 md:col-span-5 xl:col-span-2">
            <p class="text-[#4FA0FF] tracking-wider text-2xl font-medium mb-6">
                Support
            </p>
            <nav class="list-none flex flex-col gap-2">
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Terms & Condition
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        FAQs
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        404 Page
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Live Chat
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Our Services
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Careers
                    </a>
                </li>
            </nav>
        </div>

        <!-- Our Services Column -->
        <div class="footer-widget font-semibold md:col-span-5 xl:col-span-2">
            <p class="text-[#4FA0FF] tracking-wider text-2xl font-medium mb-6">
                Our Services
            </p>
            <nav class="list-none flex flex-col gap-2">
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        UI/UX Design
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Website Design
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Web Development
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Product Design
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Online Branding
                    </a>
                </li>
                <li>
                    <a
                        class="text-[#c5c8cd] text-lg flex gap-3 items-start w-fit hover:text-[#edc458] link-underline transition">
                        <i class="ri-arrow-right-double-line text-2xl font-medium"></i>
                        Personal Branding
                    </a>
                </li>
            </nav>
        </div>
    </div>


    {{-- footer Bottom --}}
    <div class="border-t border-[#c5c8cd]/20 relative z-30 ">
        <div class="max-w-7xl mx-auto py-8 px-5 flex flex-wrap flex-col items-center justify-between lg:flex-row">
            <p class="text-[#c5c8cd] text-center sm:text-left text-lg tracking-wider">ⓒ Copyright 2025 techguru All
                rights
                reserved

            </p>
            <span class="inline-flex gap-3 flex-col md:flex-row items-center">

                <p class="follow-us !text-2xl  text-white">Follow Us:</p>

                <div class="inline-flex gap-3">
                    <!-- Social Icon -->
                    <a class="relative w-12 h-12 flex justify-center items-center rounded-full border border-[#c5c8cd]/20 overflow-hidden
               group">
                        <span class="absolute inset-0 rounded-full 
                     bg-[linear-gradient(270deg,#fa5674_0%,#6065d4_100%)]
                     scale-0 opacity-0
                     transition-all duration-500 ease-[cubic-bezier(.62,.21,.45,1.52)]
                     group-hover:scale-100 group-hover:opacity-100">
                        </span>

                        <i class="ri-facebook-fill text-3xl text-white relative z-10"></i>
                    </a>

                    <!-- Dribbble -->
                    <a class="relative w-12 h-12 flex justify-center items-center rounded-full border border-[#c5c8cd]/20 overflow-hidden
               group">
                        <span class="absolute inset-0 rounded-full 
                     bg-[linear-gradient(270deg,#fa5674_0%,#6065d4_100%)]
                     scale-0 opacity-0
                     transition-all duration-500 ease-[cubic-bezier(.62,.21,.45,1.52)]
                     group-hover:scale-100 group-hover:opacity-100">
                        </span>

                        <i class="ri-dribbble-line text-3xl text-white relative z-10"></i>
                    </a>

                    <!-- LinkedIn -->
                    <a class="relative w-12 h-12 flex justify-center items-center rounded-full border border-[#c5c8cd]/20 overflow-hidden
               group">
                        <span class="absolute inset-0 rounded-full 
                     bg-[linear-gradient(270deg,#fa5674_0%,#6065d4_100%)]
                     scale-0 opacity-0
                     transition-all duration-500 ease-[cubic-bezier(.62,.21,.45,1.52)]
                     group-hover:scale-100 group-hover:opacity-100">
                        </span>

                        <i class="ri-linkedin-fill text-3xl text-white relative z-10"></i>
                    </a>
                </div>

            </span>

        </div>
    </div>

    {{-- Gredients --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute left-0 top-0 flex items-center justify-start">
            <div class="w-[400px] h-[400px] lg:w-[500px] lg:h-[500px]
            translate-x-20 rounded-full blur-[200px] opacity-100
            bg-[radial-gradient(circle,_rgba(67,123,205,0.4),_rgba(0,0,0,0))]">
            </div>
        </div>

        <div class="absolute -bottom-44 left-1/2 -translate-x-1/2 flex items-end justify-center">
            <div class="w-[600px] h-[600px] lg:w-[800px] lg:h-[800px]
            rounded-full blur-[100px] opacity-100
            bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
            </div>
        </div>

        <div class="absolute right-[30%] -top-20 flex items-center justify-center">
            <div class="w-[400px] h-[400px] lg:w-[500px] lg:h-[500px]
            translate-x-1/2 rounded-full blur-[150px] opacity-100
            bg-[radial-gradient(circle,_rgba(67,123,205,0.4),_rgba(0,0,0,0))]">
            </div>
        </div>
    </div>

</footer>