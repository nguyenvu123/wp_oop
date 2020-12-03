<?php
$image = get_field('image_map_left_page_contact');
$alt = $image['alt'];
$mapImage = $image['sizes']['ABOUT_MAP']
?>
<div class="banner-bottom">
    <div class="wrapper full-width">
        <div class="row-col d-flex">
            <div class="col-left">
                <?php
                if (have_rows('country_page_contact')):
                    $i =0;
                    while (have_rows('country_page_contact')) : the_row();
                    $i++;
                        $area = get_sub_field('area');
                        $firstLastName = get_sub_field('fisrt_last_name');
                        $jobTitle = get_sub_field('job_title');
                        $email = get_sub_field('email_contact');
                        $phone1 = get_sub_field('phone_number_contact');
                        $phone1Custom = trim($phone1, ' ');
                        $phone2 = get_sub_field('phone_number_2_contact');
                        $phone2Custom = trim($phone2, ' ');
                        $address = get_sub_field('address_contact');
                        $emialForContact = get_sub_field('email_for_link_contact');
                        ?>
                        <div class="country-des <?php if($i==1){echo 'show';} ?>">
                            <div class="location"><?= $area ?></div>
                            <h3 class="name"><?= $firstLastName ?></h3>
                            <div class="position"><?= $jobTitle ?></div>
                            <div class="info-content">
                                <p><a href=""><?= $email ?></a></p>
                                <p>
                                    <a href="tel:<?=$phone1Custom ?>"><?= $phone1 ?></a><br>
                                    <a href="tel:<?=$phone2Custom ?>"><?= $phone2 ?></a>
                                </p>
                                <p><?= $address ?></p>
                            </div>
                            <p><a  href="mailto:<?=$emialForContact ?>" class="link-more"> <?php _e('Contact') ?></a></p>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-right">
                <img src="<?= $mapImage ?>" alt="<?= $alt ?>" class="img-right">
            </div>
        </div>
    </div>
</div>