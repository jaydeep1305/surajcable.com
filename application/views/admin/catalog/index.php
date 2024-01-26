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
							<tr>
								<th> Sr. No. </th>
								<th> Catalog Title </th>
								<th> Manage </th>
							</tr>
							<?php $count = 1; ?>
							<?php foreach($catalogs as $catalog) : ?>
								
										<tr>
											<td> <?= $count; ?> </td>
											<td> <?= $catalog['catalog_title']; ?></td>
											
											<td> <a class="btn btn-info" href="<?= base_url('gjcatalog/view/'.$catalog['catalog_id']); ?>"> View / Edit... </a>  </td>
											
											<td> <?php echo form_open('/gjcatalog/delete/'.$catalog['catalog_id']); ?>
													<input type="submit" name="delete" value="Delete" class="btn btn-danger">
												 </form>
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