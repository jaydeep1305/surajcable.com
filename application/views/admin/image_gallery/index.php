<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<style type="text/css">table td {vertical-align: middle !important;}</style>

<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<input type="text" class="form-control" readonly="" id="copy-input">
						</div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Image
									<th>Copy
									<th>Delete
								</tr>
							</thead>
							<tbody>
							<?php if(!empty($image_gallery)) : ?>
								<?php foreach($image_gallery as $ig) : ?>
									<tr>
										<?php if(strtolower($ig['ext']) == "jpg" or strtolower($ig['ext']) == "jpeg" or strtolower($ig['ext']) == "png" or strtolower($ig['ext']) == "webp") : ?> 
											<td class="text-center"><img src="<?=base_url()?>/assets/images/gallery/<?=$ig['image_name']?>" width="150"/>
										<?php elseif(strtolower($ig['ext']) == "pdf") : ?>
											<td class="text-center"><i class="fa fa-file-pdf fa-5x"></i>
										<?php elseif(strtolower($ig['ext']) == "doc" or strtolower($ig['ext']) == "docx" ) : ?>
											<td class="text-center"><i class="fa fa-file-word fa-5x"></i>
										<?php elseif(strtolower($ig['ext']) == "avi" or strtolower($ig['ext']) == "mp4" ) : ?>
											<td class="text-center"><i class="fa fa-video fa-5x"></i>
										<?php else: ?>
										<?php endif;?>
										
										<td><button class="btn btn-success btn-block copy" data-copied="<?=base_url()?>/assets/images/gallery/<?=$ig['image_name']?>">COPY URL</button>

										<td><a href="<?=base_url()?>/gjimagegallery/delete/<?=$ig['image_id']?>" class="btn btn-danger btn-block">DELETE</a>
									</tr>
								<?php endforeach; ?>	
							<?php endif;?>
							</tbody>
						</table>			
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<?php
					$attributes = array("class"=>"dropzone", "id"=>"image-upload");
				?>
				<?php echo form_open_multipart('gjimagegallery/upload',$attributes); ?>
					<h3 class="text-center">Upload Multiple Images</h3>
				</form>
				<br/>
				<table class="table table-bordered">
					<tr>
						<td>Facebook Share Image
						<td>1200x630 px
					</tr>
					<tr>
						<td>Twitter Share Image
						<td>1200x630 px
					</tr>
					<tr>
						<td>Google Plus Share Image
						<td>1200x960 pixels
					</tr>
				</table>
				<div class="text-right"><a target="_blank" href="<?=base_url();?>/assets/bower_components/images/social-media-cheat-sheet.jpg">View More Size</a></div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:20,
    	init: function () {
	        this.on('queuecomplete', function () {
	            location.reload();
	        });
	    }
    };
</script>