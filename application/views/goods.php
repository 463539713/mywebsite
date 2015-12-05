<meta charset="utf-8">

<table>
	<tr>
		<form action="<?php echo site_url("cart/add_cart")?>" method="post">
			<td>
				<p>品牌:厦芙</p>
				<p>市场价:￥168</p>
				<p>售价:￥128</p>
				<p>尺寸:XL</p>
				<p>
					购买数量:
				   <input type="text" size="3" name="qty" value="1">	
				</p>
				<p>
				   <input type="hidden" name="id" value="1">
				   <input type="hidden" name="price" value="128">
				   <input type="hidden" name="name" value="夏芙优雅连衣裙">
				   <input type="hidden" name="size" value="XL">
				   <input type="submit" name="add_cart" value="添加到购物车">
				</p>
			</td>
		</form>
	</tr>
</table>