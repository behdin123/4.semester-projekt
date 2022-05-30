<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>

<!-- Banner sektion starts here -->
<!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->

<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
            <stop offset="0" stop-color="#fff"></stop>
            <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
            <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0"
                style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>

<div class="banner" id="jssor_1"
    style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">

    <!-- Loading Screen -->
    <div class="banner-img" data-u="slides"
        style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        <div>
            <img alt="Practical training by employess on sea" data-u="image" data-src="<?php the_field("img_4") ?>" />
            <div data-ts="flat" data-p="1080" style="left:80px;top:0px;width:1600px;height:560px;position:absolute;">
                <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                    style="left:155px;top:0px;display:block;position:absolute;overflow:visible;">
                </svg>
                <a href="https://www.interschutz.de/en/">
                    <div class="btn CTA">
                        Find latest news!
                    </div>
                </a>
            </div>
        </div>
        <div>
            <img alt="E-learning in office"  data-u="image" data-src="<?php the_field("img_1") ?>" />
            <div data-ts="flat" data-p="275" data-po="40% 50%"
                style="top:250px;width:100%;height:300px;position:absolute;">
                <div class="first-banner-text" data-to="50% 50%" data-t="0"
                    style="display: flex;justify-content: center;top:1430px !important;width:100%;height:100px;position:absolute;color:#efefef;font-family:'Open Sans',sans-serif;font-size:34px;font-weight:900;text-shadow: 3px 3px 7px black;bottom:50px;">
                    <h1><?php the_field("img_1_text_") ?></h1>
                </div>
            </div>
        </div>

        <div>
            <img alt="E-learning on sea" data-u="image" data-src="<?php the_field("img_2") ?>" />
            <div data-ts="flat" data-p="540" data-po="40% 50%"
                style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6"
                    style="top:700px;width: 100%;height:500px;position:absolute;">
                    <div viewbox="0 0 800 100" width="1150" height="100" data-t="9"
                        style="display: flex;justify-content: center;width:100%;color:#efefef;top:155px;position:absolute;text-shadow: 5px 5px 8px black;font-family:'Open Sans',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <h2 text-anchor="middle" x="400" y="230">
                            <?php the_field("img_2_text_") ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img alt="Practical training by employess on sea" data-u="image" data-src="<?php the_field("img_3") ?>" />
            <div data-ts="flat" data-p="1080" style="left:80px;top:0px;width:1600px;height:560px;position:absolute;">
                <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                    style="left:155px;top:0px;display:block;position:absolute;overflow:visible;">
                </svg>
                <div viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                    style="color:#efefef;text-shadow: 2px 2px 5px black;left:-900px;top:87px;display:block;position:absolute;font-family:'Open Sans',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                    <h2 text-anchor="middle" x="400" y="72"><?php the_field("img_3_text_") ?>
                    </h2>
                </div>
                <div viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                    style="color:#efefef;text-shadow: 2px 2px 5px black;left:1353px;top:153px;display:block;position:absolute;font-family:'Open Sans',sans-serif;font-size:30px;font-weight:900;overflow:visible;">
                    <h2 style="width:616px;margin-top:100px;" text-anchor="middle" x="400" y="72">
                        <?php the_field("img_3_text_-2") ?>
                    </h2>
                </div>
            </div>
        </div>

       

    </div><a data-scale="0" style="display:none;position:absolute;"></a>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1"
        data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
        data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2"
        data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>

<!-- Banner sektion ends here -->





<!-- Back to top starts here -->

<?php get_template_part("template-parts/Back-to-top") ?>

<!-- Back to top ends here -->


<!-- First sektion starts here -->

