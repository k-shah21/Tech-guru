<style>
    .blog-two__user-two {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 4px 15px 4px 4px;
        position: absolute;
        top: 91px;
        left: 42px;
        transform: translate(-50%, -50%) rotate(90deg);
        z-index: 10;
        border-radius: 40px;
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


    .blog-content h2 {
        color: #ffffff;
        margin: 35px 0 25px;
        font-size: 30px;
        font-weight: 500;
        line-height: 40px;
    }


    .blog-content h3 {
        color: #ffffff;
        margin: 35px 0 25px;
        font-size: 25px;
        font-weight: 500;
        line-height: 40px;
    }

    .blog-content p {
        color: #c5c8cd;
        font-size: 1.125rem;
        font-weight: 500;
        line-height: 1.75rem;
    }

    p {
        color: #ffffff;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
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
        border-radius: 8px;
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
        padding: 10px 18px;
        font-size: 14px;
        font-weight: 500;
        line-height: 14px;
        display: flex;
        position: relative;
    }

    .contact-one__from-title {
        color: #fff;
        margin: 20px 0 46px;
        font-size: 30px;
        font-weight: 700;
        line-height: 40px;
    }
</style>

<x-layout>


    <div class="relative h-[349px] xl:h-[516px] bg-cover bg-center"
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


    <main class="max-w-[1320px] mx-auto py-40 px-4  grid grid-cols-1 lg:grid-cols-10 h-auto">

        {{-- Left Content --}}
        <div class="col-span-1 lg:col-span-6 lg:px-12 flex flex-col gap-10 border-b pb-6 border-white/20">

            <div class="relative">
                <img src="{{ asset('images/blog/blog-details-img-1.jpg') }}" alt="blog-details-img-1" width="743"
                    height="380" srcset="" class="rounded-[40px] w-full h-full">
            </div>

            <div class="bg-[#243042] max-h-[341px]  rounded-[40px] w-full relative flex flex-col">

                <!-- Author -->
                <div class="blog-two__user-two tracking-widest">
                    <div class="blog-two__user-two-img">
                        <img src="{{ asset('images/blog/blog-two-user-3.jpg') }}" height="32" width="32" />
                    </div>
                    <p class="blog-two__user-two-title">
                        John Walk
                    </p>
                </div>



                {{-- content --}}
                <div class="ml-20 pl-8 m-6 border-l border-white/20">


                    <div class="flex xl:items-center flex-col  gap-2 mb-2 text-[#c5c8cd] text-lg font-medium ">
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
            <div class="relative blog-content mt-[10px]">
                {!! $blog->content !!}

                {{-- Tags --}}
                <div
                    class="flex justify-center md:justify-between flex-col xl:flex-row md:flex-row gap-4 items-center mt-[60px]">


                    <div class="flex justify-center flex-col md:flex-row gap-4 items-center ">

                        <p>Tags:</p>
                        <div class="flex gap-2 blog-two__tags-two">
                            @foreach(explode(',', $blog->tags) as $tag)
                                <span>{{ trim($tag) }}</span>
                            @endforeach
                        </div>

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

            </div>
            <form action="{{ route('contact.store') }}" method="POST"
                class="contact-one__form w-full bg-[#243042] p-3 rounded-2xl">

                <h2 class="contact-one__from-title ">How Can We Help You</h2>
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

        {{-- Right Content --}}
        <div class="col-span-1 lg:col-span-4 border">

            <x-blogs.blog-details-card title="Search">


                contant

            </x-blogs.blog-details-card>
        </div>


    </main>

    <x-newsletter.newsletter />

</x-layout>