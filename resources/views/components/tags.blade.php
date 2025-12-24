@props(['tags'])

<div class="tags">
    @foreach (explode(',', $tags) as $tag)
    <span>{{ trim($tag) }}</span>
    @endforeach
</div>


<style>
    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tags span {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 18px;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        border-radius: 10px;
        z-index: 0;
        cursor: pointer;
        overflow: hidden;
    }

    .tags span::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 1px;
        border-radius: inherit;
        background: linear-gradient(90deg, #5cb0e9, #3d72fc);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        z-index: -1;
    }

    .tags span::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(270deg, #5cb0e9, #3d72fc);
        border-radius: inherit;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -2;
    }

    /* HOVER EFFECT */
    .tags span:hover::after {
        opacity: 1;
    }

    .tags span:hover {
        color: #fff;
    }
</style>