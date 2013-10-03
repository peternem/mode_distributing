<ul id="qLink">
	<li>
		<a href="index.php" title="">
			<span>Home</span><span class="angleQuoteMark">&raquo;</span>
		</a>
	</li>
	<?php if(($nameX =='Dealer Locator')) { ?>
	<li>
		<a href="dealer_locator.php"title=""><span>Dealer Locator</span></a>
	</li>
	<?php } ?>
	<?php if(($nameX =='Products') || ($brandpage == 'brandPage') || ($subProductPage == 'subProdPage')) { ?>
	<li>
		<a href="products.php"title=""><span>Products</span></a>
	</li>
	<?php } ?>
	<?php if(($marvelSubProdPage == 'marvelSubProdPg')) { ?>
	<li>
		<a href="marvel_products.php"title=""><span class="angleQuoteMark">&raquo;</span><span>Marvel Products</span></a>
	</li>
	<?php } ?>
	<?php if(($marvelSubProdPage == 'marvelSubProdPg')) { ?>
	<li>
		<a href="marvel_products.php"title=""><span class="angleQuoteMark">&raquo;</span><span>Marvel Products</span></a>
	</li>
	<?php } ?>
	<?php if($brandpage == 'brandPage') { ?>
	<li>
		<a href="<? echo $filename ?>" title=""><span class="angleQuoteMark">&raquo;</span><span><?php echo $nameX ?></span></a>
	</li>
	<?php } ?>
</ul>