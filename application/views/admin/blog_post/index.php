<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<table class="table table-striped">
							<thead>
								<th>Title
								<th>Order
								<th>Manage
							</thead>
							<tbody>
							<?php foreach($blog_posts as $blog_post) : ?>
								<tr>
									<td><?= $blog_post['blog_post_title']?></td>
									<td><?= $blog_post['blog_post_order']; ?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjblogpost/view/'.$blog_post['blog_post_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjblogpost/edit/'.$blog_post['blog_post_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs remove" href="<?= base_url('gjblogpost/delete/'.$blog_post['blog_post_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
									</td>
								</tr>
							<?php endforeach; ?>	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>