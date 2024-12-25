<?php 
include "./components/doctorSection/doctorVariable.php";
include "./components/doctorSection/doctorFunction.php";
?>
 <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          
            <?php get_doctor($doctors); ?>
         
         </div>
      </div>
    </div>
  </section>
