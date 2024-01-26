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
								<th> Sr. No. </th>
								<th> Subscriber Email  </th>					
								<th> Time of subscription </th>
								<th> Manage </th>
							</thead>
							<tbody>
							<?php $count = 1; ?>
							<?php foreach($subscriber as $sub) : ?>
								<tr>
									<td> <?= $count; ?> </td>
									<td> <?= $sub['subscriber_email']; ?> </td>
									<td> <?= $sub['time']; ?> </td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjsubscriber/delete/'.$sub['subscriber_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
									</td>
									<?php $count++; ?>
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
				