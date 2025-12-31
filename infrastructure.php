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
$activePage = 'infrastructure';
include 'header.php';
?>


 
 
  

<section class="py-5" style="background:#eef5ff;">
  <div class="container text-center">
    <h3 class="fw-bold mb-4">Our Facilities</h3>
    <div class="row g-4">

     <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-video-camera fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">24×7 CCTV</h5>
          <p>Campus monitored round-the-clock for safety and security.</p>
        </div>
      </div>

      <!-- Facility 2 -->
  

      <!-- Facility 3 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-fire-extinguisher fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Fire Safety</h5>
          <p>Equipped with fire alarms and extinguishers for emergencies.</p>
        </div>
      </div>

      <!-- Facility 4 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-user-md fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Medical Room</h5>
          <p>First aid and medical assistance available on campus.</p>
        </div>
      </div>

      <!-- Facility 5 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fas fa-football-ball fa-2x mb-2 text-primary"></i>

          <h5 class="mb-2">Sports Facilities</h5>
          <p> Facilities Indoor and outdoor sports areas for all students.</p>
        </div>
      </div>

      <!-- Facility 6 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-bus fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Transportation</h5>
          <p>Safe and reliable bus services covering all major areas.</p>
        </div>
      </div>
      <!-- Facility 2 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-bus fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Transport & Security</h5>
          <p>Safe and reliable transportation with security measures.</p>
        </div>
      </div>

     

      <!-- Facility 4 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-flask fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Lab</h5>
          <p>Advanced Science, Computer, and Robotics labs for practical learning.</p>
        </div>
      </div>

      <!-- Facility 5 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-child fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Yoga</h5>
          <p>Daily yoga sessions promoting health and mindfulness.</p>
        </div>
      </div>

      <!-- Facility 6 -->
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded-4 bg-white">
          <i class="fa fa-music fa-2x mb-2 text-primary"></i>
          <h5 class="mb-2">Extracurriculars</h5>
          <p>Clubs, arts, and cultural activities to develop creativity.</p>
        </div>
      </div>

    </div>
  </div>
</section>


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
    background: #1F4FB2;
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
