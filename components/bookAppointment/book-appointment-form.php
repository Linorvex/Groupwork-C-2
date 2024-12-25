<!DOCTYPE html>
<html>
<?php
session_start();

// Get the form data from session
$patientName = $_SESSION['patientName'] ?? '';
$phoneNumber = $_SESSION['phoneNumber'] ?? '';
$symptoms = $_SESSION['symptoms'] ?? '';
$date = $_SESSION['date'] ?? '';
$departmentName = $_SESSION['departmentName'] ?? '';
$doctorName = $_SESSION['doctorName'] ?? '';
?>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>



  <h1>Appointment Details</h1>
  <div>
    <p><strong>Patient Name:</strong> <?php echo $patientName; ?></p>
    <p><strong>Phone Number:</strong> <?php echo $phoneNumber; ?></p>
    <p><strong>Symptoms:</strong> <?php echo $symptoms; ?></p>
    <p><strong>Preferred Date:</strong> <?php echo $date; ?></p>
    <p><strong>Department:</strong> <?php echo $departmentName; ?></p>
    <p><strong>Doctor Name:</strong> <?php echo $doctorName; ?></p>
  </div>
  <button class="btn">
    <a href="http://localhost/C-2-Groupwork/">Go Home</a>
  </button>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>