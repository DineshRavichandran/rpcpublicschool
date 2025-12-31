<?php
require_once 'configi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RPC Public School</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/assets/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</head>

<body>


<body>
 

<!-- header start -->
<?php
$activePage = 'index';
include 'header.php';
?>

<!-- header end -->
 


	<!-- ======= Banner Carousel ======= -->
<div class="carousel-container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
   
<div class="carousel-indicators">
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
  
</div>

   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
    $qry = "SELECT * FROM banners WHERE status = '0'";
    $result = $mysqli->query($qry);
    $i = 0;

    while ($row = $result->fetch_assoc()) {
        $active = ($i == 0) ? 'active' : '';
        ?>
        <div class="carousel-item <?= $active ?>">
            <img 
              src="<?= $row['image'] ?>" 
              class="d-block w-100" 
              alt="Campus Banner"
              style="height: 550px; object-fit: cover;">
        </div>
        <?php
        $i++;
    }
    ?>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button"
          data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button"
          data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>



</div>

<!-- ======= Marquee ======= -->
<marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();" class="rpc-marquee">
      <?php 
              $qry = "SELECT * FROM  latest_message WHERE show_flag = '0'";
    $result = $mysqli->query($qry);
    while ($row = $result->fetch_assoc()) {
echo $row['Discription'];
echo " | ";
    }
            ?>
</marquee>

<!-- ======= Styles ======= -->
<style>
/* Banner Carousel */
.rpc-banner { height: 40vh; }
.rpc-slide { height: 40vh; }

.rpc-banner {
  position: relative;
  width: 100%;
  height: 510px;
  overflow: hidden;
}
.rpc-carousel {
  display: flex;
  transition: transform 0.5s ease-in-out;
}
.rpc-slide {
  min-width: 100%;
  height: 510px;
  background-size: cover;       /* Ensure image covers full area */
  background-position: center;  /* Center image */
  background-repeat: no-repeat; /* Prevent tiling */
  position: relative;
}
.rpc-slide-content {
  position: absolute;
  bottom: 50px;
  left: 50px;
  color: #fff;
}
.rpc-slide-content h2 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}
.rpc-slide-content p {
  font-size: 1.2rem;
  margin-bottom: 15px;
}
.rpc-btn {
  padding: 10px 25px;
  background-color: #0B4E9C;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}
.rpc-prev, .rpc-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: #0B4E9C;
  color: #fff;
  border: none;
  font-size: 2rem;
  padding: 5px 15px;
  cursor: pointer;
}
.rpc-prev { left: 10px; }
.rpc-next { right: 10px; }

/* Marquee */
.rpc-marquee {
  background-color: #0B4E9C;
  color: white;
  padding: 10px 0;
  font-size: 1rem;
}
.rpc-marquee a {
  color: lightblue;
  text-decoration: underline;
}
</style>

<!-- ======= JS Carousel ======= -->
<script>
const carousel = document.querySelector('.rpc-carousel');
const slides = document.querySelectorAll('.rpc-slide');
let index = 0;

function showSlide(i) {
  index = (i + slides.length) % slides.length;
  carousel.style.transform = `translateX(${-index * 100}%)`;
}

// Next / Prev buttons
document.querySelector('.rpc-next').addEventListener('click', () => showSlide(index + 1));
document.querySelector('.rpc-prev').addEventListener('click', () => showSlide(index - 1));

// Auto-slide every 5 seconds
setInterval(() => showSlide(index + 1), 5000);
</script>



   


   





<section class="container my-5">
  <div class="text-center mb-5">
    <h2 class="section-title big-title">
      <span>School</span> Highlights
    </h2>
    <p class="section-subtitle">Discover what makes our school exceptional</p>
  </div>

  <div class="row g-4">
    <div class="col-md-3">
      <div class="highlight-card">
        <div class="highlight-img-wrapper">
          <img src="img/icon/teachers.jpg" alt="Expert Teachers">
        </div>
        <h5>Expert Teachers</h5>
        <p>Our experienced CBSE faculty ensures top quality education.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="highlight-card">
        <div class="highlight-img-wrapper">
          <img src="img/icon/campus.webp" alt="Safe Campus">
        </div>
        <h5>Safe Campus</h5>
        <p>CCTV, GPS bus tracking, and fire safety systems in place.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="highlight-card">
        <div class="highlight-img-wrapper">
          <img src="img/icon/lab.jpg" alt="Modern Labs">
        </div>
        <h5>Modern Labs</h5>
        <p>Science, Computer, Robotics & Language labs.</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="highlight-card">
        <div class="highlight-img-wrapper">
          <img src="img/icon/toprank.jpg" alt="Top Results">
        </div>
        <h5>Top Results</h5>
        <p>Consistent academic excellence every year.</p>
      </div>
    </div>
  </div>
</section>
<style>
.section-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #0B4E9C;
    margin-bottom: 0.3rem;
}

.section-title span {
    background: linear-gradient(90deg, #ffc107, #ffdd66);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-subtitle {
    color: #555;
    font-size: 1rem;
    margin-bottom: 2rem;
}

.highlight-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    padding: 20px;
    
    text-align: center;
}

.highlight-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.highlight-card h5 {
    margin-top: 15px;
    color: #0B4E9C;
    font-weight: 700;
    transition: color 0.3s;
}

