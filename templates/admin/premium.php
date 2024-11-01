<style>
.section {
    margin-left: -20px;
    margin-right: -20px;
    font-family: 'Raleway', san-serif;
    overflow-x: hidden;
}

.section h1 {
    text-align: center;
    text-transform: uppercase;
    color: #808a97;
    font-size: 35px;
    font-weight: 700;
    line-height: normal;
    display: inline-block;
    width: 100%;
    margin: 50px 0 0;
}

.section ul {
    list-style-type: disc;
    padding-left: 15px;
}

.section:nth-child(even) {
    background-color: #fff;
}

.section:nth-child(odd) {
    background-color: #f1f1f1;
}

.section .section-title img {
    display: table-cell;
    vertical-align: middle;
    width: auto;
    margin-right: 15px;
}

.section h2,
.section h3 {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    font-size: 24px;
    font-weight: 700;
    color: #808a97;
    text-transform: uppercase;
}

.section .section-title h2 {
    display: table-cell;
    vertical-align: middle;
    line-height: 25px;
}

.section-title {
    display: table;
}

.section h3 {
    font-size: 14px;
    line-height: 28px;
    margin-bottom: 0;
    display: block;
}

.section p {
    font-size: 13px;
    margin: 25px 0;
}

.section ul li {
    margin-bottom: 4px;
}

.landing-container {
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    padding: 50px 0 30px;
}

.landing-container:after {
    display: block;
    clear: both;
    content: '';
}

.landing-container .col-1,
.landing-container .col-2 {
    float: left;
    box-sizing: border-box;
    padding: 0 15px;
}

.landing-container .col-1 img {
    width: 100%;
}

.landing-container .col-1 {
    width: 55%;
}

.landing-container .col-2 {
    width: 45%;
}

.premium-cta {
    background-color: #808a97;
    color: #fff;
    border-radius: 6px;
    padding: 20px 15px;
}

.premium-cta:after {
    content: '';
    display: block;
    clear: both;
}

.premium-cta p {
    margin: 7px 0;
    font-size: 14px;
    font-weight: 500;
    display: inline-block;
    width: 60%;
}

.premium-cta a.button {
    border-radius: 6px;
    height: 60px;
    float: right;
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
    border-color: #ff643f;
    box-shadow: none;
    outline: none;
    color: #fff;
    position: relative;
    padding: 9px 50px 9px 70px;
}

.premium-cta a.button:hover,
.premium-cta a.button:active,
.premium-cta a.button:focus {
    color: #fff;
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
    border-color: #971d00;
    box-shadow: none;
    outline: none;
}

.premium-cta a.button:focus {
    top: 1px;
}

.premium-cta a.button span {
    line-height: 13px;
}

.premium-cta a.button .highlight {
    display: block;
    font-size: 20px;
    font-weight: 700;
    line-height: 20px;
}

.premium-cta .highlight {
    text-transform: uppercase;
    background: none;
    font-weight: 800;
    color: #fff;
}

.section.one {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/01-bg.png) no-repeat #fff;
    background-position: 85% 75%;
}

.section.two {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/02-bg.png) no-repeat #fff;
    background-position: 15% 100%;
}

.section.three {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/03-bg.png) no-repeat #fff;
    background-position: 85% 75%;
}

.section.four {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/04-bg.png) no-repeat #fff;
    background-position: 15% 100%;
}

.section.five {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/05-bg.png) no-repeat #fff;
    background-position: 85% 75%;
}

.section.six {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/06-bg.png) no-repeat #fff;
    background-position: 15% 100%;
}

.section.seven {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/07-bg.png) no-repeat #fff;
    background-position: 85% 75%;
}

.section.eight {
    background: url(<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/08-bg.png) no-repeat #fff;
    background-position: 15% 100%;
}


@media (max-width: 768px) {
    .section {
        margin: 0
    }

    .premium-cta p {
        width: 100%;
    }

    .premium-cta {
        text-align: center;
    }

    .premium-cta a.button {
        float: none;
    }
}

@media (max-width: 480px) {
    .wrap {
        margin-right: 0;
    }

    .section {
        margin: 0;
    }

    .landing-container .col-1,
    .landing-container .col-2 {
        width: 100%;
        padding: 0 15px;
    }

    .section-odd .col-1 {
        float: left;
        margin-right: -100%;
    }

    .section-odd .col-2 {
        float: right;
        margin-top: 65%;
    }
}

@media (max-width: 320px) {
    .premium-cta a.button {
        padding: 9px 20px 9px 70px;
    }

    .section .section-title img {
        display: none;
    }
}
</style>
<div class="landing">
<div class="section section-cta section-odd">
    <div class="landing-container">
        <div class="premium-cta">
            <p>
                <?php echo sprintf(__('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Surveys%2$s to benefit from all features!', 'yith-woocommerce-surveys'), '<span class="highlight">', '</span>');?>
            </p>
            <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank"
               class="premium-cta-button button btn">
                <span class="highlight"><?php _e('UPGRADE', 'yith-woocommerce-surveys');?></span>
                <span><?php _e('to the premium version', 'yith-woocommerce-surveys');?></span>
            </a>
        </div>
    </div>
