<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Blog Tag : ".$title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjblogtag/update'); ?>
							<div class="form-group">
								<label>Name * : </label>
						 	 	<input type="hidden" name="blog_tag_id" value="<?= $blog_tag['blog_tag_id']; ?>">
								<input type="text" class="form-control" value="<?= $blog_tag['blog_tag_name']; ?>" name="blog_tag_name" placeholder="Full Name">
							</div>
							<div class="form-group">
								<label>Slug * : </label>
								<input type="text" class="form-control" value="<?= $blog_tag['blog_tag_slug']; ?>" name="blog_tag_slug" placeholder="Slug">
						 	</div>
							  
							<div class="">
								<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>