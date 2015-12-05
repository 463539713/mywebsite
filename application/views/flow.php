<html>
	<head>
		<meta charset="utf-8">
		<title>我的购物车</title>
	</head>
	
	<body>
		<p>购买了几种商品<?php echo $this->cart->total_items();?></p>
		<form method="post" action="<?php echo site_url('cart/update_cart')?>">
			<table>
				<tr>
					<th>商品名称</th>
					<th>属性</th>
					<th>售价</th>
					<th>购买数量</th>
					<th>小计</th>
					
				</tr>
				<?php foreach($this->cart->contents() as $items) {?>
					<tr>
						<input type="hidden" size="3" name="rowid" value="<?php echo $items['rowid']?>" />
						<td>
							<a href="#"><?php echo $items['name']?></a>
						</td>
						
						<?php if($this->cart->has_options($items['rowid'])==TRUE) {?>
							<td>
								<?php foreach($this->cart->product_options($items['rowid']) as $option_name=>$option_value) {?>
									<strong><?php echo $option_name?>:</strong><?php echo $option_value?><br />
								<?php }?>	
							</td>	
						<?php }?>
						<td>
							￥<?php echo $this->cart->format_number($items['price'])?>
						</td>
						<td>
							<input type="text" size="3" name="qty" value="<?php echo $items['qty']?>">
							
						</td>
						<td>
							￥<?php echo $this->cart->format_number($items['subtotal'])?>
						</td>
						<td>
							<a href="<?php echo site_url('cart/delete'.'/'.$items['rowid'])?>">删除</a>
						</td>
						
					</tr>	
				<?php }?>
			</table>
			<p></p>
			<h1>
				<span>总计：<strong><?php echo $this->cart->format_number($this->cart->total())?></strong></span>
				<input type="submit" value="更新购物车">
				<a href="<?php echo site_url('cart/cart_destory')?>">清空购物车</a>
			</h1>
			<p><a href="<?php echo site_url("cart/cart")?>">回到添加页面</a></p>
		</form>
	</body>
</html>