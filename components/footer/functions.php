<?php
include('./components/footer/data.php');

function footer_section($footer_data) {
    echo '<section class="info_section ">';
    echo '<div class="container">';

   
    echo '
    <div class="info_top">
        <div class="info_logo">
            <a href="">
                <img src="images/logo.png" alt="">
            </a>
        </div>
        <div class="info_form">
            <form action="">
                <input type="email" placeholder="Your email">
                <button>Subscribe</button>
            </form>
        </div>
    </div>';

    
    echo '<div class="info_bottom layout_padding2">';
    echo '<div class="row info_main_row">';

    foreach ($footer_data as $data) {
        echo '<div class="col-md-6 col-lg-3">';
        echo '<h5>' . $data['title'] . '</h5>';

        // <!-- Address ლისტის loop-ი -->

        if ($data['title'] === 'ADDRESS') {
            echo '<div class="info_contact">';
            foreach ($data['list'] as $contact) {
                echo '
                <a href="#">
                    <i class="fa fa-' . (strpos($contact, 'Call') !== false ? 'phone' : (strpos($contact, '@') !== false ? 'envelope' : 'map-marker')) . '" aria-hidden="true"></i>
                    <span>' . $contact . '</span>
                </a>';
            }
            echo '</div>';
            echo '<div class="social_box">
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>';
        }

        // <!-- Useful Links ლისტის loop-ი -->

        elseif ($data['title'] === 'USEFUL LINKS') {
            echo '<div class="info_links">'; 
            echo '<div class="info_links_menu">';
            foreach ($data['list'] as $index => $link_text) {
                echo '<a href="' . $data['link'][$index] . '">' . $link_text . '</a>';
            }
            echo '</div>';
            echo '</div>'; 
        }

        // <!-- Latest post და News ლისტების loop-ი -->

        elseif (in_array($data['title'], ['LATEST POSTS', 'NEWS'])) {
            echo '<div class="info_post">';
            foreach ($data['list'] as $key => $content) {
                if (is_array($content)) {
                    echo '
                    <div class="post_box">
                        <div class="img-box">
                            <img src="' . $content[0] . '" alt="">
                        </div>
                        <p>' . $data['list']['text'] . '</p>
                    </div>';
                }
            }
            echo '</div>';
        }

        echo '</div>'; 
    }

    echo '</div>'; 
    echo '</div>'; 
    echo '</div>'; 
    echo '</section>'; 
}
?>





