<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<style type="text/css">table td {vertical-align: middle !important;}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit service : ".$service['service_name']; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12"> 
				<div class="box box-primary">
					<div class="box-body">
						<div class="col-md-7">
							<?php echo validation_errors(); ?>
							<?php echo form_open_multipart('gjservice/update'); ?>

								<div class="form-group">
									<input type="hidden" name="service_id" value="<?= $service['service_id']; ?>">
									<label>service Name * : </label>
									<input type="text" class="form-control" value="<?= $service_name; ?>" name="service_name" id="" placeholder="service Name">
								</div>
								<div class="form-group">
									<label>service slug * : </label>
									<input type="text" class="form-control" value="<?= $service_slug; ?>" name="service_slug" id="" placeholder="service slug">
								</div>
							  
								<div class="form-group">
									<label>Description * :</label>
									<textarea id="editor1" class="form-control" name="service_description" placeholder="service Description"><?= $service_description; ?></textarea>
								</div>
								
								<div class="form-group">
									<label>service Price * : </label>
									<input type="text" class="form-control" value="<?= $service_price; ?>" name="service_price" id="" placeholder="service Price">
								</div>
								
							  
							   <br>
							  
								<div class="">
									<button type="submit" name="submit" class="btn btn-info">Submit</button> <br><br>
								</div>
							</form>
					  	</div>
					  	<?php 
					  		$display = "none";
					  		if(count($service_image) > 0)
					  		{
					  			$display = "";
					  		}
					  	?>
				  		<div class="col-md-5 box box-success">
				  			<br/>
				  			<?php
								$attributes = array("class"=>"dropzone", "id"=>"image-upload");
							?>
							<?php echo form_open_multipart('gjservice/serviceimage',$attributes); ?>
								<input type="hidden" name="service_id" value="<?= $service['service_id'] ?>"/>
								<input type="hidden" name="service_name" value="<?= $service['service_name'] ?>"/>
								<h3 class="text-center">Upload Multiple service Image</h3>
							</form>
							<br/>
							<div style="display:<?=$display?>">
								<?php echo form_open_multipart('gjservice/serviceimageorder'); ?>
						  			<table class="table table-striped">
						  				<thead>
						  					<th>service Image</th>
						  					<th>Order</th>
						  					<th>Manage</th>
					  					</thead>
					  					<tbody>
					  						<?php foreach($service_image as $pi):?>
					  							<tr>
					  								<td>
					  									<img src="<?=base_url()?>/assets/images/service/<?=$pi['service_image_name']; ?>" class="img-responsive" width="150">
					  								</td>
					  								<td class="align-bottom"><input type="text" name="service_image_order[<?=$pi['service_image_id']?>]" size="1" value="<?=$pi['service_image_order']?>"></td>
					  								<td class="align-bottom"><a href="<?=base_url()?>/gjservice/deleteserviceimage/<?=$pi['service_image_id']?>">Delete</a></td>
					  							</tr>
					  						<?php endforeach;?>
					  						<tr><td><td><td></tr>
					  					</tbody>
						  			</table>
						  			<input type="submit" class="btn btn-success btn-block" value="Save service Order">
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