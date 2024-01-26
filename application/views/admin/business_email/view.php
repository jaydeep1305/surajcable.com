
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Business Email : ".$business_email['email']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-3">
							<a class="btn btn-info btn-block" href="<?= base_url('/gjbusinessemail/edit/'.$business_email['business_email_id']); ?>"> Edit  </a>
						</div>
						<div class="col-md-3">
							<?php echo form_open('/gjbusinessemail/delete/'.$business_email['business_email_id']); ?>
								<input type="submit" name="delete" value="Delete" class="btn btn-danger btn-block">
							</form>
						</div>
						<div class="clearfix"></div>
						<h3> <?= $business_email['email']; ?> </h3>
						<h5> <?= $business_email['name']; ?> </h5>
						<div class="clearfix"></div>
						<hr/>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>