<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= "Edit Blog Category : ".$blog_category['blog_cat_name']; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6"> 
				<div class="box box-primary">
					<div class="box-body">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjblogcategory/update'); ?>
						  <div class="form-group">
						  <input type="hidden" name="blog_cat_id" value="<?= $blog_category['blog_cat_id']; ?>">
							<label>Category Name * : </label>
							<input type="text" class="form-control" value="<?= $blog_category['blog_cat_name']; ?>" name="blog_cat_name" id="" placeholder="Category Name">
						  </div>
						  <div class="form-group">
						  	<label>Category Slug * : </label>
							<input type="text" class="form-control" value="<?= $blog_category['blog_cat_slug']; ?>" name="blog_cat_slug" id="" placeholder="Category Slug">
						  </div>
					 		<div class="form-group">
								<label>Parent Category : </label>
								<select name="blog_parent_cat_id" class="form-control">
									<option value="0">Parent</option>
									<?= toSelect($cat_tree,0,$cat_parent);?>
									<?php
										function toSelect ($arr, $depth=0,$cat_parent) {    
										    $html = '';
										    foreach ( $arr as $v ) {
										        $html.= '<option value="' . $v['blog_cat_id'] . '" '.($cat_parent['blog_parent_cat_id']==$v['blog_cat_id']?'selected':'').'>';
										        $html.= str_repeat('–', $depth);
										        $html.= '– '.$v['blog_cat_name'] . '</option>' . PHP_EOL;

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