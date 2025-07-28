<?php if (get_field('show_cta')) : 
$cta = get_field('universal_cta_body', 'options');?>
<div class="container container--primary pad__small--vert">
    <div class="container__inner cta">
        <?php echo $cta; ?>
    </div>
</div>
<?php endif; ?>

<footer>
    <div class="container container--TABlue pad--vert">
        <div class="container__inner footer cols">
            <div class="cols--2of3 footer__logo footer__landing">
                <h3><?php the_field('footer_cta_landing', 'options');?></h3>
            </div>
            <div class="cols--1of3 footer__form footer__landing">
                <h3>Join Our Newsletter</h3>
                <?php if(get_field('footer_form', 'options')):
                    the_field('footer_form', 'optoins');
                endif; ?>
            </div>
        </div>
    </div>

    <div class="container subfooter__wrapper pad__small--vert">
        <div class="container__inner cols subfooter">
            <div class="cols--3 footer__logo subfooter__landing">
                <?php if (get_field('footer_logo', 'options')):
                    $logo = get_field('footer_logo', 'options'); ?>
                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>">
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__legal subfooter__landing">
                <?php if (get_field('footer_legal', 'options')): ?>
                <p><?php the_field('footer_legal', 'options'); ?></p>
                <?php endif; ?>
            </div>
            <div class="cols--3 footer__social subfooter__landing">
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
