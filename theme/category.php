<?php

use TechStore\Classes\Models\Product;

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
$category = $c->selectid($id);
//hn3ml obj mn model al product 3lahsan agyb al items bta3t kol category
$pr = new Product;
//cat_id dah aly hwa gay mn al database 
//select where btdyha al conditions(array) o kman btdyha al 7agat aly 3yzha 
$prods = $pr->selectWhere("cat_id = $id" , "id , name , img , price");


?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./assets/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title"> 
			
			<?php if(!empty ($category) ) : ?>
			 	<?=$category['name'] ;?>
			<?php else: ?>
				<?= "no category found"?>
			<?php endif;?>
		
			 </h2>

			 

		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<?php if(!empty($category)) :?>

					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
							<?php foreach($cats as $cat) : ?>
								<li><a href="category.php?id=<?= $cat['id']?>"><?= $cat['name']?></a></li>
							<?php endforeach?>
							</ul>
						</div>
					<?php endif;?>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">

						<div class="product_grid">
							<div class="product_grid_border"></div>
							
							<?php foreach ($prods as $prod): ?> {
								
							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= URL . "../uploads/" . $prod["img"] ;?>" alt=""></div>
								<div class="product_content">
									<div class="product_price">$<?= $prod['price']?></div>
									<div class="product_name"><div><a href="<?= URL; ?>product.php?id=<?= $prod["id"];?>" tabindex="0"><?= $prod['name']?></a></div></div>
								</div>
						
							</div>
							<?php endforeach?>

							<!-- Product Item -->
							

							

							

							






						</div>

						<!-- Shop Page Navigation -->
						<?php if(!empty($category)) :?>
						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							
							<ul class="page_nav d-flex flex-row">
							
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							
							</ul>
							
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>
						<?php endif;?>
					</div>

				</div>
			</div>
		</div>
	</div>	

	<!-- Copyright -->
<?php
	include("../inc/footer.php");
?>