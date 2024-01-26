<style>label{text-transform:capitalize}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1>Basic Contact Details</h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjcontact/update'); ?>
							<div class="col-md-10"> 
								<?php foreach($contact as $c) : ?>
									<?php if($c['type'] == 'text') : ?>
										<div class="col-md-6">
												<div class="form-group">
													<label><?= str_replace("_"," ",$c['name'])?> : </label>
													<input type="text" class="form-control" value="<?= $c['value']; ?>" name="<?=$c['name']?>">
												</div>
										</div>
									<?php endif;?>
									<?php if($c['type'] == 'textarea') : ?>
										<div class="col-md-6">
												<div class="form-group">
													<label><?= str_replace("_"," ",$c['name'])?> : </label>
													<textarea type="text" class="form-control" name="<?=$c['name']?>"><?= $c['value']; ?></textarea>
												</div>
										</div>
									<?php endif;?>
								<?php endforeach; ?>
								<br/>  
								<div class="col-md-3">
									<button type="submit" name="submit" class="btn btn-info btn-block">Submit</button> <br><br>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>