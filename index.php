<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myportfolio</title>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <!--aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>
<body>


<!-- header section starts -->

<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

<a href="#home" class= "logo">portfolio</a>

<nav class="navbar">
    <a href="#home"class="active">home</a>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#portfolio">portfolio</a>
    <a href="#contact">contact</a>
</nav>

<div class="follow">
    <a href="#" class= "fab fa-facebook-f"></a>
    <a href="#" class= "fab fa-twitter"></a>
    <a href="#" class= "fab fa-instagram"></a>
    <a href="#" class= "fab fa-linkedin"></a>
    <a href="#" class= "fab fa-github"></a>

</div>



</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

<div class ="image" data-aos="fade-right">
    <img src="images/user-img.jpg" alt="">
</div>

<div class="content">
    <h3 data-aos="fade-up"> hi i'm giorgi chuguashvili</h3>
    <span data-aos="fade-up">web developer</span>
    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    <a data-aos="fade-up" href="#about" class="btn"> about me</a>
</div>

</section>
<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>
    <div class="biography">
        <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        <div class="bio">
            <h3 data-aos="zoom-in"><span>name :</span>giorgi chuguashvili</h3>
            <h3 data-aos="zoom-in"><span>email :</span>giorgichuguashvili89@gmail.com</h3>
            <h3 data-aos="zoom-in"><span>address :</span> Tbilisi, Didi Digomai, 31 King Parnavaz Avenue</h3>
            <h3 data-aos="zoom-in"><span>phone:</span>+995 598 99 08 66</h3>
            <h3 data-aos="zoom-in"><span>age ; </span> 32 years</h3>  
            <h3 data-aos="zoom-in"><span>experience :</span> 7+ month</h3>
        </div>
        
        <a href="#" class="btn" data-aos="fade-up"> download CV</a>
    
    </div>
    
    <div class="skills" data-aos="fade-up">
        <h1 class="heading"><span>skills</span></h1>
        <div class="progress">
            <div class="bar"data-aos="fade-left"><h3><span>HTML</span><span>90%</span></h3></div>
            <div class="bar"data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
            <div class="bar"data-aos="fade-left"><h3><span>JavaScript</span><span>30%</span></h3></div>
            <div class="bar"data-aos="fade-right"><h3><span>PHP</span><span>50%</span></h3></div>
    </div>
    
    <div class="edu-exp">
        <h1 class="heading" data-aos="fade-up"> <span>education & experience</span></h1>
    
    <div class="row">

        <div class="box-container">
            <h3 class="title" data-aos="fade-rightdata-aos="fade-left"">education</h3>

            <div class="box"data-aos="fade-right">
                <span>(2019 -2020)</span>
                <h3>front-end developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="box"data-aos="fade-right">
                <span>(2019 -2020)</span>
                <h3>back-end developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="box"data-aos="fade-right">
                <span>(2019 -2021)</span>
                <h3>full-stack developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
        </div>
            <div class="box-container">
            <h3 class="title"data-aos="fade-left">experience</h3>

            <div class="box"data-aos="fade-left">
                <span>(2019 -2022)</span>
                <h3>graphic desinger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div> 
            <div class="box"data-aos="fade-left">
                <span>(2019 -2021)</span>
                <h3>full-stack developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="box"data-aos="fade-left">
                <span>(2019 -2022)</span>
                <h3>web desinger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div> 
        </div>      
    </div>


</section>
<!-- about section ends -->

<!-- services section starts -->

<section class="services" id="services">

<h1 class="heading" data-aos="fade-up"><span>services</span></h1>


<div class="box-container">

    <div class="box"data-aos="zoom-in">
        <i class="fas fa-code"></i>
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>

    <div class="box"data-aos="zoom-in">
        <i class="fas fa-paint-brush"></i>
        <h3>graphic desing</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>


    <div class="box"data-aos="zoom-in">
        <i class="fab fa-bootstrap"></i>
        <h3>bootstrap</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>


    <div class="box"data-aos="zoom-in">
        <i class="fas fa-chart-line"></i>
        <h3>seo marketing</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>


    <div class="box"data-aos="zoom-in">
        <i class="fas fa-bullhorn"></i>
        <h3>digital marketing</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>


    <div class="box"data-aos="zoom-in">
        <i class="fab fa-wordpress"></i>
        <h3>web development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
    </div>

</div>
    
</section>
<!--service section end-->

<!-- portfolio section starts -->

<section class="portfolio" id="portfolio">

    <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>

    <div class ="box-container">

    <div class="box"data-aos="zoom-in">
        <img src="images/img-1.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

    <div class="box"data-aos="zoom-in">
        <img src="images/img-2.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

    <div class="box"data-aos="zoom-in">
        <img src="images/img-3.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

    <div class="box"data-aos="zoom-in">
        <img src="images/img-4.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

    <div class="box"data-aos="zoom-in">
        <img src="images/img-5.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

    <div class="box"data-aos="zoom-in">
        <img src="images/img-6.jpg" alt="">
        <h3>web development</h3>
        <span>(2020 - 2022)</span>

    </div>

</section>
<!-- portfolio section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input data-aos="fade-right"type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left"type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input data-aos="zoom-in"type="number" min="0" name="number" placeholder="enter your number" 
        class="box" required>
        <textarea data-aos="zoom-in"name="message" class="box" required placeholder="enter your message" 
        cols="30" rows="10"></textarea>
        <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
           
    </form>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <P>+995598990866</P>

    </div>

    <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <P>giorgichuguashvili89@gmail.com</P>

    </div>

    <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <P>Tbilisi, Didi Digomai, 31 King Parnavaz Avenue</P>

    </div>

</div>

</section>



<!-- contact section ends -->
<div class="credit"> &copy;copyright @ <?php echo date('Y'); ?> by<span>Giorgi Chuguashvili</span></div>

 









   <!-- custom js file link -->
    <script src="js/script.js"></script>

    <!-- aos js link -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 300,
        });
    </script>

</body>
</html>