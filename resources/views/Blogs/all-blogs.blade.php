<style>
    .blog-two__img {
        z-index: 1;
        border-radius: 24px;
        display: block;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: transform 1s ease;
    }

    .blog-two__img:before {
        content: "";
        background-color: #06080a6b;
        opacity: 0;
        z-index: 1;
        transition: all 1s ease;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 24px;
    }

    .blog-two__img:hover:before {
        opacity: 1;
    }

    .blog-two__img:hover img {
        transform: scale(1.05);
    }

    .blog-two__user-two {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 4px 15px 4px 4px;
        position: absolute;
        top: 50%;
        left: 5%;
        transform: translate(-50%, -50%) rotate(90deg);
        z-index: 10;
        border-radius: 40px;
    }

    .blog-two__user-two:before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 40px;
        background: linear-gradient(rgba(92, 176, 233, .1), rgba(143, 136, 255, .3)) border-box;
        border: 1px solid transparent;
        z-index: -1;
        -webkit-mask:
            linear-gradient(#fff 0 0) padding-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

    .blog-two__user-two-img {
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: block;
        position: relative;
        overflow: hidden;
        transform: rotate(-90deg);
    }

    .blog-two__user-two-title {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
    }

    .blog-two__tags-two {

        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
        display: flex;
        bottom: 10px;
        left: 10px;
        z-index: 1000 !important;
        position: absolute;
    }

    .blog-two__tags-two span {
        color: #ffffff;
        font-size: 13px;
        font-weight: 500;
        line-height: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 14px;
        border-radius: 999px;
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        white-space: nowrap;
    }
</style>
<x-layout>
    <div class="relative h-[349px] xl:h-[516px]  bg-cover bg-center"
        style="background-image:url('{{ asset('images/backgrounds/page-header-bg.jpg') }}');">

        {{-- GRADIENT OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-r 
            from-black via-black/50 via-[60%] to-transparent z-[1]">
        </div>
        <x-header />

        <!-- Content -->
        <div class="relative z-10 w-full h-full flex justify-center items-start  ">
            <div class="max-w-[1300px] mx-auto w-full px-6 flex flex-col items-start justify-center text-white">

                <h2
                    class="xl:mt-36 capitalize text-[30px] xl:text-[60px] leading-[70px] font-medium xl:mb-[15px] font-sans text-[#ffffff]">
                    Blogs
                </h2>

                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-sm text-gray-200  bg-white/10 p-2 rounded-lg font-bold">
                    <a href="{{ url('/') }}" class="flex items-center gap-1 hover:text-[#edc458] transition">
                        <i class="ri-home-4-fill text-lg"></i>
                        Home
                    </a>

                    <i class="ri-arrow-right-line"></i>

                    <span>
                        Blogs
                    </span>
                </nav>

            </div>
        </div>



    </div>

    {{-- Blogs --}}
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-20 xl:py-36">

        <!-- TOP HEADING -->
        <div class="flex justify-between flex-col gap-4 items-center mb-10 xl:w-1/2 xl:mx-auto">

            <!-- Left Heading -->
            <div>
                <p
                    class="mb-4 text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center justify-center gap-2">
                    <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
                    News & Blog
                    <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
                </p>

                <h2
                    class="text-2xl  text-center md:text-[40px] lg:text-[40px] lg:leading-10 font-medium tracking-wide !mt-10 leading-28">
                    How We've <span class="text-[#edc458] font-normal font-marcellus">Empowered Businesses with
                        Innovative </span> Tech
                    Solutions
                </h2>
            </div>

        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-0">

            @foreach ($blogs as $blog)
                {{-- Blog Card --}}
                <div class="flex flex-col gap-4 items-center rounded-[40px] relative xl:p-4">

                    <!-- Image -->
                    <div class="w-full h-60 blog-two__img">
                        <img src="{{ asset($blog->main_image ?? 'images/blog/blog-2-2.jpg') }}"
                            class="rounded-2xl w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                            alt="{{ $blog->title }}" />

                        <!-- Tags -->
                        <div class="flex gap-2 blog-two__tags-two">
                            @foreach(explode(',', $blog->tags) as $tag)
                                <span>{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="w-full pl-[3.4rem] relative">

                        <!-- Author -->
                        <div class="blog-two__user-two">
                            <div class="blog-two__user-two-img">
                                <img src="{{ asset($blog->author_image ?? 'images/blog/blog-two-user-2.jpg') }}" width="32"
                                    height="32" />
                            </div>
                            <p class="blog-two__user-two-title">
                                {{ $blog->author_name ?? 'Admin' }}
                            </p>
                        </div>

                        <!-- Date -->
                        <div class="text-[#c5c8cd] text-sm">
                            <i class="ri-calendar-2-line text-[#edc458]"></i>
                            {{ $blog->created_at->format('F d, Y') }}
                        </div>

                        <!-- Title -->
                        <h3 class="text-white text-lg font-semibold mt-2">
                            {{ $blog->title }}
                        </h3>

                        <p class="mt-3 text-base text-[#c5c8cd] font-medium leading-6 tracking-wide">
                            {{ Str::limit($blog->meta_description, 120) }}
                        </p>

                        <!-- Button -->
                        <a href="{{ route('blog.showBlogDetails', $blog->slug) }}"
                            class="mt-6 inline-block !px-6 !py-3 !rounded-full thm-btn">
                            Read More →
                        </a>

                    </div>
                </div>
            @endforeach

        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $blogs->links() }}
        </div>

    </div>




    <x-newsletter.newsletter />



</x-layout>