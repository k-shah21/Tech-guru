@props(['tags'])

<div class="tags">
    @foreach (explode(',', $tags) as $tag)
    <span>{{ trim($tag) }}</span>
    @endforeach
</div>


<style>
    .tags {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
        display: flex;
        position: relative;
    }

    .tags span:before {
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

    .tags span {
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
</style>