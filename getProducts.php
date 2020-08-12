<?php
function showProduct($pro_id,$pro_cat,$pro_brand,$pro_title,$pro_price,$pro_image,$orig){
echo '
									
                                    
                                
                                    <div class="col-md-5 col-md-push-2">
                                    <div id="product-main-img">
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="col-md-2  col-md-pull-5">
                                    <div id="product-imgs">
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'g" alt="">
                                        </div>
    
                                        <div class="product-preview">
                                            <img src="product_images/'.$pro_image.'" alt="">
                                        </div>
                                    </div>
                                </div>
    
                                     
                                        ';
}


function getProducts($pro_id,$pro_cat,$pro_brand,$pro_title,$pro_price,$pro_image,$orig,$cat_name){
echo "
    	<div class='col-md-4 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img  src='product_images/$pro_image'  style='max-height: 250px;min-height:250px;object-fit: cover;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$orig</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist' tabindex='0'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view' ><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
";
}
                                        ?>