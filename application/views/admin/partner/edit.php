<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit partner : ".$partner['partner_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjpartner/update'); ?>

						  <div class="col-md-4"> 
							<label for="exampleInputFile">Brand Logo * : </label>
							<img style="border: 5px solid gray;" height= "100%" width= "100%" src="<?php echo base_url(); echo '/assets/images/partner/'.$partner['partner_logo']; ?> ">
							<div class="form-group">
								<br>
								<input type="file" name="userfile" id="">
								<p style="" class="help-block">Please make sure your partner logo must <b>JPG</b> OR <b>JPEG</b> OR <b>PNG</b> </p> <br>
							</div>
						  </div>

						  <div class="col-md-7"> 

							  <div class="form-group">
								<input type="hidden" name="partner_id" value="<?= $partner['partner_id']; ?>">
								<input type="hidden" class="form-control" value="<?= $partner['partner_logo']; ?>" name="partner_logo">
								<label>Name * : </label>
								<input type="text" class="form-control" value="<?= $partner['partner_name']; ?>" name="partner_name" id="" placeholder="partner Name">
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