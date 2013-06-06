<!--======================================================================
    Footer.php
    Template for footer content.
  --====================================================================== -->

		    <footer>
			    <p>Copyright &copy; <?php bloginfo('name'); ?>. All rights reserved.</p>			
		    </footer>

	    </section>

        <!-- WordPress footer functions (jQuery and custom JS files added here by functions.php) -->
	    <?php wp_footer(); ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- (Via HTML5 Boilerplate: http://html5boilerplate.com/) -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
