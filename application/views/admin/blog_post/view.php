<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Blog_author : ".$blog_post['blog_post_title']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-2">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjblogpost/edit/'.$blog_post['blog_post_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-2">
							<?php echo form_open('/gjblogpost/delete/'.$blog_post['blog_post_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8">
							<h3>Featured Image</h3>
							<img src="<?=$blog_post['blog_post_featured_image']?>" class="img-responsive"/>
						</div>
						<div class="col-md-4">
							<h3>Thumbnail Image</h3>
							<img src="<?=$blog_post['blog_post_featured_image']?>" class="img-responsive"/>
						</div>
						<div class="clearfix"></div>
						<br/>
						<div class="col-md-12">
							<h3> <?= $blog_post['blog_post_title']; ?> </h3>
							-<?= $blog_post['blog_post_slug']; ?>
							<br/>
							<h3>Short Content </h3>
							<div> <?= $blog_post['blog_post_short_content']; ?> </div>
							
							<h3>Content </h3>
							<div> <?= $blog_post['blog_post_content']; ?> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-primary">
					<div class="box-body">
						<table class="table">
							<tr>
								<td><h4>Author : </h4>	
								<td><h4><?=$blog_author['blog_author_name']?></h4>
							</tr>
							<tr>
								<td><h4>Category : </h4>
								<td>
									<?php if(!empty($blog_categories)): ?>
										<?php foreach($blog_categories as $bc) : ?>
											<h4>- <?=$bc?></h4>
										<?php endforeach;?>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<td><h4>Tags : </h4>
								<td>
									<?php if(!empty($blog_tags)): ?>
										<?php foreach($blog_tags as $bt) : ?>
											<h4>- <?=$bt?></h4>
										<?php endforeach;?>
									<?php endif;?>
								</td>
							</tr>
						</table>
						
						<hr/>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>