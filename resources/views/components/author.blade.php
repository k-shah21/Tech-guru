<style>
    .author {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 4px 15px 4px 4px;
        position: absolute;
        top: 91px;
        left: 42px;
        transform: translate(-50%, -50%) rotate(90deg);
        z-index: 10;
        border-radius: 40px;
    }


    .author-img {
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: block;
        position: relative;
        overflow: hidden;
        transform: rotate(-90deg);
    }

    .author-title {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
    }
</style>

<!-- Author -->
<div class="author tracking-widest">
    <div class="author-img">
        <img src="{{ asset('images/blog/blog-two-user-3.jpg') }}" height="32" width="32" />
    </div>
    <p class="author-title">
        John Walk
    </p>
</div>