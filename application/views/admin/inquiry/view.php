<div class="content-wrapper" style="min-height: 369px;">
	<section class="content-header">
		<h1> Inquiry Detail : <strong><?=$inquiry['name']?></strong></h1> 
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body">
						<p> <b> Name : </b> <?= $inquiry['name']; ?>  </p>
						<p> <b> Email : </b> <?= $inquiry['email']; ?> </p>
						<p> <b> Contact : </b> <?= $inquiry['phone']; ?> </p>
						<p> <b> Date : </b> <?= $inquiry['date']; ?> </p>
						<p> <b> Inquiry Detail : </b> <?= $inquiry['inquiry']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>