<?php

include("../inc/header.php");
?>

<?php 
//if (request) 3lasan ana 3aml method gawa vlass al session asmaha getid fh2ra mnha 3latol bdl mst5dm al isset bt3t al super global array
//wazyft al request->get('id')hya anaha tshyk 3la wogod al id mn 3damo
//wazyft al if dyh hya anaha ta5od al id o tgyb al id bta3 al category aly dost 3laha
	if($request->getHas('id') ) {
		$id  = $request->get('id');
		
	} else {
		$id = 1;
	}
	
//$c aly gay head er
use TechStore\Classes\Models\Product;

$pr = new Product;
$prod = $pr->selectid($id , "products.id AS prodId , products.name AS prodName , description ,  price , img , cats.name AS catName");

?>

	<!-- Single Product -->
	<?php if(!empty($prod)) : ?>
		<div class="single_product">
			<div class="container">
				<div class="row">

					

					<!-- Selected Image -->
					<div class="col-lg-6 order-lg-2 order-1">
						<div class="image_selected"><img src="<?= URL . "../uploads/" . $prod['img']?>" alt=""></div>
					</div>

					<!-- Description -->
					<div class="col-lg-6 order-3">
						<div class="product_description">
							<div class="product_category"><?= $prod['catName']?></div>
							<div class="product_name"><?= $prod['prodName']?></div>
							<div class="product_text"> <p> <?=$prod['description']?> </p> </div>
							<div class="order_info d-flex flex-row">
								<form method="POST" action="http://localhost/route_1/workshop/e-commerce/tech-commerce/handlers/add-cart.php">
									<div class="clearfix" style="z-index: 1000;">
										<input type="hidden" name="name" value = "<?= $prod['prodName']?>">
										<input type="hidden" name="price" value = "<?= $prod['price']?>">
										<input type="hidden" name="img" value = "<?= $prod['img']?>">
										<input type="hidden" name="description" value = "<?= $prod['description']?>">
										<input type="hidden" name="id" value = "<?= $prod['prodId']?>">
										<!-- Product Quantity -->
										<?php if(!$cart->has($prod['prodId'])) : ?>
										<div class="product_quantity clearfix">
											<span>Quantity: </span>
											<input id="quantity_input" name="qty" type="text" pattern="[0-9]*" value="1">
											<div class="quantity_buttons">
												<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
												<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
											</div>
										</div>

										<div class="product_price">$<?= $prod['price']?></div>
										<?php endif;?>
									</div>
									<?php if(!$cart->has($prod['prodId'])) :?>
									
									<div class="button_container">
										<button type="submit" name="submit"  class="button cart_button">Add to Cart</button>
									</div>

									<?php endif?>

								</form>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	<?php else : ?>
		<div  class="single_product text-center h3 ">
			no product found		
		</div>
	<?php endif?>
<?php

include("../inc/footer.php");
?>