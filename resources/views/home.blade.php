<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>
  <!-- faficon -->
  <link rel="shortcut icon" href="assets/profile.jpg" type="image/x-icon">
  <!-- css file -->
  <link rel="stylesheet" href="style.css">

  <!-- icon CDN link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

  <!-- navbar -->
  <header>
    <a class="logo" href="#">Agam Surya A</a>

    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
      <div class="bx bx-moon" id="darkmode"></div>
      <div><a href="/login" class="btn" style="margin-left: 10px; color: white;">Login</a></div>
    </ul>
  </header>

  <!-- Home -->

  <section class="home" id="home">
    <div class="social">
      <a href="https://github.com/agam-surya" target="_blank"><i class='bx bxl-github'></i></a>
      <a href="#"><i class='bx bxl-facebook'></i></a>
      <a href="#"><i class='bx bxl-linkedin'></i></a>
    </div>
    <div class="home-img">
      <img src="assets/11.jpg" alt="">
    </div>
    <div class="home-text">
      <span>Hello, I'm</span>
      <h1>Agam Surya Armanda</h1>
      <h2>Junior Web Developer</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, molestiae.</p>
      <a href="#contact" class="btn">Contact Me</a>
    </div>
  </section>

  <!-- About Me -->
  <section class="about" id="about">
    <div class="heading">
      <h1>About Me</h1>
      <span>Introduction</span>
      <!-- About Content -->
      <div class="about-content">
        <div class="about-image">
          <img src="assets/121.jpg" alt="">
        </div>
        <div class="about text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ratione earum rem, dignissimos dolore
            non eveniet eos, facilis esse quam corrupti placeat. Inventore labore ab voluptates voluptatum nisi
            oditexplicabo illo? Quis delectus magnam perspiciatis dolores, excepturi, hic earum dicta expedita
            voluptatem,natus repudiandae quo ipsa placeat suscipit sed consequatur!</p>
          <div class="information">
            <div class="info-box">
              <i class="bx bxs-user"> Agam Surya Armanda</i>
            </div>
            <div class="info-box">
              <i class="bx bxs-phone"> 1234567890</i>
            </div>
            <div class="info-box">
              <i class="bx bxs-envelope"> mirzahaqiqi04@gmail.com</i>
            </div>
            <a href="#" class="btn">Download CV</a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Skills -->
  <section class="skills" id="skills">
    <div class="heading">
      <h1>Skills</h1>
      <span>My Skills</span>

      <!-- skills content -->
      <div class="skills-content">
        <div class="bars">
          @foreach($skills as $skill)
          <!-- box 1 -->
          <div class="bars-box">
            <h3>{{$skill->name}}</h3>
            <span name="percent-value">{{$skill->percent}}%</span>
            <div class="light-bar"></div>
            <div class="percent-bar" name="skill-bar"></div>
          </div>
          @endforeach
        </div>
        <div class="skills-img">
          <img src="assets/123.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services" id="services">
    <div class="heading">
      <h1>Services</h1>
      <span>Our Services</span>
    </div>

    <!-- service content -->
    <div class="services-content">
      <!-- Box 1 -->
      <div class="services-box">
        <i class='bx bx-code-alt'></i>
        <h3>Web Development</h3>
        <a href="#">Learn More</a>
      </div>
      <!-- Box 2 -->
      <div class="services-box">
        <i class='bx bx-mobile-alt'></i>
        <h3>Mobile Development</h3>
        <a href="#">Learn More</a>
      </div>
      <!-- Box 3 -->
      <div class="services-box">
        <i class='bx bx-brush-alt'></i>
        <h3>UI/UX Design</h3>
        <a href="#">Learn More</a>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="heading">
      <h1>Portfolio</h1>
      <span>My recent Work</span>
    </div>
    <div class="portfolio-content">
      @foreach($portfolio as $item)
      <div class="portfolio-img">
        <img src="{{asset('storage/'.$item->image)}}" alt="">
        <div class="portfolio-info">
          <h1>{{$item->name}}</h1>
          <p>{{$item->description}}</p>
          <a href="#">Read More..</a>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- Contact Us -->
  <section class="contact" id="contact">
    <div class="heading">
      <h1>Contact</h1>
      <span>Connect With Me</span>
    </div>
    <!-- Contact Content -->
    <div class="contact-content">
      <form action="">
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email">
        <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
        <input type="button" value="send" class="contact-button">
      </form>
    </div>
  </section>

  <!-- Footer -->
  <div class="footer" id="footer">
    <h2>Agam Surya</h2>
    <div class="footer-social">
      <a href="#"><i class="bx bxl-facebook"></i></a>
      <a href="https://github.com/agam-surya" target="_blank"><i class="bx bxl-github"></i></a>
      <a href="#"><i class="bx bxl-whatsapp"></i></a>
      <a href="#"><i class="bx bxl-instagram"></i></a>
      <a href="#"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>

  <!-- CopyRight -->

  <div class="copyright">
    <p>Create By <a href="#">Agam Surya</a> &copy;2022 | All Right Reserved</p>
  </div>
  <!-- Link To JS -->
  <script src="script.js"></script>
</body>

</html>