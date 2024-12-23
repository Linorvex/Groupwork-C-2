<?php
// Dynamic data for the header
$contactInfo = [
    'phone' => '+01 123455678990',
    'email' => 'demo@gmail.com',
    'location' => 'Location',
];
$navItems = [
    ['url' => 'index.php', 'label' => 'Home', 'active' => true],
    ['url' => 'about.php', 'label' => 'About', 'active' => true],
    ['url' => 'treatment.php', 'label' => 'Treatment', 'active' => true],
    ['url' => 'doctor.php', 'label' => 'Doctors', 'active' => true],
    ['url' => 'testimonial.php', 'label' => 'Testimonial', 'active' => true],
    ['url' => 'contact.php', 'label' => 'Contact Us', 'active' => true],
];

?>

<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="contact_nav">
                <a href="tel:<?php echo $contactInfo['phone']; ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call: <?php echo $contactInfo['phone']; ?>
                    </span>
                </a>
                <a href="mailto:<?php echo $contactInfo['email']; ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email: <?php echo $contactInfo['email']; ?>
                    </span>
                </a>
                <a href="#">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        <?php echo $contactInfo['location']; ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <?php foreach ($navItems as $item): ?>
                                <li class="nav-item <?php echo $item['active'] ? 'active' : ''; ?>">
                                    <a class="nav-link" href="<?php echo $item['url']; ?>">
                                        <?php echo $item['label']; ?>
                                        <?php if ($item['active']): ?>
                                            <span class="sr-only">(current)</span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="quote_btn-container">
                        <a href="login.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Login</span>
                        </a>
                        <a href="signup.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Sign Up</span>
                        </a>
                        <form class="form-inline">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
