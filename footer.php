<section class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-content-img">
<!--                        <img src="/assets/img/footer_cake.png" alt="Пироженное">-->
<!--	                    --><?php //echo wp_get_attachment_image( 109, array(540,250)); ?>
                        <img src="<?php bloginfo("template_url"); ?>/assets/img/footer_cake.png" alt="Контакты">
                    </div>
                </div>
                <div class="col-md-4 offset-4">
                    <div class="footer-content-description">
                        <div class="footer-phone">
                            <div class="footer-phone-text">
                                <p>Заказать по телефону</p>
                                <p class="phone"><?php the_field('phone_number_one', 21);?></p>
                            </div>
                        </div>
                        <nav class="soc">
                            <ul>
                                <li><a href="<?php the_field('instagram',21);?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php the_field('vk',21);?>"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </nav>
                        <div class="footer-content-description-text">
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php wp_footer();?>

</body>
</html>