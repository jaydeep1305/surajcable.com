<style>label{text-transform:capitalize}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1>OnPageSEO Settings</h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjonpageseo/save'); ?>
								<input type="hidden" name="page_slug_id" value="<?=$page_slug_id?>">
								<?php foreach($seo as $s) : ?>
									<?php if($s['type'] == 'text') : ?>
										<div class="col-md-6">
											<div class="form-group">
												<label><?= str_replace("_"," ",$s['name'])?> : </label>
												<input type="text" class="form-control" name="seo_onpage_id[<?=$s['seo_onpage_id']?>]" value="<?=isset($s['value'])?$s['value']:''?>">
											</div>
										</div>
									<?php endif;?>
									<?php if($s['type'] == 'textarea') : ?>
										<div class="col-md-6">
											<div class="form-group">
												<label><?= str_replace("_"," ",$s['name'])?> : </label>
												<textarea type="text" class="form-control" name="seo_onpage_id[<?=$s['seo_onpage_id']?>]"><?=isset($s['value'])?$s['value']:''?></textarea>
											</div>
										</div>
									<?php endif;?>
								<?php endforeach; ?>
								<br/>  
								<button type="submit" name="submit" class="btn btn-success btn-block">Save</button> 
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>