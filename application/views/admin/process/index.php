<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1> Services / Processes List</h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<table class="table table-striped">
							<thead>
								<th>Process / Services Name
								<th>Manage
							</thead>
							<tbody>
							<?php foreach($processes as $process) : ?>
								<tr>
									<td><?= $process['process_name']; ?></td>
									<td> 
										<a class="btn btn-xs" href="<?= base_url('gjprocess/view/'.$process['process_id']); ?>"><i class="fa fa-eye"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjprocess/edit/'.$process['process_id']); ?>"><i class="fa fa-edit"></i> </a>
										<a class="btn btn-xs" href="<?= base_url('gjprocess/delete/'.$process['process_id']); ?>"><i class="fa fa-trash-alt"></i> </a>
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