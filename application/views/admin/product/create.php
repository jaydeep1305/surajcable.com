<div class="clearfix"> </div>	
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjproduct/create'); ?>
							<div class="form-group">
								<label>Product Name * : </label>
								<input type="text" class="form-control" name="product_name" id="" placeholder="Product Name">
							</div>
							<div class="form-group">
								<label>Product slug * : </label>
								<input type="text" class="form-control" name="product_slug" id="" placeholder="Product Url">
							</div>
							<div class="form-group">
								<label>Product Category * :</label>
								<select name="cat_id" class="form-control"> 
									<?= toSelect($cat_tree);?>
									<?php
										function toSelect ($arr, $depth=0) {    
										    $html = '';
										    foreach ( $arr as $v ) {
										        $html.= '<option value="' . $v['cat_id'] . '">';
										        $html.= str_repeat('–', $depth);
										        $html.= '– '.$v['cat_name'] . '</option>' . PHP_EOL;

										        if ( array_key_exists('childs', $v) ) {
										            $html.= toSelect($v['childs'], $depth+1);
										        }
										    }
										    return $html;
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Description * :</label>
								<textarea id="editor1" class="form-control" name="product_description" placeholder="Product Description"></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>