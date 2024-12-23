<?php
function get_doctor($doctors) {
    foreach ($doctors as $doctor) {
        echo '<div class="item">';
        echo '<div class="box">';
        echo '  <div class="img-box">';
        echo '    <img src="' . $doctor["box"]["img"]["src"] . '" alt="" />';
        echo '  </div>';
        echo '  <div class="detail-box">';
        echo '    <h5>' . $doctor["box"]["details"]["name"] . '</h5>';
        echo '    <h6>' . htmlspecialchars($doctor["box"]["details"]["title"]) . '</h6>';
        echo '    <div class="social_box">';
        foreach ($doctor["box"]["details"]["social_links"] as $link) {
            echo '<a href="' . $link["link"] . '">';
            echo '<i class="' . $link["icon"] . '" aria-hidden="' . $link["aria"] . '"></i>';
            echo '</a>';
        }
        echo '  </div>';
        echo '  </div>';
        echo '</div>';
        echo '</div>';
    }
}



