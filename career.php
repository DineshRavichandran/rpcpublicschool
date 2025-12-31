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

   
<?php
$activePage = 'learning';
include 'header.php';
?>

<section class="career-hero text-center text-white">
  <div class="container">
    <h1>Join Our Team</h1>
    <p>Be a part of a school that nurtures talent and inspires growth.</p>
    <a href="#open-positions" class="btn btn-warning btn-lg mt-3">View Open Positions</a>
  </div>
</section>
<style>
  .career-hero {
    background: url("img/banner/learning.jpg") center/cover no-repeat;
    position: relative;
    padding: 120px 0;
}
.career-hero::before {
    content: "";
    position: absolute;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(156, 162, 236, 0.7);
    z-index:1;
}
.career-hero .container { position: relative; z-index:2; }
.career-hero h1 { font-size: 3rem; font-weight: 700; margin-bottom: 20px; }
.career-hero p { font-size: 1.2rem; margin-bottom: 30px; }
</style>

<section class="career-about py-5">
  <div class="container">
    <h2 class="section-title text-center mb-4">Why <span>Work With Us</span></h2>

    <p class="career-text">
      We provide an inspiring learning environment where every child feels motivated to explore, question, and grow.
      Our classrooms encourage active participation, collaboration, and creativity.
      We focus on building confidence, strong values, and essential life skills in every student.
      With a blend of academic excellence and holistic development, we help children discover their true potential.
      Our teachers guide students with care, compassion, and modern teaching methods.
      We create opportunities for leadership, teamwork, and hands-on learning.
      Through discipline, encouragement, and continuous support, we shape responsible and confident young achievers.
      We aim to prepare every student for a bright, successful, and meaningful future.
    </p>
  </div>
</section>

<style>
  .career-about .section-title {
    font-size: 2rem;
    color:#0B4E9C;
    font-weight: 700;
  }

  .career-about .section-title span {
    color:#ffc107;
  }

  /* Full width text (NO left–right gap) */
  .career-text {
    font-size: 1.1rem;
    color:#444;
    line-height: 1.9;
    text-align: justify;
    padding: 0;        /* removes left & right padding */
    margin: 0;         /* removes extra margin */
  }

  /* Remove default container padding */
  .career-about .container {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }
</style>



<section class="career-values py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-5">Our <span>Culture</span></h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-heart fa-2x mb-3 text-warning"></i>
          <h5>Integrity</h5>
          <p>We uphold honesty and ethics in every action.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-lightbulb fa-2x mb-3 text-warning"></i>
          <h5>Innovation</h5>
          <p>Creativity and forward-thinking are encouraged.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card p-4 shadow-sm rounded">
          <i class="fa fa-users fa-2x mb-3 text-warning"></i>
          <h5>Collaboration</h5>
          <p>Teamwork and mentorship are at the core of our environment.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="career-form-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 section-title">Career <span>Application Form</span></h2>

    <div class="career-form-card p-4 shadow-sm rounded">
      <form action="career_submit.php" method="POST" enctype="multipart/form-data">

        <div class="row g-4">
          <!-- Name -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <!-- Phone -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
          </div>

          <!-- Position -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Applying For</label>
            <select class="form-select" name="position" required>
              <option value="">Select Position</option>
              <option>Teacher</option>
              <option>Sports Coach</option>
              <option>Admin Staff</option>
              <option>Office Assistant</option>
              <option>Accountant</option>
              <option>Other</option>
            </select>
          </div>

          <!-- Resume Upload -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Upload Resume (PDF/Doc)</label>
            <input type="file" name="resume" class="form-control" required>
          </div>

          <!-- Message -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Message</label>
            <textarea name="message" rows="4" class="form-control" placeholder="Tell us about yourself..."></textarea>
          </div>

          <!-- Submit -->
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary px-4 mt-3">Submit Application</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</section>

<section class="career-positions py-5" id="open-positions">
  <div class="container">
    <h2 class="section-title mb-5">Current <span>Openings</span></h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="position-card p-4 shadow-sm rounded">
          <h5>Mathematics Teacher</h5>
          <p>Full-time, Grade 6-12</p>
          <a href="apply.php" class="btn btn-warning btn-sm mt-2">Apply Now</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="position-card p-4 shadow-sm rounded">
          <h5>Sports Coach</h5>
          <p>Part-time, all grades</p>
          <a href="apply.php" class="btn btn-warning btn-sm mt-2">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .position-card { background:#fff; border-radius:12px; transition:0.3s; }
.position-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
.position-card h5 { color:#0B4E9C; font-weight:600; margin-bottom:5px; }
.position-card p { color:#555; }
</style>
<section class="career-benefits py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-5">What <span>We Offer</span></h2>
    <div class="row g-4">
      <div class="col-md-3">
        <i class="fa fa-medal fa-2x mb-2 text-warning"></i>
        <h5>Recognition</h5>
        <p>Rewarding talent and achievements.</p>
      </div>
      <div class="col-md-3">
        <i class="fa fa-graduation-cap fa-2x mb-2 text-warning"></i>
        <h5>Training</h5>
        <p>Continuous professional development.</p>
      </div>
      <div class="col-md-3">
        <i class="fa fa-heart fa-2x mb-2 text-warning"></i>
        <h5>Wellbeing</h5>
        <p>Supportive work-life balance programs.</p>
      </div>
      <div class="col-md-3">
        <i class="fa fa-users fa-2x mb-2 text-warning"></i>
        <h5>Teamwork</h5>
        <p>Collaborative and inclusive environment.</p>
      </div>
    </div>
  </div>
</section>
<section class="career-testimonials py-5">
  <div class="container text-center">
    <h2 class="section-title mb-5">Hear From <span>Our Team</span></h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card p-4 shadow-sm rounded">
          <p>"Working here has helped me grow professionally and personally."</p>
          <h6>- John Doe, Teacher</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card p-4 shadow-sm rounded">
          <p>"The collaborative culture makes teaching truly enjoyable."</p>
          <h6>- Jane Smith, Sports Coach</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card p-4 shadow-sm rounded">
          <p>"Excellent training and support from leadership."</p>
          <h6>- Mark Lee, Admin Staff</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .testimonial-card { background:#fff; border-radius:12px; transition:0.3s; padding:25px; }
.testimonial-card:hover { transform:translateY(-5px); box-shadow:0 10px 25px rgba(0,0,0,0.15); }
.testimonial-card p { color:#555; font-style:italic; }
.testimonial-card h6 { color:#0B4E9C; margin-top:10px; font-weight:600; }
</style>

<section class="career-cta py-5 text-center text-white">
  <div class="container">
    <h2>Ready To <span>Join Us?</span></h2>
    <p>Apply now and be part of our inspiring school environment.</p>
    <a href="apply.php" class="btn btn-warning btn-lg mt-3">Apply Now</a>
  </div>
</section>
<style>
 .career-cta {
    background: url("img/header/bg 2.webp") center/cover no-repeat;
    position: relative;
    padding: 100px 0;
    border-radius:12px;
}
.career-cta::before {
    content:"";
    position:absolute;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(30,36,130,0.7);
    z-index:1;
}
.career-cta .container { position:relative; z-index:2; }
.career-cta h2 { font-size:2.5rem; font-weight:700; margin-bottom:20px; }
.career-cta h2 span { color:#ffc107; }
.career-cta p { font-size:1.2rem; margin-bottom:25px; }
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
      document.addEventListener("DOMContentLoaded", function () {
        var myModal = new bootstrap.Modal(
          document.getElementById("imageModal")
        );
        myModal.show();
      });
    </script>
  </body>
</html>
