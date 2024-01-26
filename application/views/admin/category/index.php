<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<?php echo form_open_multipart('gjcategory/order'); ?>
						<table class="table table-striped">
							<thead>
								<th>Category
								<th>Manage
							</thead>
							<tbody>
								<?php
									function toSelect ($arr, $depth=0) {    
									    $html = '';
									    foreach ( $arr as $v ) {
									        $html.= '<tr>';
									        $html.= '<td>'.str_repeat('–', $depth).' '.$v['cat_name'].'</td>';
									        $html.= '<td><input type="text" name="cat_id['.$v['cat_id'].']" value="'.$v['cat_order'].'" size=2></td>';
									        $html.= '<td>';
									        $html.= '<a class="btn btn-xs" href="'.base_url('gjcategory/view/'.$v['cat_id']).'"><i class="fa fa-eye"></i> </a>';
									        $html.= '<a class="btn btn-xs" href="'.base_url('gjcategory/edit/'.$v['cat_id']).'"><i class="fa fa-edit"></i> </a>';
									        $html.= '<a class="btn btn-xs" href="'.base_url('gjcategory/delete/'.$v['cat_id']).'"><i class="fa fa-trash-alt"></i> </a>';
									        $html.= '</td>';
									        $html.= '</tr>';
									        if ( array_key_exists('childs', $v) ) {
									            $html.= toSelect($v['childs'], $depth+1);
									        }
									    }
									    return $html;
									}
								?>
								<?= toSelect($category);?>
							</tbody>
						</table>	
						<div class="form-group text-right">
							<button type="submit" name="save_order" class="btn btn-info">Save Order</button>
						</div>		
					</form>				
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
</div>