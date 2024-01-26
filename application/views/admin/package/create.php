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
						<?php echo form_open_multipart('gjpackage/create'); ?>
							<div class="form-group">
								<label>Package Name * : </label>
								<input type="text" class="form-control" name="package_name" id="" placeholder="package Name">
							</div>
							<div class="form-group">
								<label>Package Type * : </label>
								<select name="package_type" class="form-control"> 
								    <option value="TV Channel"> TV Channel </option>
								    <option value="Internet"> Internet </option>
								</select>
							</div>
							<div class="form-group">
								<label>Package slug * : </label>
								<input type="text" class="form-control" name="package_slug" id="" placeholder="package Url">
							</div>
							<div class="form-group">
								<label>Package Description * :</label>
								<textarea id="editor1" class="form-control" name="package_description" placeholder="package Description"></textarea>
							</div>
							<div class="form-group">
								<label>Package Price * :</label>
								<input type="text" class="form-control" name="package_price" id="" placeholder="Package Price">
							</div>
						  <button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>