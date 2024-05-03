<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/main.css">

</head>
<body style="overflow-x: hidden;">
    <div class="wrapper" style="overflow-x: hidden;">
        <div class="modal">
                <div class="login">
                    <div class="container py-2" style="height: 50vh;">


                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                  <button onclick="x_btn()"  class="x_btn"><h4>X</h4></button>  
                                  <div class="mb-md-5 mt-md-4 ">
                      
                                    <h3 class="fw-bold mb-4 text-uppercase">Registration</h3>
                                  <form action="register.php" method="post" class="mb-4">
                                      <input type="text" required placeholder="Login" name="login" class="form-control form mb-2">
                                      <input type="text" required placeholder="Password" name="pass" class="form-control form mb-2">
                                      <input type="text" required placeholder="Repeat-password" name="repeatpass" class="form-control form mb-2">
                                      <input type="email" required placeholder="Email" name="email" class="form-control form mb-4">
                                      <button type="submit" class="btn btn-outline-light btn-lg px-5">Sign</button>
                                  </form>
                                  <h3 class="fw-bold mb-4 text-uppercase">Login</h3>
                                  <form action="login.php" method="post">
                                      <input required type="text" placeholder="Login" name="login" class="form-control form mb-2">
                                      <input required type="password" placeholder="Password" name="pass" class="form-control form mb-4">
                                      <button type="submit" class="btn btn-outline-light btn-lg px-5 ">Login</button>
                                  </form>
                                  </div>
                      
                                </div>
                              </div>
                            </div>
                          </div>


                    </div>
            
                   </div> 



            </div>
        </div>
        <header class="header" style="background: url(./images/chevrolet-tahoe-z71-2021-5k-zu.jpg);">  
            <div class ="container">
                    <div class="header_row">
                        <div class="header_menu">
                            <div class="header_menu-logo">
                                <h1>Uzavto GM</h1>
                            </div>
                            <div class="header_menu-navbar">
                                <a href="#" class="header_menu-navbar-item">Модели</a>
                                <a href="#" class="header_menu-navbar-item">Финансы</a>
                                <a href="#" class="header_menu-navbar-item">Новости</a>                                
                            </div>
                            <div class="header_menu-logo2">

                                    <i class="fa-solid fa-cart-shopping nav_btnw" ></i>
                                <button class="nav_btn">
                                    <i class="fa-regular fa-user nav_btn"></i>
                                </button>
                            </div>
                            <div class="header_menu-logo3">
                                <button class="i"><i class="fa-solid fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="header_title">
               
                            
                        </div>
                        <div class="header_btn">
                            <button>Машины</button>
                            <button>Модели</button>
                        </div>
                    </div>
                </div>
        </header>

        <main class="main">
            <div class="container">
                <div class="section">
                    <div class="main_title">
                        <h1>We are Future</h1>
                        <p>Future is a collective initiative by EV industry leaders to <br> streamline and reinvent the automotive experience.</p>
                 
                    <div class="main_title2">
                        <a href="#" class="general__href1">See all members ></a>
                    </div>
                </div>                       
            </div>
            <div class="main_cars">
                    <img src="./images/chevrolet logo.webp" alt="car">
                    <img src="./images/hyundai logo.webp" alt="car">
                    <img src="./images/mercedes logo.webp" alt="car">
                    <img src="./images/bmw logo.webp" alt="car">
            </div>
            <section class="section2">
                <div class="container">
                    <div class="section2_row">
                        <div class="section2_title">
                            <h1>Meeth the All-in-One EV Platform</h1>
                            <p>At Future, we believe buying a car should be as simple as buying any other electronic.</p>
                        </div>
                        <div class="section2_title2">
                            <h1>Online Shop</h1>
                            <p>Browse inventory ></p>
                        </div>
                        <div class="section2_cars">
                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images/malibu2.jpg" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Malibu </h2>
                                    <h1>$30.000</h1>
                                </div>

                                
                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>

                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images/cobalt.webp" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Cobalt </h2>
                                    <h1>$13.000</h1>
                                </div>
                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>

                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images/spark.webp" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Spark </h2>
                                    <h1>$9.000</h1>
                                </div>

                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>
                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images/gentrA.webp" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Gentra </h2>
                                    <h1>$15.000</h1>
                                </div>
                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>
                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images//BIRNASA.webp" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Tracker </h2>
                                    <h1>$10,463</h1>
                                </div>
                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>
                            <div class="section2_cars-box">
                                <div class="section2_cars-box-img">
                                    <img src="./images/bmw m5.webp" alt="car">
                                </div>
                                <div class="section2_cars-box-about">
                                    <h2>Canoo Lifestyle (Base) </h2>
                                    <h1>$34,000</h1>
                                </div>
                                <div class="section2_cars-box-btn">
                                    <button>BUY</button>
                                    <h3>Customize</h3>
                                </div>
                            </div>
         
            </section>

            <div class="section3_row">
                <div class="section3_left">
                    <h1>Financing & Insurance</h1>
                    <p> One intuitive platform. Cash, loan, or lease all inside your account with Future Finance. Integrate seamlessly with your insurance provider or use Future Insurance when you buy online.
                    </p>
                    <h3>Learn more ></h3>
                </div>
                <div class="section3_right">
                    <img src="./images/cobalt.webp" alt="">
                </div>
            </div>
            <div class="car_info">
                <div class="info-img">
                    <img class="info-img-img" src="./images/monza.webp" alt="gntra">
                </div>
                <div class="info-title">
                    <ul class="title-ul">
                        <li>Год выпуска - 2024</li><br>
                        <li>Двигатель - 2,3л</li><br>
                        <li>Общий вес - 1260кг</li><br>
                        <li>Расход топлива - 5,9л</li><br>
                        <li>Обьем багажника - 405л</li>

                    </ul>
                </div>
            </div>
            <div class="car_info">
                <div class="info-img">
                    <img class="info-img-img" src="./images/nexia3.webp" alt="gntra">
                </div>
                <div class="info-title">
                    <ul class="title-ul">
                        <li>Год выпуска - 2024</li><br>
                        <li>Двигатель - 2,7л</li><br>
                        <li>Общий вес - 1200кг</li><br>
                        <li>Расход топлива - 5,9л</li><br>
                        <li>Обьем багажника - 380л</li>

                    </ul>
                </div>
            </div>
        </main>

        <div class="footer_section">

            <div class="footer_section-body2">
                 <img src="./images/chevrolet-logo-5.svg" alt="">
            </div>
        </div>
        <footer class="footer container">

            <div class="footer__row">

                <div class="footer__row-logo">
                    <img src="./images/chevrolet-logo-5.svg" alt="img1">
                </div>
                <div class="company">
                    <h3>О компании</h3>
                    <a href="#">О Бренде</a>
                    <a href="#">О Компании </a>
                    <a href="#">Партнёрам </a>
                    <a href="#"> Отзывы </a>
                    <a href="#">Контакты </a>
                    
                </div>
                <div class="catalog">
                    <h3>Каталог</h3>
                    <a href="#">ПОМОЩ</a>
                    <a href="#">БРЕНДЫ</a>
                    <a href="#">О КОМПАНИИ</a>
                    <a href="#">НОВОСТИ</a>
                    <a href="#">АКЦИИ</a>
                </div>
                <div class="contact">
                        <h3>Контакты</h3>
                        <ul class="contacts">
                            <li>
                                <span>Ургенч</span>
                                <a href="tel:+998992121540" class="contact-phone">
                                    +998 (99) 212-15-40 
                                </a>
                            </li>
                            <li>
                                <span>Ургенч</span>
                                <a href="tel:+998992121540" class="contact-phone">
                                    +998 (99)  
                                    <br>
                                    <span>(многоканальный)</span>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>

        </footer>

  
        <script src="./js/app.js"> 

        </script>
    </div>
</body>
</html>