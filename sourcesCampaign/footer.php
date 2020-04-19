<footer id="footer">
    <nav>
        <ul >
            <?php
                if ( has_nav_menu( 'footer-menu' ) ) : 
            ?>
            <?php
            wp_nav_menu ( array (
            'theme_location' => 'footer-menu' ,
            'menu_class' => 'my-footer-menu', // classe CSS pour customiser mon menu
            ) ); ?>
            <?php endif;
            ?>

            <div class="isContainerLogoFooter">
                <a href="#twitter"> <img src="<?php echo get_template_directory_uri();?>/images/twitter-logo.png" class="isLogoFooter" alt=" It's twitter logo"> </a>
                <a href="#facebook"> <img src="<?php echo get_template_directory_uri();?>/images/facebook-logo.png" class="isLogoFooter" alt=" It's Facebook logo"> </a>
            </div>

            <div class="isNewsletter">
                <img src="<?php echo get_template_directory_uri();?>/images/icon-mail2.png" alt="It's Mail icon of newsletter" >
                <h3>Inscrivez-vous!</h3>
                    <input type="text" placeholder=" Entrez votre adresse e-mail">
                    <button>NOUS REJOINDRE</button>
            </div>
        </ul>
    </nav>
</footer>

<?php wp_footer();  ?>
</body>
</html>