<style>label{text-transform:capitalize}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1>OnPageSEO Settings</h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-4"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjonpageseo/step2'); ?>
								<div class="form-group">
									<label for="sel1">Select Page</label>
									<select class="form-control" name='page_slug_id'>
										<?php foreach($page_slug as $ps) : ?>
											<option value="<?=$ps['page_slug_id']?>"><?=$ps['page_slug']?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<br/>  
								<button type="submit" name="submit" class="btn btn-info btn-block">Next</button> 
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="<?=base_url()?>/gjonpageseo/generateslug" class="btn btn-success btn-block">Slug Generate</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>