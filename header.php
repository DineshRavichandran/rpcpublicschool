<!-- Topbar Start -->
<div class="topbar premium-topbar py-1">
  <div class="d-flex justify-content-between align-items-center px-5">

    <!-- LEFT: Phone & Email -->
    <div class="contact-left d-flex align-items-center">
      <small class="me-3 d-flex align-items-center">
        <i class="bi bi-telephone-outbound me-2"></i> 044 2247 1987
      </small>

      <div class="divider"></div>

      <small class="ms-3 d-flex align-items-center">
        <i class="bi bi-envelope-open me-2"></i> rpcpublicschool@gmail.com
      </small>
    </div>

    <!-- RIGHT: Social Media -->
    <div class="social-right d-flex align-items-center">
      <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
      <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
      <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
      <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
    </div>

  </div>
</div>
<style>
  /* Topbar Style */
.premium-topbar {
  width: 100%;
  background: #0B4E9C;
  color: #ffffff;
  font-size: 15px;
}

/* Divider */
.premium-topbar .divider {
  width: 1px;
  height: 20px;
  background: rgba(255, 255, 255, 0.4);
}

/* Icons style */
.premium-topbar i {
  font-size: 16px;
  color: #ffffff;
}

/* Social icons modern circle background */
.social-icon {
  color: #ffffff;
  margin-left: 10px;
  font-size: 18px;
  display: flex;
  width: 32px;
  height: 32px;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.15);
  transition: 0.3s ease;
}

/* Hover Glow Effect */
.social-icon:hover {
  background: rgba(255, 255, 255, 0.35);
  transform: translateY(-3px);
}

/* Alignments */
.contact-left small,
.social-right a {
  display: flex;
  align-items: center;
}
</style>
<!-- header start -->
<header class="single-row-fixed-header sticky-top">
    <nav class="navbar navbar-expand-lg py-6 px-lg-10">
        
<a href="index.php" class="navbar-brand m-0 d-flex align-items-center">
    <img src="img/logo.png" class="school-logo-sm" alt="School Logo">
</a>

        <!-- You can add school name here if needed -->
    </div>
</a>
<style>
.school-logo-sm {
    width: 650px !important;   /* increase size */
    height: auto !important;
}

.navbar {
    padding-top: 15px !important;
    padding-bottom: 15px !important;
}


</style>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="fixedNavbar">
                <ul class="navbar-nav ms-auto gap-lg-3">
                    <li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'index') ? 'active' : ''; ?>" href="index.php">Home</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'about') ? 'active' : ''; ?>" href="about.php">About</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'admission') ? 'active' : ''; ?>" href="admission.php">Admissions</a>
</li>



<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'infrastructure') ? 'active' : ''; ?>" href="infrastructure.php">Infrastructure</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
</li>

                </ul>

                <a href="admission.html" class="admission-btn mt-3 mt-lg-0 ms-lg-4">Admissions Open</a>
            </div>

        </div>
    </nav>
</header>
 
<!-- header end -->