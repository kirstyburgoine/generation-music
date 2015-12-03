<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">



	<?php
	get_template_part('includes/content', 'footer'); ?>




	<div class="seperator"></div>
	</div>

	<div class="credits">
		<?php 
		$company_number = get_field('company_number', 'options');
		$address = get_field('address', 'options'); ?>

		<div class="container">
						
				<p class="alignleft"><a href="http://www.kirstyburgoine.co.uk" title="Link to Kirsty Burgoine's website">Website by Kirsty Burgoine Ltd.</a></p>
				<p class="alignright">© 2014 ~ <?php bloginfo('name');?>. <?php if ( $company_number ) : ?>Registered in England & Wales. Company No:<?php echo $company_number; endif;?><?php if ( $address ) : ?> - <?php echo $address; endif;?></p>

			<div class="seperator"></div>

		</div>	

	</div>



</footer>









<a href="#" class="scrollup"><i class="ss-icon">navigateup</i></a>  
</body>




<?php wp_footer(); ?>

</html>