<div class="hero-bottombar py-4 lg:py-5 xl:py-8 w-full px-9 flex flex-col md:flex-row items-center gap-6 
        border-t border-white/20 justify-between relative z-10">

    <div
        class="w-4/4 md:!w-1/3  lg:!w-1/4  flex flex-col xl:flex-row items-start gap-4 pr-6 xl:border-r border-white/30 justify-center">

        <div class="flex items-center -space-x-3">
            <img src="images/blog/blog-two-user-1.jpg" class="w-10 h-10 rounded-full" />
            <img src="images/blog/blog-two-user-3.jpg" class="w-10 h-10 rounded-full" />
        </div>

        <div class="flex flex-col">
            <img src="images/resources/main-slider-trustpilot-logo.png" class="mb-1" />

            <div class="text-sm">
                <span class="text-[#ffd25d] font-semibold">5.0 Excellent</span>
                <span class="mx-1">|</span>
                <span class="opacity-80">Reviews</span>
            </div>
        </div>
    </div>

    <div class="overflow-hidden max-w-3xl w-2/3 lg:!w-3/4">
        <div id="brandSlider" class="flex gap-20 transition-transform duration-500">
            <img src="images/brand/brand-1-1.png" class="w-32" />
            <img src="images/brand/brand-1-2.png" class="w-32" />
            <img src="images/brand/brand-1-3.png" class="w-32" />
            <img src="images/brand/brand-1-4.png" class="w-32" />
            <img src="images/brand/brand-1-5.png" class="w-32" />

            {{-- duplicates for looping --}}
            <img src="images/brand/brand-1-1.png" class="w-32" />
            <img src="images/brand/brand-1-2.png" class="w-32" />
            <img src="images/brand/brand-1-3.png" class="w-32" />
            <img src="images/brand/brand-1-4.png" class="w-32" />
            <img src="images/brand/brand-1-5.png" class="w-32" />
        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("brandSlider");
        const slideWidth = slider.children[0].offsetWidth + 30;
        let index = 0;

        setInterval(() => {
            index++;
            slider.style.transform = `translateX(${-slideWidth * index}px)`;

            if (index >= slider.children.length - 4) {
                setTimeout(() => {
                    slider.style.transition = "none";
                    slider.style.transform = "translateX(0)";
                    index = 0;

                    setTimeout(() => {
                        slider.style.transition = "transform 0.5s";
                    }, 500);
                }, 500);
            }
        }, 1500);
    });
</script>