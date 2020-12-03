
<div class="block-featured-articles featured media-article">
    <div class="wrapper full-width">
        <select class="select2" id="filter-media" onchange='getMedia()'>
            <option value="post">Articles</option>
            <option value="white_papers_prese">White papers</option>
        </select>
        <div class="row-col d-flex" id="grid3">
            <?php include( locate_template( 'template-parts/blocks/media-events/filter.php', false, false ) ); ?>
        </div>

    </div>
</div>

<script type="text/javascript">
    function getMedia() {
        var postType = $('#filter-media').val();
        var paged = 1;
        call_ajax(paged, postType);
    }
    jQuery(document).ready(function ($) {

        $('.navigation.ajax a').live('click', function () {
            var paged = $('.navigation.ajax').attr('data-paged');
            var url = $(this).attr('href');
            var match = url.match(/(\d+)/);
            if (match) {
                paged = match[1];
            } else {
                match = url.match(/paged=(\d+)/);
                if (match) {
                    paged = match[1];
                } else {
                    paged = 1;
                }
            }
            var postType = $('#filter-media').val();
            call_ajax(paged, postType);

            $('html, body').animate({
                scrollTop: $('.block-featured-articles').offset().top -50
            }, 1000);
            return false;
        });
    });

    function call_ajax(paged, postType) {
        var is_busy = false;
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        var data = {
            'action': 'load_posts_media',
            'paged': paged,
            'postType': postType,
        };
        if ( is_busy == true ){
            return false;
        }
        is_busy = true;
        jQuery.post( ajaxurl, data, function( response ) {

            if ( response != '' ) {
                jQuery( '#grid3' ).html( response );
            }
        }).always( function() {
            is_busy = false;
        });
    }
</script>



