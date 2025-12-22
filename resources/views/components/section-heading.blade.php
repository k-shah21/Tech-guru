@props(['subtitle', 'align' => 'left'])

<div {{ $attributes->merge(['class' => 'flex flex-col ' . ($align === 'center' ? 'items-center text-center' : 'items-start text-start')]) }}>
    @if (!empty($subtitle))
        <p class="text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center {{ $align === 'center' ? 'justify-center' : 'justify-start' }} gap-2">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
            {{ $subtitle }}
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>
    @endif

    <h2 class="text-4xl md:text-[40px] font-bold my-6 font-marcellus text-white">
        {{ $slot }}
    </h2>
</div>
