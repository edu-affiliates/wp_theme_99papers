<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uspeh
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="first-part-of-footer">
		<div class="first-part-of-footer_aligning">

			 <div class="links-block">
                            				 <p>popular services</p>
                 <table>
                     <tr>
                         <td><div class="links-block_small">
                                 <p>Essay Writing</p>
                                 <p>Term Paper Writing</p>
                                 <p>Research Paper Writing</p>
                                 <p>Dissertation Writing</p>
                                 <p>Coursework Writing</p>
                             </div>
                         </td>
                         <td style="padding: 35px">
                             <div class="links-block_small">
                                 <p>Course Writing</p>
                                 <p>Admission Essay Writing</p>
                                 <p>Academic Editing and Writing</p>
                                 <p>Resume Writing Service</p>
                             </div>
                         </td>
                     </tr>
                 </table>
                            			</div>

            				<div class="info">
                                <img width="256px" height="58px" src="/wp-content/themes/wp_theme_99papers/img/Tel-footer.png">
            				</div>

			</div>
		</div>

	<div class="second-part-of-footer">
		<div class="second-part-of-footer_aligning">
		    <div class="paying-icons"><img src="/wp-content/themes/wp_theme_99papers/img/40.png" alt="types of payment" title="visa | mastercard | american-express | PayPal | bitcoin"></div>
			<div class="security-icons">
			    <div><img src="/wp-content/themes/wp_theme_99papers/img/30.png" alt="DMCA" title="DMCA protected"></div>
            	<div><img src="/wp-content/themes/wp_theme_99papers/img/31.png" alt="McAfee" title="McAfee SECURE"></div>
            	<div><img src="/wp-content/themes/wp_theme_99papers/img/comodo-secure.png?v=1" alt="COMODO SECURE" title="COMODO SECURE"></div>
			</div>
			<div class='copyright'><p>Copyright &#169; <?php echo date('Y');?> <?php echo $_SERVER['HTTP_HOST']?> All Rights Reserved.</p></div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>