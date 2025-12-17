<x-layout>
    <x-home-layout bg="images/backgrounds/slider.jpg" class="relative">
        <x-hero.heroMain />
    </x-home-layout>

    <x-about.about />
    <x-counter.counter />
    <x-services.services />
    <x-whychoseus.why-chose-us />
    <x-marque.marque />
    <x-workprocess.working-process />
    {{-- <x-portfolio.portfolio /> --}}
    <x-pricing.pricing />
    <x-getintouch.getintouch />
    <x-events.event />
    <x-testimonials.testimonials />
    <x-blogs.blogs :blogs="$blogs" />
    <x-newsletter.newsletter />

</x-layout>