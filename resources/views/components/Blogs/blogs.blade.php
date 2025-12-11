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
        top: 50%;
        left: 46%;
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

<section class="relative w-full py-16 bg-[#06152B] overflow-hidden">

    <!-- Section Heading -->
    <div class="max-w-7xl mx-auto flex justify-between items-center  gap-20">

        <div class="w-1/2">
            <div>
                <p class="text-[#4FA0FF] tracking-wider text-md font-medium flex items-center gap-2">
                    <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
                    Our Blogs
                    <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
                </p>

                <h2 class="text-4xl font-semibold text-white mt-4 mb-5 leading-snug">
                    Explore Our Latest <span class="text-[#edc458] font-marcellus tracking-wider">Blogs</span> <br>
                    for Expert Insights
                </h2>

                <p class="text-[#c5c8cd] text-lg">
                    Dive into our collection of blogs where we share expert insights, helpful tips, and the latest
                    trends in the industry.
                </p>

                <button class="mt-6  mb-8 !px-8 !py-4 !rounded-xl thm-btn">
                    View All Blogs →
                </button>
            </div>


            <div
                class="bg-[#152138] w-[580px] h-[560px] border border-white/10 rounded-[40px] p-6 relative overflow-hidden">

                <div class="w-full h-64 relative blog-two__img group">
                    <!-- Blog Image -->
                    <img src="images/blog/blog-2-1.jpg"
                        class="rounded-3xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

                    <!-- Tags -->
                    <div class="flex gap-3 absolute bottom-4 left-4 z-10">
                        <span
                            class="px-3 py-1 rounded-full bg-[#edc458] text-[#0b192c] text-sm font-medium">Digital</span>
                        <span
                            class="px-3 py-1 rounded-full bg-[#edc458] text-[#0b192c] text-sm font-medium">Technology</span>
                    </div>
                </div>
                <!-- Content -->
                <div class="mt-4 flex gap-6  justify-start items-start relative">


                    <!-- Author -->
                    <div class="blog-two__user-two !-left-12 !top-14">
                        <div class="blog-two__user-two-img">
                            <img src="images/blog/blog-two-user-1.jpg" height="32" width="32" />
                        </div>
                        <p class="blog-two__user-two-title">
                            John Doe
                        </p>
                    </div>


                    <div class="pl-16">
                        <!-- Meta -->
                        <div class="flex items-center gap-2 my-2 text-[#c5c8cd] text-sm">
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-calendar-2-line text-[#edc458]"></i> April 5, 2025</p> |
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-chat-3-line text-[#edc458]"></i> 80 Comments</p>
                        </div>

                        <!-- Title -->
                        <h3 class="text-white text-2xl font-bold leading-snug mb-[18px]">
                            The Future is Now: A 2025 Guide to Digital Transformation
                        </h3>

                        <p class="text-[#c5c8cd] mb-[18px] text-md">
                            Winning the Digital Race: The 2025 Transformation <br /> Roadmap. Next-Gen Digital
                            Transformation.
                        </p>

                        <!-- Read More -->
                        <button class="mt-4 !px-6 !py-3 !rounded-full thm-btn">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- RIGHT - BOTTOM SMALL CARD -->
        <div class="w-1/2 flex flex-col gap-6">

            {{-- Card 1 --}}
            <div
                class="bg-gradient-to-r border flex gap-16 items-center justify-center from-[#1d253f] to-[#242e4b]  border-white/10 rounded-[40px] p-6 relative">

                <div class="w-56 h-56 blog-two__img">
                    <img src="images/blog/blog-2-2.jpg"
                        class="rounded-2xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>

                <!-- Author -->
                <div class="blog-two__user-two">
                    <div class="blog-two__user-two-img">
                        <img src="images/blog/blog-two-user-2.jpg" height="32" width="32" />
                    </div>
                    <p class="blog-two__user-two-title">
                        John Smith
                    </p>
                </div>

                <!-- Content -->
                <div class="w-1/2">

                    <div class="flex gap-3">
                        <div class="blog-two__tags-two">
                            <span>Digital</span>
                            <span>Technology</span>
                        </div>

                    </div>

                    <h3 class="text-white text-lg font-semibold mt-4">
                        5 Key Trends Shaping the Future of Technology
                    </h3>

                    <div class="flex gap-4 mt-4 text-[#c5c8cd] text-sm">
                        <div class="flex items-center gap-2 my-1 text-[#c5c8cd] text-sm">
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-calendar-2-line text-[#edc458]"></i> April 5, 2025</p> |
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-chat-3-line text-[#edc458]"></i> 80 Comments</p>
                        </div>
                    </div>


                    <button class="mt-6 !px-6 !py-3 !rounded-full thm-btn">
                        Read More →
                    </button>
                </div>
            </div>


            {{-- Card 2 --}}
            <div
                class="bg-gradient-to-r border flex gap-16 items-center justify-center from-[#1d253f] to-[#242e4b]  border-white/10 rounded-[40px] p-6 relative">

                <div class="w-56 h-56 blog-two__img">
                    <img src="images/blog/blog-2-3.jpg"
                        class="rounded-2xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>

                <!-- Author -->
                <div class="blog-two__user-two">
                    <div class="blog-two__user-two-img">
                        <img src="images/blog/blog-two-user-3.jpg" height="32" width="32" />
                    </div>
                    <p class="blog-two__user-two-title">
                        Alisa Olive
                    </p>
                </div>

                <!-- Content -->
                <div class="w-1/2">

                    <div class="flex gap-3">
                        <div class="blog-two__tags-two">
                            <span>Digital</span>
                            <span>Technology</span>
                        </div>

                    </div>

                    <h3 class="text-white text-lg font-semibold mt-4">
                        How to Maximize Efficiency with Smart Business
                    </h3>

                    <div class="flex gap-4 mt-4 text-[#c5c8cd] text-sm">
                        <div class="flex items-center gap-2 my-1 text-[#c5c8cd] text-sm">
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-calendar-2-line text-[#edc458]"></i> April 5, 2025</p> |
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-chat-3-line text-[#edc458]"></i> 80 Comments</p>
                        </div>
                    </div>



                    <button class="mt-6 !px-6 !py-3 !rounded-full thm-btn">
                        Read More →
                    </button>
                </div>
            </div>


            {{-- Card 3 --}}
            <div
                class="bg-gradient-to-r border flex gap-16 items-center justify-center from-[#1d253f] to-[#242e4b]  border-white/10 rounded-[40px] p-6 relative">

                <div class="w-56 h-56 blog-two__img">
                    <img src="images/blog/blog-2-4.jpg"
                        class="rounded-2xl w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>

                <!-- Author -->
                <div class="blog-two__user-two">
                    <div class="blog-two__user-two-img">
                        <img src="images/blog/blog-two-user-4.jpg" height="32" width="32" />
                    </div>
                    <p class="blog-two__user-two-title">
                        Jordan Walks
                    </p>
                </div>

                <!-- Content -->
                <div class="w-1/2">

                    <div class="flex gap-3">
                        <div class="blog-two__tags-two">
                            <span>Digital</span>
                            <span>Technology</span>
                        </div>

                    </div>

                    <h3 class="text-white text-lg font-semibold mt-4">

                        The Ultimate Guide to Digital Transformation in 2025
                    </h3>

                    <div class="flex gap-4 mt-4 text-[#c5c8cd] text-sm">
                        <div class="flex items-center gap-2 my-1 text-[#c5c8cd] text-sm">
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-calendar-2-line text-[#edc458]"></i> April 5, 2025</p> |
                            <p class="hover:text-[#edc458] transition-all duration-300"><i
                                    class="ri-chat-3-line text-[#edc458]"></i> 80 Comments</p>
                        </div>
                    </div>

                    <button class="mt-6 !px-6 !py-3 !rounded-full thm-btn">
                        Read More →
                    </button>
                </div>
            </div>

        </div>

    </div>

</section>