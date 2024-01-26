<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<style type="text/css">table td {vertical-align: middle !important;}</style>

<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>

	<section class="content">
	      <div class="row">
	        <div class="col-md-3">
  	          <a href="<?=base_url()."gjmail/compose"?>" class="btn btn-primary btn-block margin-bottom">Compose Html</a>
	          <a href="<?=base_url()."gjmail/composeplain"?>" class="btn btn-info btn-block margin-bottom">Compose Plain</a>

	          <div class="box box-solid">
	            <div class="box-header with-border">
	              <h3 class="box-title">Folders</h3>

	              <div class="box-tools">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	              </div>
	            </div>
	            <div class="box-body no-padding">
	              <ul class="nav nav-pills nav-stacked">
	              	<?php $con_name=$this->uri->segment(2);?>
	                <li class="<?= ($con_name=='')?'active':'';?>">
	                	<a href="<?=base_url()."gjmail"?>"><i class="fa fa-inbox"></i> Inbox
	                  <span class="label label-primary pull-right"></span></a>
	              	</li>
	                <li class="<?= ($con_name=='sent')?'active':'';?>">
	                	<a href="<?=base_url()."gjmail/sent"?>"><i class="fa fa-paper-plane"></i> Sent</a>
	                </li>
	                <li class="<?= ($con_name=='draft')?'active':'';?>">
	                	<a href="<?=base_url()."gjmail/draft"?>"><i class="fa fa-file"></i> Drafts</a>
	                </li>
	                <li class="<?= ($con_name=='trash')?'active':'';?>">
	                	<a href="<?=base_url()."gjmail/trash"?>"><i class="fa fa-trash-alt"></i> Trash Inbox</a>
	                </li>
	                <li class="<?= ($con_name=='trashsent')?'active':'';?>">
	                	<a href="<?=base_url()."gjmail/trashsent"?>"><i class="fa fa-trash-restore-alt"></i> Trash Sent</a>
	                </li>
	              </ul>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /. box -->
	        </div>
	        <!-- /.col -->
	        <div class="col-md-9">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Compose New Message</h3>
	            </div>
	            <?php echo validation_errors(); ?>
				<?php echo form_open_multipart('gjmail/sent_mail'); ?>
		            <div class="box-body">
		              <div class="form-group">
		                <div class="form-group">
						  <select class="form-control" placeholder="From" name="from_email">
						    <?php foreach($business_email as $be) : ?> 
							    <option value="<?=$be['name']?><<?=$be['email']?>>"><?=$be['name']?> (<?=$be['email']?>)</option>
							<?php endforeach; ?>
						  </select>
						</div>
		              </div>
		              <div class="form-group">
		                <input class="form-control" placeholder="To" name="to_email">
		              </div>
		              <div class="row">
		              	<div class="col-md-6">
							<div class="form-group">
			                	<input class="form-control" placeholder="CC" name="cc_email">
			              	</div>
		              	</div>
		              	<div class="col-md-6">
							<div class="form-group">
			                	<input class="form-control" placeholder="BCC" name="bcc_email">
			              	</div>
		              	</div>
		              </div>
		              <div class="form-group">
		                <input class="form-control" placeholder="Subject" name="subject">
		              </div>
		              <div class="form-group">
						<textarea class="form-control" name="mail_description" style="height: 300px;"></textarea>
		              </div>
					  	<div class="row">
		              		<div class="col-md-12">
		              			<div class="box box-info">
			              			<ul class="nav nav-pills">
										<li class="active">
											<a  href="#1a" data-toggle="tab">Attachment</a>
										</li>
										<li>
											<a href="#2a" data-toggle="tab">Gallery</a>
										</li>
									</ul>
									<div class="tab-content clearfix">
										<div class="tab-pane active" id="1a">
											<br/>
											<input type="file" id="attachments" multiple="" name="attachments[]"/>
										</div>
										<div class="tab-pane" id="2a">
											<br/>
					              			<?php foreach($image_gallery as $ig) : ?>
											<div class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
												<label class="image-checkbox">
													<?php if(strtolower($ig['ext']) == "jpg" or strtolower($ig['ext']) == "jpeg" or strtolower($ig['ext']) == "png" or strtolower($ig['ext']) == "webp") : ?> 
														<img class="img-responsive" src="<?=base_url()."assets/images/gallery/thumbnail/".$ig['image_name']?>" style="height:100px" />
													<?php elseif(strtolower($ig['ext']) == "pdf") : ?>
														<i class="fa fa-file-pdf fa-5x">
													<?php elseif(strtolower($ig['ext']) == "doc" or strtolower($ig['ext']) == "docx" ) : ?>
														<i class="fa fa-file-word fa-5x">
													<?php else: ?>
													<?php endif		;?>

													<input type="checkbox" name="image[]" value="<?=$ig['image_id']?>" />
													<i class="fa fa-check hidden"></i><?=$ig['image_original_name']?>
												</label>
											</div>
											<?php endforeach;?>
										</div>
								</div>
							</div>
						</div>
		            </div>
		            <!-- /.box-body -->
		            <div class="box-footer">
		              <div class="pull-right">
		                <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
		                &nbsp;
		                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
		              </div>
		              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
		            </div>
	        	</form>
	            <!-- /.box-footer -->
	          </div>
	          <!-- /. box -->
	        </div>
	        <!-- /.col -->
	      </div>
	      <!-- /.row -->
	</section>
</div>
<div class="clearfix"></div>
