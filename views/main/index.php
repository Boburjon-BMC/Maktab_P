<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Bosh sahifa</title>
    
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!--font awesome cdn-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>css/style.css"> <!--css-->
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>css/mediya.css"><!--mediya-->
    <link rel="shortcut icon" href="<?=$config['base']['url'].'web/'?>img/logo-icon-new.svg" type="image/x-icon">
    
</head>
<body>
        <div class="up_link">
            <a href="#section1_1">
                <i class="fa-solid fa-up-long"></i>
            </a>
        </div>
        
        <div class="pincipal">
                <marquee behavior="" direction="">
                    <h1>FARG'ONA SHAHRIDAGI PREZIDENT MAKTAB WEB SAYTIGA XUSH KELIBSIZ</h1>
                </marquee>
        
        </div>
        
        <!-- heder -->
        <div class="head head__top">
            <div class="head__menu container ">
                    <nav>
                        <a href="#" class="logo"><img src="<?=$config['base']['url'].'web/'?>img/6182235a66337.svg" alt=""></a>
                        <p>|</p>
                        <ul>
                            <li>
                            <a href="?view=index">Bosh sahifa
                            </a></li>
                            <li><a href="?view=yangiliklar">Yangiliklar
                            </a></li>
                            <li><a href="?view=mHayoti">Maktab hayoti
                            </a></li>
                            <li><a href="?view=jurnal">Jurnal
                            </a></li>
                            <li><a href="?view=tizim">Tizim
                            </a></li>
                            <li><a href="?view=aloqa">Aloqa</a></li>
                        </ul>
                    </nav>
                    <div class="head__menu-join">
                        <form class="drop-down">
                            <select  class="selectpicker">
                                <option>
                                   <span> O'zbek</span>
                                </option>
                                <option>
                                    <span>English</span>
                                </option>
                                <option>
                                    <span>Русский</span>
                                </option>
                            </select>
                        </form>
                        <div class="but regis_btn_open">
                            <span><i class="fa-regular fa-user"></i></span>
                        </div>
                        
        
                    </div>
                    <div class="hamburget_btn">
                        <span><i class="hamburger_icon fa-sharp fa-solid fa-bars "></i></span>
                </div>
             </div>
        </div>

        <!-- hamburger -->
        <div class="hamburger_wrap hide">
                <div class="hamburger_title">
                    <div class="hamburger_close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                        <div class="logo_hambutger">
                            <span><img src="img/6182235a66337.svg" alt=""></span>
                            <span>FARG'ONA SHAHRIDAGI PREZIDENT MAKTAB</span>
                        </div>
                        <ul>
                            <li>
                                <a href="./index.html">Bosh sahifa</a>
                            </li>
                            <li>
                                <a href="yangiliklar.html">Yangiliklar</a>
                            </li>
                            <li>
                                <a href="./media.html">Maktab hayoti</a>
                            </li>
                            <li>
                                <a href="./jurnal.html">Jurnal</a>
                            </li>
                            <li>
                                <a href="./Tizim.html">Tizim</a>
                            </li>
                            <li>
                                <a href="./Contact.html">Aloqa</a>
                            </li>
                            <li>
                                <select name="" id="">
                                    <option value="">O'zbek</option>
                                    <option value="">English</option>
                                    <option value="">Русский</option>
                                </select>
                            </li>
                        </ul>
                        <div class="hamburger_icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram "></i>
                            </a>
                        </div>
                </div>
        </div>

        <!-- regist -->
         <div class="registration_wrap">
            <div class="registration_title">
               <div class="regist_close">
                 <i class="fa-solid fa-xmark exit_regis"></i>
             </div>
             <div class="tab_wrap">
                 <button class="tabItem">Login</button>
                 <button class="tabItem">Register</button>
             </div>
             <div class="logo_regist">
                 <span><img src="img/6182235a66337.svg" alt=""></span>
                 <span>FARG'ONA SHAHRIDAGI PREZIDENT MAKTAB</span>
             </div>
             <form action="#" class="login_1 Tab_C">
                 <div class="form-group">
                     <input type="text"  class="username" required="required">
                     <span for="username" class="text_uesr"">Username</span>
                     <i class="fa-regular fa-user user_regist"></i>
                 </div>
                 <div class="form-group">
                     <input type="password" class="form-control" id="password" required="required">
                     <span for="password">Password</span>
                     <i class="fa-solid fa-lock pas_regist"></i>
                     <p class="eyes">
                         <i class="eyes_regest fa-regular fa-eye-slash"></i>
                     </p>
                 </div>
                 <div class="form-group form-group3">
                     <label for="checkbox">
                         <input type="checkbox" id="checkbox" class="checkbox_regist">
                         <p>Remember me</p>
                     </label>
                 </div>
                 <div class="regis_btn">
                     <button  class="btn registration-btn">
                         <span>Login</span>
                     </button>
                 </div>
             </form>
             <form action="" class="regest Tab_C">
                 <div class="form-group">
                     <input type="text"  class="username" required="required">
                     <span for="username" class="text_uesr"">Username</span>
                     <i class="fa-regular fa-user user_regist"></i>
                 </div>
                 <div class="form-group">
                     <input type="text"  class="username" required="required">
                     <span for="username" class="text_uesr"">Emali Address</span>
                     <i class="fa-regular fa-user user_regist"></i>
                 </div>
                 <div class="form-group">
                     <input type="password" class="form-control" id="password" required="required">
                     <span for="password">Password</span>
                     <i class="fa-solid fa-lock pas_regist"></i>
                     <p class="eyes">
                         <i class="eyes_regest fa-regular fa-eye-slash"></i>
                     </p>
                 </div>
                 <div class="form-group">
                     <input type="password" class="form-control" id="password" required="required">
                     <span for="password">Confirm Password</span>
                     <i class="fa-solid fa-lock pas_regist"></i>
                     <p class="eyes">
                         <i class="eyes_regest fa-regular fa-eye-slash"></i>
                     </p>
                 </div>
                 <div class="form-group form-group3">
                     <label for="checkbox">
                         <input type="checkbox" id="checkbox" class="checkbox_regist">
                         <p>Eslab qolish</p>
                     </label>
                 </div>
                 <div class="regis_btn">
                     <button  class="btn registration-btn">
                         <span>kirish</span>
                     </button>
                 </div>         
             </form>

            </div>
         </div>

      <!-- main -->
       <?php
         include $config['base']['path'].'views/model/'.$view.'.php';
       ?>
       
       <!-- footer -->
       <div class="section7 container-fluid">    
        <div class="header">
            <div class="container section7_content">
                <ul class="section7_text_wrap">
                    <li>
                        <div class="text_a">
                            <p>Ijtimoiy tarmoqlar
                            </p>
                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <span><i class="fa-brands fa-telegram"></i></span>
                                    <span>telegram</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-brands fa-facebook-f"></i></span>
                                    <span>facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-brands fa-youtube"></i></span>
                                    <span>youtube</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                    <span>instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-brands fa-twitter"></i></span>
                                    <span>twitter</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <div class="text_a">
                            <p>Bizning manzil
                            </p>
                        </div>
                        <ul>
                            <li>
                                <a href="https://yandex.uz/maps/10336/phergana/house/Y0gYcQ5gQE0BQFpqfX92dntkZA==/?azimuth=5.092816215780344&from=mapframe&ll=71.790420%2C40.377354&tilt=0.8726646259971648&z=18.77">
                                    <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                    <span>Farg'ona sh.,Qashqar k., 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <span>+99890 000 00 00</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <span>+99890 000 00 00</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <span>info@gmail.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <span>info@gmail.com</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="https://yandex.uz/maps/10336/phergana/house/Y0gYcQ5gQE0BQFpqfX92dntkZA==/?azimuth=5.092816215780344&from=mapframe&ll=71.790420%2C40.377354&tilt=0.8726646259971648&z=18.77">
                            <img src="<?=$config['base']['url'].'web/'?>img/loc.png" class="img-fluid" alt="">
                        </a>
                    </li>
                    <li class="li4">
                        <div class="img_a">
                            <div class="img" style="background-image: url('<?=$config['base']['url'].'web/'?>img/6182235a66337.svg')"></div>
                        </div>
                        <div class="img_b">
                            <p>
                                Barcha huquqlar himoyalangan. Saytdagi barcha huquqlar O'zbekiston Respublikasi qonunlariga, shu jumladan mualliflik huquqi va turdosh huquqlarga muvofiq himoya qilinadi. Sayt materiallaridan foydalanganda, Farg'ona Shahr Prezident Maktab web Saytiga havola ko'rsatilishi shart. <br>
                                Diqqat! Agar siz matnda xatoliklarni aniqlasangiz, ularni belgilab, ma`muriyatni xabardor qilish uchun <a href="#" id="a12">admin xabar</a> tugmalarini bosing
                            </p>
                        </div>
                        <div class="img_c"></div>
                    </li>
                </ul>
            </div>
            <!--Content before waves-->
                <div class="inner-header flex">
                <!--Just the logo.. Don't mind this-->
                        <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                    <g>
                        <path fill="#fff"
                            d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                            C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                            c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                    </g>
                </div>
    
         <!--Waves Container-->
                <div >
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>
                </div>

        </div>
            
       </div>   

        <script src="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-3.6.4.min.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.carousel.min.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/jQuery.js"></script>   
        <script src="<?=$config['base']['url'].'web/'?>js/app.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/script_index.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/aloqa.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/statistika.js"></script>
        <script src="<?=$config['base']['url'].'web/'?>js/jurnal.js"></script>
    </body>
</html>