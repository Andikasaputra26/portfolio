<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="dist/img/luffy-removebg-preview.png">
    <title>Portfolio Andika Saputra</title>
</head>
<body>
    <!-- Header Start-->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">Andika Saputra</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>

                            <li class="group">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
                            </li>

                            <li class="group">
                                <a href="#portofolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                            </li>

                            <li class="group">
                                <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                            </li>

                            <li class="group">
                                <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                            </li>

                            <li class="group">
                                <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End-->

    <!-- Hero Section Start-->
    <section id="home" class="pt-36">
        <div class="container">
             <div class="flex flex-wrap">
                <div class="w-full self-center pt-4 lg:w-1/2 ">
                    <h1 class="text-base font-semibold text-primary md:text-xl ">Halo Semua😊, Saya<span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl ">Andika Saputra</span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Web Developer & <span class="text-dark">Web Development</span></h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">Trying to do <span class="text-dark font-blod">Better</span></p>

                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi Saya</a>
                </div>
                <div class="w-full self-end- px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="./dist/img/luffy-removebg-preview.png" alt="andika" class="max-w-full mx-auto rounded-lg hover:scale-125 hover:rotate-45 hover:translate-x-16 transition">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6" d="M44.9,-53.9C56.5,-43.8,63.1,-28,67.9,-10.5C72.7,7,75.8,26.3,69.7,43.5C63.6,60.7,48.4,75.8,32.3,76.4C16.2,76.9,-0.8,62.8,-15.1,52.7C-29.3,42.6,-40.9,36.5,-54,25.5C-67.1,14.6,-81.7,-1.2,-80.3,-15C-78.8,-28.8,-61.4,-40.5,-45.3,-49.9C-29.3,-59.2,-14.6,-66.1,1,-67.3C16.7,-68.5,33.3,-64,44.9,-53.9Z" transform="translate(100 100)" />
                              </svg>
                        </span>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <!-- Hero Section End-->

    <!-- Abaout Section Start-->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2 ">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Yuk Belajar Web Progremming</h2>
                    <p class="font-medium text-base text-secondary max-xl lg:text-lg">Saya Merupakan Lulusan Dari Universitas Dipa Makassar dengan konsentrasi di bidang Teknik Informatika. Saya Seorang pembelajar yang cepat, senang mempelajari hal-hal baru, dan juga memiliki keterampilan komunikasi yang baik,serta keterampilan dalam memecahkan masalah yang baik pula</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari Berteman</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea facilis ducimus odit sequi a!</p>
                    <div class="flex items-center">
                        <!-- Youtube-->
                        <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>

                        <!-- Instagram-->
                        <a href="https://www.instagram.com/asptra_26/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- Facebook-->
                        <a href="https://web.facebook.com/acyandika1" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Abaout Section END-->

    <!--Porfolio Section Start-->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:4xl lg:text-5xl">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates enim repellendus numquam cupiditate veniam nemo ut impedit! Commodi, suscipit.</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md overflow-hidden">
                        <img src="dist/img/makan.jpg" alt="Landing Page w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><a href="https://mandikeofficial.my.id/saw-resto/" class="font-bold uppercase text-primary text-lg mb-3">Malebbi Resto</a></h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, ad.</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md overflow-hidden">
                        <img src="dist/img/705862.JPEG" alt="Landing Page w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"> <a href="https://menkorpstarpoltekbangmks.com/" class="font-bold uppercase text-primary text-lg mb-3"> Poltekbang Makassar</a></h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, ad.</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md overflow-hidden">
                        <img src="dist/img/makan.jpg" alt="Landing Page w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Andika Saputra</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, ad.</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md overflow-hidden">
                        <img src="dist/img/makan.jpg" alt="Landing Page w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Andika Saputra</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, ad.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Porfolio Section end-->
    
    <!--Client Section Start-->
    <section id="clients" class="pt-36 pb-32 bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:4xl lg:text-5xl">Yang Pernah Bekerja Sama</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates enim repellendus numquam cupiditate veniam nemo ut impedit! Commodi, suscipit.</p>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/ogo.svg.png" alt="Google">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/Gojek.svg.png" alt="Gojek">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/Grab_Logo.svg.png" alt="Grab">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/Shopee.svg" alt="Shopee">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Client Section End-->

    <!--Blog Section Start-->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                        <h2 class="font-bold text-dark text-3xl mb-4 sm:4xl lg:text-5xl">Tulisan Terkini</h2>
                        <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates enim repellendus numquam cupiditate veniam nemo ut impedit! Commodi, suscipit.</p>
                    </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?programming" alt="Progreming" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programing</h3></a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, minima.
                                <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="keyboard" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Review Keyboard GMMK Pro</h3></a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, minima.
                                <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="keyboard" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Review Keyboard GMMK Pro</h3></a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, minima.
                                <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="w-full px-4 lg:w-1/2 xl:1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?youtube" alt="cofe" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Menikmati Secangkir Kopi</h3></a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, minima.
                                <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section end-->

    <!--Client Section Start-->
    <!-- <section id="clients" class="pt-34 pb-32 bg-slate-800 bg-cover">
        <img src="dist/img/photo-1506606401543-2e73709cebb4.jpg" class="w-full bg-cover h-screen bg-no-repeat bg-scroll bg-local ">
        <div class="container ">
                    <div class="w-full px-4"> 
                        <div class=" mx-auto text-center mb-16">
                            <h4 class="font-semibold text-lg text-primary mb-2">Tentang Kami </h4>
                            <h2 class="font-bold text-white text-3xl mb-4 sm:4xl lg:text-5xl">Yang Pernah Sama-sama </h2>
                            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates enim repellendus numquam cupiditate veniam nemo ut impedit! Commodi, suscipit.</p>
                        </div>
                    </div>
                <div class="bg-fixed"></div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/logo-ovo.png" alt="Ovo">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/per.png" alt="Pertamina">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/sks.jpg" alt="Kalibre">
                    </a>

                    <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 duration-500 hoever:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/img/Shopee.svg" alt="Shopee">
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!--Client Section End-->

    <!--Contact Section Start-->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                        <h2 class="font-bold text-dark text-3xl mb-4 sm:4xl lg:text-5xl">Hubungi Kami</h2>
                        <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptates enim repellendus numquam cupiditate veniam nemo ut impedit! Commodi, suscipit.</p>
                    </div> 
            </div>

            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Pesan</label>
                        <textarea type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hoever:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Contact Section End-->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
              <h2 class="mb-5 text-4xl font-bold text-white">PORTFOLIO</h2>
              <h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
              <p>acyandika2@gmail.com</p>
              <p>Jl. Perintis Kemerdekaan No VII</p>
              <p>Makassar, Sulawesi Selatan</p>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
              <h3 class="mb-5 text-xl font-semibold text-white">Kategori Tulisan</h3>
              <ul class="text-slate-300">
                <li>
                  <a href="#" class="mb-3 inline-block text-base hover:text-primary">Programming</a>
                </li>
                <li>
                  <a href="#" class="mb-3 inline-block text-base hover:text-primary">Teknologi</a>
                </li>
                <li>
                  <a href="#" class="mb-3 inline-block text-base hover:text-primary">Gaya Hidup</a>
                </li>
              </ul>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
              <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
              <ul class="text-slate-300">
                <li>
                  <a href="#home" class="mb-3 inline-block text-base hover:text-primary">Beranda</a>
                </li>
                <li>
                  <a href="#about" class="mb-3 inline-block text-base hover:text-primary">Tentang Saya</a>
                </li>
                <li>
                  <a href="#portfolio" class="mb-3 inline-block text-base hover:text-primary">Portfolio</a>
                </li>
                <li>
                  <a href="#clients" class="mb-3 inline-block text-base hover:text-primary">Clients</a>
                </li>
                <li>
                  <a href="#blog" class="mb-3 inline-block text-base hover:text-primary">Blog</a>
                </li>
                <li>
                  <a href="#contact" class="mb-3 inline-block text-base hover:text-primary">Contact</a>
                </li>
              </ul>
            </div>
          </div>
  
          <div class="w-full border-t border-slate-700 pt-10">
            <div class="mb-5 flex items-center justify-center">
             <!-- Youtube-->
             <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>

            <!-- Instagram-->
            <a href="https://www.instagram.com/asputra_26/?hl=id" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            </a>

            <!-- Facebook-->
            <a href="https://web.facebook.com/acyandika1" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            </div>
            <p class="text-center text-xs font-medium text-slate-500">
              Dibuat dengan <span class="text-pink-500">❤️</span> oleh <a href="https://www.instagram.com/asputra_26/?hl=id" target="_blank" class="font-bold text-primary">Andika Saputra</a>, menggunakan
              <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
              <script>document.write(new Date().getFullYear())</script>
            </p>
          </div>
        </div>
      </footer>
      <!-- Footer End -->

     <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
      </a>
      <!-- Back to top End -->
    <script src="dist/js/script.js"></script>
</body>
</html>