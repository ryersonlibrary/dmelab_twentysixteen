<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
	</div><!-- #content -->

  <div class="container git">

    <div class="col-md-6" style="text-align:right;">
      <h4>Hours</h4>
      <p>
        Monday: 10am - 6pm<br>
        Tuesday: 10am - 6pm<br>
        Wednesday: 10am - 6pm<br>
        Thursday: 10am - 8pm<br>
        Friday: 10am - 6pm<br>
        Saturday: CLOSED<br>
        Sunday: CLOSED
      </p>
    </div>

    <div class="col-md-6">
      <h4>Address</h4>
      <p>
        341 Yonge Street<br>
        Toronto,Ontario<br>
        Canada M5B 1S1<br>
      </p>

      <h4>Contact</h4>
      <p>
        Email: <a href="mailto:dme@ryerson.ca">dme@ryerson.ca</a><br>
        Phone: <a href="tel:+14169795000,3524">416-979-5000 ext. 3524</a><br>
      </p>

      <h4>Social</h4>
      <p>
        Twitter: <a href="https://twitter.com/RyersonLibDME">@RyersonLibDME</a><br>
        Facebook: <a href="https://www.facebook.com/RyersonLibDME">RyersonLibDME</a><br>
        Instagram: <a href="https://www.instagram.com/RyersonLibDME/">@RyersonLibDME</a>
      </p>
    </div>

  </div>

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="col-md-12 site-info">

      <div class="footer-logos">
        <a href="http://library.ryerson.ca">
          <img src="<?php bloginfo('stylesheet_directory') ?>/img/rula-logo-i.png" alt="Ryerson University Library and Archives">
        </a>
      </div>

      <p class="copyright">
        &copy; <?php echo date("Y") ?> Ryerson University Library &amp; Archives <span class="sep"> | </span> 2nd Floor - 350 Victoria Street, Toronto, ON M5B 2K3
      </p>

    </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
