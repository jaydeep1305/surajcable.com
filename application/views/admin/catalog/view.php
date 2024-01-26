<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Catalog : ".$catalog['catalog_title']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
					
						<div class="col-md-7">
							<p> Description : <?= $catalog['catalog_description']; ?> </p>
							<br/>

							<div class="clearfix"></div>
							<br/>
							<div class="row">
								<div class="col-md-5">
									<a href="<?=base_url().'assets/catalog/'.$catalog['catalog']?>" class="btn btn-success">Download</a>
								</div>
								<div class="col-md-3">
									<a class="btn btn-info pull-left" href="<?= site_url('/gjcatalog/edit/'.$catalog['catalog_id']); ?>"> Edit  </a>
								</div>
								<div class="col-md-4">
									<?php echo form_open('/gjcatalog/delete/'.$catalog['catalog_id']); ?>
										<input type="submit" name="delete" value="Delete" class="btn btn-danger">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
