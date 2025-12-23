<style>

</style>

<section class="relative bg-[#172537] py-24 px-6 lg:px-0 overflow-hidden">
    <div class="max-w-7xl mx-auto z-20 relative">

        <!-- TOP HEADING + BUTTON -->
        <div class="flex justify-between flex-col xl:flex-row gap-4 items-start mb-16">

            <!-- Left Heading -->
            <div>
                <x-section-heading subtitle="Upcoming Events" align="left">
                    Exciting Events<span class="text-[#edc458] font-marcellus font-normal"> on the Horizon</span>
                </x-section-heading>
            </div>

            <!-- Contact Button -->
            <button class="thm-btn">
                Contact Us →
            </button>

        </div>


        <!-- MAIN CONTENT: LEFT VIDEO + RIGHT EVENTS -->
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-24 xl:gap-28">

            <!-- LEFT IMAGE / VIDEO -->
            <div class="flex justify-center  md:max-w-[660px] xl:w-full mx-auto col-span-1 xl:col-span-5 ">
                <div class="relative w-full md:w-[480px] lg:!w-[620px] overflow-hidden rounded-3xl shadow-xl">
                    <img src="{{ asset('images/resources/event-one-img-1.jpg') }}" class="w-full h-full object-cover rounded-3xl" />

                    <!-- Play Button -->
                    <div class="absolute inset-0 flex justify-center items-center cursor-pointer">

                        <div class="w-20 h-20 rounded-full flex justify-center items-center relative z-10">

                            <div
                                class="group relative w-24 h-24 rounded-full flex justify-center items-center border border-white/30  p-4">

                                <span class="absolute inset-0 -z-10">
                                    <span
                                        class="absolute inset-0 rounded-full border border-white/30 animate-ping bg-white/30 "></span>
                                </span>

                                <!-- Play icon -->
                                <div class="w-16 h-16 bg-[#4FA0FF] group-hover:bg-[#edc458] group-hover:text-black transition-colors duration-500 rounded-full flex justify-center items-center">
                                    <i class="ri-play-fill text-white text-4xl group-hover:text-black"></i>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <!-- RIGHT EVENTS LIST -->
            <div class="flex flex-col gap-6 md:max-w-[660px] xl:w-full mx-auto col-span-1 xl:col-span-7 ">

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
    const startDays = 97;

    let countdownTime = startDays * 24 * 60 * 60 * 1000;

    function updateTimer() {
        countdownTime -= 1000;

        if (countdownTime < 0) countdownTime = 0;

        const days = Math.floor(countdownTime / (1000 * 60 * 60 * 24));
        const hours = Math.floor((countdownTime / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((countdownTime / (1000 * 60)) % 60);
        const seconds = Math.floor((countdownTime / 1000) % 60);

        document.getElementById("days").textContent = days.toString().padStart(2, '0');
        document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
    }

    updateTimer();
    setInterval(updateTimer, 1000);
</script>