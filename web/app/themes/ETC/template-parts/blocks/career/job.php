<?php
$terms = get_terms(array(
    'taxonomy' => 'category_career',
));
?>
<div class="block-technico-collapse">
    <div class="wrapper">
        <div class="form-group">
            <select class="select2" id="career-select" onchange='getCareer()'>
                <option value="All"> <?php _e('All', 'ETC') ?></option>
                <?php
                foreach ($terms as $term) { ?>
                    <option value="<?= $term->slug ?>"><?= $term->name ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="list-collapse">
            <?php get_template_part('template-parts/blocks/career/item') ?>

        </div>
    </div>
</div>

<script>
    function getCareer() {
        var taxonomy = $('#career-select').val();
        call_ajax_career(taxonomy);
    }

    function call_ajax_career(taxonomy) {
        var is_busy = false;
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        var data = {
            'action': 'load_posts_career',
            'taxonomy': taxonomy,
        };
        if (is_busy == true) {
            return false;
        }
        is_busy = true;
        jQuery.post(ajaxurl, data, function (response) {
            if (response != '') {
                jQuery('.list-collapse').html(response);
            }
        }).always(function () {
            is_busy = false;
        });
    }

</script>
