@props(['bg'])
<div {{ $attributes->merge(['class' => 'parent relative overflow-hidden']) }}>

    <!-- BACKGROUND IMAGE LAYER -->
    <div
        id="hero-bg-img"
        class="absolute inset-0 bg-center bg-cover transition-transform duration-[1000ms] ease-linear"
        style="background-image: url('{{ $bg ?? '/images/default-bg.jpg' }}');">
    </div>


    <!-- GRADIENT OVERLAY -->
    <div
        class="absolute inset-0 bg-gradient-to-r
               from-black via-black/70 via-[40%] to-transparent z-[1] ">
    </div>

    <!-- MAIN HERO CONTENT -->
    <div class="relative z-10 pt-28 lg:pt-[103px]">
        @include('sections.hero.heromain')
    </div>

    <!-- HERO BOTTOM BAR -->
    @include('sections.hero.herobottom')
</div>
<style>
    #hero-bg-img {
        transform: scale(1);
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    @keyframes zoomIn {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.05);
        }
    }

    .hero-zoom {
        animation: zoomIn 5s linear forwards;
    }
</style>