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
								<label>Product Category * :</label>
								<select name="cat_id" class="form-control"> 
									<?php foreach($categories as $category): ?>
										<option value="<?php echo $category['cat_id']; ?>"> <?php echo $category['cat_name'] ?></option>
									<?php endforeach; ?>
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