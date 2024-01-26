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
	              <h3 class="box-title"><?=$mail['subject']?></h3>

	              <div class="box-tools pull-right">
	                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
	                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
	              </div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
	              <div class="mailbox-read-info">
	                <h5>From: <?=$mail['From_gj']?>
	                  <span class="mailbox-read-time pull-right"><?=explode("+", $mail['Date'])[0]?></span></h5>
	                <h6><?=$mail['sender']?></h6>
	                <h6><?=$mail['To_gj']?></h6>
	              </div>
	              <!-- /.mailbox-read-info -->
	              <div class="mailbox-controls with-border text-center">
	                <div class="btn-group">
	                  <a href="<?=base_url()?>gjmail/deletemail/<?=$mail['mail_id']?>" type="button" class="btn btn-default btn-sm delete" data-toggle="tooltip" data-container="body" title="" data-original-title="Delete">
	                    <i class="fa fa-trash-alt"></i></a>
	                  <a href="#reply" onclick="reply()" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Reply">
	                    <i class="fa fa-reply"></i></a>
	                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Forward">
	                    <i class="fa fa-share"></i></button>
	                </div>
	              </div>
	              <!-- /.mailbox-controls -->
	              <div class="mailbox-read-message">
              		<?=$mail['body-html']?>
	              </div>
	              <!-- /.mailbox-read-message -->
	            </div>
	            <!-- /.box-body -->
	            <div class="box-footer">
	              <ul class="mailbox-attachments clearfix">
	              	<?php if(is_array($attachments)) : ?>
		              	<?php foreach($attachments as $attachment) : ?>
			                <li>
			                  <div class="mailbox-attachment-info">
			                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> <?=$attachment->name?></a>
			                        <span class="mailbox-attachment-size">
			                          <?=$attachment->size?> KB
			                          <a href="<?=base_url()."mail_data/".$mail['mail_id']."/".$attachment->name?>" class="btn btn-default btn-xs pull-right" download="<?=$attachment->name?>"><i class="fa fa-download"></i></a>
			                        </span>
			                  </div>
			                </li>
			            <?php endforeach;?>
		        	<?php endif; ?>
	              </ul>
	            </div>
	            <!-- /.box-footer -->
	            <div class="box-footer">
	              <div class="pull-right">
	                <a href="#reply" onclick="reply()" class="btn btn-default"><i class="fa fa-reply"></i> Reply</a>&nbsp;
	                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
	              </div>
	              <a href="<?=base_url()?>gjmail/deletemail/<?=$mail['mail_id']?>" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</a>
	            </div>
	            <!-- /.box-footer -->
	          </div>
	          <!-- /. box -->
				<!---------------------------REPLY------------------------------------->
				<!---------------------------REPLY------------------------------------->
				<!---------------------------REPLY------------------------------------->
				<div class="box box-primary box-solid collapsed-box" id="reply">
							<div class="box-header with-border">
								<h3 class="box-title">Reply</h3>
								<div class="box-tools pull-right">
					                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
					                </button>
				              	</div>
							</div>
							<div class="box-body">
							<?php echo validation_errors(); ?>
							<?php echo form_open_multipart('gjmail/reply_mail'); ?>
								<div class="col-md-6" style="padding: 0">
									<div class="form-group">
									  <label>To</label>
										<input type="text" class="form-control" name="to_email" value='<?=$mail['From_gj']?>'>
									</div>
									<div class="form-group">
									  <label>Subject</label>
										<input type="text" class="form-control" name="subject" value='<?=$mail['subject']?>'>
									</div>
								</div>
								<div class="col-md-6">
								    <div class="form-group">
									  <label>From</label>
									  <select class="form-control" placeholder="From" name="from_email">
									    <?php foreach($business_email as $be) : ?> 
										    <option value="<?=$be['name']?><<?=$be['email']?>>" <?=($mail['recipient'] == $be['email'])?"selected":""?>>
										    	<?=$be['name']?> (<?=$be['email']?>)
										    </option>
										<?php endforeach; ?>
									  </select>
									</div>
								</div>
								<div class="clearfix"></div>

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
							</div>
						</form>
				</div>
				<!--------------------------------------------------------------------->
				<!--------------------------------------------------------------------->
				<!--------------------------------------------------------------------->
	        </div>
			<!-- /.col -->
	      </div>

	      <!-- /.row -->
	</section>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
	function reply()
	{
		$(".collapsed-box").removeClass("collapsed-box");
	}
</script>