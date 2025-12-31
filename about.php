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
    

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

<?php
$activePage = 'about';
include 'header.php';
?>

    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdfdfd;
            color: #333;
            line-height: 1.6;
        }

        .container2 {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.05);
        }

    

        p {
            margin-bottom: 18px;
            text-align: justify;
        }

        blockquote {
            margin: 20px 0;
            padding: 15px 25px;
            background-color: #f0f8ff;
            border-left: 5px solid #3498db;
            font-style: italic;
            color: #555;
        }

        strong {
            color: #2c3e50;
        }
    </style>
    <section class="learning-hero d-flex align-items-center text-center">
  <div class="container">
    <h1 class="text-white mb-2"></h1>
  </div>
</section>


<!-- SCHOOL OVERVIEW -->
<section class="school-overview">
  <div class="container text-center">
    <h2 class="section-title">School <span>Overview</span></h2>
    <p class="overview-text">
      Kalaimagal Vidhya Mandir provides quality education with modern infrastructure,
      experienced staff and a student-centered learning environment.
    </p>
  </div>
</section>
<style>.school-overview {
    padding: 80px 0;
    background: #f5f7ff;
}

.school-overview .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #0B4E9C;
}

.school-overview .section-title span {
    color: #ffc107;
}

.school-overview .overview-text {
    max-width: 800px;
    margin: 20px auto 0;
    font-size: 18px;
    color: #333;
}
</style>
<!-- OUR MISSION -->
<section class="our-mission">
  <div class="container text-center">
    <h2 class="section-title">Our <span>Mission</span></h2>

    <p class="mission-text">
      To provide value-based education that empowers students to achieve excellence
      in academics, sports and life skills.
    </p>
  </div>
</section>
<style>
.our-mission {
    padding: 80px 0;
    background: 
        linear-gradient(90deg, rgba(30, 36, 130, 0.8), rgba(74, 79, 199, 0.8)),
        url("img/header/bg 2.webp") center/cover no-repeat;
    color: #fff;
}


.our-mission .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #fff;
}

.our-mission .section-title span {
    color: #ffc107;
}

.our-mission .mission-text {
    max-width: 800px;
    margin: 20px auto 0;
    font-size: 18px;
    line-height: 1.8;
}
</style>

<!-- VISION SECTION -->
<section class="vision-section">
  <div class="container text-center">
    <h2 class="section-title">Our <span>Vision</span></h2>

    <p class="vision-text">
      To inspire and nurture young minds to become confident, responsible and 
      compassionate leaders of tomorrow through quality education and holistic development.
    </p>
  </div>
</section>
<style>.vision-section {
    padding: 80px 0;
    background: #f9fbff;
}

.vision-section .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #0B4E9C;
}

.vision-section .section-title span {
    color: #ffc107;
}

.vision-text {
    max-width: 850px;
    margin: 20px auto 0;
    font-size: 18px;
    color: #444;
    line-height: 1.8;
}
</style>



<!-- PRINCIPAL MESSAGE -->
<section class="principal-section">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-4 text-center">
        <img src="img/principal.jpg" class="principal-img" alt="Principal">
      </div>

      <div class="col-md-8">
        <h2 class="section-title">Principal's <span>Message</span></h2>

        <p class="principal-text">
          Education is not just about academic excellence but also about 
          building strong character, discipline and values.
          At our school, we aim to provide an environment that promotes growth, knowledge 
          and excellence in every child.
        </p>
      </div>

    </div>
  </div>
</section>
<style>.principal-section {
    padding: 80px 0;
    background: #fff;
}

.principal-section .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #0B4E9C;
}

.principal-section .section-title span {
    color: #ffc107;
}

.principal-img {
    width: 260px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.principal-text {
    margin-top: 20px;
    font-size: 17px;
    line-height: 1.8;
    color: #444;
}
</style>
<!-- INFRASTRUCTURE -->
<section class="infra-section">
  <div class="container text-center">

    <h2 class="section-title">Our <span>Infrastructure</span></h2>

    <div class="row mt-5">

      <div class="col-md-4">
        <div class="infra-card">
          <i class="fa fa-building"></i>
          <h3>Modern Classrooms</h3>
          <p>Fully equipped smart classrooms with digital boards.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="infra-card">
          <i class="fa fa-flask"></i>
          <h3>Science Labs</h3>
          <p>Well-structured Physics, Chemistry & Biology labs.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="infra-card">
          <i class="fa fa-laptop"></i>
          <h3>Computer Lab</h3>
          <p>Advanced computer labs with high-speed systems.</p>
        </div>
      </div>

    </div>

  </div>
</section>
<style>.infra-section {
    padding: 80px 0;
    background: #f5f7ff;
}

.infra-section .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #0B4E9C;
}

.infra-section .section-title span {
    color: #ffc107;
}

.infra-card {
    background: #fff;
    padding: 30px 20px;
    border-radius: 18px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    transition: 0.4s;
}

.infra-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.infra-card i {
    font-size: 35px;
    color: #ffc107;
    margin-bottom: 15px;
}

.infra-card h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
}

