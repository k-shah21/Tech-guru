<x-layouts.layout>

    <!-- BG Shape -->
    <div class="absolute -z-1 !top-[47%]">
        <img src="{{ asset('images/shapes/blog-details-shape-1.png') }}" alt="shape" srcset="{{ asset('images/shapes/blog-details-shape-1.png') }}">
    </div>

    <div class="relative h-[349px] md:h-[516px] bg-cover bg-center"
        style="background-image:url('{{   asset('images/backgrounds/page-header-bg.jpg') }}')">

        {{-- GRADIENT OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-r 
            from-black via-black/50 via-[60%] to-transparent z-[1]">
        </div>

        <x-header />

        <!-- Hero Content -->
        <div class="relative z-10 w-full h-full flex justify-center items-start ">
            <div class="max-w-[1300px] mx-auto w-full px-6 flex flex-col items-start justify-center  mt-[203px] text-white">

                <h2
                    class="capitalize text-[30px] xl:!text-[60px] leading-[70px] font-medium xl:mb-[15px] font-sans text-[#ffffff]">
                    Blogs Details
                </h2>

                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-sm text-gray-200  bg-white/10 p-2 rounded-lg font-bold">
                    <a href="{{ url('/') }}" class="flex items-center gap-1 hover:text-[#edc458] transition">
                        <i class="ri-home-4-fill text-lg"></i>
                        Home
                    </a>

                    <i class="ri-arrow-right-line"></i>

                    <span>
                        Blogs Details
                    </span>
                </nav>

            </div>
        </div>

    </div>

    <main class="xl:max-w-[1320px] md:max-w-[738px] lg:max-w-[960px] mx-auto pt-40 pb-10 px-4  grid grid-cols-1 lg:grid-cols-10 h-auto">


        {{-- Left Content --}}
        <div class="col-span-1 lg:col-span-6 flex flex-col gap-10 pb-6 border-white/20 md:px-4 xl:me-[67px]">

            <div class="relative">
                <img src="{{ asset('images/blog/blog-details-img-1.jpg') }}" alt="blog-details-img-1" width="743"
                    height="380" srcset="" class="rounded-[40px] w-full h-full">
            </div>

            <div class="bg-[#243042]   rounded-[40px] w-full relative flex flex-col">

                <!-- Author -->
                <x-author />


                {{-- content --}}
                <div class="ml-20 pl-8 m-6 border-l border-white/20">


                    <div class="flex xl:items-center flex-col md:flex-row  gap-2 mb-2 text-[#c5c8cd] text-lg font-medium ">
                        <p class="hover:text-[#edc458] transition-all duration-400  ">
                            <i class="ri-calendar-2-line text-[#edc458]"></i>
                            March 18, 2025
                        </p>
                        <p class="hover:text-[#edc458] transition-all duration-400 ">
                            <i class="ri-chat-3-line text-[#edc458]"></i>
                            89 Comments
                        </p>
                    </div>
                    <h2 class="text-white 
           text-xl sm:text-2xl lg:text-3xl 
           font-semibold 
           leading-snug sm:leading-tight 
           mb-3 sm:mb-4 
           hover:text-[#edc458] 
           transition-all duration-300">
                        {{ $blog->title }}
                    </h2>

                    <p class="text-[#c5c8cd]
           text-sm sm:text-base lg:text-lg
           font-medium
           leading-relaxed lg:leading-7">
                        {{ $blog->meta_description }}
                    </p>



                </div>

            </div>

            {{-- jodit Content --}}
            <div class="jodit-content relative mt-2.5">
                {!! $blog->content !!}
            </div>

            {{-- Main Content bottom --}}
            <div
                class="flex justify-center md:justify-between flex-col xl:flex-row md:flex-row gap-4 items-center mt-10">

                {{-- Tags --}}
                <div class="flex justify-center flex-col md:flex-row gap-4 items-center ">

                    <p>Tags:</p>
                    <x-tags :tags="$blog->tags" />

                </div>

                <div class="inline-flex gap-2 flex-row md:flex-row items-center">

                    <p>Follow Us:</p>

                    <div class="inline-flex gap-2">

                        <!-- Facebook -->
                        <a class="relative w-6 h-6">
                            <i class="ri-facebook-fill text-xl text-white relative z-10"></i>
                        </a>

                        <!-- Dribble -->
                        <a class="relative w-6 h-6">
                            <i class="ri-dribbble-line text-xl text-white relative z-10"></i>
                        </a>

                        <!-- LinkedIn -->
                        <a class="relative w-6 h-6">
                            <i class="ri-linkedin-fill text-xl text-white relative z-10"></i>
                        </a>
                    </div>

                </div>

            </div>


            <div class="contact-two__right">
                <x-contact-form />
            </div>

        </div>

        {{-- Right Content --}}
        <div class="col-span-1 lg:col-span-4 right-content md:px-4">

            <!-- Search Box -->
            <x-blog-details-card title="Search">
                <div class="w-full">

                    <p class="mb-[23px]">Search blogs to discover a vast world of online content on countless topics.</p>
                    <div class="search__input">
                        <input type="text" name="text" placeholder="Search Blogs">
                        <button type="submit" class="thm-btn">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>

                </div>

            </x-blog-details-card>

            <!-- Category Box -->
            <x-blog-details-card title="category">
                <div class="w-full">

                    <ul class="category-list">
                        <li>
                            <p>Web Design & Development <span>{15}</span></p>
                        </li>
                        <li class="active">
                            <p>Products Design <span>{20}</span></p>
                        </li>
                        <li>
                            <p>Artificial Intelligence <span>{42}</span></p>
                        </li>
                        <li>
                            <p>Technology <span>{89}</span></p>
                        </li>
                    </ul>

                </div>

            </x-blog-details-card>

            <!-- Recent Post Box -->
            <x-blog-details-card title="Recent Post">
                <div class="w-full">

                    <ul class="flex flex-col gap-6">
                        @foreach ($recentBlog as $item)
                        <li>
                            <div class="flex gap-3">
                                <div class="max-w-20 w-full">
                                    <img
                                        src="{{ asset($item->main_image ?? 'images/blog/blog-lp-1.jpg') }}"
                                        alt="{{ $item->title }}"
                                        width="80"
                                        height="80"
                                        class="rounded-2xl object-cover">
                                </div>

                                <div class="flex-1">
                                    <div class="flex flex-col md:flex-row gap-2 mb-2 text-[15px] font-medium">
                                        <p class="hover:text-[#edc458] transition-colors">
                                            <i class="ri-calendar-2-line text-[#edc458] mr-1"></i>
                                            {{ $item->created_at->format('F d, Y') }}
                                        </p>
                                    </div>

                                    <h3 class="mt-[6px] text-[16px] font-medium leading-[22px]
                               hover:text-[#edc458] transition-colors">
                                        <a href="{{ route('blog.showBlogDetails', $item->slug) }}">
                                            {{ Str::limit($item->title) }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>


                </div>

            </x-blog-details-card>

            <!-- Keywords Box -->
            <x-blog-details-card title="Keywords">
                <div class="w-full">
                    <ul class="keyword-list">
                        <li>
                            <a href="#">
                                <p>Development</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Inovation</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Analytics</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Marketing</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Inovation</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Ui Design</p>
                            </a>
                        </li>
                    </ul>
                </div>

            </x-blog-details-card>

            <!-- Subscribe Box -->
            <x-blog-details-card title="Subscribe">
                <div class="w-full">
                    <p class="mb-6">Subscribe our newsletter to get everyday update about blogs</p>

                    <div class="relative rounded-[20px] p-[1px] 
            bg-gradient-to-r from-[#6065d4] to-[#fa5674]">

                        <div class="relative rounded-[19px] bg-[#243042]">
                            <input
                                type="text"
                                name="text"
                                placeholder="Search Blogs"
                                class="w-full h-[56px] bg-transparent
                   text-white text-[16px]
                   px-[20px] pr-[50px]
                   rounded-[19px]
                   outline-none placeholder:text-white/60" />

                            <i class="ri-home-5-line text-2xl
                  absolute top-1/2 right-4 -translate-y-1/2
                  text-white"></i>
                        </div>
                    </div>

                    <button class="thm-btn w-full flex justify-center items-center mt-3">Subscribe Now <i class="ri-arrow-right-line"></i></button>
                </div>

            </x-blog-details-card>

        </div>

    </main>
    @include('sections.newsletter.newsletter')

</x-layouts.layout>



<style>
    /* Scoped styles for Jodit content only */
    .jodit-content h1 {
        color: #ffffff;
        margin: 35px 0 25px;
        font-size: 40px;
        font-weight: 500;
        line-height: 50px;
    }

    .jodit-content h2 {
        color: #ffffff;
        margin: 30px 0 20px;
        font-size: 32px;
        font-weight: 500;
        line-height: 45px;
    }

    .jodit-content h3 {
        color: #ffffff;
        margin: 25px 0 15px;
        font-size: 26px;
        font-weight: 500;
        line-height: 40px;
    }

    .jodit-content h4 {
        color: #ffffff;
        margin: 20px 0 10px;
        font-size: 22px;
        font-weight: 500;
        line-height: 35px;
    }

    .jodit-content h5 {
        color: #ffffff;
        margin: 15px 0 8px;
        font-size: 18px;
        font-weight: 500;
        line-height: 30px;
    }

    .jodit-content p {
        color: #c5c8cd;
        font-size: 18px;
        /* 1.125rem */
        font-weight: 500;
        line-height: 28px;
        /* 1.75rem */
        margin-bottom: 20px;
    }

    /* Optional: Style links, bold, italic inside Jodit content */
    .jodit-content p a {
        color: #4f90ff;
        text-decoration: underline;
    }

    .jodit-content p strong {
        font-weight: 600;
    }

    .jodit-content p em {
        font-style: italic;
    }

    /* Optional spacing for sections inside Jodit content */
    .jodit-content section {
        margin-bottom: 50px;
    }



    .search__input {
        position: relative;
        width: 100%;
    }

    .search__input button.thm-btn {
        position: absolute;
        top: 3px !important;
        right: 2px;

        width: 50px;
        height: 50px;

        border-radius: 16px;
        background: linear-gradient(90deg, #6065d4, #fa5674);
        color: #fff;

        border: none;
        cursor: pointer;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 20px;
    }

    /* Input */
    .search__input input[type=text] {
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
        border-radius: 20px;
        width: 100%;
        height: 56px;
        padding: 0 60px 0 25px;
        font-size: 16px;
        outline: none;
    }

    .search__input input[type=text]::placeholder {
        font-weight: 500 !important;
    }

    .category-list li {
        margin-bottom: 6px;
    }

    .category-list li>p {
        border-radius: 8px;
        padding: 11px 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;

        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .category-list li>p::before {
        content: "";
        position: absolute;
        inset: 0;

        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        border-radius: 8px;

        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform 0.4s ease;

        z-index: -1;
    }

    .category-list li:hover>p::before {
        transform: scaleY(1);
        transform-origin: top;
    }

    .category-list li.active>p::before {
        transform: scaleY(1);
    }

    .category-list li:hover p,
    .category-list li.active p {
        color: #fff;
        transform-origin: top;
    }

    .keyword-list {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .keyword-list li a {
        color: #fff;
        border: 1px solid rgba(255, 255, 255, .1);
        text-transform: capitalize;

        background: transparent;
        border-radius: 25px;
        padding: 8px 17px;

        font-size: 16px;
        font-weight: 400;

        display: block;
        position: relative;
        overflow: hidden;
        z-index: 1;

        transition: color .3s ease;
    }

    .keyword-list li>a::before {
        content: "";
        position: absolute;
        inset: 0;

        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        border-radius: 25px;

        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform .4s ease;

        z-index: -1;
    }

    /* HOVER EFFECT */
    .keyword-list li:hover>a::before {
        transform: scaleY(1);
        transform-origin: top;
    }

    .keyword-list li:hover>a {
        color: #fff;
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