.highlight-card:hover h5 {
    color: #ffc107;
}

.highlight-card p {
    color: #555;
    font-size: 0.9rem;
    margin-top: 10px;
    line-height: 1.5;
}

.highlight-img-wrapper img {
    border-radius: 12px;
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.4s, filter 0.4s;
}

.highlight-card:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}
</style>
<section class="container my-5">
  <div class="text-center mb-5">
    <h2 class="section-title">
      Programs <span>We Offer</span>
    </h2>
  </div>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="program-card">
        <img src="img/spots/kids learning.jpg" alt="Kindergarten">
        <h5>Kindergarten</h5>
        <p>Play-based learning & activity-driven teaching.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="program-card">
        <img src="img/spots/stronger learning.jpg" alt="Middle School">
        <h5>Middle School</h5>
        <p>Strong academic base with creative learning.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="program-card">
        <img src="img/spots/student-skills.jpg" alt="High School">
        <h5>High School</h5>
        <p>Development, projects & technology-based learning.</p>
      </div>
    </div>
  </div>
</section>
<style>.program-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    text-align: center;
    padding: 20px;
}

.program-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.4s ease, filter 0.4s ease;
}

.program-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.program-card:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}

.program-card h5 {
    margin-top: 15px;
    color: #0B4E9C;
    font-weight: 700;
    transition: color 0.3s;
}

.program-card:hover h5 {
    color: #ffc107;
}

.program-card p {
    margin-top: 10px;
    color: #555;
    font-size: 0.9rem;
    line-height: 1.4;
}
</style>
<!-- ACHIEVEMENTS -->
<section class="achievement-section">
  <div class="container text-center">

    <h2 class="section-title">Our <span>Achievements</span></h2>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="achievement-card">
          <i class="fa fa-trophy"></i>
          <h3>20+</h3>
          <p>State Level Awards</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="achievement-card">
          <i class="fa fa-users"></i>
          <h3>1500+</h3>
          <p>Happy Students</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="achievement-card">
          <i class="fa fa-book"></i>
          <h3>50+</h3>
          <p>Skilled Teachers</p>
        </div>
      </div>
    </div>

  </div>
</section>
<Style>
.achievement-section {
    padding: 80px 0;
    background-image: 
        linear-gradient(#0B4E9C, rgba(30,36,130,0.8)),
        url("img/header/bg 2.webp");
    background-size: cover;       /* covers whole section */
    background-position: center;  /* centers image */
    background-repeat: no-repeat; /* prevents tiling */
    color: #fff;
}


/* HEADING */
.achievement-section .section-title {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
}
.achievement-section .section-title span {
    color: #ffc107;
}

/* CARDS */
.achievement-card {
    background: rgba(255,255,255,0.06);
    padding: 30px 20px;
    border-radius: 18px;
    transition: 0.4s;
    color: #fff;
}
.achievement-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}
.achievement-card i {
    font-size: 40px;
    color: #ffc107;
}
.achievement-card h3 {
    font-size: 32px;
    margin: 10px 0;
}
.achievement-card p {
    font-size: 18px;
    opacity: 0.9;
}
</Style>
<!-- Core Values Section -->
<section class="core-values py-5">
  <div class="container text-center">
    <!-- Section Heading -->
    <h2 class="section-title mb-5">Core <span>Values</span></h2>

    <!-- Example content cards (optional) -->
    <div class="row g-4">
      <div class="col-md-3">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-heart fa-2x mb-3 text-warning"></i>
          <h5>Integrity</h5>
          <p>We uphold honesty and strong moral principles.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-lightbulb fa-2x mb-3 text-warning"></i>
          <h5>Innovation</h5>
          <p>Encouraging creativity and new ideas in learning.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-users fa-2x mb-3 text-warning"></i>
          <h5>Collaboration</h5>
          <p>Teamwork & community engagement </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-award fa-2x mb-3 text-warning"></i>
          <h5>Excellence</h5>
          <p>Striving for the highest standards in all endeavors.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
.core-values {
    background: #f9f9f9; /* light grey background */
}

.core-values .section-title {
    font-size: 2rem;
    font-weight: 700;
    color: #0B4E9C; /* dark blue */
}

.core-values .section-title span {
    color: #ffc107; /* yellow */
}

.value-card {
    background: #fff;
    border-radius: 16px;
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: center;
}

.value-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.value-card i {
    color: #ffc107;
}

.value-card h5 {
    margin-top: 10px;
    color: #0B4E9C;
    font-weight: 600;
}

.value-card p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.4;
}
</style>



 



 

<!-- footer start -->
<?php include 'footer.php'; ?>



     <!-- Back to Top -->
    <a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>
<style>.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 55px;
    height: 55px;
    background: #0B4E9C;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    transition: 0.3s ease;
    z-index: 9999;
    display: none; /* hidden by default */
}

.back-to-top:hover {
    background: #858586;
    transform: translateY(-4px);
}
</style>
<script>
window.addEventListener("scroll", function() {
    const button = document.querySelector(".back-to-top");
    if (window.scrollY > 200) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
});
</script>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    


	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- JavaScript to Show Modal on Page Load -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
			myModal.show();
		});
	</script>

</body>
</html>