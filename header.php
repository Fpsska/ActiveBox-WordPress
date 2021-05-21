<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <!--SVG sprite-->
    <svg style="display: none;">
        <symbol id="facebook" viewBox="0 0 24 24">
            <g>
                <path
                    d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" />
            </g>
        </symbol>
    </svg>
    <svg style="display: none;">
        <symbol id="twitter" viewBox="0 0 56.693 56.693">
            <g>
                <path
                    d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z" />
            </g>
        </symbol>
    </svg>
    <svg style="display: none;">
        <symbol id="linkedin" viewBox="0 0 56.693 56.693">
            <g>
                <path d="M30.071,27.101v-0.077c-0.016,0.026-0.033,0.052-0.05,0.077H30.071z" />
                <path
                    d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12   c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z    M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88   C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078   c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179   c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z" />
            </g>
        </symbol>
    </svg>
    <!--/.SVG sprite-->
    <header class="header" style="background-image: url(<?php the_field( 'header__background' ); ?>)" id="headerJS">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__bar" id="barJS">
                        <img class="header__logo" src="<?php the_field( 'header__logo' ); ?>" alt="">
                    <nav class="nav header__nav" id="navJS">
                        <a class="nav__link" href="#" data-scroll="#features">Features</a>
                        <a class="nav__link" href="#" data-scroll="#works">Works</a>
                        <a class="nav__link" href="#" data-scroll="#team">Our Team</a>
                        <a class="nav__link" href="#" data-scroll="#reviews">Testimonials</a>
                        <a class="nav__link" href="#" data-scroll="#download">Download</a>
                    </nav>
                    <div id="header__burger">
                        <ul id="header__nav">
                            <li class="burger__tab" data-scroll="#features">Features</li>
                            <li class="burger__tab" data-scroll="#works">Works</li>
                            <li class="burger__tab" data-scroll="#team">Our Team</li>
                            <li class="burger__tab" data-scroll="#reviews">Testimonials</li>
                            <li class="burger__tab" data-scroll="#download">Download</li>
                        </ul>
                    </div>
                    <div id="menu-icon">
                        <div class="line_one"></div>
                        <div class="line_two"></div>
                        <div class="line_three"></div>
                    </div>
                </div>
                <div class="header__inner">
                    <div class="header__text">
                        <div class="header__title">
                            <h1><?php the_field( 'header__title' ); ?></h1>
                        </div>
                        <div class="header__subtitle">
                            <h2><?php the_field( 'header__subtitle' ); ?></h2>
                        </div>
                    </div>
                    <button class="header--btn"><?php the_field( 'header--btn' ); ?></button>
                </div>
            </div>
        </div>
    </header>
    <!--/.header-->