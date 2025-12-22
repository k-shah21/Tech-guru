<style>
    .newsletter-two__title {
        -webkit-text-fill-color: transparent;
        font-size: 40px;
        font-weight: 500;
        line-height: 40px;
        background: linear-gradient(270deg, rgb(250, 86, 116) 0%, rgb(96, 101, 212) 100%) text;
    }


    /* RIGHT SIDE */
    .newsletter-two__right {
        width: 100%;
        max-width: 520px;
        position: relative;
    }

    .newsletter-two__input {
        position: relative;
        width: 100%;
        z-index: 1;
    }


    .newsletter-two__form button.thm-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        padding: 0 25px;
        border-radius: 16px;
        background: linear-gradient(90deg, #6065d4, #fa5674);
        color: #fff;
        font-weight: 600;
        border: none;
        cursor: pointer;
        z-index: 2;
    }


    /* Email Input */
    .newsletter-two__input input[type=email] {
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
        border-radius: 20px;
        width: 100%;
        height: 60px;
        padding: 0 180px 0 25px;
        font-size: 16px;
        outline: none;
        position: relative;
        z-index: 1;
    }


    /* Checkbox Wrapper */
    .newsletter-two__form .checked-box {
        margin-top: 14px;
    }

    .checked-box input[type=checkbox] {
        display: none;
    }

    /* Label text */
    .checked-box label {
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        font-weight: 400;
        padding-left: 30px;
        position: relative;
    }

    .checked-box label span {
        width: 20px;
        height: 20px;
        border-radius: 4px;
        position: absolute;
        top: 2px;
        left: 0;
        display: inline-block;
        background:
            linear-gradient(#131C30, #131C30) padding-box,
            linear-gradient(90deg, #6065d4, #fa5674) border-box;
        border: 1px solid transparent;
    }

    .checked-box label span:before {
        content: "";
        width: 6px;
        height: 9px;
        border-bottom: 2px solid #fff;
        border-right: 2px solid #fff;
        transform: rotate(45deg);
        opacity: 0;
        position: absolute;
        top: 4px;
        left: 6px;
    }

    .checked-box input[type=checkbox]:checked+label span:before {
        opacity: 1;
    }
</style>
<section class="flex justify-center items-center bg-[#131C30]  py-8 px-4 md:py-14 w-full overflow-hidden relative">
    <div
        class="flex flex-col xl:flex-row justify-center md:justify-between items-center text-center max-w-7xl w-full mx-auto gap-10">
        {{-- Left --}}
        <div class="">
            <div class=" [&_.flex-col]:!items-start [&_p]:!justify-start [&_h2]:!text-start">
                <x-section-heading subtitle="" align="left">
                    <span class="newsletter-two__title">Subscribe to Our Newsletter</span>
                </x-section-heading>
            </div>
            <p class="tracking-wide">Get the latest SEO tips and software insights straight to your inbox.</p>
        </div>

        <div class="newsletter-two__right">
            <form action="{{ route('newsletter.store') }}" method="POST" class="newsletter-two__form">
                @csrf

                <div class="newsletter-two__input">
                    <input type="email" name="email" placeholder="Enter your email" class="z-40">
                    <button type="submit" class="thm-btn z-40">Subscribe Now →</button>
                </div>

                <div class="checked-box text-start">
                    <input type="checkbox" id="skipper" name="terms" value="1" required>
                    <label for="skipper">
                        <span></span>
                        By subscribing, you accept our Privacy Policy
                    </label>

                </div>

            </form>
        </div>

    </div>




    <img src="images/shapes/newsletter-two-shape-1.png" alt=""
        class="absolute left-0 top-0 opacity-20 float-horizontal">

    <img src="images/shapes/newsletter-two-shape-2.png" alt=""
        class="absolute right-0 top-0 opacity-20 float-horizontal">
</section>

</section>