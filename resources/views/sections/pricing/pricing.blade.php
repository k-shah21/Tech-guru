@php
$pricing = [
'monthly' => [
'personal' => '5.60',
'premium' => '25.60',
'business' => '120.60',
],
'yearly' => [
'personal' => '15.00',
'premium' => '35.00',
'business' => '150.00',
],
'packages' => [
'personal' => '55.00',
'premium' => '125.00',
'business' => '200.00',
],
];
@endphp


<section
    class="py-6 lg:py-24 relative overflow-hidden flex justify-center flex-col items-center px-5 xl:px-0 lg:gap-8">

    <!-- Header Section -->
    <div class="relative w-full text-center flex flex-col items-center justify-center px-4 md:px-0 max-w-[1320px] mx-auto">
        <x-section-heading subtitle="Pricing & Plan" align="center" class="w-1/2">
            Select the Perfect <span class="text-[#edc458] font-normal">Plan for Your Needs That Fits You</span>
        </x-section-heading>

    </div>

    <!-- Pricing Cards -->
    <div class="w-[1320px] mx-auto px-5 z-30 flex justify-center items-center flex-col ">

        {{-- PLAN SWITCHER --}}
        <div class="flex justify-center !mb-20 relative">

            <div class="plan-switcher inline-flex px-2 flex-col md:flex-row rounded-full md:border md:border-[#7350F5]">
                <button onclick="changePlan('monthly')" id="btn-monthly"
                    class="active px-8 py-3 rounded-full text-white text-base font-medium">
                    MONTHLY
                </button>
                <button onclick="changePlan('yearly')" id="btn-yearly"
                    class="px-8 py-3 rounded-full text-white text-base font-medium ">
                    YEARLY
                </button>
                <button onclick="changePlan('packages')" id="btn-packages"
                    class="px-8 py-3 rounded-full text-white text-base font-medium ">
                    PACKAGES
                </button>
            </div>

        </div>

        {{-- PRICING CARDS --}}
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 
           [@media(min-width:1440px)]:grid-cols-3 
           gap-6 [@media(min-width:1440px)]:gap-0 
           items-center min-h-[689px] w-full">

            {{-- PERSONAL --}}
            <div class="!bg-[#1D253F] !w-full  rounded-2xl lg:rounded-r-none relative p-10 text-white 
               border border-[#1c2a5c] h-[590px] overflow-hidden">

                <!-- BG Images -->
                <img src="images/shapes/pricing-two-single-shape-1.png" class="absolute top-0 -left-2 z-10 opacity-10">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute bottom-3 -right-10 z-10 opacity-5 -rotate-45">
                <img src="images/shapes/pricing-two-shape-2.png" class="absolute bottom-0 -right-2 z-10 opacity-5">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute -bottom-10 right-4 z-10 opacity-5 rotate-[28deg]">

                <h3 class="text-center mb-4 text-[#edc458] font-marcellus text-xl">PERSONAL</h3>
                <h1 id="price-personal" class="text-center text-[60px] font-bold ">${{ $pricing['monthly']['personal'] }}
                </h1>

                <p class="text-center mt-4 opacity-90 text-xl">Will Get Free 3 Months Solutions Support</p>

                <div class="flex justify-center mt-6">
                    <button
                        class="hover:bg-gradient-to-r hover:from-[#7397D8] hover:to-[#7397D8] w-full z-30 px-8 py-2.5 bg-gradient-to-r from-[#6065d4] to-[#fa5674] rounded-2xl font-semibold text-white transition-all duration-300">
                        Choose Plan <i class="ri-add-circle-line w-6 h-6 font-medium ms-2"></i>
                    </button>
                </div>

                <h4 class="mt-8 font-semibold text-[#edc458] text-2xl">Feature Description</h4>

                <ul class="mt-4 space-y-4 text-[#fff] text-lg">
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Custom Website Design</li>
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Website Design & Development</li>
                    <li><i class="ri-close-circle-line"></i> Social Media Graphics</li>
                    <li><i class="ri-close-circle-line"></i> Brand Color Palette</li>
                </ul>
            </div>

            {{-- PREMIUM --}}
            <div class="bg-[#142258] rounded-2xl p-10 text-white border border-[#1c2a5c] relative overflow-hidden h-[689px]
               lg:-translate-y-6 [@media(min-width:1440px)]:-translate-y-8">

                <!-- BG Images -->
                <img src="images/shapes/pricing-two-single-shape-2.png" class="absolute top-0 -left-2 z-10 opacity-10">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute bottom-3 -right-10 z-10 opacity-5 -rotate-45">
                <img src="images/shapes/pricing-two-shape-2.png" class="absolute bottom-0 -right-2 z-10 opacity-5">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute -bottom-10 right-4 z-10 opacity-5 rotate-[28deg]">

                <h3 class="text-center text-lg mb-4 text-[#edc458] font-marcellus text-xl">PREMIUM</h3>
                <h1 id="price-premium" class="text-center text-[60px] font-bold">${{ $pricing['monthly']['premium'] }}</h1>

                <p class="text-center mt-4 opacity-90 text-xl">Will Get Free 5 Months Solutions Support</p>

                <div class="flex justify-center mt-6">
                    <button
                        class="hover:bg-gradient-to-r hover:from-[#7397D8] hover:to-[#7397D8] w-full z-30 px-8 py-2.5 bg-gradient-to-r from-[#6065d4] to-[#fa5674] rounded-2xl font-semibold text-white transition-all duration-300">
                        Choose Plan <i class="ri-add-circle-line w-6 h-6 font-medium ms-2"></i>
                    </button>
                </div>

                <h4 class="mt-8 font-semibold text-[#edc458] text-2xl">Feature Description</h4>

                <ul class="mt-4 space-y-4 text-lg text-[#fff]">
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Custom Website Design</li>
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Website Design & Development</li>
                    <li><i class="ri-close-circle-line"></i> Basic & Technical SEO</li>
                    <li><i class="ri-close-circle-line"></i> Social Media Graphics</li>
                    <li><i class="ri-close-circle-line"></i> Brand Color Palette</li>
                </ul>

                <p class="text-center font-semibold text-xl mt-12 text-[#c5c8cd]">⚡ Unlimited Offer</p>
            </div>

            {{-- BUSINESS --}}
            <div
                class="bg-[#1D253F] rounded-2xl p-10 text-white relative border border-[#1c2a5c] lg:rounded-l-none h-[590px] overflow-hidden">

                <!-- BG Images -->
                <img src="images/shapes/pricing-two-single-shape-1.png" class="absolute top-0 -left-2 z-10 opacity-10">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute bottom-3 -right-10 z-10 opacity-5 -rotate-45">
                <img src="images/shapes/pricing-two-shape-2.png" class="absolute bottom-0 -right-2 z-10 opacity-5">
                <img src="images/shapes/pricing-two-shape-2.png"
                    class="absolute -bottom-10 right-4 z-10 opacity-5 rotate-[28deg]">

                <h3 class="text-center mb-4 text-[#edc458] font-marcellus text-xl">BUSINESS</h3>
                <h1 id="price-business" class="text-center text-[60px] font-bold">${{ $pricing['monthly']['business'] }}
                </h1>

                <p class="text-center mt-4 opacity-90 text-xl">Will Get Free Lifetime Solutions Support</p>

                <div class="flex justify-center mt-6">
                    <button
                        class="hover:bg-gradient-to-r hover:from-[#7397D8] hover:to-[#7397D8] w-full z-30 px-8 py-2.5 bg-gradient-to-r from-[#6065d4] to-[#fa5674] rounded-2xl font-semibold text-white transition-all duration-300">
                        Choose Plan <i class="ri-add-circle-line w-6 h-6 font-medium ms-2"></i>
                    </button>
                </div>

                <h4 class="my-8 font-semibold text-[#edc458] text-2xl">Feature Description</h4>

                <ul class="mt-4 space-y-4 text-[#fff] text-lg">
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Custom Website Design</li>
                    <li><i class="ri-checkbox-circle-line text-[#6065d4]"></i> Website Design & Development</li>
                    <li><i class="ri-close-circle-line"></i> Social Media Graphics</li>
                    <li><i class="ri-close-circle-line"></i> Brand Color Palette</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Backgorund Gredient -->
    <div class="absolute inset-0 flex items-center justify-start pointer-events-none z-[2]">
        <div
            class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20 rounded-full blur-[100px] opacity-100 bg-[radial-gradient(circle,_rgba(67,123,205,0.4),_rgba(0,0,0,0))]">
        </div>
    </div>

</section>

<style>
    .plan-switcher>button {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .plan-switcher>button::before {
        content: "";
        position: absolute;
        inset: 0;

        background: linear-gradient(270deg, #fa5674 0%, #6065d4 100%);
        border-radius: 25px;

        transform: scaleY(0);
        transform-origin: top;
        transition: transform .4s ease;

        z-index: -1;
    }

    .plan-switcher>button.active::before {
        transform: scaleY(1);
        transform-origin: top;
    }
</style>


<script>
    const pricing = @json($pricing);

    function changePlan(plan) {
        document.getElementById("price-personal").innerText = "$" + pricing[plan].personal;
        document.getElementById("price-premium").innerText = "$" + pricing[plan].premium;
        document.getElementById("price-business").innerText = "$" + pricing[plan].business;

        document.querySelectorAll("button[id^='btn-']").forEach(btn => {
            btn.classList.remove("active");
        });

        document.getElementById("btn-" + plan).classList.add("active");
    }
</script>