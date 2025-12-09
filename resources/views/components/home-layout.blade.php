<div {{ $attributes->merge([
    'class' => "parent relative bg-cover bg-center bg-no-repeat $class"
]) }} @if ($bg) style="background-image: url('{{ $bg }}');" @else
    style="background-image: url('/images/default-bg.jpg');" @endif>


    {{-- GRADIENT OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r 
    from-black via-black/80 via-[60%] to-transparent z-[1]">
    </div>

    <x-header.header />

    {{-- MAIN HERO CONTENT --}}
    <div class="main  relative z-10">
        <x-hero.heroMain />

    </div>

    <x-hero.bottombar />

</div>