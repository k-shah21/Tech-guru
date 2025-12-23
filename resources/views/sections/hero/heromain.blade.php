<section class="relative flex flex-col lg:flex-row grow">

    <!-- SIDEBAR -->
    @include('sections.hero.heroside')

    <!-- IMAGE ON TOP -->
    <img src="{{ asset('images/shapes/main-slider-two-shape-3.png') }}"
        class="absolute -top-20 right-0 z-10 pointer-events-none float-vertical opacity-10" alt="">

    <img src="{{ asset('images/shapes/main-slider-two-shape-2.png') }}" alt=""
        class="absolute left-0 -bottom-24 opacity-5 float-horizontal">

    <!-- MAIN HERO CONTENT -->
    <div class="grid grid-cols-1 xl:grid-cols-2 items-start gap-10 min-h-[70vh] 
                px-6 sm:px-10 md:px-3 2xl:pl-40 w-full py-4">

        <div class="flex justify-center items-center  gap-10 min-h-[70vh] 
            px-1 sm:px-2 md:px-12 xl:pl-24 3xl:pl-48 xl:w-10/12 md:w-full">

            <!-- TEXT SIDE -->
            <div class="flex flex-col gap-5 xl:grow  xl:w-full">

                <!-- Badge -->
                <div id="hero-badge" class="flex items-start gap-2 bg-white/10 text-xs sm:text-sm w-fit px-3 py-1 rounded-full border border-[#edc458] animate-slide-top animate-delay-200">
                    🔒 IT Solutions Designed for Your Success
                </div>

                <!-- Heading -->
                <h1 id="hero-heading" class="mt-4 text-4xl sm:text-4xl md:text-5xl xl:text-[52px] font-medium 2xl:font-semibold text-left !leading-[56px] xl:!leading-[56px] animate-slide-top animate-delay-400 md:w-4/5 lg:w-4/5 xl:w-full ">
                    Techguru - Smart Solutions for a Connected world
                </h1>

                <!-- Paragraph -->
                <p id="hero-paragraph" class="mt-4 text-gray-300 max-w-md text-lg sm:text-xl text-left animate-slide-bottom animate-delay-400 ">
                    From strategic IT consulting to seamless implementation, we deliver tailored solutions that drive efficiency.
                </p>

                <!-- Buttons -->
                <div id="hero-buttons" class="mt-6 flex flex-col sm:flex-row items-start gap-4 animate-slide-bottom animate-delay-600">
                    <button class="thm-btn">Get Started →</button>

                    <div class="btn-gradient-border">

                        <button class="thm-btn">
                            <span>Learn More →</span>
                        </button>
                    </div>
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

          
            <div class="hidden md:flex absolute top-1/3 right-5 md:right-14 flex-col gap-5 z-30">
                <button
                    onclick="nextSlide();  resetAutoSlide()"
                    class="group relative overflow-hidden rounded-xl px-4 py-2
           border border-white/40 transition-all duration-500">

                    <span
                        class="absolute inset-0 rounded-xl
               bg-[linear-gradient(270deg,#5cb0e9_0%,#3d72fc_100%)]
               opacity-0 transition-opacity duration-500
               group-hover:opacity-100">
                    </span>

                    <!-- Icon -->
                    <i class="fa-solid fa-arrow-left rotate-45 text-lg relative z-10 text-white"></i>

                </button>

                <button
                    onclick="nextSlide(); resetAutoSlide()"
                    class="group relative overflow-hidden rounded-xl px-4 py-2
           border border-white/40 transition-all duration-500">

                    <span
                        class="absolute inset-0 rounded-xl
               bg-[linear-gradient(270deg,#5cb0e9_0%,#3d72fc_100%)]
               opacity-0 transition-opacity duration-500
               group-hover:opacity-100">
                    </span>

                    <!-- Icon -->
                    <i class="fa-solid fa-arrow-right rotate-45 text-lg"></i>
                </button>
            </div>

</section>

<style>
    @keyframes slideFromTop {
        0% {
            opacity: 0;
            transform: translateY(-100px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideFromBottom {
        0% {
            opacity: 0;
            transform: translateY(100px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-top {
        animation: slideFromTop 2s ease-out forwards;
    }

    .animate-slide-bottom {
        animation: slideFromBottom 2s ease-out forwards;
    }

    .animate-delay-200 {
        animation-delay: 0.2s;
    }

    .animate-delay-400 {
        animation-delay: 0.4s;
    }

    .animate-delay-600 {
        animation-delay: 0.6s;
    }

    .btn-gradient-border {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 16px;
        font-weight: 500;
        line-height: 16px;
        color: #fff;
        text-transform: capitalize;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        background: transparent;
        border: 1px solid transparent;
        z-index: 0;
        transition: color 0.5s linear;
    }

    .btn-gradient-border::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        padding: 2px;
        border-radius: 12px;
        background: linear-gradient(90deg, #6065d4, #fa5674);

        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;

        transition: all 0.5s ease;
    }
</style>


<script>
    const heroBg = document.getElementById('hero-bg-img');

    const heroBadge = document.getElementById('hero-badge');
    const heroHeading = document.getElementById('hero-heading');
    const heroParagraph = document.getElementById('hero-paragraph');
    const heroButtons = document.getElementById('hero-buttons');

    const slides = [{
            image: '/images/backgrounds/slider-2-1.jpg',
            badge: '🔒 IT Solutions Designed for Your Success',
            heading: 'Tech Guru - Smart Solutions for a <span class="text-[#edc458] font-normal md:font-medium font-marcellus">Connected World</span>',
            paragraph: 'From strategic IT consulting to seamless implementation, we deliver tailored solutions that drive efficiency.',
            buttons: [{
                    text: 'Get Started →',
                    class: 'thm-btn'
                },
                {
                    text: 'Read More →',
                    class: 'thm-btn'
                }
            ]
        },
        {
            image: '/images/backgrounds/slider-2-3.jpg',
            badge: '🚀 Innovative IT Solutions for Growth',
            heading: '<span class="text-[#edc458] font-normal md:font-medium font-marcellus">Techguru - </span> Empowering Innovation Delivering Solutions',
            paragraph: 'We provide cutting-edge IT strategies that help businesses scale efficiently and stay ahead of competition.',
            buttons: [{
                    text: 'Start Now →',
                    class: 'thm-btn'
                },
                {
                    text: 'Learn More →',
                    class: 'thm-btn'
                }
            ]
        },
        {
            image: '/images/backgrounds/slider.jpg',
            badge: '🚀 Innovative IT Solutions for Growth',
            heading: 'Tailored IT <span class="text-[#edc458] font-normal md:font-medium font-marcellus">Strategies to Drive Your Business</span> Forword.',
            paragraph: 'We provide cutting-edge IT strategies that help businesses scale efficiently and stay ahead of competition.',
            buttons: [{
                    text: 'Start Now →',
                    class: 'thm-btn'
                },
                {
                    text: 'Learn More →',
                    class: 'thm-btn'
                }
            ]
        },
    ];

    let currentIndex = 0;
    let interval;

    function setSlide(index) {
        const slide = slides[index];

        heroBg.style.opacity = 0;
        heroBg.style.animation = 'none';
        setTimeout(() => {
            heroBg.style.backgroundImage = `url('${slide.image}')`;
            void heroBg.offsetWidth;
            heroBg.style.opacity = 1;
            heroBg.style.animation = 'zoomIn 5s linear forwards';
        }, 300);

        heroBadge.textContent = slide.badge;
        heroHeading.innerHTML = slide.heading;
        heroParagraph.textContent = slide.paragraph;

        heroButtons.innerHTML = '';
        slide.buttons.forEach((btn, index) => {
            if (index === 1) {
                const wrapper = document.createElement('div');
                wrapper.className = 'btn-gradient-border';

                const button = document.createElement('button');
                button.className = btn.class; 
                
                const span = document.createElement('span');
                span.textContent = btn.text;
                button.appendChild(span);

                wrapper.appendChild(button);
                heroButtons.appendChild(wrapper);
            } else {
                const button = document.createElement('button');
                button.className = btn.class;
                button.textContent = btn.text;
                heroButtons.appendChild(button);
            }
        });

        [heroBadge, heroHeading, heroParagraph, heroButtons].forEach(el => {
            el.classList.remove('animate-slide-top', 'animate-slide-bottom');
            void el.offsetWidth; 
            if (el === heroBadge || el === heroHeading) {
                el.classList.add('animate-slide-top');
            } else {
                el.classList.add('animate-slide-bottom');
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        setSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        setSlide(currentIndex);
    }

    function startAutoSlide() {
        interval = setInterval(nextSlide, 5000);
    }

    function resetAutoSlide() {
        clearInterval(interval);
        startAutoSlide();
    }

    // INIT
    setSlide(currentIndex);
    startAutoSlide();
</script>