<footer>
    <div class="container">
        <nav id="footer">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                'container' => 'false',
                'menu_classs' => 'footer-menu',
                'fallback_cb' => false,
                'items_wrap' => '<ul id="menu-footer-menu" id="%1$s" class="%2$s">%3$s</ul>',
            ) ); ?>
        </nav>
        <section class="real">
            / Réalisation: Btg Communication /
        </section>
        <section class="contact">
	<p><?php the_field('equipe', 'options')?> - <a href="mailto:<?php the_field('mail_contact', 'options'); ?>"><?php the_field('mail_contact', 'options'); ?></a></p>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
