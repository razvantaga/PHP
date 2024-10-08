<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Style switcher -->
    <link rel="stylesheet" href="color.css" class="alternate-style" title="color">
</head>

<body>
    <!-- Main container start -->
    <div class="main-container">
        <!-- Aside start -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>S</span>tefan</a>
            </div>

            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
                <li><a href="#portofolio"><i class="fa fa-briefcase"></i>Portofolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
        </div>
        <!-- Aside start end -->

        <!-- Main content start -->
        <div class="main-content">
            <!-- Home section start -->
            <section class="home section" id="home">
                <i class="bx bx-moon change-theme" id="theme-button" style="margin-top: 30px; font-size: 20px; cursor: pointer;"></i>
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, I'm <span class="name">Taga Stefan Razvan</span></h3>
                            <a href="#about" class="btn hire-me">More about me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="images/me.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home section end -->

            <!-- About section start -->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content">
                            <div class="row">
                                <div class="about-text">
                                    <h3>I'm <span>web developer</span>, <span>student</span>.</h3>
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum molestiae autem magni nulla facilis aut recusandae odit dolor fugit? Cupiditate tempora ut impedit esse doloribus eligendi exercitationem odio minus. In accusantium et saepe. Odio natus ipsa architecto excepturi, sit distinctio atque repellendus, ducimus eum ab esse, asperiores rerum voluptas vel.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>25 Jun 1997</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone : <span> +1234567890 </span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Mail : <span> test@yahoo.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Gmail : <span>test@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Iasi, Romania</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Adress : <span>Str. Strada, nr. 00, Iasi</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>GitHub : <span>https://github.com/setafantaga</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a download="" href="ecv_template_ro.odt" class="btn">Download CV</a>
                                            <a href="#contact" class="btn hire-me">Hire me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%"></div>
                                                <div class="skill-percent">76</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 66%"></div>
                                                <div class="skill-percent">66</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 86%"></div>
                                                <div class="skill-percent">86</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 96%"></div>
                                                <div class="skill-percent">96</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Laravel</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 66%"></div>
                                                <div class="skill-percent">66</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- Timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2012 - 2016
                                                    </h3>
                                                    <h4 class="timeline-title">Liceul Teoretic "Al. I. Cuza" Iasi</h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2016 - 2018
                                                    </h3>
                                                    <h4 class="timeline-title">Facultatea de Automatica si Caculatoare, Iasi</h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2018 - 2022
                                                    </h3>
                                                    <h4 class="timeline-title">Facultatea de Informatica Iasi </h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- Timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 09.2020 - 02.2021
                                                    </h3>
                                                    <h4 class="timeline-title">Agent Vanzari DIGI</h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 02.2021 - 04.2021
                                                    </h3>
                                                    <h4 class="timeline-title">Suport Relatii Clienti, OPEN MIND</h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 07.2021 - 10.2021
                                                    </h3>
                                                    <h4 class="timeline-title">Agent Vanzari OPTIMA</h4>
                                                    <p class="timeline-text">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo ipsam id voluptas labore dolore itaque dolorum aliquam? Animi, nobis.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section end -->

            <!-- Services section start -->
            <section class="service section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Service item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Web developer</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex necessitatibus, sequi similique ut provident consectetur quod maxime perspiciatis maiores.</p>
                            </div>
                        </div>
                        <!-- Service item end -->
    
                         <!-- Service item start -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Student</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex necessitatibus, sequi similique ut provident consectetur quod maxime perspiciatis maiores.</p>
                            </div>
                        </div>
                        <!-- Service item end -->
    
                         <!-- Service item start -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-cross"></i>
                                </div>
                                <h4>Voluntary</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex necessitatibus, sequi similique ut provident consectetur quod maxime perspiciatis maiores.</p>
                            </div>
                        </div>
                        <!-- Service item end -->
                    </div>
                </div>
            </section>
            <!-- Services section end -->

            <!-- Portofolio section end -->
            <section class="portofolio section" id="portofolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portofolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portofolio-heading padd-15">
                            <h2>My last projects: </h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Portofolio item start -->
                        <div class="portofolio-item padd-15">
                            <div class="portofolio-item-inner shadow-dark">
                                <div class="portofolio-img">
                                    <img src="images/laravel.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Portofolio item end -->
                    </div>
                </div>
            </section>
            <!-- Portofolio section end -->

            <!-- Contact section start -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
                    <h4 class="contact-sub-title padd-15">I'm at your services</h4>
                    <div class="row">
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call us on</h4>
                            <p>+1234567890</p>
                        </div>
                        <!-- Contact info item end -->

                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Iasi, Romaia</p>
                        </div>
                        <!-- Contact info item end -->

                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>test@gmail.com</p>
                        </div>
                        <!-- Contact info item end -->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">I'm very responsive to messages</h4>
                
                    <!-- Contact Form -->
                    <div class="row">
                        <div class="contact-form padd-15">

                        <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = "Please fill in the blanks";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = "Your message was successfully sent";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        ?>
                            <div class="row">
                                <form action="contact.php" method="POST">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-item col-12 padd-15">
                                        <button name="btn-send" type="submit" class="btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact section end -->
        </div>
        <!-- Main content end -->
    </div>
    <!-- Main container end -->

    <!-- JS files -->
    <script src="script.js"></script>

</body>
</html>