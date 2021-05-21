<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_1' ); ?></h4>
                    <address class="footer__address">
                        <p><?php the_field( 'footer__address' ); ?></p>
                    </address>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_2' ); ?></h4>
                    <div class="footer__text">
                        <p><?php the_field( 'footer__text' ); ?></p>
                    </div>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_3' ); ?></h4>
                    <ul class="social social--footer">
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
                            <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn" target="_blank">
                                <svg class="social__icon">
                                    <use xlink:href="#linkedin"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__inner-mobile">
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_2' ); ?></h4>
                    <div class="footer__text">
                        <p><?php the_field( 'footer__text' ); ?></p>
                    </div>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_1' ); ?></h4>
                    <address class="footer__address">
                        <p><?php the_field( 'footer__address' ); ?></p>
                    </address>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title"><?php the_field( 'footer__title_3' ); ?></h4>

                    <ul class="social social--footer">
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
                            <a class="social__link" href="https://ru.wikipedia.org/wiki/LinkedIn" target="_blank">
                                <svg class="social__icon">
                                    <use xlink:href="#linkedin"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.footer__inner-->
        </div>
        <div class="copyright">
            <div class="conatainer">
                <div class="copyright__text">
                <?php the_field( 'copyright__text' ); ?></div>
            </div>
        </div>
    </footer>
    <!--/.footer-->


    <?php wp_footer(); ?>
</body>

</html>