<div class="row-col space-top">
    <?php
    if (have_rows('statistical_num_berstatistical_home')):
        $i = 0;
        while (have_rows('statistical_num_berstatistical_home')) : the_row();
            $i++;
            $afterNumber = '';
            $beforeNumber = '';
            $number = get_sub_field('number');
            $des = get_sub_field('description');
            if ($i == 1) {
                $afterNumber = __('Million', 'ETC');
            }
            if ($i == 4) {
                $afterNumber = '+';
            }
            if ($i == 2) {
                $beforeNumber = '>';
            }
            ?>
            <div class="col-item">
                <div class="content-item">
                    <div class="number-item"><?= $beforeNumber ?><span
                                class="counter"><?= $number ?></span> <?= $afterNumber ?></div>
                    <p><?= $des ?></p>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    ?>
</div>