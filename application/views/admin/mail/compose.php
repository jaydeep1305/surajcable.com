Under Construction !
<?=die();?>
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
	            <!-- /.box-header -->
	            <div class="box-body">
	              <div class="form-group">
	                <input class="form-control" placeholder="To" name="to_mail">
	              </div>
	              <div class="form-group">
	                <input class="form-control" placeholder="Subject" name="subject">
	              </div>
	              <div class="form-group">
					<textarea id="editor1" class="form-control" name="mail_description"></textarea>
	              </div>
	              <div class="form-group">
	                <div class="btn btn-default btn-file">
	                  <i class="fa fa-paperclip"></i> Attachment
	                  <input type="file" name="attachment">
	                </div>
	                <p class="help-block">Max. 32MB</p>
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