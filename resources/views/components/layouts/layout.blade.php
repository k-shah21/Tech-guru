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

    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">


    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">


    <!-- Slick css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <!-- Slick js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Alpine Js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">



    <style>
        .cursor-circle {
            position: fixed;
            width: 25px !important;
            height: 25px !important;
            border-radius: 50%;
            background: transparent;
            border: 1px solid #edc458;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s, background 0.3s, border-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cursor-inner {
            position: fixed;
            width: 10px !important;
            height: 10px !important;
            border-radius: 50%;
            background: #edc458;
            pointer-events: none;
            opacity: .5;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: transform 0.1s, background 0.3s;
        }

        .interactive {
            color: #6ee7b7;
            font-weight: bold;
        }

        .cursor-type {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .cursor-btn {
            padding: 10px 20px;
            background: rgba(110, 231, 183, 0.2);
            border: 1px solid rgba(110, 231, 183, 0.5);
            color: #6ee7b7;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .cursor-btn.active {
            background: rgba(110, 231, 183, 0.8);
            color: #1a1a2e;
            font-weight: bold;
        }

        .cursor-btn:hover {
            background: rgba(110, 231, 183, 0.4);
        }



  
       
    </style>
    <title>Tech Guru</title>
</head>


<body class="bg-[#0B192C] w-full text-white">


    <div class="cursor-circle" id="cursorCircle"></div>
    <div class="cursor-inner" id="cursorInner"></div>
    <!-- HEADER -->
    <x-header.topHeader />

    <!-- MAIN CONTENT -->
    <main class="flex-grow relative">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer.footer />



    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        marcellus: ['Marcellus', 'serif'],
                        spacegrotesk: ['"Space Grotesk"', 'sans-serif'],
                    },
                    screens: {
                        '1440': '1440px',
                    },

                }
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Get cursor elements
            const cursorCircle = document.getElementById('cursorCircle');
            const cursorInner = document.getElementById('cursorInner');

            // Get control elements (optional)
            const smoothnessSlider = document.getElementById('smoothness');
            const sizeSlider = document.getElementById('size');
            const smoothnessValue = document.getElementById('smoothnessValue');
            const sizeValue = document.getElementById('sizeValue');

            // Cursor type buttons (optional)
            const typeCircled = document.getElementById('typeCircled');
            const typeDot = document.getElementById('typeDot');
            const typeBoth = document.getElementById('typeBoth');

            // Mouse position
            let mouseX = 0;
            let mouseY = 0;
            let circleX = 0;
            let circleY = 0;
            let innerX = 0;
            let innerY = 0;

            // Smoothness factor (how much to delay the cursor movement)
            let smoothness = 0.15;
            let cursorSize = 60;

            // Update smoothness from slider
            if (smoothnessSlider && smoothnessValue) {
                smoothnessSlider.addEventListener('input', function() {
                    smoothness = parseFloat(this.value);
                    smoothnessValue.textContent = smoothness.toFixed(2);
                });
            }

            // Update size from slider
            if (sizeSlider && sizeValue) {
                sizeSlider.addEventListener('input', function() {
                    cursorSize = parseInt(this.value);
                    cursorCircle.style.width = `${cursorSize}px`;
                    cursorCircle.style.height = `${cursorSize}px`;
                    cursorCircle.style.fontSize = `${cursorSize / 2.5}px`;
                    sizeValue.textContent = `${cursorSize}px`;
                });
            }

            // Cursor type selection
            if (typeCircled) {
                typeCircled.addEventListener('click', function() {
                    setActiveButton(typeCircled);
                    cursorCircle.style.display = 'flex';
                    cursorInner.style.display = 'none';
                });
            }

            if (typeDot) {
                typeDot.addEventListener('click', function() {
                    setActiveButton(typeDot);
                    cursorCircle.style.display = 'none';
                    cursorInner.style.display = 'flex';
                });
            }

            if (typeBoth) {
                typeBoth.addEventListener('click', function() {
                    setActiveButton(typeBoth);
                    cursorCircle.style.display = 'flex';
                    cursorInner.style.display = 'flex';
                });
            }

            function setActiveButton(activeButton) {
                if (typeCircled && typeDot && typeBoth) {
                    [typeCircled, typeDot, typeBoth].forEach(btn => {
                        btn.classList.remove('active');
                    });
                    activeButton.classList.add('active');
                }
            }

            // Track mouse position
            document.addEventListener('mousemove', function(e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            // Animate cursor elements
            function animateCursor() {
                // Calculate new positions with smoothing
                circleX += (mouseX - circleX) * smoothness;
                circleY += (mouseY - circleY) * smoothness;

                innerX += (mouseX - innerX) * smoothness * 3; // Inner cursor moves faster
                innerY += (mouseY - innerY) * smoothness * 3;

                // Apply new positions
                if (cursorCircle) {
                    cursorCircle.style.left = `${circleX}px`;
                    cursorCircle.style.top = `${circleY}px`;
                }

                if (cursorInner) {
                    cursorInner.style.left = `${innerX}px`;
                    cursorInner.style.top = `${innerY}px`;
                }

                // Continue animation
                requestAnimationFrame(animateCursor);
            }

            // Start animation
            animateCursor();

            // Interactive effects on hover
            const interactiveElements = document.querySelectorAll('a, button, input, textarea, select, .card, .cursor-btn, .controls, .interactive');

            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    if (cursorCircle) {
                        cursorCircle.style.width = `${cursorSize * 1.2}px`;
                        cursorCircle.style.height = `${cursorSize * 1.2}px`;
                        cursorCircle.style.background = 'rgba(212, 175, 55, 0.1)';
                        cursorCircle.style.borderColor = 'rgba(212, 175, 55, 1)';
                    }
                    if (cursorInner) {
                        cursorInner.style.background = 'rgba(255, 255, 255, 0.9)';
                    }
                });

                element.addEventListener('mouseleave', function() {
                    if (cursorCircle) {
                        cursorCircle.style.width = `${cursorSize}px`;
                        cursorCircle.style.height = `${cursorSize}px`;
                        cursorCircle.style.background = 'transparent';
                        cursorCircle.style.borderColor = '#D4AF37';
                    }
                    if (cursorInner) {
                        cursorInner.style.background = '#D4AF37';
                    }
                });
            });

            // Hide cursor when leaving window
            document.addEventListener('mouseleave', function() {
                if (cursorCircle) cursorCircle.style.opacity = '0';
                if (cursorInner) cursorInner.style.opacity = '0';
            });

            document.addEventListener('mouseenter', function() {
                if (cursorCircle) cursorCircle.style.opacity = '1';
                if (cursorInner) cursorInner.style.opacity = '1';
            });

            // Initialize size
            if (cursorCircle) {
                cursorCircle.style.width = `${cursorSize}px`;
                cursorCircle.style.height = `${cursorSize}px`;
                cursorCircle.style.fontSize = `${cursorSize / 2.5}px`;
            }
        });
    </script>
</body>

</html>