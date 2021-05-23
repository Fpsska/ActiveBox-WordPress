<?php get_header(); ?>
    <main>
        <div class="features">
            <div class="container" id="features">  
                <div class="features__inner">              
                    <?php
                        $featured_posts = get_field('features__items');
                        if( $featured_posts ): ?>
                            <ul class="features__inner">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <li class="features__items">
                                    <?php if( get_field('features__icon') ): ?>
                                        <img class="features__icon" src="<?php the_field('features__icon'); ?>" />
                                    <?php endif; ?>
                                    <h4 class="features__title"><?php the_field( 'features__title' ); ?></h4>
                                    <div class="features__text"><?php the_field( 'features__text' ); ?></div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <?php 
                            wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--/.features-->

        <div class="works" id="works">
        <div class="works__inner">
            <?php
                $featured_posts = get_field('works__item');
                    if( $featured_posts ): ?>
                        <ul class="works__inner">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <li class="works__item">
                                <?php if( get_field('works__photo') ): ?>
                                    <div class="works__photo" style="background-image: url(<?php the_field( 'works__photo' ); ?>)"></div>
                                <?php endif; ?>
                                <div class="works__content">
                                    <div class="works_title"><?php the_field( 'works_title' ); ?></div>
                                    <div class="works__text"><?php the_field( 'works__text' ); ?></div>
                                </div>
                                </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php 
                        wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
        <!--/.works-->
        <div class="team" id="team">
            <div class="container">

                <div class="team__inner">
                    
                    <?php
                        $featured_posts = get_field('team__item');
                        if( $featured_posts ): ?>
                            <ul class="team__inner">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <li class="team__item">
                                    <?php if( get_field('team__photo') ): ?>
                                        <div class="team__photo" style="background-image: url(<?php the_field( 'team__photo' ); ?>)"></div>
                                    <?php endif; ?>
                                    <h4 class="team__name"><?php the_field( 'team__name' ); ?></h4>
                                    <div class="team__prof"><?php the_field( 'team__prof' ); ?></div>
                                    <div class="team__text"><p><?php the_field( 'team__text' ); ?></p></div>
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
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <?php 
                            wp_reset_postdata(); ?>
                    <?php endif; ?>
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
                                    <div class="reviews__text"><?php the_field( 'reviews__text_2' ); ?></div>
                                    <div class="reviews__author"><?php the_field( 'reviews__author_2' ); ?></div>
                                </div>
                            </div>

                        </div>

                        <div class="slick-item">

                            <div class="reviews__item">
                                <div class="reviews__photo photo-3" style="background-image: url(<?php the_field( 'photo-3' ); ?>)"></div>
                                <div class="reviews__content">
                                    <div class="reviews__text"><?php the_field( 'reviews__text_3' ); ?></div>
                                    <div class="reviews__author"><?php the_field( 'reviews__author_3' ); ?></div>
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