<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <title>Fangki Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('/css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">
</head>

<body>
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="index.html" class="navbar-brand mx-auto mx-lg-0">Ki.dev</a>

            <div class="d-flex align-items-center d-lg-none">
                <a class="custom-btn btn custom-link" href="#section_2">Download CV</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Experiences</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Projects</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <button class="custom-btn btn custom-link" type="button" id="showResume">Curriculum Vitae</button>
                </div>
            </div>

        </div>
    </nav>

    <main>

        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 justify-content-center align-items-center">
                        <div class="hero-text">
                            <div class="hero-title-wrap d-flex align-items-center mb-4 justify-content-center">
                                <img src="{{asset('/images/profile-photo.png')}}"
                                    class="avatar-image avatar-image-large img-fluid" alt="">

                                <h1 class="hero-title text-center ms-3 mb-0">Hello everyone!</h1>
                            </div>
                            <div class="hero-title-wrap d-flex align-items-center mb-4 justify-content-center">
                                <h5 class="hero-title ms-3 mb-0 fs-5">I'm <span class="text-bold text-secondary">Fangki Igo Pramana</span>, <br> a Software Developer</h5>
                            </div>

                            <div class="d-flex flex-row justify-content-center mb-3 gap-3">
                                <div class="p-4 rounded-circle btn btn-light">
                                    <a href="https://www.instagram.com/fangki_ip/">
                                        <img src="{{asset('/svg/instagram-icon.svg')}}" width="30" height="30" alt="Instagram Icon">
                                    </a>
                                </div>
                                <div class="p-4 rounded-circle btn btn-light">
                                    <a href="https://github.com/fangkiigopramana">
                                        <img src="{{asset('/svg/github-icon.svg')}}" width="30" height="30" alt="Github Icon">
                                    </a>
                                </div>
                                <div class="p-4 rounded-circle btn btn-light">
                                    <a href="https://www.linkedin.com/in/fangki-igo-pramana-a44517216/">
                                        <img src="{{asset('/svg/linkedin-icon.svg')}}" width="30" height="30" alt="Linkedin Icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#535da1" fill-opacity="1"
                    d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
                </path>
            </svg>
        </section>

        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="{{asset('/images/about-me-photo.jpg')}}" class="about-image img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">
                            <div class="section-title-wrap align-items-start mb-4">
                                <h2 class="text-white text-start mb-0">About Me</h2>
                            </div>
                            <p>Computer Engineering student at Diponegoro University with a passion and ability in the field of web development. Possessing strong programming logic and familiarity with using PHP and Javascript
                                programming languages to build websites. Has designed and developed several websites/applications. Currently
                                seeking new experiences in developing information systems for websites or business software</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="featured section-padding mb-0" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="section-title-wrap align-items-start w-50">
                        <h2 class="text-white text-start mb-0">Experiences</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column flex-md-row gap-4 py-md-5 align-items-start justify-content-start">
                            <div class="list-group w-full">
                                @foreach ($experiences as $experience)                                    
                                <div class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0 border-bottom" aria-current="true">
                                    <div class="d-flex gap-2 justify-content-between">
                                        <div class="w-100">
                                            <h5 class="mb-1">{{Str::of($experience->job_name)->apa()}}</h6>
                                            <small class="opacity-50 text-now">{{\Carbon\Carbon::make($experience->month_start)->format('F Y') . " - " . \Carbon\Carbon::make($experience->month_end)->format('F Y')}}</small>
                                            <div class="my-3">
                                                <img src="{{$experience->company_photo}}" alt="Company Photo" width="32" height="32" class="rounded-circle flex-shrink-0 mx-0 px-0">
                                                <h7 class="fw-semibold mb-5">{{$experience->company_name}}</h7>
                                            </div>
                                            <ol class="list-group list-group-numbered list-group-flush">
                                                @foreach (explode('|', $experience->describe) as $index=> $desc)
                                                    <li class="list-group-item">{{$desc}}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clients section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="section-title-wrap align-items-center mb-4 w-100">
                        <h2 class="text-white text-center mb-0">Skills</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/js-icon.svg')}}" alt="Javascript Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/php-icon.svg')}}" alt="PHP Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/laravel-icon.svg')}}" alt="Laravel Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/react-icon.svg')}}" alt="React Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/bootstrap-icon.svg')}}" alt="Bootstrap Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/tailwind-icon.svg')}}" alt="Tailwind Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/mysql-icon.svg')}}" alt="Mysql Icon">
                    </div>
                    <div class="col-lg-3 col-4 ms-auto clients-item-height">
                        <img class="clients-image img-fluid" src="{{asset('svg/postman-icon.svg')}}" alt="Postman Icon">
                    </div>

                </div>
            </div>
        </section>

        <section class="projects section-padding" id="section_5">
            <div class="container">
                <div class="row">
                    <div class="section-title-wrap align-items-start mb-4 w-50">
                        <h2 class="text-white text-start mb-0">Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="clearfix"></div>

                    @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <a href="{{$project->link_demo}}">
                                <div class="projects-info">
                                    <h3 class="projects-title">{{$project->name}}</h3>
                                    <small class="projects-tag fw-bold">{{$project->tools}}</small>
                                    <img src="{{$project->thumbnail}}" class="my-3" style="max-width: 200px" alt="">
                                    <p class="align-content-between" style="font-size: 17px">{{$project->describe}}</p>
                                </div>
                            </a>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="copyright-text-wrap">
                        <p class="mb-0">
                            <span class="copyright-text">Fangki Igo Pramana Portfolio Website @ {{\Carbon\Carbon::now()->format('d F Y')}}</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('/js/click-scroll.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/magnific-popup-options.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const btnShowResume = document.getElementById('showResume');
        console.log(btnShowResume); 
        btnShowResume.addEventListener('click', () => {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "CV Belum Tersedia!",
            });
        });
    </script>

</body>

</html>