<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahmad Giofadhil | Portofolio</title>
    <script src="https://kit.fontawesome.com/d983eb8074.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/bootstrap.js"></script>

    <style>
        :root {
            --primary: #EAEAEA;
            --secondary: #EEECF1;
            --white: #FFFFFF;
            --dark: #212529;
        }

        body {
            font-family: 'Ibarra Real Nova', serif;
            overflow-x: hidden;
        }

        #navbar {
            top: 0;
            z-index: 999999
        }

        .io:hover {
            text-decoration: underline !important;
        }

        #landing {
            background-image: url("white.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-primary {
            background-color: var(--primary) !important;
        }

        .bg-secondary {
            background-color: var(--secondary) !important;
        }

        .bg-white {
            background-color: var(--white);
        }

        .btn-io {
            background-color: var(--primary);
            color: var(--dark);
            border-color: var(--dark);
        }

        .fs-8 {
            font-size: 10px;
        }

        .fs-7 {
            font-size: 12px;
        }

        .fs-6 {
            font-size: 14px;
        }

        .fs-5 {
            font-size: 16px;
        }

        .fs-4 {
            font-size: 18px;
        }

        .fs-3 {
            font-size: 20px;
        }

        .fs-2 {
            font-size: 22px;
        }

        .fs-1 {
            font-size: 24px;
        }

        h1 {
            font-size: 48px;
        }

        .btn-dark:hover {
            background-color: var(--primary);
            color: var(--dark);
        }

        .btn-io:hover {
            background-color: var(--dark) !important;
            color: var(--primary);
        }

        @media only screen and (max-width: 700px) {
            #quotes {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div id="navbar" class="bg-transparent w-100 position-fixed">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="px-3 text-decoration-none text-dark fs-6 text-capitalize io" href="#landing">Home</a>
                    <a class="px-3 text-decoration-none text-dark fs-6 text-capitalize io" href="#timeline">Timeline</a>
                    <a class="px-3 text-decoration-none text-dark fs-6 text-capitalize io" href="#projects">Projects</a>
                    <a class="px-3 text-decoration-none text-dark fs-6 text-capitalize io" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </div>



    @yield('content')

    <div id="footer" class="bg-dark py-5 text-white">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 text-center">
                    <div id="linked-in" class="d-inline px-3"><a href="https://www.linkedin.com/in/ahmad-giofadhil-196900221/" class="text-white io text-decoration-none"><i class="fa-brands fa-linkedin fa-fw fs-3"></i><span class="fs-7">Linked In</span></a></div>
                    <div id="instagram" class="d-inline px-3"><a href="https://www.instagram.com/ioiofadhil/" class="text-white io text-decoration-none"><i class="fa-brands fa-instagram fa-fw fs-3"></i><span class="fs-7">Instagram</span></a></div>
                    <div id="copyright" class="pt-5"><span class="fs-6">© 2022 ioiofadhil. All rights reserved.</span></div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $("#navbar").addClass("bg-secondary").removeClass("bg-transparent");
            }

            if (scroll <= 100) {
                $("#navbar").addClass("bg-transparent").removeClass("bg-secondary");
            }
        });

        function Notready() {
            alert("This page is not ready yet!");
        };
    </script>

    @yield('script')
</body>

</html>
