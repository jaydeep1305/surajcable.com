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
						<?php echo form_open_multipart('gjcatalog/create'); ?>
						  <div class="form-group">
							<label>Catalog Title * : </label>
							<input type="text" class="form-control" name="catalog_title" id="" placeholder="Catalog Title">
						  </div>
						  
						  <div class="form-group">
							<label>Description * :</label>
							<textarea id="editor1" class="form-control" name="catalog_description" placeholder="Catalog Description"></textarea>
						  </div>
						  
						  <div class="form-group">
							<label for="exampleInputFile">Catalog PDF : </label><br>
							<input class="form-control" type="file" name="userfile" id="pdf" size="20">
							<p class="help-block">Please make sure your file must <b>PDF</b> Only </p>
						  </div>
						  
						  <button type="submit" name="submit" class="btn btn-info">Submit</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>