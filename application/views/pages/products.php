<section class="page_title cover-background padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
				<div class="container">
					<div class="row">


						<div class="col-md-12">
							<h1 class="bold"><?= $title ?></h1>
						</div>


					</div>
				</div>
			</section>


			<!--eof topline-->


			<section class="ls s-py-60 s-py-md-80 s-py-xl-150">
				<div class="container">
					<div class="row">


						<main class="col-lg-12 col-xl-12">
							<div class="product type-product ">

								<div class="images" data-columns="4">
									<figure>
										<div data-thumb="<?=base_url()?>assets/images/shop/11.jpg">
											<a href="<?=base_url()?>assets/images/shop/11.jpg">
												<img src="<?=base_url()?>assets/images/shop/11.jpg" alt="" data-caption="" data-src="<?=base_url()?>assets/images/shop/11.jpg" data-large_image="<?=base_url()?>assets/images/shop/11.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="<?=base_url()?>assets/images/shop/12.jpg">
											<a href="images/shop/12.jpg">
												<img src="<?=base_url()?>assets/images/shop/12.jpg" alt="" data-caption="" data-src="<?=base_url()?>assets/images/shop/12.jpg" data-large_image="<?=base_url()?>assets/images/shop/12.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="<?=base_url()?>assets/images/shop/06.jpg">
											<a href="<?=base_url()?>assets/images/shop/06.jpg">
												<img src="<?=base_url()?>assets/images/shop/06.jpg" alt="" data-caption="" data-src="<?=base_url()?>assets/images/shop/06.jpg" data-large_image="<?=base_url()?>assets/images/shop/06.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="<?=base_url()?>assets/images/shop/10.jpg">
											<a href="<?=base_url()?>assets/images/shop/10.jpg">
												<img src="<?=base_url()?>assets/images/shop/10.jpg" alt="" data-caption="" data-src="<?=base_url()?>assets/images/shop/10.jpg" data-large_image="<?=base_url()?>assets/images/shop/10.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>


									</figure>
								</div>

								<div class="summary entry-summary">

									<div class="woocommerce-product-rating">
										<div class="star-rating">
											<span style="width:72.6%">Rated <strong class="rating">4.33</strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
										</div>
									</div>
									<span class="price">
										<span>
											<span>$</span>20.00
										</span>
									</span>

									<h1 class="product_title entry-title">Ship Your Idea</h1>

									<div class="color-darkgrey">
										<div class="product_meta">
											<span class="posted_in">Category: <a href="http://armawp/product-category/break-repair/" rel="tag">Break repair</a></span>
											<span class="tagged_as">Tag: <a href="http://armawp/product-tag/military/" rel="tag">Military</a></span>
										</div>
									</div>

									<table class="variations">
										<tbody>
											<tr>
												<td class="label"><label for="pa_type_product">Type:</label></td>
												<td class="value">
													<div class="select-wrap"><select id="pa_type_product" class="" name="attribute_pa_type_product" data-attribute_name="attribute_pa_type_product" data-show_option_none="yes">
															<option value="">Choose an option</option>
														</select></div>
												</td>
											</tr>
											<tr>
												<td class="label"><label for="pa_cbd">CBD:</label></td>
												<td class="value">
													<div class="select-wrap"><select id="pa_cbd" class="" name="attribute_pa_cbd" data-attribute_name="attribute_pa_cbd" data-show_option_none="yes">
															<option value="">Choose an option</option>
															<option value="10" class="attached enabled">10%</option>
														</select></div>
												</td>
											</tr>
										</tbody>
									</table>
									<div>
										<div class="wishlist">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
											<span>add to wishlist</span>
										</div>
										<div class="shared">
											<span>shared:</span>
											<a href="shop-product-right.html#" class="fa fa-facebook" title="facebook"></a>
											<a href="shop-product-right.html#" class="fa fa-twitter" title="twitter"></a>
											<a href="shop-product-right.html#" class="fa fa-google" title="google"></a>
											<a href="shop-product-right.html#" class="fa fa-youtube-play" title="youtube-play"></a>
										</div>
									</div>
									<form>
										<div class="single_variation_wrap">
											<div>
												<div class="quantity">
													<input type="number" class="input-text qty text" step="1" min="1" max="500" name="quantity" value="1" title="Qty" size="4">
												</div>

												<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
											</div>
										</div>
									</form>


								</div>
								<!-- .summary -->

								<!--
		IF WE WANT to create bootstrap tabs:
		in WordPress theme We shall override tabs template
		adding 'nav nav-tabs' to 'ul.tabs'
		adding 'nav-item' to 'li'
		adding 'nav-link' to 'a'
		wrap all tabs to tab-content
		but .active is turns not on A but on LI, not as in bootstrap
	-->
								<div class="woocommerce-tabs wc-tabs-wrapper">

									<ul class="tabs wc-tabs" role="tablist">
										<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
											<a href="shop-product-right.html#tab-description">Description</a>
										</li>
										<li class="additional_information_tab active" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
											<a href="shop-product-right.html#tab-additional_information">Additional information</a>
										</li>
										<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
											<a href="shop-product-right.html#tab-reviews">Reviews (3)</a>
										</li>
									</ul>

									<div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

										<h2>Description</h2>

										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
											Vestibulum
											tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
											egestas
											semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									</div>
									<div class="panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

										<h2>Additional information</h2>

										<table class="shop_attributes">


											<tbody>
												<tr>
													<th>Color</th>
													<td>
														<p>Blue</p>
													</td>
												</tr>
												<tr>
													<th>Size</th>
													<td>
														<p>X Small, Small, Medium, Large, X Large, XX Large, XXX Large</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
										<div id="reviews">
											<div id="comments">
												<h2>3 reviews for <span>Ship Your Idea</span>
												</h2>


												<ol class="commentlist">
													<li class="comment even thread-even depth-1" id="li-comment-34">

														<div id="comment-34" class="comment_container">

															<img alt="" src="http://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=60&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>James
											Koster</strong> <span>–</span>
																	<time datetime="2013-06-07T11:43:13+00:00">June 7, 2013
																	</time>
																</p>

																<div class="description">
																	<p>Nice T-shirt, I got one in black. Goes with
																		anything!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">

														<div id="comment-35" class="comment_container">

															<img alt="" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Cobus
											Bester</strong> <span>–</span>
																	<time datetime="2013-06-07T11:55:15+00:00">June 7, 2013
																	</time>
																</p>

																<div class="description">
																	<p>Very comfortable shirt, and I love the graphic!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment even thread-even depth-1" id="li-comment-36">

														<div id="comment-36" class="comment_container">

															<img alt="" src="http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=60&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:100%">Rated <strong
	                                        class="rating">5</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Stuart</strong>
																	<span>–</span>
																	<time datetime="2013-06-07T13:02:14+00:00">June 7, 2013
																	</time>
																</p>

																<div class="description">
																	<p>Great T-shirt quality, Great Design and Great
																		Service.</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
												</ol>


											</div>


											<div id="review_form_wrapper">
												<div id="review_form">
													<div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a review <small>
																<a rel="nofollow" id="cancel-comment-reply-link" href="shop-product-right.html#respond" style="display:none;">Cancel reply</a>
															</small>
														</span>
														<form action="https://html.modernwebtemplates.com/" method="post" id="commentform" class="comment-form" novalidate="">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span>
																Required fields are marked <span class="required">*</span>
															</p>
															<div class="comment-form-rating">
																<label>Your rating</label>
																<p class="stars">
																	<span>
																		<a class="star-1" href="shop-product-right.html#">1</a>
																		<a class="star-2" href="shop-product-right.html#">2</a>
																		<a class="star-3" href="shop-product-right.html#">3</a>
																		<a class="star-4" href="shop-product-right.html#">4</a>
																		<a class="star-5" href="shop-product-right.html#">5</a>
																	</span>
																</p>
															</div>

															<p class="comment-form-author">
																<label for="author">Name
																	<span class="required">*</span>
																</label>
																<i class="fa fa-user" aria-hidden="true"></i>
																<input id="author" placeholder="Your Name" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required">
															</p>
															<p class="comment-form-email">
																<label for="email">Email <span class="required">*</span>
																</label>
																<i class="fa fa-envelope" aria-hidden="true"></i>
																<input id="email" placeholder="Your Email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email" aria-required="true" required="required">
															</p>
															<p class="comment-form-comment">
																<label for="comment">Comment</label>
																<i class="fa fa-pencil" aria-hidden="true"></i>
																<textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" placeholder="Your Review" aria-required="true" required="required"></textarea>
															</p>

															<p class="form-submit">
																<input name="submit" type="submit" id="submit" class="submit" value="Submit Now">

															</p>

														</form>
													</div>
													<!-- #respond -->
												</div>
											</div>


											<div class="clear">

											</div>
										</div>
									</div>

								</div>


								<section class="up-sells upsells products">

									<h2>You may also like</h2>

									<ul class="products">
										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<span class="onsale">Sale!</span>
													<img src="<?=base_url()?>assets/images/shop/07.jpg" alt="">
													<h2>Ship Your Idea</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>30.00
														</span>
														–
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/06.jpg" alt="">
													<h2>Woo Logo</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>

										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/08.jpg" alt="">
													<h2>Woo Logo</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>20.00
														</span>
													</span>
												</a>

											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/08.jpg" alt="">
													<h2>Woo Logo</h2>
													<div class="star-rating">
														<span style="width:90%">Rated <strong class="rating">4.50</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>4.00
														</span>
													</span>
												</a>

											</div>
										</li>


									</ul>

								</section>


								<section class="related products">

									<h2>Related products</h2>

									<ul class="products">


										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/05.jpg" alt="">
													<h2>Ninja Silhouette</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>


										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/04.jpg" alt="">
													<h2>Happy Ninja</h2>
													<div class="star-rating">
														<span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>


										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/02.jpg" alt="">
													<h2>Woo Ninja</h2>
													<div class="star-rating">
														<span style="width:90%">Rated <strong class="rating">4.50</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>


										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/06.jpg" alt="">
													<h2>Woo Logo</h2>
													<div class="star-rating">
														<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>35.00
														</span>
													</span>
												</a>

											</div>
										</li>


										<li class="product">
											<div class="product-inner">
												<a href="shop-product-right.html">
													<img src="<?=base_url()?>assets/images/shop/03.jpg" alt="">
													<h2>Woo Ninja #3</h2>
													<div class="star-rating">
														<span style="width:90%">Rated <strong class="rating">4.50</strong> out of 5</span>
													</div>
													<span class="price">
														<span>
															<span>$</span>37.00
														</span>
													</span>
												</a>

											</div>
										</li>


									</ul>

								</section>


							</div>
							<!-- #product-22 -->


						</main>

						


					</div>

				</div>
			</section>