<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<style type="text/css">table td {vertical-align: middle !important;}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Product : ".$product['product_name']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-7">
							<?php echo validation_errors(); ?>
							<?php echo form_open_multipart('gjproduct/update'); ?>

								<div class="form-group">
									<input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
									<label>Product Name * : </label>
									<input type="text" class="form-control" value="<?= $product_name; ?>" name="product_name" id="" placeholder="product Name">
								</div>
								<div class="form-group">
									<label>Product slug * : </label>
									<input type="text" class="form-control" value="<?= $product_slug; ?>" name="product_slug" id="" placeholder="product slug">
								</div>
							  
								<div class="form-group">
									<label>Product Category * :</label>
									<select name="cat_id" class="form-control"> 
									<?= toSelect($cat_tree,0,$cat_parent);?>
									<?php
										function toSelect ($arr, $depth=0,$cat_parent) {    
										    $html = '';
										    foreach ( $arr as $v ) {
										        $html.= '<option value="' . $v['cat_id'] . '" '.($cat_parent['cat_id']==$v['cat_id']?'selected':'').'>';
										        $html.= str_repeat('–', $depth);
										        $html.= '– '.$v['cat_name'] . '</option>' . PHP_EOL;

										        if ( array_key_exists('childs', $v) ) {
										            $html.= toSelect($v['childs'], $depth+1,$cat_parent);
										        }
										    }
										    return $html;
										}
									?>
									</select>
								</div>
							  
								<div class="form-group">
									<label>Description * :</label>
									<textarea id="editor1" class="form-control" name="product_description" placeholder="product Description"><?= $product_description; ?></textarea>
								</div>
							  
							   <br>
							  
								<div class="">
									<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
								</div>
							</form>
					  	</div>
					  	<?php 
					  		$display = "none";
					  		if(count($product_image) > 0)
					  		{
					  			$display = "";
					  		}
					  	?>
				  		<div class="col-md-5 box box-success">
				  			<br/>
				  			<?php
								$attributes = array("class"=>"dropzone", "id"=>"image-upload");
							?>
							<?php echo form_open_multipart('gjproduct/productimage',$attributes); ?>
								<input type="hidden" name="product_id" value="<?= $product['product_id'] ?>"/>
								<input type="hidden" name="product_name" value="<?= $product['product_name'] ?>"/>
								<h3 class="text-center">Upload Multiple Product Image</h3>
							</form>
							<br/>
							<div style="display:<?=$display?>">
								<?php echo form_open_multipart('gjproduct/productimageorder'); ?>
						  			<table class="table table-striped">
						  				<thead>
						  					<th>Product Image</th>
						  					<th>Order</th>
						  					<th>Manage</th>
					  					</thead>
					  					<tbody>
					  						<?php foreach($product_image as $pi):?>
					  							<tr>
					  								<td>
					  									<img src="<?=base_url()?>/assets/images/product/<?=$pi['product_image_name']; ?>" class="img-responsive" width="150">
					  								</td>
					  								<td class="align-bottom"><input type="text" name="product_image_order[<?=$pi['product_image_id']?>]" size="1" value="<?=$pi['product_image_order']?>"></td>
					  								<td class="align-bottom"><a href="<?=base_url()?>/gjproduct/deleteproductimage/<?=$pi['product_image_id']?>">Delete</a></td>
					  							</tr>
					  						<?php endforeach;?>
					  						<tr><td><td><td></tr>
					  					</tbody>
						  			</table>
						  			<input type="submit" class="btn btn-success btn-block" value="Save Product Order">
					  				<br/>
					  			</form>
				  			</div>
				  		</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:20,
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.mp4,.webp",
    	init: function () {
	        this.on('queuecomplete', function () {
	            location.reload();
	        });
	    }
    };
</script>