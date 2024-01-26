
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Blog_tag : ".$blog_tag['blog_tag_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjblogtag/edit/'.$blog_tag['blog_tag_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjblogtag/delete/'.$blog_tag['blog_tag_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $blog_tag['blog_tag_name']; ?> </h3>
						<h5> <?= $blog_tag['blog_tag_slug']; ?> </h5>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>