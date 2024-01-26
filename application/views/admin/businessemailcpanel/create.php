<div class="clearfix"> </div>	
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjbusinessemail/create'); ?>
							<?php
								if(isset($error))
								{
									?>
									<span class="error text-danger"><?=$error?></span><br/><br/>
									<?php
								}
							?>
							<div class="form-group">
								<label>Email* : </label>
								<div class="row">
									<div class="col-md-8">
										<input type="text" class="form-control" name="email" placeholder="username">
									</div>
									<div><h5>@hadono.com</h5></div>
								</div>
							</div>
							
							<div class="form-group">
								<label>Password* :</label>
								<input type="text" class="form-control" name="password" placeholder="password">
							</div>
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>