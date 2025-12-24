<style>
    .link-underline {
        position: relative;
        display: inline-block;
        font-weight: 600 !important;
    }

    .link-underline::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 0%;
        height: 2px;
        background-color: #edc458;
        transition: width 0.3s ease;
    }

    .link-underline:hover::after {
        width: 100%;
        color: #edc458
    }

    .link-underline.active::after {
        width: 100%;
    }
</style>

<header x-data="{ openMenu: false, openSidebar: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    :class="scrolled ? 'fixed top-0 bg-[#0B192C] shadow-lg border-b border-white/20' : 'absolute top-0 bg-transparent border-white/20'"
    class="z-50 w-full border-b transition-all duration-300">
    <div id="mainHeader" class="w-full py-5 px-5 md:py-6 lg:p-6">

        <div class="md:px-4 px-3 flex items-center justify-between">

            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo-1.webp') }}" />
            </div>

            <nav class="hidden xl:flex items-center justify-center gap-14 text-gray-300 !font-bold flex-1 font-marcellus">
                <a href="{{ route('home') }}"
                    class="link-underline flex justify-center items-center {{ request()->routeIs('home') ? 'active text-[#edc458]' : '' }}">
                    Home

                </a>

                <a href="#"
                    class="hover:text-[#edc458] text-[#f3f2f3] link-underline transition ">About</a>
                <a href="#"
                    class="hover:text-[#edc458] text-[#f3f2f3] link-underline transition  flex items-center gap-1">Pages


                </a>
                <a href="#"
                    class="hover:text-[#edc458] text-[#f3f2f3] link-underline transition flex items-center gap-1 ">Services

                </a>
                <a href="#"
                    class="hover:text-[#edc458] text-[#f3f2f3] link-underline transition flex items-center gap-1 ">Shop


                </a>
                <a href="{{ route('blog.all') }}"
                    class="hover:text-[#edc458] text-[#f3f2f3] flex justify-center items-center link-underline transition {{ request()->routeIs('blogs') ? 'active text-[#edc458]' : '' }}">Blog</a>

                <a href="#" class="hover:text-[#edc458] text-[#f3f2f3]  link-underline transition">Contact</a>
            </nav>


            {{-- Menu Button --}}
            <button @click="openMenu = true">
                <i class="ri-menu-line text-2xl xl:hidden"></i>
            </button>


            <div class="hidden md:flex items-center gap-4">

                <button class=" border border-white/80 rounded-2xl p-4 
           text-xl leading-none md:flex items-center justify-center
           hover:text-[#edc458] text-[#f3f2f3] 
           transition-all duration-300">
                    <i class="ri-search-line"></i>
                </button>
                <button class="thm-btn btn--header">
                    Read More <span>→</span>
                </button>


                <!-- OPEN SIDEBAR BUTTON -->
                <button @click="openSidebar = true" class="md:border me-3 border-white/80 rounded-2xl p-4 
           text-xl leading-none flex items-center justify-center
           hover:text-[#edc458] text-[#f3f2f3] 
           transition-all duration-300">
                    <i class="ri-menu-4-line"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- OVERLAY -->
    <div x-show="openMenu" x-transition.opacity class=" fixed inset-0 bg-black/30 z-[998]" @click="openMenu = false">
    </div>

    <!-- SIDEBAR WRAPPER -->
    <div x-show="openMenu" x-cloak class="fixed inset-0 z-[999] pointer-events-none">

        <!-- LAYER 1: BLACK BG LAYER -->
        <div x-show="openMenu"
            x-transition:enter="transition ease-out duration-500 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-400 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="absolute left-0 top-0 w-full h-full bg-black/40 z-[1000]">
        </div>

        <!-- LAYER 2: ACTUAL MENU -->
        <div x-show="openMenu" 
            x-transition:enter="transition ease-out duration-500 delay-200 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="absolute left-0 top-0 w-[300px] h-full bg-[#0B192C] text-white shadow-xl z-[1001] p-0 flex flex-col pointer-events-auto"
            @click.away="openMenu = false">

            <!-- Top Header -->
            <div class="flex items-center justify-between p-6">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/logo-1.webp') }}" class="w-36" />
                </div>
                <button class="text-2xl hover:text-[#edc458] text-[#f3f2f3]" @click="openMenu = false">
                    <i class="ri-close-line font-normal text-3xl"></i>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="flex flex-col font-space-grotesk border-t border-white/10 p-4">
                @php
                    $mobileLinks = [
                        ['name' => 'Home', 'url' => route('home'), 'hasChild' => true],
                        ['name' => 'About', 'url' => '#', 'hasChild' => false],
                        ['name' => 'Pages', 'url' => '#', 'hasChild' => true],
                        ['name' => 'Services', 'url' => '#', 'hasChild' => true],
                        ['name' => 'Shop', 'url' => '#', 'hasChild' => true],
                        ['name' => 'Blog', 'url' => route('blog.all'), 'hasChild' => true],
                        ['name' => 'Contact', 'url' => '#', 'hasChild' => false],
                    ];
                @endphp

                @foreach ($mobileLinks as $link)
                    <div class="flex items-center justify-between border-b border-white/10  py-2 hover:bg-white/5 transition-colors">
                        <a href="{{ $link['url'] }}" class="text-sm font-medium tracking-wide capitalize">{{ $link['name'] }}</a>
                        @if ($link['hasChild'])
                            <div class="w-8 h-8 bg-[#edc458] rounded-md flex items-center justify-center">
                                <i class="ri-arrow-right-s-line text-white text-xl"></i>
                            </div>
                        @endif
                    </div>
                @endforeach
            </nav>

            <!-- Contact Info -->
            <div class="px-4 flex flex-col gap-2">
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 bg-[#edc458] rounded-full flex items-center justify-center">
                        <i class="ri-mail-fill text-white"></i>
                    </div>
                    <a href="mailto:needhelp@techguru.com" class="text-sm font-medium tracking-tight">needhelp@techguru.com</a>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 bg-[#edc458] rounded-full flex items-center justify-center">
                        <i class="ri-phone-fill text-white"></i>
                    </div>
                    <a href="tel:6668880000" class="text-sm font-medium tracking-tight">666 888 0000</a>
                </div>

                <!-- Social Icons -->
                <div class="flex items-center gap-6 mt-4">
                    <a href="#" class="text-white hover:text-[#edc458] transition text-xl"><i class="ri-twitter-line"></i></a>
                    <a href="#" class="text-white hover:text-[#edc458] transition text-xl"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="text-white hover:text-[#edc458] transition text-xl"><i class="ri-pinterest-line"></i></a>
                    <a href="#" class="text-white hover:text-[#edc458] transition text-xl"><i class="ri-instagram-line"></i></a>
                </div>
            </div>

        </div>

    </div>
   
   
    <!-- DESKTOP SIDEBAR WRAPPER -->
    <div x-show="openSidebar" x-cloak class="fixed inset-0 z-[1100] pointer-events-none">

        <!-- LAYER 1: BLACK BG LAYER (Slides first) -->
        <div x-show="openSidebar"
            x-transition:enter="transition ease-out duration-500 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-400 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="absolute left-0 top-0 w-full h-full bg-black/80 z-[1101] pointer-events-auto"
            @click="openSidebar = false">
        </div>

        <!-- SIDEBAR CONTENT (LEFT SIDE) -->
        <div x-show="openSidebar" 
            x-transition:enter="transition ease-out duration-500 delay-200 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-400 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="absolute left-0 top-0 w-[400px] h-full bg-[#0B192C] text-white shadow-2xl z-[1102] p-8 flex flex-col pointer-events-auto overflow-y-auto">

            <!-- Top Header -->
            <div class="flex items-center justify-between mb-10">
                <img src="{{ asset('images/logo-1.webp') }}" class="w-44" />
                <button class="text-white hover:text-[#edc458] transition" @click="openSidebar = false">
                    <i class="ri-close-circle-line text-4xl font-light"></i>
                </button>
            </div>

            <!-- Sidebar Inner Content (Slides up together) -->
            <div x-show="openSidebar"
                x-transition:enter="transition ease-out duration-700 delay-700 transform"
                x-transition:enter-start="opacity-0 translate-y-36"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="flex flex-col flex-1">
                
                <!-- About Us Section -->
                <div class="mb-10">
                    <h3 class="text-xl font-bold font-marcellus uppercase tracking-wider mb-4">ABOUT US</h3>
                    <p class="text-gray-300 leading-relaxed font-space-grotesk text-lg">
                        Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam laboris.
                    </p>
                </div>

                <!-- Quote Form -->
                <div class="flex flex-col flex-1">
                    <h3 class="text-xl font-bold font-marcellus uppercase tracking-wider mb-6">GET A FREE QUOTE</h3>
                    
                    <form action="#" class="flex flex-col gap-4 font-space-grotesk">
                        <input type="text" placeholder="Name" 
                            class="bg-white rounded-xl px-5 py-4 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#6065d4]">
                        
                        <input type="email" placeholder="Email" 
                            class="bg-white rounded-xl px-5 py-4 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#6065d4]">
                        
                        <textarea placeholder="Message..." rows="4" 
                            class="bg-white rounded-xl px-5 py-4 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#6065d4] resize-none"></textarea>

                        <button type="submit" 
                            class="mt-4 px-8 py-4 bg-gradient-to-r from-[#6065d4] to-[#fa5674] rounded-xl font-bold text-white transition-all duration-300 hover:opacity-90 flex items-center justify-between group">
                            Submit Now <span class="group-hover:translate-x-1 transition-transform">→</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>