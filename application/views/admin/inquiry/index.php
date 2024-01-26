<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-10">
				<div class="box box-primary">
					<div class="box-body">
						<table class="table table-striped table-bordered">
							<tr>
								<th> Sr. No. </th>
								<th> Person Name </th>
								<th> Email </th>
								<th> phone </th>
								<th> Inquiry </th>
								<th> Manage</th>
							</tr>
							<?php $count = 1; ?>
							<?php foreach($inquiry as $inq) : ?>
										<tr>
											<td> <?= $count; ?> </td>
											<td> <?= $inq['name']; ?></td>
											<td> <?= $inq['email']; ?> </td>
											<td> <?= $inq['phone']; ?> </td>
											<td> <?= word_limiter($inq['inquiry'], 10); ?></td>
											
											<td> 
												<a class="btn btn-xs" href="<?= base_url('gjinquiry/view/'.$inq['inquiry_id']); ?>"><i class="fa fa-eye"></i> </a>
												<a class="btn btn-xs" href="<?= base_url('gjinquiry/delete/'.$inq['inquiry_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
											</td>
											<?php $count++; ?>
										</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>