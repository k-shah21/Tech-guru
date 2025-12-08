<style>
    .gradient-box {
        background: linear-gradient(to right, #6564d0, #ef577b);
        padding-left: 0;
        padding-right: 0;
        overflow: hidden;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .scroll-list {
        animation: scroll-left 15s linear infinite;
        display: flex;
        align-items: center;
        font-size: 18px;
        color: white;
    }

    .gradient-box:hover .scroll-list {
        animation-play-state: paused;
    }

    .scroll-list li:hover {
        cursor: pointer;
        color: #edc458;
    }

    .scroll-list li {
        display: flex;
        align-items: center;
        gap: 6px;
        transition: color 0.3s ease;
    }
</style>

<div class="py-4 overflow-hidden relative gradient-box">

    <ul class="scroll-list flex gap-10 whitespace-nowrap font-semibold text-white tracking-wide">
        <li><i class="ri-star-line text-[#edc458] me-10"></i> BRANDING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> WEBSITE</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> CYBER SECURITY</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> UI/UX DESIGNING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> DIGITAL MARKETING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> APP DEVELOPMENT</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> SEO OPTIMIZATION</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> CLOUD SOLUTIONS</li>

        <li><i class="ri-star-line text-[#edc458] me-10"></i> BRANDING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> WEBSITE</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> CYBER SECURITY</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> UI/UX DESIGNING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> DIGITAL MARKETING</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> APP DEVELOPMENT</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> SEO OPTIMIZATION</li>
        <li><i class="ri-star-line text-[#edc458] me-10"></i> CLOUD SOLUTIONS</li>
    </ul>

</div>