.infra-card p {
    font-size: 16px;
    color: #555;
}
</style>
<!-- WHY CHOOSE US -->
<section class="whychoose-section">
  <div class="container text-center">

    <h2 class="section-title">Why <span>Choose Us</span></h2>

    <div class="row mt-5">

      <div class="col-md-3">
        <div class="why-card">
          <i class="fa fa-graduation-cap"></i>
          <h3>Quality Education</h3>
          <p>We ensure top-class academics with experienced  teachers.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-card">
          <i class="fa fa-child"></i>
          <h3>Holistic Development</h3>
          <p>Focus on academics, sports, arts, discipline & personality growth.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-card">
          <i class="fa fa-shield-alt"></i>
          <h3>Safe Environment</h3>
          <p>24/7 CCTV monitoring and a safe, caring school environment.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-card">
          <i class="fa fa-users"></i>
          <h3>Experienced Staff</h3>
          <p>Dedicated teachers supporting each child’s individual growth.</p>
        </div>
      </div>

    </div>

  </div>
</section>
<style>.whychoose-section {
    padding: 80px 0;
    background: #fff;
}

.whychoose-section .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #0B4E9C;
}

.whychoose-section .section-title span {
    color: #ffc107;
}

.why-card {
    background: #f7f9ff;
    padding: 35px 20px;
    border-radius: 18px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: 0.4s;
}

.why-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.why-card i {
    font-size: 35px;
    color: #0B4E9C;
    margin-bottom: 15px;
}

.why-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #ffc107;
    margin-bottom: 10px;
}

.why-card p {
    font-size: 15px;
    color: #555;
}
</style>

<!-- ⭐ Testimonials Section -->
<section class="container my-5">
    <h2 class="about-title text-center mb-4">
        What <span>Parents Say</span>
    </h2>

    <div class="row g-4">
        <!-- Testimonial 1 -->
        <div class="col-md-4">
            <div class="testi-card">
                <p>"Excellent school with disciplined environment and caring teachers. My child has improved a lot."</p>
                <h5>- Parent of Grade 6</h5>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="col-md-4">
            <div class="testi-card">
                <p>"The focus on academics and values makes this school truly special. Highly recommended."</p>
                <h5>- Parent of Grade 3</h5>
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-md-4">
            <div class="testi-card">
                <p>"My daughter loves the teachers and activities. Great environment for kids!"</p>
                <h5>- Parent of Grade 2</h5>
            </div>
        </div>
    </div>
</section>
<style>.testi-card {
    background: #ffffff;
    padding:16px;
    height: 100%;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    text-align: center;
    transition: 0.3s;
}

.testi-card:hover {
    transform: translateY(-5px);
}

.testi-card p {
    font-size: 0.95rem;
    color: #444;
    line-height: 1.6;
}

.testi-card h5 {
    margin-top: 12px;
    font-weight: 600;
    color: #1F4FB2;
}

.about-title {
    font-size: 2rem;
    font-weight: 700;
    color: #0B4E9C
}
.about-title span {
    color: #FFC107;
}
</style>
<!-- ⭐ Timeline Section -->
<section class="container my-5">
    <h2 class="about-title text-center mb-4">
        Our <span>Journey</span>
    </h2>

    <div class="timeline">

        <div class="timeline-item">
            <h4>1986</h4>
            <p>this is demo content</p>
        </div>

        <div class="timeline-item">
            <h4>2010</h4>
            <p>this is demo content</p>
        </div>

        <div class="timeline-item">
            <h4>2020</h4>
            <p>this is demo content.</p>
        </div>

        <div class="timeline-item">
            <h4>Today</h4>
            <p>this is demo content</p>
        </div>

    </div>
</section>
<style>.timeline {
    border-left: 4px solid #1F4FB2;
    padding-left: 25px;
}

.timeline-item {
    margin-bottom: 25px;
    padding: 15px 20px;
    background: #f5f7ff;
    border-radius: 10px;
    position: relative;
}

.timeline-item::before {
    content: "";
    position: absolute;
    left: -13px;
    top: 20px;
    width: 14px;
    height: 14px;
    background: #FFC107;
    border-radius: 50%;
    border: 2px solid #1F4FB2;
}

.timeline-item h4 {
    color: #1F4FB2;
    font-weight: 700;
    margin-bottom: 6px;
}
</style>

<!-- ⭐ CTA Section -->
<section class="cta-box my-5">
    <div class="container text-center">
        <h2 class="cta-title">Admissions Open for <span>2026–2027</span></h2>
        <p class="cta-sub">Join a school that focuses on academic excellence & all-round development.</p>
        
        <a href="admission.php" class="btn btn-warning btn-lg me-3">Apply Now</a>
        <a href="prospectus.pdf" class="btn btn-light btn-lg">Download Prospectus</a>
    </div>
</section>

<style>
.cta-box {
    background-image:
        linear-gradient(#0B4E9Cd9, #0B4E9Cd9),
        url("img/header/bg 2.webp");  /* FIX: remove space in filename */
    background-size: cover;
    background-position: center;
    padding: 80px 20px;
    color: #fff;
    border-radius: 0px;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

/* HEADING */
.cta-title {
    font-size: 2.4rem;
    font-weight: 800;
    margin-bottom: 10px;
    letter-spacing: 0.5px;
}

.cta-title span {
    color: #FFC107; /* GOLD highlight */
}

/* SUB TEXT */
.cta-sub {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    text-align:center;
    width: 100%;
}


/* BUTTONS */
.cta-box .btn {
    font-weight: 600;
    padding: 12px 30px;
    border-radius: 10px;
    transition: 0.3s;
}

.cta-box .btn:hover {
    transform: translateY(-4px);
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
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
			myModal.show();
		});
	</script>

</body>
</html>