<style>
    .link-underline {
        position: relative;
        display: inline-block;
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

<header x-data="{ openMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">
    <div id="mainHeader" 
        :class="scrolled ? 'bg-[#0B192C] shadow-lg border-transparent' : 'bg-transparent border-white/20'"
        class="sticky top-0 z-50 w-full py-5 px-5 md:py-6 lg:p-6 border-b transition-all duration-300">

        <div class="md:px-4 px-3 flex items-center justify-between">

            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo-1.webp') }}" />
            </div>

            <nav class="hidden xl:flex items-center justify-center gap-14 text-gray-300 font-semibold flex-1">
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
                <button @click="openMenu = true" class="md:border me-3 border-white/80 rounded-2xl p-4 
           text-xl leading-none flex items-center justify-center
           hover:text-[#edc458] text-[#f3f2f3] 
           transition-all duration-300">
                    <i class="ri-menu-4-line"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- OVERLAY -->
    <div x-show="openMenu" x-transition.opacity class=" fixed inset-0 bg-black/50 z-[998]" @click="openMenu = false">
    </div>

    <!-- SIDEBAR (LEFT SIDE) -->
    <div x-show="openMenu" x-transition
        class="fixed left-0 top-0 w-80 h-full bg-[#0B192C] text-white shadow-xl z-[999] p-6 flex flex-col space-y-6 transform"
        @click.away="openMenu = false">

        <button class="text-2xl self-end hover:text-[#edc458] text-[#f3f2f3]" @click="openMenu = false">✕</button>

        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">Home</a>
        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">About</a>
        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">Services</a>
        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">Shop</a>
        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">Blog</a>
        <a href="#" class="text-lg hover:text-[#edc458] text-[#f3f2f3]">Contact</a>

    </div>

</header>