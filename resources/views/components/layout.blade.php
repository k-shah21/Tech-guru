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


    {{-- slick css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    {{-- slick js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <script>

        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        marcellus: ['Marcellus', 'serif'],
                        spacegrotesk: ['"Space Grotesk"', 'sans-serif'],
                    }
                     screens: {
                        '1440': '1440px',
                    },
                }
            }
        }
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


    </script>

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Tech Guru</title>
</head>


<body class="bg-[#0B192C] font-spacegrotesk w-full min-h-screen text-white">

    {{-- HEADER --}}
    <x-header.topHeader />

    {{-- MAIN CONTENT --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer.footer />



</body>

</html>