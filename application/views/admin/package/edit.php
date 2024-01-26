<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<style type="text/css">table td {vertical-align: middle !important;}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit package : ".$package['package_name']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-7">
							<?php echo validation_errors(); ?>
							<?php echo form_open_multipart('gjpackage/update'); ?>

								<div class="form-group">
									<input type="hidden" name="package_id" value="<?= $package['package_id']; ?>">
									<label>Package Name * : </label>
									<input type="text" class="form-control" value="<?= $package_name; ?>" name="package_name" id="" placeholder="package Name">
								</div>
								<div class="form-group">
									<label>Package slug * : </label>
									<input type="text" class="form-control" value="<?= $package_slug; ?>" name="package_slug" id="" placeholder="package slug">
								</div>
							  
								<div class="form-group">
									<label>Description * :</label>
									<textarea id="editor1" class="form-control" name="package_description" placeholder="package Description"><?= $package_description; ?></textarea>
								</div>
								
								<div class="form-group">
									<label>Package Price * : </label>
									<input type="text" class="form-control" value="<?= $package_price; ?>" name="package_price" id="" placeholder="package Price">
								</div>
								
							  
							   <br>
							  
								<div class="">
									<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
								</div>
							</form>
					  	</div>
					  	<?php 
					  		$display = "none";
					  		if(count($package_image) > 0)
					  		{
					  			$display = "";
					  		}
					  	?>
				  		<div class="col-md-5 box box-success">
				  			<br/>
				  			<?php
								$attributes = array("class"=>"dropzone", "id"=>"image-upload");
							?>
							<?php echo form_open_multipart('gjpackage/packageimage',$attributes); ?>
								<input type="hidden" name="package_id" value="<?= $package['package_id'] ?>"/>
								<input type="hidden" name="package_name" value="<?= $package['package_name'] ?>"/>
								<h3 class="text-center">Upload Multiple package Image</h3>
							</form>
							<br/>
							<div style="display:<?=$display?>">
								<?php echo form_open_multipart('gjpackage/packageimageorder'); ?>
						  			<table class="table table-striped">
						  				<thead>
						  					<th>package Image</th>
						  					<th>Order</th>
						  					<th>Manage</th>
					  					</thead>
					  					<tbody>
					  						<?php foreach($package_image as $pi):?>
					  							<tr>
					  								<td>
					  									<img src="<?=base_url()?>/assets/images/package/<?=$pi['package_image_name']; ?>" class="img-responsive" width="150">
					  								</td>
					  								<td class="align-bottom"><input type="text" name="package_image_order[<?=$pi['package_image_id']?>]" size="1" value="<?=$pi['package_image_order']?>"></td>
					  								<td class="align-bottom"><a href="<?=base_url()?>/gjpackage/deletepackageimage/<?=$pi['package_image_id']?>">Delete</a></td>
					  							</tr>
					  						<?php endforeach;?>
					  						<tr><td><td><td></tr>
					  					</tbody>
						  			</table>
						  			<input type="submit" class="btn btn-success btn-block" value="Save package Order">
					  				<br/>
					  			</form>
				  			</div>
				  		</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:20,
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.mp4,.webp",
    	init: function () {
	        this.on('queuecomplete', function () {
	            location.reload();
	        });
	    }
    };
</script>