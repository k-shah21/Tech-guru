@php
    $featured = $blogs->first();      // Latest blog
    $others = $blogs->skip(1);         // Remaining 3 blogs
@endphp
@php
    $authors = [
        ['name' => 'John Smith', 'image' => 'images/blog/blog-two-user-1.jpg'],
        ['name' => 'Olive Smith', 'image' => 'images/blog/blog-two-user-2.jpg'],
        ['name' => 'John Doe', 'image' => 'images/blog/blog-two-user-3.jpg'],
        ['name' => 'Sarah Khan', 'image' => 'images/blog/blog-two-user-4.jpg'],
    ];
@endphp

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

    .blog-two__tags-two {
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
        display: flex;
        position: relative;
    }

    .blog-two__tags-two span:before {
        content: "";
        -webkit-mask-composite: xor;
        -o-transition: all .5s ease;
        visibility: visible;
        opacity: 1;
        z-index: -1;
        background: linear-gradient(90deg, #3d72fc, #5cb0e9) border-box;
        border: 1px solid transparent;
        border-radius: 14px;
        transition: all .5s;
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

    .blog-two__tags-two span {
        text-align: center;
        z-index: 1;
        border-radius: 14px;
        justify-content: center;
        align-items: center;
        padding: 7px 12px;
        font-size: 14px;
        font-weight: 500;
        line-height: 14px;
        display: flex;
        position: relative;
    }

    .blog-two__user-two {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 4px 15px 4px 4px;
        position: absolute;
        top: 65%;
        left: 14%;
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
</style>

<section class="relative w-full py-16 xl:px-8 bg-[#06152B] overflow-hidden ">

    <!-- Section Heading -->
    <div class="max-w-7xl sm:mx-8 lg:mx-36 xl:mx-auto flex flex-col xl:flex-row justify-between items-center">
        {{-- Left --}}
        <div class="xl:w-1/2 w-full p-4 flex flex-col gap-5 xl:pe-10">
            <div>
                <p class="text-[#4FA0FF] tracking-wider text-md font-medium flex items-center gap-2 mb-6">
                    <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
                    Our Blogs
                    <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
                </p>

                <h2 class="text-2xl md:text-[40px] lg:text-4xl font-medium tracking-wide mb-4 leading-snug">
                    Explore Our Latest<span class="text-[#edc458] font-normal !font-marcellus"> Blogs for Expert
                        Insights</span>
                </h2>

                <p class="text-[#c5c8cd] text-lg mb-5">
                    Dive into our collection of blogs where we share expert insights, helpful tips, and the latest
                    trends in the industry.
                </p>

                <a href="{{ route('blog.all') }}" class="inline-block mb-8 px-8 py-4 rounded-xl thm-btn xl:mb-16">
                    View All Blogs →
                </a>

            </div>

            {{-- Big Card --}}
            @if($featured)
                <div class="bg-[#152138] border border-white/10 rounded-[40px] p-6 relative overflow-hidden">

                    <div class="w-full h-64 relative blog-two__img group">
                        <img src="{{ asset('storage/' . $featured->main_image) }}"
                            class="rounded-3xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

                        <!-- Tags -->
                        <div class="flex gap-3 absolute bottom-4 left-4 z-10">
                            @foreach(explode(',', $featured->tags) as $tag)
                                <span class="px-3 py-1 rounded-full bg-[#edc458] text-[#0b192c] text-sm font-medium">
                                    {{ trim($tag) }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 flex gap-6 justify-start items-start relative">
                        <!-- Author -->
                        <div class="blog-two__user-two !left-4 md:!left-4 !top-16 tracking-widest">
                            <div class="blog-two__user-two-img">
                                <img src="images/blog/blog-two-user-1.jpg" height="32" width="32" />
                            </div>
                            <p class="blog-two__user-two-title">
                                John Walk
                            </p>
                        </div>
                        <div class="pl-12">
                            <!-- Meta -->
                            <div class="flex items-center gap-2 my-2 text-[#c5c8cd] text-sm">
                                <p>
                                    <i class="ri-calendar-2-line text-[#edc458]"></i>
                                    {{ $featured->created_at->format('M d, Y') }}
                                </p>
                            </div>

                            <!-- Title -->
                            <h3 class="text-white text-2xl font-semibold leading-snug mb-4">
                                {{ $featured->title }}
                            </h3>

                            <p class="text-[#c5c8cd] mb-4 text-md">
                                {{ Str::limit(strip_tags($featured->content), 120) }}
                            </p>

                            <a href="{{ url('/blog/' . $featured->slug) }}" class="!px-6 !py-3 !rounded-full thm-btn">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <!-- RIGHT - BOTTOM SMALL CARD -->
        <div class="w-full xl:w-1/2 flex flex-col gap-6  p-4  sm:mx-8 lg:mx-36 xl:mx-0 ">

            @foreach($others as $blog)
                @php
                    $author = $authors[array_rand($authors)];
                @endphp

                <div
                    class="bg-gradient-to-r border flex flex-col md:flex-row gap-4 xl:gap-16 items-center from-[#1d253f] to-[#242e4b] border-white/10 rounded-[40px] p-6 relative">

                    <!-- Image -->
                    <div class="w-full xl:w-56 h-56 blog-two__img">
                        <img src="{{ asset('storage/' . $blog->main_image) }}"
                            class="rounded-2xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    </div>

                    <!-- Author -->
                    <div class="blog-two__user-two md:!left-[52%] md:!top-[50%]">
                        <div class="blog-two__user-two-img">
                            <img src="{{ asset($author['image']) }}" width="32" height="32" />
                        </div>
                        <p class="blog-two__user-two-title">
                            {{ $author['name'] }}
                        </p>
                    </div>

                    <!-- Content -->
                    <div class="w-full xl:w-1/2 pl-[3.4rem]">

                        <div class="flex gap-2 blog-two__tags-two">
                            @foreach(explode(',', $blog->tags) as $tag)
                                <span>{{ trim($tag) }}</span>
                            @endforeach
                        </div>

                        <h3 class="text-white text-lg font-semibold mt-4">
                            {{ $blog->title }}
                        </h3>

                        <div class="text-[#c5c8cd] text-sm mt-2">
                            <i class="ri-calendar-2-line text-[#edc458]"></i>
                            {{ $blog->created_at->format('M d, Y') }}
                        </div>

                        <a href="{{ url('/blog/' . $blog->slug) }}"
                            class="mt-6 inline-block !px-6 !py-3 !rounded-full thm-btn">
                            Read More →
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</section>