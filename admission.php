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
$activePage = 'admission';
include 'header.php';
?>




      
    
 
       
     

<!-- Admissions Section -->
<section class="py-5 modern-admission" id="admissions">
  <div class="container">
    

    <!-- TOP: OVERVIEW + IMAGE -->
    <div class="row align-items-center mb-5 g-4">
      
      <!-- LEFT CONTENT -->
      <div class="col-lg-7">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Admission <span style="color:#222;">Guidelines</span></h2>
        <ul class="admission-list mt-4">
          <li>New pupils must be introduced for regularity and dues clearance.</li>
          <li>Parents must accompany the child for a personal interview.</li>
          <li>Age eligibility will be verified during admission.</li>
          <li>Submit photocopy of Birth Certificate, Community Certificate, Aadhar Card & original TC.</li>
          <li>Admission enquiry timing: <strong>9.00 AM to 2.00 PM</strong>.</li>
          <li>Contact Admission In-charge for queries.</li>
          <li>Application forms are available at the school office.</li>
        </ul>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-5">
        <img src="img/admissions.jpg" alt="Admissions" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>

    
        
        
      </div>

      <!-- FORM -->
      <div class="col-lg-7 mx-auto">

        <div class="card border-0 shadow-lg rounded-4">
          <div class="card-body p-4">
            <h2 class="font-weight-bold" style="color:#1F4FB2;">Admission <span style="color:#222;">Application</span></h2>

            

            <form method="post" enctype="multipart/form-data" novalidate>
              <div class="row g-3">

                <div class="col-md-6">
                  <label class="form-label">Student Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Admission Into Grade <span class="text-danger">*</span></label>
                  <select class="form-select" required>
                    <option selected disabled>Choose...</option>
                    <option>KG</option><option>Class I</option><option>Class II</option>
                    <option>Class III</option><option>Class IV</option><option>Class V</option>
                    <option>Class VI</option><option>Class VII</option><option>Class VIII</option>
                    <option>Class IX</option><option>Class X</option><option>Class XI</option><option>Class XII</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">School currently studying in</label>
                  <input type="text" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Father’s Name</label>
                  <input type="text" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Mother’s Name</label>
                  <input type="text" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" pattern="[0-9]{10}" placeholder="10-digit mobile" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Alternate Number</label>
                  <input type="tel" class="form-control" pattern="[0-9]{10}">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control">
                </div>

                <div class="col-12">
                  <label class="form-label">Address</label>
                  <textarea class="form-control" rows="2"></textarea>
                </div>

                <div class="col-12 mt-2">
                  <button class="btn btn-primary px-4 py-2 rounded-3">Submit</button>
                </div>

              </div>
            </form>

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