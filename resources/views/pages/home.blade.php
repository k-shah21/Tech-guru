<x-layouts.layout>

    <x-header.header />
    <x-layouts.hero bg="images/backgrounds/slider.jpg" class="relative z-0" />
    @include('sections.about.about')
    @include('sections.counter.counter')
    @include('sections.services.services')
    @include('sections.whychoseus.why-chose-us')
    @include('sections.marque.marque')
    @include('sections.workprocess.working-process')
    @include('sections.portfolio.portfolio')
    @include('sections.pricing.pricing')
    @include('sections.getintouch.getintouch')
    @include('sections.events.event')
    @include('sections.testimonials.testimonials')
    @include('sections.blogs.blogs', ['blogs' => $blogs])
    @include('sections.newsletter.newsletter')

</x-layouts.layout>