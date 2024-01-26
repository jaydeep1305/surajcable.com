<div class="clearfix"> </div>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-9">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjpartner/create'); ?>
						  <div class="form-group">
							<label>Brand Name * : </label>
							<input type="text" class="form-control" name="partner_name" id="" placeholder="Brand Name">
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Brand Logo * : </label><br>
							<input class="form-control" type="file" name="userfile" id="image">
							<p class="help-block">Please make sure your post Image must <b>JPG</b> OR <b>JPEG</b> OR <b>PNG</b> </p>
						  </div>
						  
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>