<footer>
    <div class="container container--black pad--vert">
        <div class="container__inner footer">
            <div class="cols--4 footer__body">
                <?php 
                    if (get_field('footer_body', 'options')):
                        the_field('footer_body', 'options');
                    endif;
                ?>
            </div>
            <div class="cols--4 footer__nav">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerleft',
                    'container' => 'nav__wrapper',
                    'container_class' => 'nav',
                    'menu_class' => 'nav__nav',
                ));
            ?>
            </div>
            <div class="cols--4 footer__terms">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerright',
                    'container' => 'nav__wrapper',
                    'container_class' => 'nav',
                    'menu_class' => 'nav__nav',
                ));
            ?>
            </div>
            <div class="cols--4 footer__form">
                <?php if(get_field('footer_form', 'options')):
                    the_field('footer_form', 'optoins');
                endif; ?>
            </div>
        </div>
    </div>

    <div class="container subfooter__wrapper pad__small--vert">
        <div class="container__inner cols subfooter">
            <div class="cols--3 footer__logo">
                <?php if (get_field('footer_logo', 'options')):
                    $logo = get_field('footer_logo', 'options'); ?>
                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>">
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__legal">
                <?php if (get_field('footer_legal', 'options')): ?>
                <p><?php the_field('footer_legal', 'options'); ?></p>
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__social">
                <ul>
                    <?php if (get_field('linkedin', 'options')):?>
                    <li><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    <?php endif;
                    
                    if (get_field('twitter', 'options')) :
                    ?>
                    <li><<a href="<?php the_field('twitter', 'options'); ?>i class="fa-brands fa-x-twitter"></i></a></li>
                    <?php
                    endif; 
                    
                    if (get_field('youtube', 'options')):?>
                    <li><a href="<?php the_field('youtube', 'options'); ?><i class="fa-brands fa-youtube"></i></a></li>
                    <?php
                    endif;  ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<?php wp_footer();?>
