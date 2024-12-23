<?php
function generateSliderSection($sliders)
{
    $output = '<section class="slider_section">';
    $output .= '<div class="dot_design"><img src="images/dots.png" alt=""></div>';
    $output .= '<div id="customCarousel1" class="carousel slide" data-ride="carousel">';
    $output .= '<div class="carousel-inner">';

    foreach ($sliders as $index => $slider) {
        $activeClass = $index === 0 ? 'active' : '';
        $output .= '<div class="carousel-item ' . $activeClass . '">';
        $output .= '<div class="container ">';
        $output .= '<div class="row">';
        $output .= '<div class="col-md-6">';
        $output .= '<div class="detail-box">';
        $output .= '<div class="play_btn"><button><i class="fa fa-play" aria-hidden="true"></i></button></div>';
        $output .= '<h1>' . $slider['title'] . '</h1>';
        $output .= '<p>' . $slider['description'] . '</p>';
        $output .= '<a href="' . $slider['link'] . '">' . $slider['link_text'] . '</a>';
        $output .= '</div></div>';
        $output .= '<div class="col-md-6">';
        $output .= '<div class="img-box">';
        $output .= '<img src="' . $slider['image'] . '" alt="">';
        $output .= '</div></div>';
        $output .= '</div></div></div>';
    }

    $output .= '</div>'; // End of carousel-inner
    $output .= '<div class="carousel_btn-box">';
    $output .= '<a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">';
    $output .= '<img src="images/prev.png" alt=""><span class="sr-only">Previous</span></a>';
    $output .= '<a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">';
    $output .= '<img src="images/next.png" alt=""><span class="sr-only">Next</span></a>';
    $output .= '</div>'; // End of carousel_btn-box
    $output .= '</div>'; // End of customCarousel1
    $output .= '</section>';

    return $output;
}
?>