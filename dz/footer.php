<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_class' => 'footer-nav',
                'container' => ''
            ]);
            ?>

            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>Copyright &copy; 2014 Sparrow</li>
                <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
            </ul>

        </div>

        <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="<?= get_template_directory_uri(); ?>/assets/http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>

<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/doubletaptogo.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/init.js"></script>

</body>

</html>