<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Slider : ".$slider['title']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjslider/update'); ?>

						  <div class="col-md-4"> 
							<label for="exampleInputFile">Slider Image * : </label>
							<img style="border: 5px solid gray;" height= "100%" width= "100%" src="<?php echo base_url(); echo '/assets/images/slider/'.$slider['image']; ?> ">
							<div class="form-group">
								<br>
								<input type="file" name="userfile" id="">
								<p style="" class="help-block">Please make sure your Slider Image must <b>JPG</b> OR <b>JPEG</b> OR <b>PNG</b> </p> <br>
							</div>
						  </div>

						  <div class="col-md-7"> 

							  <div class="form-group">
								<input type="hidden" name="slider_id" value="<?= $slider['slider_id']; ?>">
								<input type="hidden" class="form-control" value="<?= $slider['image']; ?>" name="image">
								<label>Title * : </label>
								<input type="text" class="form-control" value="<?= $slider['title']; ?>" name="title" id="" placeholder="slider Name">
							  </div>
							  
							  <div class="form-group">
								<label>Description :</label>
								<textarea id="editor1" class="form-control" name="description" placeholder="slider Description"><?= $slider['description']; ?></textarea>
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