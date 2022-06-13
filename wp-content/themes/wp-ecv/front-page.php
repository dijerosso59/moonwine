<?php get_header(); ?>
    <div class="container">
        <div class="pt-64 flex items-center justify-center">
            <a href="<?= get_post_type_archive_link('event') ?>"
               class="cta-primary flex items-center gap-2 transition-all hover:gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-5 h-5 inline" viewBox="0 0 24 24"><path d="M24 2v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm1 11.729l.855-.791c1 .484 1.635.852 2.76 1.654 2.113-2.399 3.511-3.616 6.106-5.231l.279.64c-2.141 1.869-3.709 3.949-5.967 7.999-1.393-1.64-2.322-2.686-4.033-4.271z"/></svg>
                <?= __('Nos événements') ?>
            </a>
        </div>
    </div>
<?php get_footer();
