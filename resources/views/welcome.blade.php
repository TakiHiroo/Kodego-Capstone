<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href={{ asset('css/content.css') }}>
    <script src={{ asset('js/content.js') }}></script>
    <script src="https://kit.fontawesome.com/80156a73ab.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Holisticare. </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">doctors</a>
            <a href="#book">book</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </header>

    <main>
        <section class="home" id="home">

            <div class="image">
                <img src={{ asset('img/home-img.svg') }} alt="">
            </div>

            <div class="content">
                <h3>stay safe, stay healthy</h3>
                <p>We secure your health and condition of your body, try to concult and check up to know your status.
                </p>
                <a href="/login" class="btn"> consult now <span class="fas fa-chevron-right"></span> </a>
            </div>

        </section>
        <section class="icons-container">

            <div class="icons">
                <i class="fas fa-user-md"></i>
                <h3>140+</h3>
                <p>doctors at work</p>
            </div>

            <div class="icons">
                <i class="fas fa-users"></i>
                <h3>1040+</h3>
                <p>satisfied patients</p>
            </div>

            <div class="icons">
                <i class="fas fa-procedures"></i>
                <h3>500+</h3>
                <p>bed facility</p>
            </div>

            <div class="icons">
                <i class="fas fa-hospital"></i>
                <h3>80+</h3>
                <p>available hospitals</p>
            </div>

        </section>
        <section class="services" id="services">

            <h1 class="heading"> our <span>services</span> </h1>

            <div class="box-container">

                <div class="box">
                    <i class="fas fa-notes-medical"></i>
                    <h3>free checkups</h3>
                    <p>book for free check up with our registered doctor.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>



                <div class="box">
                    <i class="fas fa-user-md"></i>
                    <h3>expert doctors</h3>
                    <p>you can check and pic your personal doctor here.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>

                <div class="box">
                    <i class="fas fa-pills"></i>
                    <h3>medicines</h3>
                    <p>we have online pharmacy so you can order it online.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>

                <div class="box">
                    <i class="fas fa-book"></i>
                    <h3>Medical Book</h3>
                    <p>We have also a medical library with a full of medical books.</p>
                    <a href="#" class="btn"> Click to see <span class="fas fa-chevron-right"></span> </a>
                </div>



            </div>

        </section>
        <section class="about" id="about">

            <h1 class="heading"> <span>about</span> us </h1>

            <div class="row">

                <div class="image">
                    <img src={{ asset('img/about-img.svg') }} alt="">
                </div>

                <div class="content">
                    <h3>we take care of your healthy life</h3>
                    <p>so we establish a easy way to contact the doctor available in your town, and help the society
                        solve the biggest problem in the country.</p>
                    <p>by using this website we assure and sercure the health of each one person in all counrty</p>
                    <a href="/about" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>

            </div>

        </section>
        <section class="doctors" id="doctors">

            <h1 class="heading"> our <span>doctors</span> </h1>

            <div class="box-container">

                <div class="box">
                    <img src={{ asset('img/doc-1.jpg') }} alt="">
                    <h3>ashley kim</h3>
                    <span>Neurologist</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src={{ asset('img/doc-2.jpg') }} alt="">
                    <h3>john mcmayer</h3>
                    <span>surgeon</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src={{ asset('img/doc-3.jpg') }} alt="">
                    <h3>kyle augustine</h3>
                    <span>physician</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src={{ asset('img/doc-4.jpg') }} alt="">
                    <h3>john deo</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src={{ asset('img/doc-5.jpg') }} alt="">
                    <h3>henry hamilton</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src={{ asset('img/doc-6.jpg') }} alt="">
                    <h3>john mcdonald</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src={{ asset('img/doc-7.jpg') }} alt="">
                    <h3>muhammad alichupa</h3>
                    <span>physical therapist</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src={{ asset('img/doc-8.jpg') }} alt="">
                    <h3>lanishka</h3>
                    <span>OB-GYN</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

            </div>

        </section>

        <section class="review" id="review">

            <h1 class="heading"> client's <span>review</span> </h1>

            <div class="box-container">

                <div class="box">
                    <img src={{ asset('img/pic-1.png') }} alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text"></p>
                </div>

                <div class="box">
                    <img src={{ asset('img/pic-2.png') }} alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text"></p>
                </div>

                <div class="box">
                    <img src={{ asset('img/pic-1.png') }} alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text"></p>
                </div>

            </div>

        </section>

    </main>

    <footer>
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
                </div>

                <div class="box">
                    <h3>our services</h3>
                    <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-mobile"></i> +639 103 673568 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> ivanbelarmino361@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>commonwealth, Quezon city 1121</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                    <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
                </div>

            </div>

            <div class="credit"> created by <span>Nugg-tech team</span> | all rights reserved </div>

        </section>
    </footer>
</body>

</html>l
