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
	              <h3 class="box-title">Read Mail</h3>

	              <div class="box-tools pull-right">
	                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
	                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
	              </div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
	              <div class="mailbox-read-info">
	                <h3><?=$mail_sent['subject']?></h3>
	                <h5>To: <?=$mail_sent['to_email']?>
	                  <span class="mailbox-read-time pull-right"><?=explode("+", $mail_sent['Date'])[0]?></span></h5>
	                <h6>From:<?=$mail_sent['from_email']?></h6>
	              </div>
	              <!-- /.mailbox-read-info -->
	              <div class="mailbox-controls with-border text-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Delete">
	                    <i class="fa fa-trash-alt"></i></button>
	                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Reply">
	                    <i class="fa fa-reply"></i></button>
	                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Forward">
	                    <i class="fa fa-share"></i></button>
	                </div>
	                <!-- /.btn-group -->
	                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="" data-original-title="Print">
	                  <i class="fa fa-print"></i></button>
	              </div>
	              <!-- /.mailbox-controls -->
	              <div class="mailbox-read-message">
              		<?=$mail_sent['mail_description']?>
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
			                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> <?=$attachment->filename?></a>
			                        <span class="mailbox-attachment-size">
			                          download
			                          <a href="<?=str_replace(FCPATH,base_url(),$attachment->filePath)?>" class="btn btn-default btn-xs pull-right" download="<?=$attachment->filename?>"><i class="fa fa-download"></i></a>
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
	                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
	                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
	              </div>
	              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
	              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
	            </div>
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