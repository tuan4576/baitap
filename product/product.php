
			   <?php
			    $list_product = [
				['product_name'=>'Áo khoác nam', 'image'=>'DM1.jpg', 'price'=> 200000,'price_sale'=> 150000],
				['product_name'=>'Áo nữ ngắn tay', 'image'=>'DM2.jpeg', 'price'=> 180000,'price_sale'=> '1 củ khoai' ],
				['product_name'=>'Áo nam sơ mi', 'image'=>'DM3.jpeg', 'price'=> 150000,'price_sale'=> 120000],
				['product_name'=>'Áo nữ phong cách style', 'image'=>'DM4.jpeg', 'price'=> 200000,'price_sale'=> '2 củ khoai'] ];			
			   foreach($list_product as $p)
			   {
				?>
				<div class = "hinh">
				  <img class = "hinh1" src = "asset/images/<?= $p['image'] ?> " alt ='hinh'>
				  <p class = "text-center"><a href = ""><?= $p['product_name'] ?></a></p>
				  <p class = "text-center"><?= $p['price_sale'] ?> </p>
				</div>
				<?php
                   }
				?>
	

