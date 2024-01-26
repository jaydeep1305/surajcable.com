<div class="clearfix"> </div>	
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1><?= $title; ?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-12">
						<?php echo validation_errors(); ?>
						<?php echo form_open_multipart('gjblogpost/create'); ?>
							<div class="col-md-8 no-padding">
								<div class="box box-primary">
									<div class="box-body">
										<div class="form-group">
											<label>Title * : </label>
											<input type="text" class="form-control" name="blog_post_title" id="" placeholder="Title">
										</div>
										<div class="col-md-6 no-padding">
											<div class="form-group">
												<label>Slug * : </label>
												<input type="text" class="form-control" name="blog_post_slug" id="" placeholder="Slug">
											</div>
										</div>
										<div class="col-md-5 col-md-offset-1 no-padding">
											<div class="form-group">
												<label>Date * : </label>
												<input type="text" class="form-control" name="blog_post_date" id="" placeholder="Date">
											</div>
										</div>
										<div class="form-group">
											<label>Post Content *: </label>
											<textarea name="blog_post_content" id="editor1" class="form-control"></textarea>
										</div>
										<div class="col-md-6 no-padding">
											<div class="form-group">
												<label>Short Content * : </label>
												<textarea name="blog_post_short_content" class="form-control" rows=5></textarea>
											</div>									
										</div>
										<div class="col-md-5 col-md-offset-1 no-padding">
											<div class="form-group">
												<label>Image Url * : </label>
												<input type="text" class="form-control" name="blog_post_featured_image" id="" placeholder="Image Url">
											</div>
											<div class="form-group">
												<label>Thumbnail Url * : </label>
												<input type="text" class="form-control" name="blog_post_thumbnail_image" id="" placeholder="Thumbnail Url">
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="box box-primary box-solid">
									<div class="box-header">
										<h3 class="box-title">Author</h3>
										<div class="box-tools pull-right">
							                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							                </button>
						              	</div>
									</div>
									<div class="box-body">
										<?php $i=0; ?>
										<?php foreach($blog_authors as $ba) : ?>
											<div class="radio">
							                    <label>
							                      <input type="radio" <?=($i==0)?'checked':''?> name="blog_author_id" value="<?=$ba['blog_author_id'];?>">
							                		<?=$ba['blog_author_name'];?>      
							                    </label>
							                </div>
							                <?php $i++;?>
										<?php endforeach; ?>
									</div>
								</div>

								<div class="box box-primary box-solid">
									<div class="box-header">
										<h3 class="box-title">Category</h3>
										<div class="box-tools pull-right">
							                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							                </button>
						              	</div>
									</div>
									<div class="box-body">
										<?php if(!empty($blog_cat_tree)): ?>
											<?= toSelect($blog_cat_tree);?>
										<?php endif;?>
										<?php
											function toSelect ($arr, $depth=0) {    
											    $html = '';
											    foreach ( $arr as $v ) {
											        $html.= '<div class="checkbox"><label style="font-size:15px"><input type="checkbox" name="blog_cat_ids[]" value="' . $v['blog_cat_id'] . '" />';
											        $html.= str_repeat('–', $depth);
											        $html.= '– '.$v['blog_cat_name'] . '</label></div>' . PHP_EOL;

											        if ( array_key_exists('childs', $v) ) {
											            $html.= toSelect($v['childs'], $depth+1);
											        }
											    }
											    return $html;
											}
										?>
									</div>
								</div>
								<div class="box box-primary box-solid">
									<div class="box-header">
										<h3 class="box-title">Tags</h3>
										<div class="box-tools pull-right">
							                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							                </button>
						              	</div>
									</div>
									<div class="box-body">
										<?php if(!empty($blog_tags)): ?>
											<?php foreach($blog_tags as $bt) : ?>
							                    <label style="padding:0 10px;cursor: pointer">
							                      <input type="checkbox" name="blog_tags[]" value="<?=$bt['blog_tag_id'];?>">
							                		<?=$bt['blog_tag_name'];?>      
							                    </label>
											<?php endforeach; ?>
										<?php endif;?>
									</div>
								</div>

							</div>
							<div class="clearfix"></div>
							<button type="submit" name="submit" class="btn btn-info">Submit</button> <br/><br/>
						</form>
			</div>
		</div>
	</section>
</div>