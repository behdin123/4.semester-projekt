<footer>
    <?php while(have_posts()) : the_post() ?>

    <div class="container-footer pt-4">
        <div class="row">
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("first-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-1") ?>"><?php the_field("link-1-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-2") ?>"><?php the_field("link-2-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-3") ?>"><?php the_field("link-3-text") ?></a></li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-4") ?>"><?php the_field("link-4-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("link-5") ?>"><?php the_field("link-5-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("second-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-1") ?>"><?php the_field("second-link-1-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-2") ?>"><?php the_field("second-link-2-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("second-link-3") ?>"><?php the_field("second-link-3-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("third-titel") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("third-link-1") ?>"><?php the_field("third-link-1-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("third-link-2") ?>"><?php the_field("third-link-2-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("third-link-1") ?>"><?php the_field("third-link-3-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("third-link-4") ?>"><?php the_field("third-link-4-text") ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="text-body">
                    <h6 class="text-truncate pb-2"><?php the_field("fourth-titel") ?></h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("fourth-link-1") ?>"><?php the_field("fourth-link-1-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("fourth-link-2") ?>"><?php the_field("fourth-link-2-text") ?></a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </div>
            <!---->
            <div class="col-md">
                    <h6 class="text-truncate pb-2"><?php the_field("titel-safety-footer") ?>
                    </h6>
                    <ul class="list-unstyled">
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("fire-first-link") ?>"><?php the_field("fire-first-text") ?></a>
                        </li>
                        <li class="text-truncate"><a class="text-body"
                                href="<?php the_field("general-safety-link") ?>"><?php the_field("general-safety-text") ?></a>
                        </li>
                        <!---->
                    </ul>
            </div>
        </div>
    </div>

    <hr class="w-50 mt-5 mb-4">
    <div class="footer-copyright text-center pb-4">
        <div itemtype="http://schema.org/Organization" class="container-footer-copyright"><a itemprop="url"
                href="https://www.viking-life.com"><img itemprop="logo" alt="logo"
                    src="<?php the_field("viking-logo-footer") ?>" height="88px"></a>
            <p itemprop="legalName" class="small pt-4">VIKING LIFE-SAVING EQUIPMENT A/S</p>
            <div class="small text-center"><span><span>Saedding Ringvej 13</span> -
                    <span>6710</span><span>Esbjerg</span> - <span>Denmark</span> - </span><a class="text-body small"
                    href="tel:+45 76 11 81 00"> <span>Tel. +45 76 11 81 00</span></a> - <a class="text-body small"
                    href="fax:+45 76 11 81 01"> <span>Fax +45 76 11 81
                        01</span></a> - <a class="text-body small"
                    href="mailto:SafetyAcademy@VIKING-life.com"><span>VIKING@VIKING-life.com</span></a> <span>-
                    CVR:15016213</span>
                <div class="payment">
                    <span>
                        <img src=" <?php the_field("dankort") ?>" alt="benefit icons" width="100%" height="auto"><br>
                        Dankort
                    </span>
                    <span>
                        <img src=" <?php the_field("visa") ?>" alt="benefit icons" width="100%" height="auto"><br>
                        VISA
                    </span>
                    <span>
                        <img src=" <?php the_field("mastercard_") ?>" alt="benefit icons" width="50%" height="auto"><br>
                        MasterCard
                    </span>
                </div>

                <a class="Terms" target="_blank" href="https://www.viking-fire.com/en">Terms and Conditions</a>    

            </div>
        </div>
    </div>
</footer>

<?php endwhile; ?>
<script type="text/javascript">
jssor_1_slider_init();
</script>
<?php wp_footer() ?>
</body>

</html>