<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Home -->

<div class="home">
	<div class="home_container">
		<div class="home_background" style="background-image:url(/template/images/categories.jpg)"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Smart Phones<span>.</span></div>
							<div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Product Details -->

<div class="product_details">
	<div class="container">
		<div class="row details_row">

			<!-- Product Image -->
			<div class="col-lg-6">
				<div class="details_image">
					<div class="details_image_large"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /><?php if ($product['is_new']): ?><div class="product_extra product_new"><a href="categories.html">New</a></div><?php endif; ?></div>
					<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
						<div class="details_image_thumbnail active" data-image="/template/images/details_1.jpg"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></div>
						<div class="details_image_thumbnail" data-image="/template/images/details_1.jpg"><img src="<?php echo Product::getImage_($product['id'], 1); ?>" alt="" /></div>
						<div class="details_image_thumbnail" data-image="/template/images/details_2.jpg"><img src="<?php echo Product::getImage_($product['id'], 2); ?>" alt="" /></div>
						<div class="details_image_thumbnail" data-image="/template/images/details_2.jpg"><img src="<?php echo Product::getImage_($product['id'], 3); ?>" alt="" /></div>
					</div>
				</div>
			</div>

			<!-- Product Content -->
			<div class="col-lg-6">
				<div class="details_content">
					<div class="details_name"><?php echo $product['name']; ?></div>
					<div class="details_discount">$<?php echo $product['price']+200; ?></div>
					<div class="details_price">$<?php echo $product['price']; ?></div>

					<!-- In Stock -->
					<div class="in_stock_container">
						<div class="availability">Availability:</div>
						<span><?php echo Product::getAvailabilityText($product['availability']); ?></span>
					</div>
					<div class="details_text">
						<p><?php echo $product['description']; ?></p>
					</div>

					<!-- Product Quantity -->
					<div class="product_quantity_container">
						<div class="product_quantity clearfix">
							<span>Qty</span>
							<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
							<div class="quantity_buttons">
								<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="button cart_button"><a href="/cart/add/<?php echo $product['id']; ?>"  data-id="<?php echo $product['id']; ?>" >Add to cart</a></div>
					</div>

					<!-- Share -->
					<div class="details_share">
						<span>Share:</span>
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="row description_row">
			<div class="col">
				<div class="description_title_container">
					<div class="description_title">Description</div>
					<div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
				</div>
				<div class="description_text">
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Products -->

<div class="products">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="products_title">Related Products</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
				<div class="product_grid">
					
					<!-- Product -->

					<?php foreach ($latestProducts as $product): ?>
					<div class="product">
						<a href="/product/<?php echo $product['id']; ?>"><div class="product_image"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></div></a>
					<?php if ($product['is_new']): ?>
                    	<div class="product_extra product_new"><a href="categories.html">New</a></div>            
                    <?php endif; ?>
					<?php if ($product['is_recommended']): ?>
                    	<div class="product_extra product_sale"><a href="categories.html">Sale</a></div>             
                    <?php endif; ?>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Newsletter -->

<div class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="newsletter_border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="newsletter_content text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
					<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" required="required">
							<button class="newsletter_button trans_200"><span>Subscribe</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->

<?php include ROOT . '/views/layouts/footer.php'; ?>
<link rel="stylesheet" type="text/css" href="/template/styles/product_select.css">
<link rel="stylesheet" type="text/css" href="/template/styles/product_responsive.css">