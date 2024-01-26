
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Blog Category : ".$blog_category['blog_cat_name'] ; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div class="col-md-4">
										<a class="btn btn-info btn-block" href="<?= base_url('/gjblogcategory/edit/'.$blog_category['blog_cat_id']); ?>"> Edit  </a>
									</div>
									<div class="col-md-4">
										<?php echo form_open('/gjblogcategory/delete/'.$blog_category['blog_cat_id']); ?>
											<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
										</form>
									</div>
								</div>
								<h3>  <?php echo $blog_category['blog_cat_name'] ?> </h3>								
								<h5>  <?php echo $blog_category['blog_cat_slug'] ?> </h5>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
