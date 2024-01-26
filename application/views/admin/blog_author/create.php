<div class="clearfix"> </div>	
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjblogauthor/create'); ?>
							<div class="form-group">
								<label>Username * : </label>
								<input type="text" class="form-control" name="blog_author_username" id="" placeholder="Username">
							</div>
							<div class="form-group">
								<label>Name * : </label>
								<input type="text" class="form-control" name="blog_author_name" id="" placeholder="Full Name">
							</div>
							<div class="form-group">
								<label>Password : </label>
								<input type="password" class="form-control" name="blog_author_password" id="">
							</div>
							<div class="form-group">
								<label>Author Bio : </label>
								<textarea name="blog_author_description" class="form-control"></textarea>
							</div>

							<button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>