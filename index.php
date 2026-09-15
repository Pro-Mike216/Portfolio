<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Boxicons CDN -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <!-- Typed.js CDN for animation -->
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <title>Ndem MIKE - Portfolio</title>
    </head>
    <body>
        <header class="header">
            <a href="#home" class="logo">MIKE</a>
            <i class="bx bx-menu" id="menu-icon"></i>
            <nav class="navbar">
                <a href="#home">HOME</a>
                <a href="#about">ABOUT</a>
                <a href="#testimonial">TESTIMONIALS</a>
                <a href="#services">SERVICES</a>
                <a href="#contact">CONTACT</a>
            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-img">
                <img src="asset/m1.png" alt="Profile Image">
            </div>

            <div class="home-content">
                <h3>Hello, Myself</h3>
                <h1>MIKE</h1>
                <h3>And I'm a <span class="multiple-text"></span></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam in provident minima nisi dignissimos iusto ex excepturi inventore nam ea, fugiat possimus! Mollitia, natus excepturi ab fuga corrupti impedit voluptates.</p>
                
                <div class="social">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
                <a href="#" class="btn">Download CV</a>
            </div>
        </section>
        
        <section class="about" id="about"> 
            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>I'm a <span>Computer Engineer</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo, iure dolor unde ratione et aliquid porro itaque sint ducimus at, quasi provident obcaecati eum est quia natus iste deleniti.</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="about-img">
                <img src="asset/m2.png" alt="About Image">
            </div>
        </section>

        <!-- Services Section Code -->
        <section class="services" id="services">
            <h2 class="heading">My <span>Services</span></h2>

            <div class="services-container">
                <div class="services-box">
                    <i class="bx bx-code"></i>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus impedit, a eos ullam tempora repellendus ratione necessitatibus.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="services-box">
                    <i class="bx bx-cog"></i>
                    <h3>Web Scraping</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus impedit, a eos ullam tempora repellendus ratione necessitatibus.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="services-box">
                    <i class="bx bx-terminal"></i>
                    <h3>Python Automation</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus impedit, a eos ullam tempora repellendus ratione necessitatibus.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Code -->
        <section class="testimonial" id="testimonial">
            <h2 class="heading">Valued <span>Testimonials</span></h2>
            
            <div class="testimonial-box">
                <div class="wrapper">
                    <div class="testimonial-item">
                        <img src="asset/girls-dp-image-2.webp" alt="">
                        <h2>Marilyn</h2>
                        <div class="rating">
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui minus, iusto voluptatum paria</p>
                    </div>

                    <div class="testimonial-item">
                        <img src="asset/asset.jpg" alt="">
                        <h2>Aleksa</h2>
                        <div class="rating">
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui minus, iusto voluptatum paria</p>
                    </div>

                    <div class="testimonial-item">
                        <img src="asset/Simple-Girl-Pic-25-1024x1024.jpg" alt="">
                        <h2>Oliwia</h2>
                        <div class="rating">
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                            <i class="bx bxs-star" id="star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui minus, iusto voluptatum paria</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Code -->
        <section class="contact" id="contact">
            <h2 class="heading">Contact <span>Me</span></h2>
<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: 80rem; margin: 2rem auto; font-size: 1.5rem;">
        <strong>Success!</strong> Your message has been sent successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right; background: none; border: none; font-size: 1.5rem; cursor: pointer;"></button>
    </div>
<?php endif; ?>

 <form action="contact.php" method="POST">
    <div class="input-box">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
    </div>
    <div class="input-box">
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="text" name="subject" placeholder="Email Subject" required>
    </div>
    <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
    <input type="submit" value="Send Message" class="btn">
</form>

        </section>
         
        <!-- Footer Section Code -->
        <footer class="footer">
            <div class="social">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
            <p class="copyright">
                MIKE - All Rights Reserved
            </p>
        </footer>

        <script src="script.js"></script>
    </body>
</html>
