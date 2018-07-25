<h2><?php esc_attr_e( 'Welcome to Real Simple Theme Options Settings Page !!', 'wp_admin_style' ); ?></h2>

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
												<tr valign="top">
														<td scope="row"><label for="wp_so_header_logo_url"><?php esc_attr_e('Header Logo URL', 'wp_admin_style'); ?></label></td>
														<td><input id="wp_so_header_logo_url" name="wp_so_header_logo_url" class="regular-text" type="text" value="<?php echo $wp_so_header_logo_url ?>" /><br></td>
														<td><pre>Call using $options['wp_so_header_logo_url'];</pre></td>
												</tr>

																						
													<tr valign="top" class="alternate">
														<td scope="row"><label for="wp_so_header_bg_color"><?php esc_attr_e('Header BG URL', 'wp_admin_style'); ?></label></td>
														<td><input id="wp_so_header_bg_color" name="wp_so_header_bg_color" type="text" value="<?php echo $wp_so_header_bg_color ?>" class="regular-text" /><br></td>
														<td><pre>Call using $options['wp_so_header_bg_color'];</pre></td>
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


								<!-- Footer Options Start -->
								<div class="postbox">
									<div class="handlediv" title="Click to toggle"><br></div>
									<!-- Toggle -->
									<h2 class="hndle"><span><?php esc_attr_e( 'Footer Options', 'wp_admin_style' ); ?></span></h2>
										<div class="inside">
											<table class="form-table">
														<tr valign="top">
																<td scope="row"><label for="wp_so_footer_logo"><?php esc_attr_e('Footer Logo', 'wp_admin_style'); ?></label></td>
																<td><input id="wp_so_footer_logo" name="wp_so_footer_logo" class="regular-text" type="text" value="<?php echo $wp_so_footer_logo ?>" /><br></td>
																<td><pre>Call using $options['wp_so_footer_logo'];</pre></td>
														</tr>

															<tr valign="top" class="alternate">
																<td scope="row"><label for="wp_so_copyright"><?php esc_attr_e('Copyright', 'wp_admin_style'); ?></label></td>
																<td><input id="wp_so_copyright" name="wp_so_copyright" type="text" value="<?php echo $wp_so_copyright ?>" class="regular-text" /><br></td>
																<td><pre>Call using $options['wp_so_copyright'];</pre></td>
															</tr>

															<tr valign="top" class="alternate">
																<td scope="row"><label for="wp_so_analytics"><?php esc_attr_e('Analytics', 'wp_admin_style'); ?></label></td>
																<td><input id="wp_so_analytics" name="wp_so_analytics" type="text" value="<?php echo $wp_so_analytics ?>" class="regular-text" /><br></td>
																<td><pre>Call using $options['wp_so_analytics'];</pre></td>
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
							<p>To use this plugin, just install it and activate it. Then place this code in header.php <br/> <br/> <code> $options = get_option('wp_so_options'); </code> <br/><br/>  Then to call an element use the markup shown next to the input field to use the corresponding field.</p>
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
									   <li>Adding support to change admin screen logo using upload</li>
									   <li>Adding new inputs that can be Customized and more !! </li>
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