</div>
<div class="one section section-even clear">
    <h1><?php _e('Premium Features', 'yith-woocommerce-surveys');?></h1>

    <div class="landing-container">
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/01.png" alt="Feature 01"/>
        </div>
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/01-icon.png" alt="icon 01"/>

                <h2><?php _e('Unlimited survey and unlimited answers', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('No restriction on the number of questions you wish to include: the system allows you to create and add an %1$sunlimited number of surveys%2$s, just as unlimited becomes the number of answers you can configure for each question.%3$s What you wished becomes reality!', 'yith-woocommerce-surveys'), '<b>', '</b>','<br>');?>
            </p>
        </div>
    </div>
</div>
<div class="two section section-odd clear">
    <div class="landing-container">
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/02-icon.png" alt="icon 02"/>

                <h2><?php _e('Checkout page', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('Add a question in the %1$s"Checkout"%2$s page and choose where you want to display it to users. Manage easily and quickly the complete configuration of your questions!', 'yith-woocommerce-surveys'), '<b>', '</b>');?>
            </p>
        </div>
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/02.png" alt="feature 02"/>
        </div>
    </div>
</div>
<div class="three section section-even clear">
    <div class="landing-container">
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/03.png" alt="Feature 03"/>
        </div>
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/03-icon.png" alt="icon 03"/>

                <h2><?php _e('Mandatory answer', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('Force users to answer the survey they find right inside the "Checkout" page in order to let them complete their order. This is the right way to %1$spersuade%2$s users to give you the information you need, and that very often you could not retrieve otherwise.', 'yith-woocommerce-surveys'), '<b>', '</b>', '<br>');?>
            </p>
        </div>
    </div>
</div>
<div class="four section section-odd clear">
    <div class="landing-container">
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/04-icon.png" alt="icon 04"/>

                <h2><?php _e('Product page', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__( 'One of the biggest features of the premium version of the plugin is the freedom to include surveys inside the %1$sproduct detail page%2$s. Select where you want to display the question and choose to apply it on all products or only on some of them.', 'yith-woocommerce-surveys'), '<b>', '</b>');?>
            </p>
        </div>
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/04.png" alt="Feature 04"/>
        </div>
    </div>
</div>
<div class="five section section-even clear">
    <div class="landing-container">
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/05.png" alt="Feature 05"/>
        </div>
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/05-icon.png" alt="icon 05"/>

                <h2><?php _e('Widgets and shortcodes', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('Take advantage of widgets and shortcodes to include surveys in any page of your shop. In this way, it will be easy for you to create customized pages where you can include a complete %1$slist of the questions%2$s you want to ask to your users.', 'yith-woocommerce-surveys'), '<b>', '</b>', '<br>') ?>
            </p>
        </div>
    </div>
</div>
<div class="six section section-odd clear">
    <div class="landing-container">
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/06-icon.png" alt="icon 06"/>

                <h2><?php _e('Report', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('You cannot avoid this very %1$suseful tool%2$s if you have decided to use this plugin. You will be able to check the number of users who chose every single answer, and the total amount of orders related to each answer.', 'yith-woocommerce-surveys'), '<b>', '</b>'); ?>
            </p>
            <p>
                <?php echo sprintf(__('A tailored solution to discover which of your %1$smarketing strategies%2$s got the greater profit in your shop.', 'yith-woocommerce-surveys'), '<b>', '</b>'); ?>
            </p>
        </div>
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/06.png" alt="Feature 06"/>
        </div>
    </div>
</div>
<div class="seven section section-even clear">
    <div class="landing-container">
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/07.png" alt="Feature 07"/>
        </div>
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/07-icon.png" alt="icon 07"/>

                <h2><?php _e('CSV Export', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('All the data of the plugin %1$sreport%2$s can be exported in CSV format to give you the chance to elaborate them also with other tools.', 'yith-woocommerce-surveys'), '<b>', '</b>') ?>
            </p>
        </div>
    </div>
</div>
<div class="eight section section-odd clear">
    <div class="landing-container">
        <div class="col-2">
            <div class="section-title">
                <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/08-icon.png" alt="icon 08"/>

                <h2><?php _e('Hide survey', 'yith-woocommerce-surveys');?></h2>
            </div>
            <p>
                <?php echo sprintf(__('Do not display the question to the users if they have already answered. With a single click, organizing your %1$ssurveys%2$s will become faster.', 'yith-woocommerce-surveys'), '<b>', '</b>'); ?>
            </p>
        </div>
        <div class="col-1">
            <img src="<?php echo YITH_WC_SURVEYS_ASSETS_URL ?>/images/08.png" alt="Feature 08"/>
        </div>
    </div>
</div>
<div class="section section-cta section-odd">
    <div class="landing-container">
        <div class="premium-cta">
            <p>
                <?php echo sprintf(__('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Surveys%2$s to benefit from all features!', 'yith-woocommerce-surveys'), '<span class="highlight">', '</span>');?>
            </p>
            <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank"
               class="premium-cta-button button btn">
                <span class="highlight"><?php _e('UPGRADE', 'yith-woocommerce-surveys');?></span>
                <span><?php _e('to the premium version', 'yith-woocommerce-surveys');?></span>
            </a>
        </div>
    </div>
</div>
</div>