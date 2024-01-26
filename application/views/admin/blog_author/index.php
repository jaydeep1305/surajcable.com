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
								<th>Author
								<th>Username
								<th>Manage
							</thead>
							<tbody>
							<?php foreach($blog_authors as $blog_author) : ?>
								<tr>
									<td><?= $blog_author['blog_author_name']?></td>
									<td><?= $blog_author['blog_author_username']; ?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjblogauthor/view/'.$blog_author['blog_author_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjblogauthor/edit/'.$blog_author['blog_author_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs remove" href="<?= base_url('gjblogauthor/delete/'.$blog_author['blog_author_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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