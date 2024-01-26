<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?> <a href="<?=base_url().'/webmail'?>" class="btn btn-success" target="_blank"> Login into Mail</a></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<table class="table table-striped">
							<thead>
								<th>Email
								<th>Manage
							</thead>
							<tbody>
								<?php if(isset($json_data->cpanelresult->data)) : ?>
									<?php foreach($json_data->cpanelresult->data as $data) : ?>
										<tr>
											<td><?=$data->email?>
											<td>
												<a class="btn btn-xs" href="<?= base_url('gjbusinessemail/edit/').$data->user; ?>"><i class="fa fa-edit"></i> </a>
												<a class="btn btn-xs" href="<?= base_url('gjbusinessemail/delete/').$data->user ?>"><i class="fa fa-trash-alt"></i> </a>
										</tr>
									<?php endforeach;?>
								<?php endif;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>