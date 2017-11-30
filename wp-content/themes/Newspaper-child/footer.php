
<!-- Footer -->
<?php
if (td_util::get_option('tds_footer') != 'no') {
    td_api_footer_template::_helper_show_footer();
}
?>


<!-- Sub Footer -->
<?php if (td_util::get_option('tds_sub_footer') != 'no') { ?>
    <div class="td-sub-footer-container">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span7 td-sub-footer-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'menu_class'=> 'td-subfooter-menu',
                            'fallback_cb' => 'td_wp_footer_menu'
                        ));

                        //if no menu
                        function td_wp_footer_menu() {
                            //do nothing?
                        }
                        ?>
                </div>

                <div class="td-pb-span5 td-sub-footer-copy">
                    <?php
                    $tds_footer_copyright = stripslashes(td_util::get_option('tds_footer_copyright'));
                    $tds_footer_copy_symbol = td_util::get_option('tds_footer_copy_symbol');

                    //show copyright symbol
                    if ($tds_footer_copy_symbol == '') {
                        echo '&copy; ';
                    }

                    echo $tds_footer_copyright;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    </div><!--close content div-->
</div><!--close td-outer-wrap-->
<?php if(is_woocommerce() || is_cart() || is_checkout()):?><link rel="stylesheet" id="vc_google_fonts_pt_serifregularitalic700700italic-css" href="//fonts.googleapis.com/css?family=PT+Serif%3Aregular%2Citalic%2C700%2C700italic&amp;ver=4.7.5" type="text/css" media="all"><?php endif; ?>
<?php wp_footer(); ?>

</body>
<script>
jQuery('html[lang="zh-hant"] .mc4wp-form-fields input[type="email"]').attr("placeholder", "你的電郵地址");
jQuery('html[lang="zh-hant"] .mc4wp-form-fields input[type="submit"]').attr("value", "提交");
jQuery('html[lang="zh-hant"] .mc4wp-checkbox-contact-form-7 span').html("訂閱我們最新的資訊及活動動態");
jQuery('html[lang="zh-hant"] input#td-header-search-top').attr("value", "搜尋");
jQuery('html[lang="zh-hant"] textarea#comment').attr("placeholder", "評論");
jQuery('html[lang="zh-hant"] p.form-submit input[name="submit"]').attr("value", "提交");
jQuery('html[lang="zh-hant"] .td_ajax_load_more').html("瀏覽更多");
jQuery('html[lang="zh-hant"] .td-post-next-prev-content span').html("下一篇文章");
jQuery('html[lang="zh-hant"] .td-post-prev-post .td-post-next-prev-content span').html("上一篇文章");
jQuery('html[lang="zh-hant"] span.td-post-share-title').html("分享");
jQuery('html[lang="zh-hant"] label#subscribe-label').html("收到意見回覆時，允許接收電子郵件通知");
jQuery('html[lang="zh-hant"] label#subscribe-blog-label').html("收到新增意見時，允許接收電子郵件通知");
jQuery('html[lang="zh-hant"] h3#reply-title').html('歡迎留下評論 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/noblesse/index.php/2016/07/04/2016-06-10-the-essential-oil-workshop/?lang=zh-hant#respond" style="display:none;">Cancel reply</a></small>');
</script>
</html>