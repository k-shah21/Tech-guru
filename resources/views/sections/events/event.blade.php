<style>
    .event-one__btn {
        color: var(--techguru-white);
        z-index: 1;
        border-radius: 22px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 10px 24px 9px;
        font-size: 16px;
        font-weight: 500;
        display: inline-flex;
        position: relative;
        overflow: hidden;
    }

    .event-one__btn::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        background: linear-gradient(90deg, #6065d4, #fa5674);
        border-radius: 35px;
        padding: 1px;

        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;

        transition: all .5s ease;
    }

    .event-one__btn::after {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        width: 50%;
        height: 0;
        background-color: #ffd25d;
        border-radius: 22px;
        z-index: -1;
        opacity: 0;
        visibility: hidden;
        transition: all .4s ease-in-out;
    }

    .event-one__btn:hover::after {
        height: 100%;
        width: 100%;
        opacity: 1;
        visibility: visible;
    }
</style>

<section class="relative bg-[#172537] py-24 px-6 lg:px-0 overflow-hidden">
    <div class="max-w-7xl mx-auto  z-20 relative">

        <!-- TOP HEADING + BUTTON -->
        <div class="flex justify-between flex-col gap-4 items-start lg:items-center mb-16 ">

            <!-- Left Heading -->
            <div>
                <p class="mb-4 text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center gap-2">
                    <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
                    Upcoming Events
                    <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
                </p>

                <h2 class="text-2xl md:text-[40px] lg:text-4xl font-medium tracking-wide mb-6">
                    Exciting Events<span class="text-[#edc458] font-normal"> on the Horizon</span>
                </h2>
            </div>

            <!-- Contact Button -->
            <button class="thm-btn">
                Contact Us →
            </button>

        </div>


        <!-- MAIN CONTENT: LEFT VIDEO + RIGHT EVENTS -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-28">

            <!-- LEFT IMAGE / VIDEO -->
            <div class="flex justify-center col-span-4">
                <div class="relative w-full md:w-[480px] lg:w-[520px] overflow-hidden rounded-3xl shadow-xl">
                    <img src="images/resources/event-one-img-1.jpg" class="w-full h-full object-cover rounded-3xl" />

                    <!-- Play Button -->
                    <div class="absolute inset-0 flex justify-center items-center">

                        <div class="w-20 h-20 rounded-full flex justify-center items-center relative z-10">

                            <div
                                class="relative w-18 h-18 rounded-full flex justify-center items-center border border-white/30  p-4">

                                <span class="absolute inset-0 -z-10">
                                    <span
                                        class="absolute inset-0 rounded-full border border-white/30 animate-ping bg-white/30 "></span>
                                </span>

                                <!-- Play icon -->
                                <div class="w-10 h-10 bg-[#4FA0FF] rounded-full flex justify-center items-center">
                                    <i class="ri-play-fill text-white text-3xl"></i>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <!-- RIGHT EVENTS LIST -->
            <div class="flex flex-col gap-6 col-span-4 ">

                <!-- EVENT CARD -->
                <div class="bg-[#2D384E] lg:!w-[689px] rounded-3xl border border-white/5 relative overflow-hidden">

                    <div
                        class="flex justify-between flex-col xl:flex-row items-center md:items-start xl:items-center px-6 py-6 gap-2 bg-[#151C30]">
                        <div>
                            <h3 class="text-white text-2xl font-semibold">Innovation Meets</h3>
                            <p class="text-[#a8b2c5] text-md mt-1">
                                It is a long established fact that a reader will
                            </p>
                        </div>

                        <!-- TIMER -->
                        <div class="flex gap-4 text-center items-center justify-center">
                            <div>
                                <p id="days"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    97
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">DAYS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="hours"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    04
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">HRS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="minutes"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    53
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">MINS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="seconds"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    02
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">SECS</span>
                            </div>
                        </div>

                    </div>

                    <div
                        class="flex flex-col md:flex-row justify-between items-start md:items-center gap-2 pt-4 border-t border-white/10 px-6 py-4">
                        <div class="flex items-center gap-4 text-[#a8b2c5] text-md font-semibold">
                            <span class="flex items-center gap-1">
                                <i class="ri-map-pin-line text-[#edc458] text-lg font-medium"></i>
                                1629 N. Dixie Avenue
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="ri-calendar-2-line text-[#edc458] text-lg font-medium"></i>
                                March 18, 2025
                            </span>
                        </div>

                        <button class="event-one__btn">
                            Book Seat →
                        </button>
                    </div>
                </div>

                <!-- EVENT CARD -->
                <div class="bg-[#2D384E] lg:!w-[689px] rounded-3xl border border-white/5 relative overflow-hidden">

                    <div
                        class="flex justify-between flex-col xl:flex-row items-center md:items-start xl:items-center px-6 py-6 gap-2 bg-[#151C30]">
                        <div>
                            <h3 class="text-white text-2xl font-semibold">Innovation Meets</h3>
                            <p class="text-[#a8b2c5] text-md mt-1">
                                It is a long established fact that a reader will
                            </p>
                        </div>

                        <!-- TIMER -->
                        <div class="flex gap-4 text-center items-center justify-center">
                            <div>
                                <p id="days"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    97
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">DAYS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="hours"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    04
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">HRS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="minutes"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    53
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">MINS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="seconds"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    02
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">SECS</span>
                            </div>
                        </div>

                    </div>

                    <div
                        class="flex flex-col md:flex-row justify-between items-start md:items-center gap-2 pt-4 border-t border-white/10 px-6 py-4">
                        <div class="flex items-center gap-4 text-[#a8b2c5] text-md font-semibold">
                            <span class="flex items-center gap-1">
                                <i class="ri-map-pin-line text-[#edc458] text-lg font-medium"></i>
                                1629 N. Dixie Avenue
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="ri-calendar-2-line text-[#edc458] text-lg font-medium"></i>
                                March 18, 2025
                            </span>
                        </div>

                        <button class="event-one__btn">
                            Book Seat →
                        </button>
                    </div>
                </div>

                <!-- EVENT CARD -->
                <div class="bg-[#2D384E] lg:!w-[689px] rounded-3xl border border-white/5 relative overflow-hidden">

                    <div
                        class="flex justify-between flex-col xl:flex-row items-center md:items-start xl:items-center px-6 py-6 gap-2 bg-[#151C30]">
                        <div>
                            <h3 class="text-white text-2xl font-semibold">Innovation Meets</h3>
                            <p class="text-[#a8b2c5] text-md mt-1">
                                It is a long established fact that a reader will
                            </p>
                        </div>

                        <!-- TIMER -->
                        <div class="flex gap-4 text-center items-center justify-center">
                            <div>
                                <p id="days"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    97
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">DAYS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="hours"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    04
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">HRS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="minutes"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    53
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">MINS</span>
                            </div>
                            <span>:</span>

                            <div>
                                <p id="seconds"
                                    class="text-xl font-bold bg-gradient-to-r from-[#7b4dff] to-[#ff5686] bg-clip-text text-transparent">
                                    02
                                </p>
                                <span class="text-[#a8b2c5] text-xs tracking-widest font-bold">SECS</span>
                            </div>
                        </div>

                    </div>

                    <div
                        class="flex flex-col md:flex-row justify-between items-start md:items-center gap-2 pt-4 border-t border-white/10 px-6 py-4">
                        <div class="flex items-center gap-4 text-[#a8b2c5] text-md font-semibold">
                            <span class="flex items-center gap-1">
                                <i class="ri-map-pin-line text-[#edc458] text-lg font-medium"></i>
                                1629 N. Dixie Avenue
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="ri-calendar-2-line text-[#edc458] text-lg font-medium"></i>
                                March 18, 2025
                            </span>
                        </div>

                        <button class="event-one__btn">
                            Book Seat →
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>


    {{-- Background Images --}}
    <img src="images/shapes/event-one-shape-1.png" alt="" class="absolute -top-4 left-0 float-vertical z-0 opacity-10">
    <img src="images/shapes/event-one-shape-2.png" alt=""
        class="absolute -top-4 right-0 float-horizontal z-0 opacity-10">
</section>



<script>
    // Starting point: 97 days from now
    const startDays = 97;

    // Convert 97 days → milliseconds
    let countdownTime = startDays * 24 * 60 * 60 * 1000;

    function updateTimer() {
        countdownTime -= 1000;

        if (countdownTime < 0) countdownTime = 0;

        const days = Math.floor(countdownTime / (1000 * 60 * 60 * 24));
        const hours = Math.floor((countdownTime / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((countdownTime / (1000 * 60)) % 60);
        const seconds = Math.floor((countdownTime / 1000) % 60);

        // Update HTML
        document.getElementById("days").textContent = days.toString().padStart(2, '0');
        document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
    }

    // Run initially & then every second
    updateTimer();
    setInterval(updateTimer, 1000);
</script>