<div class="clearfix"> </div>	
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjbusinessemail/create'); ?>
							<div class="form-group">
								<label>Email * : </label>
								<input type="text" class="form-control" name="email" id="" placeholder="Email">
							</div>

							<div class="form-group">
								<label>Name * : </label>
								<input type="text" class="form-control" name="name" id="" placeholder="Name">
							</div>
							
							<div class="form-group">
								<label>Password * : </label>
								<input type="password" class="form-control" name="password" id="" placeholder="Name">
							</div>
							
							<button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>