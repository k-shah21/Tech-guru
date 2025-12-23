@props(['title'])

<style>
    .parent {
        width: 100%;
    }

    .parent h2 {
        position: relative;
    }

    .parent h2::before {
        content: "";
        position: absolute;
        left: -22px;
        bottom: -9px;
        width: 333px;
        height: 1px;
        background: linear-gradient(90deg,
                #3d72fc 0%,
                rgba(92, 176, 233, 0) 100%);
    }

    .dot-shape {
        background: linear-gradient(270deg, #5cb0e9 0%, #3d72fc 100%);
        border-radius: 50%;
        width: 8px;
        height: 8px;
        display: block;
        position: relative;
    }

    .heading {
        text-transform: capitalize;
        color: #ffffff;
        font-size: 24px;
        font-weight: 500;
        line-height: 34px;
        position: relative;
    }

    @media screen and (min-width: 768px) and (max-width: 984px) {
        .parent h2::before {
            width: 633px;
        }

    }

    @media screen and (min-width: 984px) and (max-width: 2500px) {
        .parent h2::before {
            width: 283px;
        }
    }
</style>
<div class="flex flex-col justify-start items-start gap-4 p-6  bg-[#243042] mb-10 rounded-2xl
">
    <div class="parent flex justify-start items-center gap-4 mb-10">
        <div class="dot-shape"></div>
        <h2 class="heading">{{ $title }}</h2>
    </div>
    {{ $slot }}
</div>