<div class="first-section">
    <div class="first-section-titel">
        <h3>VIKING PRODUCTS PROVIDES</h3>
    </div>
    <div class="Goals-section">
        <div class="Goals">
            <div class="Goals-h4">
                <h4>Protection</h4>
            </div>
            <div>
                <img src=" <?php the_field("checks") ?>" alt="VIKING products provides" width="35px" height="auto">
            </div>
        </div>
        <div class="Goals">
            <div class="Goals-h4">
                <h4>Durability</h4>
            </div>
            <div>
                <img src=" <?php the_field("checks") ?>" alt="VIKING products provides" width="35px" height="auto">
            </div>
        </div>
        <div class="Goals">
            <div class="Goals-h4">
                <h4>Mobility</h4>
            </div>
            <div>
               <img src=" <?php the_field("checks") ?>" alt="VIKING products provides" width="35px" height="auto">
            </div>
        </div>
        <div class="Goals">
            <div class="Goals-h4">
                <h4>Comfort</h4>
            </div>
            <div>
               <img src=" <?php the_field("checks") ?>" alt="VIKING products provides" width="35px" height="auto">
            </div>
        </div>
        
    </div>
</div>

<!-- First sektion ends here -->

<!-- Benefits - sektion starts here -->

<div id="benefit" class="contain first-mode">
    <div class="informations">
        <div class="informations">
            <?php
         $args = array(
            "meta_key" => "order",
            "orderby" => "meta_value_num",
            "order" => "ASC",
            "post_type" => "benefit")
        ?>
            <?php $query = new WP_Query($args) ?>

            <?php while($query->have_posts()) : $query->the_post(); ?>

            <div class="info">
            <img src=" <?php the_field("image") ?>" alt="VIKING products and technologies" width="100%" height="auto">
                <?php the_content() ?>
                <div class="information-titels">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Benefits - sektion ends here -->


<!-- Video - sektion starts here -->

<div class="video-div">
    <?php the_content() ?>
</div>

<!-- Video - sektion ends here -->

<!-- Track & Trace - second sektion starts here -->

<div class="container first-sektion flex-direction Track-Trace">
    <div id="Track-Trace" class="stand-img hide-image">
          <img src=" <?php the_field("image") ?>" alt="Track and Trace stand with inofrmations" width="100%" height="auto">
    </div>
    <div class="main-text-center">
            <h2><?php the_field("sub-titel") ?></h2>
            <h3><?php the_field("titel") ?></h3>
            <p class="first-text"><?php the_field("text") ?><br></p>
            <p class="hide-text hide-for-see-more-Track-Trace"><?php the_field("text-1.2") ?><br></p>
            <div class="see-more-div">
                <div id="see-more" class="see-more btn">see more</div>
            </div>
    </div>
    <div class="stand-img">
          <img src=" <?php the_field("image-stand-2") ?>" alt="Track and Trace event" width="100%" height="auto">
    </div>
    
</div>

<!-- Track & Trace - second sektion ends here -->

<!-- Small banner - starts here -->

<div class="red-banner">
    <div class="banner-logo">
        <img src=" <?php the_field("logo-secondary") ?>" alt="VIKING Logo" width="100%" height="auto">
    </div>
    <div>
        <h3 class="hide-textt">VIKING brings the latest technology to Interschutz</h3>
        <h3 class="hided-for-desktop show-it"><?php the_field("banner-second-text") ?></h3>
    </div>
</div>


<!-- Small banner - ends here -->


<!-- Safety Academy - starts here -->

<div class="container first-sektion flex-direction colument-direction safety-academy" >
    <div class="txt h1 h2 txt-box" id="Safety-academy">
        <div class="text-div">
            <h2><?php the_field("academy-titel") ?></h2>
            <h3><?php the_field("sub-titel-academy") ?></h3> 
            <p><?php the_field("first-section-academy") ?><br></p>
            <p><?php the_field("second-section-academy") ?><br><br></p>
            <p class="hide-text"><?php the_field("third-section-academy") ?><br></p>
            <p class="hide-text hide-for-see-Academy"><?php the_field("fourth-section-academy") ?><br></p>
            <div class="see-more-div">
                <div id="see-more" class="see-more see-more-Academy btn">see more</div>
            </div>
        </div>
    </div>

    <div class="sektion-image image hided-for-ipad"><img src=" <?php the_field("academy-image") ?>" alt="Course creator usage in office by a employee" width="100%" height="auto"></div>
    <div class="sektion-image image hided-for-desktop "><img src=" <?php the_field("academy-image-ipad") ?>" alt="Course creator usage in office by a employee" width="100%" height="auto"></div>
</div>

<!-- Safety Academy - ends here -->


<!-- PartX™ - second sektion starts here -->

