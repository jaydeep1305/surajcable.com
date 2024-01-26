<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Blog Author : ".$title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjblogauthor/update'); ?>
							  <div class="form-group">
							 	 	<input type="hidden" name="blog_author_id" value="<?= $blog_author['blog_author_id']; ?>">
									<label>Username * : </label>
									<input type="text" class="form-control" value="<?= $blog_author['blog_author_username']; ?>" name="blog_author_username" placeholder="Userame">
							  </div>
							  <div class="form-group">
									<label>Name * : </label>
									<input type="text" class="form-control" value="<?= $blog_author['blog_author_name']; ?>" name="blog_author_name" placeholder="Full Name">
							  </div>
							  <div class="form-group">
									<label>Password : </label>
									<input type="password" class="form-control" value="<?= $blog_author['blog_author_password']; ?>" name="blog_author_password" placeholder="Password">
							  </div>
							  <div class="form-group">
								<label>Description * :</label>
								<textarea name="blog_author_description" class="form-control"><?= $blog_author['blog_author_description']; ?></textarea>
							  </div>
							  
							  <br>
							  
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