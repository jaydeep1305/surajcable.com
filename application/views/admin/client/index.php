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
								<th>client
								<th>Manage
							</thead>
							<tbody>
							<?php foreach($clients as $client) : ?>
								<tr>
									<td><?= $client['client_name'] ?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjclient/view/'.$client['client_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjclient/edit/'.$client['client_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjclient/delete/'.$client['client_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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