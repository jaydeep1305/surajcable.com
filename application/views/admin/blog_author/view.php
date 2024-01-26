
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Blog_author : ".$blog_author['blog_author_username']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjblogauthor/edit/'.$blog_author['blog_author_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjblogauthor/delete/'.$blog_author['blog_author_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $blog_author['blog_author_username']; ?> </h3>
						<h5> <?= $blog_author['blog_author_name']; ?> </h5>
						<h5> <?= $blog_author['blog_author_description']; ?> </h5>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>