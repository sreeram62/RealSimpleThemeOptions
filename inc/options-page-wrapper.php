<h2><?php esc_attr_e( 'Welcome to Real Simple Theme Options Settings Page !!', 'wp_admin_style' ); ?></h2>

<script>
jQuery(document).ready(function() {
    var $ = jQuery;
    if ($('.set_custom_images').length > 0) {
        if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {
            $(document).on('click', '.set_custom_images', function(e) {
                e.preventDefault();
                var button = $(this);
                var id = button.prev();
                wp.media.editor.send.attachment = function(props, attachment) {
                    id.val(attachment.url);
                };
                wp.media.editor.open(button);
                return false;
            });
        }
    }
});

</script>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'General Options', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">
					<form name="wp_so_form" method="post" action="">
						<!-- Header Options Start -->
						<div class="postbox">
							<div class="handlediv" title="Click to toggle"><br></div>
							<!-- Toggle -->
							<h2 class="hndle"><span><?php esc_attr_e( 'Header Options', 'wp_admin_style' ); ?></span></h2>
								<div class="inside">
									<table class="form-table">
										<input type="hidden" name="wp_so_submitted" value="Y">
												<tr valign="top" class="alternate">			
													<td scope="row">
														<label for="wp_so_header_logo_url"><?php esc_attr_e('Logo URL', 'wp_admin_style'); ?></label>
													</td>
													<td>  
														 <input  value="<?php echo $wp_so_header_logo_url ?>" class="regular-text process_custom_images" id="process_custom_images wp_so_header_logo_url" name="wp_so_header_logo_url" max="" min="1" step="1" name="wp_so_header_logo_url">
													     <button class="set_custom_images button">Upload Image</button><br>
													</td>
													<td>
														<pre>Call using $options['wp_so_header_logo_url'];</pre>
													</td>
												</tr>
										
										
													<tr valign="top" class="alternate">			
													<td scope="row">
														<label for="wp_so_header_bg_color"><?php esc_attr_e('Background URL', 'wp_admin_style'); ?></label>
													</td>
													<td>  
														 <input  value="<?php echo $wp_so_header_bg_color ?>" class="regular-text process_custom_images" id="process_custom_images wp_so_header_bg_color" name="wp_so_header_bg_color" max="" min="1" step="1" name="wp_so_header_bg_color">
													     <button class="set_custom_images button">Upload Image</button><br>
													</td>
													<td>
														<pre>Call using $options['wp_so_header_bg_color'];</pre>
													</td>
												</tr>
										
										
										
									</table>
							</div>
							<!-- .inside -->
						</div>
							<!-- Header Options End -->




							<!-- Contact Options Start -->
							<div class="postbox">
								<div class="handlediv" title="Click to toggle"><br></div>
								<!-- Toggle -->
								<h2 class="hndle"><span><?php esc_attr_e( 'Contact Options', 'wp_admin_style' ); ?></span></h2>
									<div class="inside">
										<table class="form-table">
													<tr valign="top">
															<td scope="row"><label for="wp_so_phone"><?php esc_attr_e('Phone Number', 'wp_admin_style'); ?></label></td>
															<td><input id="wp_so_phone" name="wp_so_phone" class="regular-text" type="text" value="<?php echo $wp_so_phone ?>" /><br></td>
															<td><pre>Call using $options['wp_so_phone'];</pre></td>
													</tr>

														<tr valign="top" class="alternate">
															<td scope="row"><label for="wp_so_email"><?php esc_attr_e('Email', 'wp_admin_style'); ?></label></td>
															<td><input id="wp_so_email" name="wp_so_email" type="text" value="<?php echo $wp_so_email?>" class="regular-text" /><br></td>
															<td><pre>Call using $options['wp_so_email'];</pre></td>
														</tr>
										</table>
								</div>
								<!-- .inside -->
							</div>
								<!-- Contact Options End -->


								<!-- Header Scripts/Styles Options Start -->
								<div class="postbox">
									<div class="handlediv" title="Click to toggle"><br></div>
									<!-- Toggle -->
									<h2 class="hndle"><span><?php esc_attr_e( 'Scripts/Styles/Analytics to Header', 'wp_admin_style' ); ?></span></h2>
										<div class="inside">
											<table class="form-table">
															<tr valign="top" class="alternate">
																<td scope="row"><label for="wp_so_head_styles"><?php esc_attr_e('Styles', 'wp_admin_style'); ?></label></td>
																<td><textarea rows="4" cols="50" id="wp_so_head_styles" name="wp_so_head_styles"  value="<?php echo $wp_so_head_styles ?>" class="regular-text" /><?php echo $wp_so_head_styles ?></textarea><br></td>
																<td><pre>Call using $options['wp_so_head_styles'];</pre></td>
															</tr>

															<tr valign="top" class="alternate">
																<td scope="row"><label for="wp_so_analytics"><?php esc_attr_e('Analytics', 'wp_admin_style'); ?></label></td>
																<td><textarea rows="4" cols="50" id="wp_so_analytics" name="wp_so_analytics"  value="<?php echo $wp_so_analytics ?>" class="regular-text" /><?php echo $wp_so_analytics ?></textarea><br></td>
																<td><pre>Call using $options['wp_so_analytics'];</pre></td>
															</tr>
					
															<tr valign="top" class="alternate">
																<td scope="row"><label for="wp_so_other_head"><?php esc_attr_e('Other Scripts', 'wp_admin_style'); ?></label></td>
																<td><textarea rows="4" cols="50" id="wp_so_other_head" name="wp_so_other_head"  value="<?php echo $wp_so_other_head ?>" class="regular-text" /><?php echo $wp_so_other_head ?></textarea><br></td>
																<td><pre>Call using $options['wp_so_other_head'];</pre></td>
															</tr>
											</table>
									</div>
									<!-- .inside -->
								</div>
									<!-- Header Scripts/Styles Options End -->
		
		
		
		
		
		<!-- Footer Options Start -->
								<div class="postbox">
									<div class="handlediv" title="Click to toggle"><br></div>
									<!-- Toggle -->
									<h2 class="hndle"><span><?php esc_attr_e( 'Footer Options', 'wp_admin_style' ); ?></span></h2>
										<div class="inside">
											<table class="form-table">
												       <tr valign="top" class="alternate">			
															<td scope="row">
																<label for="wp_so_footer_logo"><?php esc_attr_e('Footer Logo URL', 'wp_admin_style'); ?></label>
															</td>
															<td>  
																 <input  value="<?php echo $wp_so_footer_logo ?>" class="regular-text process_custom_images" id="process_custom_images wp_so_footer_logo" name="wp_so_footer_logo" max="" min="1" step="1" name="wp_so_footer_logo">
																 <button class="set_custom_images button">Upload Image</button><br>
															</td>
															<td>
																<pre>Call using $options['wp_so_footer_logo'];</pre>
															</td>
												</tr>
												
												<tr valign="top">
		                  		<td scope="row"><label for="wp_so_copyright"><?php esc_attr_e('Copyright Info', 'wp_admin_style'); ?></label></td>
		                  		<td><input id="wp_so_copyright" name="wp_so_copyright" class="regular-text" type="text" value="<?php echo $wp_so_copyright ?>" /><br></td>
													<td><pre>Call using $options['wp_so_copyright'];</pre></td>
		                  </tr>
												
												
														

														
											</table>
									</div>
									<!-- .inside -->
								</div>
									<!-- Footer Options End -->









					<!-- Social Icons Start -->
					<div class="postbox">
						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->
						<h2 class="hndle"><span><?php esc_attr_e( 'Social Icons', 'wp_admin_style' ); ?></span></h2>
							<div class="inside">
                <table class="form-table">
                        	<tr valign="top">
		                  		<td scope="row"><label for="wp_so_twitter_url"><?php esc_attr_e('Twitter URL', 'wp_admin_style'); ?></label></td>
		                  		<td><input id="wp_so_twitter_url" name="wp_so_twitter_url" class="regular-text" type="text" value="<?php echo $wp_so_twitter_url ?>" /><br></td>
													<td><pre>Call using $options['wp_so_twitter_url'];</pre></td>
		                  </tr>

		                  	<tr valign="top" class="alternate">
		                  		<td scope="row"><label for="wp_so_facebook_url"><?php esc_attr_e('FaceBook URL', 'wp_admin_style'); ?></label></td>
		                  		<td><input id="wp_so_facebook_url" name="wp_so_facebook_url" type="text" value="<?php echo $wp_so_facebook_url ?>" class="regular-text" /><br></td>
													<td><pre>Call using $options['wp_so_facebook_url'];</pre></td>
		                  	</tr>

												<tr valign="top" class="alternate">
													<td scope="row"><label for="wp_so_linkdin_url"><?php esc_attr_e('Linkdin URL', 'wp_admin_style'); ?></label></td>
													<td><input id="wp_so_linkdin_url" name="wp_so_linkdin_url" type="text" value="<?php echo $wp_so_linkdin_url ?>" class="regular-text" /><br></td>
													<td><pre>Call using $options['wp_so_linkdin_url'];</pre></td>
												</tr>

												<tr valign="top" class="alternate">
													<td scope="row"><label for="wp_so_youtube_url"><?php esc_attr_e('Youtube URL', 'wp_admin_style'); ?></label></td>
													<td><input id="wp_so_youtube_url" name="wp_so_youtube_url" type="text" value="<?php echo $wp_so_youtube_url ?>" class="regular-text" /><br></td>
													<td><pre>Call using $options['wp_so_youtube_url'];</pre></td>
												</tr>
					
					                          
					
										
					
					                         
                </table>

						</div>


						<!-- .inside -->

					</div>
						<!-- Social Icons End -->