<div class="container first-sektion sektion-direction flex-direction margin-bottom">
    <div class="stand-img " id="PartX">
          <img src=" <?php the_field("partx-image-2") ?>" alt="Firesuit with Particle Protection Technology" width="100%" height="100%">
    </div>
    <div class="main-text-center">
            <h2><?php the_field("partx-titel") ?></h2>
            <h3><?php the_field("partx-sub-titel") ?></h3>
            <p class="first-text"><?php the_field("partx-text") ?><br></p>
            <p class="hide-text hide-for-see-PartX"><?php the_field("partx-text-2") ?><br></p>
            <div class="see-more-div">
                <div id="see-more" class="see-more see-more-partX btn">see more</div>
            </div>
    </div>
    <div class="stand-img hide-image">
          <img src=" <?php the_field("partx-image-1") ?>" alt="Firesuit with Particle Protection Technology" width="100%" height="auto">
    </div>
</div>

<!-- PartX™ - second sektion ends here -->


<!-- Small banner - starts here -->

<div class="yellow-banner">
    <div>
        <div class="banner-btn">READ MORE</div>
    </div>
    <div>
        <h3>WHAT IS OUR STANDARDS?</h3>
    </div>
</div>


<!-- Small banner - ends here -->

<!-- VIKING PERFORMER - starts here -->

<div class="container second-sektion flex-direction extra-padding">
    <div class="txt h1 h2 txt-box" id="Performer">
        <div class="text-div">
            <h2><?php the_field("performer-titel") ?></h2>
            <h3><?php the_field("performer-sub-titel") ?></h3> 
            <p><?php the_field("performer-text") ?><br></p>
            <p class=""><?php the_field("performer-text-1") ?><br><br></p>
            <p class="hide-text hide-for-see-Performer"><?php the_field("performer-text-2") ?><br></p>
            <div class="see-more-div">
                <div id="see-more" class="see-more see-more-Performer btn">see more</div>
            </div>
        </div>
    </div>

    <div class="sektion-image image hided-for-ipad"><img src=" <?php the_field("performer-image") ?>" alt="Firefighters with VIKING firesuit - VIKING performer" width="100%" height="auto"></div>
    <div class="sektion-image image hided-for-desktop"><img src=" <?php the_field("performer-image-ipad") ?>" alt="Firefighters with VIKING firesuit - VIKING performer" width="100%" height="auto"></div>
</div>

<!-- VIKING PERFORMER - ends here -->


<!-- Small banner - starts here -->

<div class="yellow-banner">
    <div>
        <div class="banner-btn">READ MORE</div>
    </div>
    <div>
        <h3>WHAT IS OUR STANDARDS?</h3>
    </div>
</div>


<!-- Small banner - ends here -->

<!-- Technical Rescue - second sektion starts here -->

<div class="container first-sektion flex-direction sektion-direction Technical-Rescue">
    <div class="stand-img" id="Tech-rescue">
          <img src=" <?php the_field("rescue-image-1") ?>" alt="Technical rescue products used in action case" width="100%" height="auto">
    </div>
    <div class="main-text-center">
            <h2><?php the_field("rescue-titel") ?></h2>
            <h3><?php the_field("rescue-sub-titel") ?></h3>
            <p class="first-text"><?php the_field("rescue-text") ?><br></p>
            <p class="second-text hide-text hide-for-see-tech"><?php the_field("rescue-text-1") ?></p>
            <div class="see-more-div">
                <div id="see-more" class="see-more see-more-tech btn">see more</div>
            </div>
    </div>
    <div class="stand-img hide-image">
          <img src=" <?php the_field("rescue-image-2") ?>" alt="Technical rescue products showed and ready to use" width="100%" height="auto">
    </div>
</div>

<!-- Technical Rescue - second sektion ends here -->


<!-- SOME - sektion starts here -->
<?php get_template_part("template-parts/SOME") ?>
<!-- SOME - sektion ends here -->

<?php endwhile; ?>



<!--Login modal-->
<?php get_template_part("template-parts/users/log-in") ?>
<!--Login modal-->

<!--Sign up modal-->
<?php get_template_part("template-parts/users/sign-up") ?>
<!--Sign up modal-->


<?php get_footer(); ?>