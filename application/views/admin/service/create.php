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
						<?php echo form_open_multipart('gjservice/create'); ?>
							<div class="form-group">
								<label>service Name * : </label>
								<input type="text" class="form-control" name="service_name" id="" placeholder="service Name">
							</div>
							<div class="form-group">
								<label>service slug * : </label>
								<input type="text" class="form-control" name="service_slug" id="" placeholder="service Url">
							</div>
							<div class="form-group">
								<label>service Description * :</label>
								<textarea id="editor1" class="form-control" name="service_description" placeholder="service Description"></textarea>
							</div>
							<div class="form-group">
								<label>service Price * :</label>
								<input type="text" class="form-control" name="service_price" id="" placeholder="service Price">
							</div>
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>