<!-- Admin Options Start -->
						<div class="postbox">
							<div class="handlediv" title="Click to toggle"><br></div>
							<!-- Toggle -->
							<h2 class="hndle"><span><?php esc_attr_e( 'Admin Options', 'wp_admin_style' ); ?></span></h2>
								<div class="inside">
									<table class="form-table">
										<input type="hidden" name="wp_so_submitted" value="Y">
												<tr valign="top" class="alternate">			
													<td scope="row">
														<label for="wp_so_admin_logo_url"><?php esc_attr_e('Logo URL', 'wp_admin_style'); ?></label>
													</td>
													<td>  
														 <input  value="<?php echo $wp_so_admin_logo_url ?>" class="regular-text process_custom_images" id="process_custom_images wp_so_admin_logo_url" name="wp_so_admin_logo_url" max="" min="1" step="1" name="wp_so_admin_logo_url">
													     <button class="set_custom_images button">Upload Image</button><br>
													</td>
													<td>
														<pre>Call using $options['wp_so_admin_logo_url'];</pre>
													</td>
												</tr>
										
										
													<tr valign="top" class="alternate">			
													<td scope="row">
														<label for="wp_so_header_bg_color"><?php esc_attr_e('Background URL', 'wp_admin_style'); ?></label>
													</td>
													<td>  
														 <input  value="<?php echo $wp_so_admin_bg ?>" class="regular-text process_custom_images" id="process_custom_images wp_so_admin_bg" name="wp_so_admin_bg" max="" min="1" step="1" name="wp_so_admin_bg">
													     <button class="set_custom_images button">Upload Image</button><br>
													</td>
													<td>
														<pre>Call using $options['wp_so_admin_bg'];</pre>
													</td>
												</tr>
										
										
										
									</table>
							</div>
							<!-- .inside -->
						</div>
							<!-- Admkin Options End -->

					<!-- .postbox -->
					<p>
						<input class="button-primary" type="submit" name="submit" value="Save Changes" />
					</p>

					</form>
				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'About This Plugin', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p><?php esc_attr_e( 'This is a very basic plugin created to make life easy during theme development so the developer can focus on coding theme rather than setting up options. Care has been taken so its light weight and secured. Stay tuned for next release.', 'wp_admin_style' ); ?></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->



				</div>
				<!-- .meta-box-sortables -->

				<!--Usage Starts -->
				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'Why This Plugin', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p>As the name says its <b>"Real Simple Theme Options"</b> , we try to keep things simple. There are many plugins in market but most of them come with lot of functions and options which makes hard for user. This plugins is light and aimed at providing important options and ease of usage. And we work continously to fix the issues and make better user experience.</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->



				</div>

				<!--Usage Ends -->



				<!--Usage Starts -->
				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'Using This Plugin', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p>To use this plugin, just install it and activate it. Then place this code in <code>header.php and footer.php</code> <br/> <br/> <code> global $options; </code> <br/><br/>  Then to call an element use the markup shown next to the input field to use the corresponding field.</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->



				</div>

				<!--Usage Ends -->

				<!--Next Version Starts -->
				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'In Next Version', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p>
								We always strive to imporve users experience and security these are planned in next release:
									<ul>
									   <li>Remove adding of code in header file.Plugin works on activation.</li>
									   <li>Adding color picker for easy usage.</li>
									   <li>Adding scripts to footer.</li>
									<ul><br/>
									Stay tuned !!
							</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->



				</div>

				<!--Next Version Ends -->


				<!--Feedback Starts -->
				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'Your Feedback matters !!', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p>
							 We always would to hear back from you about any improvements or if you find any bugs. Just shoot us a mail at ui.installs@gmail.com
							</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->



				</div>

				<!--Feedback Ends -->







			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->