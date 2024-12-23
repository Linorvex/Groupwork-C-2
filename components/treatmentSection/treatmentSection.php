<?php 
include "./components/treatmentSection/treatmentFunction.php"; 
include "./components/treatmentSection/treatmentVariable.php";
?>
<section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
        <?php get_treatment($treatments); ?>
        
      </div>
    </div>
  </section>
