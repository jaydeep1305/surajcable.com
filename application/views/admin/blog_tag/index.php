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
								<th>Tag
								<th>Manage
							</thead>
							<tbody>
							<?php foreach($blog_tags as $blog_tag) : ?>
								<tr>
									<td><?= $blog_tag['blog_tag_name']?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjblogtag/view/'.$blog_tag['blog_tag_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjblogtag/edit/'.$blog_tag['blog_tag_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs remove" href="<?= base_url('gjblogtag/delete/'.$blog_tag['blog_tag_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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