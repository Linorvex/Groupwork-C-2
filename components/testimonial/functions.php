<?php

include ('./components/testimonial/data.php');

function testimonial_content($testimonial_data){
    $is_first = true;
    foreach($testimonial_data as $data){
        echo '
        <div class="carousel-item ' . ($is_first ? 'active' : '') . '">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    '.$data['name'].'
                  </h5>
                  <h6>
                    '.$data['default text'].'
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                    '.$data['text'].'
              </p>
            </div>
          </div>
        ';
        $is_first = false;
}
}