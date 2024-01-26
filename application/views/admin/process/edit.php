<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Service / Process : ".$process_name; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjprocess/update'); ?>
							  <div class="col-md-5"> 
								<label for="exampleInputFile">Service / Process Image : </label>
								<img style="border: 5px solid gray;" height= "100%" width= "100%" src="<?php echo base_url(); echo 'assets/images/process/'.$process['process_image']; ?> ">
								<div class="form-group">
									<br>
									<input type="file" name="userfile" id="">
									<p style="" class="help-block">Please make sure your post Image must <b>JPG</b> OR <b>JPEG</b> OR <b>PNG</b> </p> <br>
								</div>
								<!-- If user not need to Update image then as a Current/old image is get & passed using hidden field -->
								  <div class="form-group">
									<input type="hidden" class="form-control" value="<?= $process['process_image']; ?>" name="process_image" id="" placeholder="Process Image Hidden">
								 </div>
							  </div>
							  <div class="col-md-7"> 
								<div class="form-group">
									<input type="hidden" name="process_id" value="<?= $process['process_id']; ?>">
									<label>Service / Process Name * : </label>
									<input type="text" class="form-control" value="<?= $process['process_name']; ?>" name="process_name" id="" placeholder="Service / Process Name" required="required">
								</div>							  
								<div class="form-group">
									<label>Description * :</label>
									<textarea id="editor1" class="form-control" name="process_description" placeholder="Description" required="required"><?= $process['process_description']; ?></textarea>
								</div>
								<div class="">
									<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
								</div>
							  </div>
							<div class="clearfix"></div><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>