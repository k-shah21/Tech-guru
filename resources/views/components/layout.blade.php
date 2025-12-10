<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">


    {{-- Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>



    <script src="//unpkg.com/alpinejs" defer></script>


    <style>
        .header-sticky {
            background-color: #0b192c !important;
            transition: background-color 0.3s ease-in-out;
            border-color: transparent;
        }

        @keyframes floatY {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .float-animate {
            animation: floatY 3s ease-in-out infinite;
        }

        @keyframes step-scroll {

            0%,
            20% {
                transform: translateX(0);
            }

            25%,
            45% {
                transform: translateX(-100%);
            }

            50%,
            70% {
                transform: translateX(-200%);
            }

            75%,
            95% {
                transform: translateX(-300%);
            }

            100% {
                transform: translateX(-400%);
            }
        }

        .step-slider {
            display: flex;
            animation: step-scroll 12s infinite steps(1);
        }


        @keyframes floatWave {
            0% {
                transform: translateY(10px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(10px);
            }
        }

        .wave-animate {
            animation: floatWave 5s ease-in-out infinite;
        }

        .preview-img {
            clip-path: inset(0 100% 0 0);
            transition: clip-path 0.6s ease-out;
        }

        .preview-img.reveal {
            clip-path: inset(0 0 0 0);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.getElementById("brandSlider");
            const slideWidth = slider.children[0].offsetWidth + 30;
            let index = 0;

            setInterval(() => {
                index++;
                slider.style.transform = `translateX(${-slideWidth * index}px)`;

                if (index >= slider.children.length - 4) {
                    setTimeout(() => {
                        slider.style.transition = "none";
                        slider.style.transform = "translateX(0)";
                        index = 0;

                        setTimeout(() => {
                            slider.style.transition = "transform 0.5s";
                        }, 500);
                    }, 500);
                }
            }, 1500);
        });

        window.addEventListener("scroll", function () {
            const header = document.getElementById("mainHeader");

            if (window.scrollY > 50) {
                header.classList.add("header-sticky");
            } else {
                header.classList.remove("header-sticky");
            }
        });
    </script>

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>


    {{-- JS --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        marcellus: ['Marcellus', 'serif'],
                        spacegrotesk: ['"Space Grotesk"', 'sans-serif'],
                    }
                }
            }
        }
    </script>


    <title>Tech Guru</title>
</head>


<body class="bg-[#0B192C] font-spacegrotesk w-full min-h-screen flex flex-col text-white">

    {{-- HEADER --}}
    <x-header.topHeader />



    {{-- MAIN CONTENT --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>



</body>

</html>