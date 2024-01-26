<style>label{text-transform:capitalize}</style>
<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1>OnPageSEO Settings : <?=$page_slug['page_slug']?></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8"> 
				<div class="box box-primary">
					<div class="box-body">
						<table class="table table-striped">
							<thead>
								<th>Key
								<th>Value
							</thead>
							<?php foreach($seo as $s):?>
								<tr>
									<td><?=$s['name']?>
									<td><?=$s['value']?>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>