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
								<th>Email
								<th>Name
								<th>Password
							</thead>
							<tbody>
							<?php foreach($business_email as $be) : ?>
								<tr>
									<td><?= $be['email']; ?></td>
									<td><?php echo word_limiter($be['name'], 5); ?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjbusinessemail/view/'.$be['business_email_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjbusinessemail/edit/'.$be['business_email_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs remove" href="<?= base_url('gjbusinessemail/delete/'.$be['business_email_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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