@props(['title'])

<style>
    .heading-bottom::before {
        content: "";
        opacity: 0.2;
        width: 1px;
        position: absolute;
        top: 0px;
        bottom: 0px;
        left: -60px;
        background: linear-gradient(rgb(96, 101, 213) 0%, rgba(250, 86, 116, 0) 100%);
        z-index: 1000;
    }
</style>
<div class="bg-[#243042]">
    <h2 class="heading-bottom">{{ $title }}</h2>

    {{ $slot }}
</div>