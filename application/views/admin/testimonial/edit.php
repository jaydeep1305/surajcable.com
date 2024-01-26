<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Testimonial : ".$t['username']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjtestimonial/update'); ?>

						  <div class="col-md-5"> 
							<label for="exampleInputFile">Testimonial Image : </label><br>
							<img style="border: 5px solid gray;" height= "50%" width= "50%" src="<?php echo base_url(); echo 'assets/images/testimonial/'.$t['testimonial_image']; ?> ">
							<div class="form-group">
								<br>
								<input type="file" name="userfile" testimonial_id="">
								<p style="" class="help-block">Please make sure your post Image must <b>JPG</b> OR <b>JPEG</b> OR <b>PNG</b> </p> <br>
							</div>
							<!-- If user not need to Update image then as a Current/old image is get & passed using hidden field -->
							  <div class="form-group">
								<input type="hidden" class="form-control" value="<?= $t['testimonial_image']; ?>" name="testimonial_image" >
							  </div>
						  </div>

						  <div class="col-md-7"> 
							  <div class="form-group">
							 	 	<input type="hidden" name="testimonial_id" value="<?= $t['testimonial_id']; ?>">
									<label>Customer / User Name * : </label>
									<input type="text" class="form-control" value="<?= $t['username']; ?>" name="username" placeholder="Your Name">
							  </div>
							  <div class="form-group">
									<label>Designation * : </label>
									<input type="text" class="form-control" value="<?= $t['designation']; ?>" name="designation" placeholder="Designation">
							  </div>
							  
							  <div class="form-group">
								<label>Description * :</label>
								<textarea id="editor1" class="form-control" name="testimonial" placeholder="Your Important Feedback / Message / Suggestion"><?= $t['testimonial']; ?></textarea>
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