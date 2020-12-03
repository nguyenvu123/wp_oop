
<footer id="footer">
    <div class="wrapper full-width">
        <div class="col-item">
            <h5 class="title"> <?php _e('Company', 'ETC') ?></h5>
            <ul>
                <?php
                if (have_rows('company_footer','option')):
                    while (have_rows('company_footer','option')) : the_row();
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                        ?>
                        <li><a href="<?= $link ?>"><?= $name ?></a></li>
                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
        <div class="col-item">
            <h5 class="title">  <?php _e('Products & Services', 'ETC') ?></h5>
            <ul>
                <?php
                if (have_rows('products_services_footer','option')):
                    while (have_rows('products_services_footer','option')) : the_row();
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                        ?>
                        <li><a href="<?= $link ?>"><?= $name ?></a></li>
                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
        <div class="col-item">
            <h5 class="title"> <?php _e('Others', 'ETC') ?></h5>
            <ul>
                <?php
                if (have_rows('others_footer','option')):
                    while (have_rows('others_footer','option')) : the_row();
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                        ?>
                        <li><a href="<?= $link ?>"><?= $name ?></a></li>
                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
        <div class="col-item">
            <h5 class="title subscribe"> <?php _e('Subscribe our newsletter', 'ETC') ?></h5>
            <form class="form-address" method="post" action="http://etc.me/?na=s" onsubmit="return newsletter_check(this)">
                <input type="hidden" name="nlang" value="">
                <input class="tnp-email" aria-labelledby="address-button" type="email" name="ne" placeholder="Your email address" required>

                <button id="address-button" class="tnp-submit" type="submit" value="" >
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Combined-Shape.svg" alt="">
                </button>
            </form>

            <ul>
                <?php
                if (have_rows('subscribe_our_newsletter_footer','option')):
                    while (have_rows('subscribe_our_newsletter_footer','option')) : the_row();
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                        ?>
                        <li><a href="<?= $link ?>"><?= $name ?></a></li>
                    <?php
                    endwhile;
                endif;
                ?>
                <li class="copyright"><?=get_field('copy_right_footer','option') ?></li>
            </ul>
        </div>
    </div>
</footer>
