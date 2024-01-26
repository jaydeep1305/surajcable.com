<style>
	.pagination{margin: 0;display: block}
	td{cursor: pointer;}
	.selected{background-color: #ccc !important}
</style>
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
	              <h3 class="box-title"><?= $title; ?></h3>

	              <div class="box-tools pull-right">
	                <div class="has-feedback">
	                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
	                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
	                </div>
	              </div>
	              <!-- /.box-tools -->
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
	              <div class="mailbox-controls">
	                <!-- Check all button -->
	                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square"></i>
	                </button>
	                <div class="btn-group">
	                  <button type="button" class="btn btn-default btn-sm delete"><i class="fa fa-trash-alt"></i></button>
	                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
	                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
	                </div>
	                <!-- /.btn-group -->
	                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-sync-alt"></i></button>
	                <div class="pull-right">
	                    <?php echo $links; ?>
	                </div>
	                <!-- /.pull-right -->
	              </div>
	              <div class="table-responsive mailbox-messages">
	                <table class="table table-hover table-striped">
	                  <tbody>
	                  <?php
	                  	foreach($mailbox as $mail) : 
	                  ?>
							<tr data-mail-id="<?=$mail['mail_id']?>">
			                    <td>
		                    		<input type="checkbox" style="position: absolute; opacity: 1;" name="mail_id_checkbox" value="<?=$mail['mail_id']?>">
			                    </td>
		                    	<td class="mailbox-star">&nbsp;</td>
			                    <td class="mailbox-name">
			                    	<?= ($mail['status'] == 1 )?"<strong>":""?>
				                    	<?=$mail['From_gj']?>
				                    <?= ($mail['status'] == 1 )?"</strong>":""?>	
			                    </td>
			                    <td class="mailbox-subject">
			                    	<?= ($mail['status'] == 1 )?"<strong>":""?>
			                    		<?=character_limiter($mail['subject'],40)?>
				                    <?= ($mail['status'] == 1 )?"</strong>":""?>	
			                    </td>
			                    <td class="mailbox-attachment"></td>
			                    <td class="mailbox-date">
			                    	<?= ($mail['status'] == 1 )?"<strong>":""?>
				                    	<?=get_time_ago(strtotime(explode("+",$mail['Date'])[0]))?>
        		                    <?= ($mail['status'] == 1 )?"</strong>":""?>
		                    	</td>
		                    </tr>
	                  <?php
	                  	endforeach;
	                  ?>
	                  </tbody>
	                </table>
	                <!-- /.table -->
	              </div>
	              <!-- /.mail-box-messages -->
	            </div>
	            <!-- /.box-body -->
	            <div class="box-footer no-padding">
	              <div class="mailbox-controls">
	                <!-- Check all button -->
	                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square"></i>
	                </button>
	                <div class="btn-group">
	                  <button type="button" class="btn btn-default btn-sm delete"><i class="fa fa-trash-alt"></i></button>
	                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
	                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
	                </div>
	                <!-- /.btn-group -->
	                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-sync-alt"></i></button>
	                <div class="pull-right">
						<?php echo $links; ?>
	                </div>
	                <!-- /.pull-right -->
	              </div>
	            </div>
	          </div>
	          <!-- /. box -->
	        </div>
	        <!-- /.col -->
	      </div>
	      <!-- /.row -->
	</section>
</div>
<div class="clearfix"></div>
<?php
function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
	
    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;
        
        if( $d >= 1 )
        {
            $t = round( $d );
	        if($str == "day" or $str == "month" or $str == "year"){return date("M d", $time);}
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>
<script>
	function inbox_table_tr()
	{	
		$("table tr").click(function(){
			$(this).addClass('selected').siblings().removeClass('selected');

			if(!$('.selected input').is(":checked")){
        		$('.selected input').prop("checked",true);
     		}
     		else{
         		$('.selected input').prop("checked",false);
     		}
		});

		$("table tr").dblclick(function(){
			$(this).addClass('selected').siblings().removeClass('selected');
			var mail_id = $(this).attr("data-mail-id");
			location.href = "<?=base_url()."gjmail/view/"?>"+mail_id;
		});

		$(".delete").click(function(){
			var checkbox_array = get_selected_checkboxes_array();
			location.href = "<?=base_url()?>gjmail/deletemailpermanent/"+checkbox_array.join('-');
		});
	}
	function get_selected_checkboxes_array()
	{
		var ch_list=Array(); 
		$("input:checkbox[name=mail_id_checkbox]:checked").each(function(){
		 	ch_list.push($(this).val());
		}); 
		return ch_list; 
	}
</script>