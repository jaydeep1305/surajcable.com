<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Category : ".$category['cat_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjcategory/update'); ?>
						  <div class="form-group">
						  <input type="hidden" name="cat_id" value="<?= $category['cat_id']; ?>">
							<label>Category Name * : </label>
							<input type="text" class="form-control" value="<?= $category['cat_name']; ?>" name="cat_name" id="" placeholder="Category Name">
						  </div>
						  <div class="form-group">
						  	<label>Category Slug * : </label>
							<input type="text" class="form-control" value="<?= $category['cat_slug']; ?>" name="cat_slug" id="" placeholder="Category Slug">
						  </div>
					 		<div class="form-group">
								<label>Parent Category : </label>
								<select name="parent_cat_id" class="form-control">
									<option value="0">Parent</option>
									<?= toSelect($cat_tree,0,$cat_parent);?>
									<?php
										function toSelect ($arr, $depth=0,$cat_parent) {    
										    $html = '';
										    foreach ( $arr as $v ) {
										        $html.= '<option value="' . $v['cat_id'] . '" '.($cat_parent['parent_cat_id']==$v['cat_id']?'selected':'').'>';
										        $html.= str_repeat('–', $depth);
										        $html.= '– '.$v['cat_name'] . '</option>' . PHP_EOL;

										        if ( array_key_exists('childs', $v) ) {
										            $html.= toSelect($v['childs'], $depth+1,$cat_parent);
										        }
										    }
										    return $html;
										}
									?>
								</select>
					  		</div>
						  <button type="submit" name="submit" class="btn btn-info">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>