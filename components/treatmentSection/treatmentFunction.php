<?php
function get_treatment($treatment) {
    for ($i = 0; $i < sizeof($treatment); $i++) {
        echo '<div class="col-md-6 col-lg-3">';
        echo '  <div class="box">';
        echo '    <div class="img-box">';
        echo '      <img src="' . $treatment[$i]["image"] . '" alt="' . $treatment[$i]["title"] . '">';
        echo '    </div>';
        echo '    <div class="detail-box">';
        echo '      <h4>' . $treatment[$i]["title"] . '</h4>';
        echo '      <p>' . $treatment[$i]["description"] . '</p>';
        echo '      <a href="' . $treatment[$i]["button"] . '">' . $treatment[$i]["buttonText"] . '</a>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
};
