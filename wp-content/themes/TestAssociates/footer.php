<?php if (get_field('show_partners')): ?>
    <div class="container pad__small--vert">
        <div class="container__inner partners">
            <h2>Media Partner</h2>
            <?php if (have_rows('partners', 'options')): ?>
                <ul class="partners">
                    <?php while (have_rows('partners', 'options')):
                        the_row();
                        $img = get_sub_field('partners_partner');
                        $link = get_sub_field('partners_link'); ?>
                        <li class="partners__partner">
                            <a href="<?php echo $link['url']; ?>"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt']; ?>"></a>
                        </li>
                    </ul>
                <?php endwhile;
            else: ?>
                <p>sorry, no partners found.</p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (get_field('show_cta')):
    $cta = get_field('universal_cta_body', 'options'); ?>
    <div class="container container--primary pad__small--vert">
        <div class="container__inner cta">
            <?php echo $cta; ?>
        </div>
    </div>
<?php endif; ?>

<footer>
    <div class="container container--black pad--vert">
        <div class="container__inner footer cols">
            <div class="cols--4 footer__body">
                <h2>Say Hello</h2>
                <?php
                if (get_field('footer_address', 'options')):
                    the_field('footer_address', 'options');
                endif;
                ?>
            </div>
            <div class="cols--4 footer__nav">
                <h2>Important Links</h2>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerleft',
                    'container' => 'footernav__wrapper',
                    'container_class' => 'footernav',
                    'menu_class' => 'footernav__nav',
                ));
                ?>
            </div>
            <div class="cols--4 footer__terms">
                <h2>Legal & Privacy</h2>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footerright',
                    'container' => 'footernav__wrapper',
                    'container_class' => 'footernav',
                    'menu_class' => 'footernav__nav',
                ));
                ?>
            </div>
            <div class="cols--4 footer__form">
                <h2>Join Our Newsletter</h2>
                <?php if (get_field('footer_form', 'options')):
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
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__legal">
                <?php if (get_field('footer_legal', 'options')): ?>
                    <p><?php the_field('footer_legal', 'options'); ?></p>
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__social">
                <ul>
                    <?php if (get_field('linkedin', 'options')): ?>
                        <li><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><i
                                    class="fa-brands fa-linkedin"></i></a></li>
                    <?php endif;

                    if (get_field('twitter', 'options')):
                        ?>
                        <li>
                            <<a href="<?php the_field('twitter', 'options'); ?>i class=" fa-brands fa-x-twitter"></i></a>
                        </li>
                        <?php
                    endif;

                    if (get_field('youtube', 'options')): ?>
                        <li><a href="<?php the_field('youtube', 'options'); ?><i class=" fa-brands fa-youtube"></i></a></li>
                        <?php
                    endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
<?php wp_footer(); ?>