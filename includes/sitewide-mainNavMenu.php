<ul id="jsddm" class="clearfix">
	<li>
		<a href="index.php" title="">
			<span class="<? if ($nameX=="Index") echo "activePage"; ?>">Home</span>
		</a>
	</li>
	<li>
		<a href="products.php"title="">
			<span  class="<? if (($nameX=="Products") || ($brandpage)) echo "activePage"; ?>">Products</span>
		</a>
	</li>
	<li>
		<a href="promotions.php" title="">
			<span  class="<? if ($nameX=="Promotions") echo "activePage"; ?>" >Promotions</span>
		</a>
	</li>
	<li>
		<a href="specifications.php" title="">
			<span  class="<? if ($nameX=="Specifications") echo "activePage"; ?>" >Specifications</span>
		</a>
	</li>
	<li>
		<a href="about.php" title="">
			<span class="<? if ($nameX=="About") echo "activePage"; ?>">About</span>
		</a>
	</li>
</ul>
<ul id="jsddm2">
	<li>
		<a href="dealer_locator.php" title="">
			<span class="<? if ($nameX=="Dealer Locator") echo "activePage"; ?>">Dealer Locator</span>
		</a>
	</li>

  	<?php if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){ ?>
  	<li>&nbsp;</li>
  	<?php } else { ?>
	<li><a href="dealer_tools.php" title="Dealer Tools">
			<span class="<? if (($nameX=="Dealer Tools") || ($nameX=="Dealer Tools Pricing")) echo "activePage"; ?>">Dealer Tools</span>
		</a>
	</li>
    <?php } ?>
  	<li>
  		<a href="contact.php" title="">
  			<span class="<? if ($nameX=="Contact") echo "activePage"; ?>">Contact</span>
  		</a>
  	</li>
</ul>