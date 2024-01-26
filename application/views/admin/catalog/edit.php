<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Catalog : ".$catalog['catalog_title']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body"> 
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjcatalog/update'); ?>

						  <div class="col-md-4"> 
							<label for="exampleInputFile">Change Catalog PDF : </label>
								
							<div class="form-group">
								<br>
								<input type="file" name="userfile" id="">
								<p style="" class="help-block">Please make sure your file must be in<b> PDF </b>format.</p> <br>
							</div>
							<!-- If user not need to Update image then as a Current/old image is get & passed using hidden field -->
							  <div class="form-group">
								<input type="hidden" class="form-control" value="<?= $catalog['catalog']; ?>" name="catalog_file" id="" placeholder="catalog Image Hidden">
							  </div>
						  </div>

						  <div class="col-md-7"> 
							  <div class="form-group">
							  <input type="hidden" name="catalog_id" value="<?= $catalog['catalog_id']; ?>">
								<label>Catalog Title * : </label>
								<input type="text" class="form-control" value="<?= $catalog['catalog_title']; ?>" name="catalog_title" placeholder="catalog Title" required="required">
							  </div>
							  
							  <div class="form-group">
								<label>Description * :</label>
								<textarea id="editor1" class="form-control" name="catalog_description" placeholder="catalog Description" required="required"><?= $catalog['catalog_description']; ?></textarea>
							  </div>
							  
							  <br>
							  
							<div class="">
								<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
							</div>
						  </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>