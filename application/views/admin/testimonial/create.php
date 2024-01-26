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
						<?php echo form_open_multipart('gjtestimonial/create'); ?>
							<div class="form-group">
								<label>Customer / User Name * : </label>
								<input type="text" class="form-control" name="username" id="" placeholder="Customer/User Name">
							</div>

							<div class="form-group">
								<label>Designation * : </label>
								<input type="text" class="form-control" name="designation" id="" placeholder="Designation">
							</div>
							
							<div class="form-group">
								<label>Feedback / Message / Suggestion* :</label>
								<textarea id="editor1" class="form-control" name="testimonial" placeholder="Your Important Feedback / Message / Suggestion"></textarea>
							</div>

							<div class="form-group">
								<label for="exampleInputFile">User Image : </label><br>
								<input class="form-control" type="file" name="userfile" id="image" size="20">
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