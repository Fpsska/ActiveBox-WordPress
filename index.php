<?php get_header(); ?>
    <main>
        <div class="features">
            <div class="container" id="features">
                <div class="features__inner">
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_1' ); ?>" alt="">
                        <h2 class="features__title"><?php the_field( 'features__title_1' ); ?></h2>
                        <div class="features__text"><?php the_field( 'features__text_1' ); ?></div>
                    </div>
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_2' ); ?>" alt="">
                        <h4 class="features__title"><?php the_field( 'features__title_2' ); ?></h4>
                        <div class="features__text"><?php the_field( 'features__text_2' ); ?></div>
                    </div>
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_3' ); ?>" alt="">
                        <h4 class="features__title"><?php the_field( 'features__title_3' ); ?></h4>
                        <div class="features__text"><?php the_field( 'features__text_3' ); ?></div>
                    </div>
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_4' ); ?>" alt="">
                        <h4 class="features__title"><?php the_field( 'features__title_4' ); ?></h4>
                        <div class="features__text"><?php the_field( 'features__text_4' ); ?></div>
                    </div>
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_5' ); ?>" alt="">
                        <h4 class="features__title"><?php the_field( 'features__title_5' ); ?></h4>
                        <div class="features__text"><?php the_field( 'features__text_5' ); ?></div>
                    </div>
                    <div class="features__items">
                        <img class="features__icon" src="<?php the_field( 'features__icon_6' ); ?>" alt="">
                        <h4 class="features__title"><?php the_field( 'features__title_6' ); ?></h4>
                        <div class="features__text"><?php the_field( 'features__text_6' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.features-->

        <div class="works" id="works">
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_1' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_1' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_1' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_2' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_2' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_2' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_3' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_3' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_3' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_4' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_4' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_4' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field ( 'works__photo_5' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_5' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_5' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_6' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_6' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_6' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_7' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_7' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_7' ); ?></div>
                </div>
            </div>
            <div class="works__item">
                <img class="works__photo" src="<?php the_field( 'works__photo_8' ); ?>" alt="">
                <div class="works__content">
                    <div class="works_title"><?php the_field( 'works_title_8' ); ?></div>
                    <div class="works__text"><?php the_field( 'works__text_8' ); ?></div>
                </div>
            </div>
        </div>
        <!--/.works-->

        <div class="team" id="team">
            <div class="container">
                <div class="team__inner">
                    <div class="team__item">

                    <div class="team__photo team__photo_1" style="background-image: url(<?php the_field( 'team__photo_1' ); ?>)"></div>

                        <div class="team__name"><?php the_field( 'team__name_1' ); ?></div>
                        <div class="team__prof"><?php the_field( 'team__prof_1' ); ?></div>
                        <div class="team__text">
                            <p><?php the_field( 'team__text_1' ); ?></p>
                        </div>
                        <div class="team__social">
                            <ul class="social">
                                <li class="social__item">
                                    <a class="social__link" href="https://www.facebook.com/" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://twitter.com/?lang=en" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn"
                                        target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__item">

                    <div class="team__photo team__photo_2" style="background-image: url(<?php the_field( 'team__photo_2' ); ?>)"></div>

                        <div class="team__name"><?php the_field( 'team__name_2' ); ?></div>
                        <div class="team__prof"><?php the_field( 'team__prof_2' ); ?></div>
                        <div class="team__text">
                        <p><?php the_field( 'team__text_2' ); ?></p>
                        </div>
                        <div class="team__social">
                            <ul class="social">
                                <li class="social__item">
                                    <a class="social__link" href="https://www.facebook.com/" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://twitter.com/?lang=en" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn"
                                        target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__item">

                    <div class="team__photo team__photo_3" style="background-image: url(<?php the_field( 'team__photo_3' ); ?>)"></div>

                        <div class="team__name"><?php the_field( 'team__name_3' ); ?></div>
                        <div class="team__prof"><?php the_field( 'team__prof_3' ); ?></div>
                        <div class="team__text">
                        <p><?php the_field( 'team__text_3' ); ?></p>
                        </div>
                        <div class="team__social">
                            <ul class="social">
                                <li class="social__item">
                                    <a class="social__link" href="https://www.facebook.com/" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://twitter.com/?lang=en" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn"
                                        target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__item">

                    <div class="team__photo team__photo_4" style="background-image: url(<?php the_field( 'team__photo_4' ); ?>)"></div>

                        <div class="team__name"><?php the_field( 'team__name_4' ); ?></div>
                        <div class="team__prof"><?php the_field( 'team__prof_4' ); ?></div>
                        <div class="team__text">
                        <p><?php the_field( 'team__text_4' ); ?></p>
                        </div>
                        <div class="team__social">
                            <ul class="social">
                                <li class="social__item">
                                    <a class="social__link" href="https://www.facebook.com/" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://twitter.com/?lang=en" target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn"
                                        target="_blank">
                                        <svg class="social__icon">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.team__inner-->
            </div>
        </div>
        <!--/.team-->

        <div class="reviews" id="reviews">
            <div class="conatainer">
                <div class="reviews__inner">
                    <div class="reviews__slider" id="reviewsSlider">

                        <div class="slick-item">
                            <div class="reviews__item">
                                <div class="reviews__photo photo-1" style="background-image: url(<?php the_field( 'photo-1' ); ?>)"></div>
                                <div class="reviews__content">
                                    <div class="reviews__text"><?php the_field( 'reviews__text_1' ); ?></div>
                                    <div class="reviews__author"><?php the_field( 'reviews__author_1' ); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="reviews__item">
                                <div class="reviews__photo photo-2" style="background-image: url(<?php the_field( 'photo-2' ); ?>)"></div>
                                <div class="reviews__content">
                                    <div class="reviews__text">"Integer posuere erat a ante
                                        venenatis dapibus posuere velit aliquet. Donec sed odio
                                        dui. Aenean eu leo quam...Provident, perferendis
                                        facilis?Quae mollitia quis voluptas dolore sunt quam, temporibus culpa magni id
                                        iure
                                        in
                                        commodi pariatur soluta reiciendis vero odit? Recusandae eligendi maxime in odio
                                        totam
                                        ullam id obcaecati veniam optio!"</div>
                                    <div class="reviews__author">Abram Mars, React Developer</div>
                                </div>
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="reviews__item">
                                <div class="reviews__photo photo-3" style="background-image: url(<?php the_field( 'photo-3' ); ?>)"></div>
                                <div class="reviews__content">
                                    <div class="reviews__text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis
                                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt mollit anim id est laborum."</div>
                                    <div class="reviews__author">Jack Lester, UI Designer</div>
                                </div>
                            </div>
                        </div> 

                    </div>
                    <!--/.download-->
                    <div class="download" id="download">
                        <div class="container">
                            <div class="download__title">
                                <h2><?php the_field( 'download__title' ); ?></h2>
                            </div>
                            <div class="download__text">
                                <p><?php the_field( 'download__text' ); ?></p>
                            </div>
                            <button class="pulse-button"><?php the_field( 'pulse-button' ); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
    </main>
    <!-- /.main -->
<?php get_footer(); ?>