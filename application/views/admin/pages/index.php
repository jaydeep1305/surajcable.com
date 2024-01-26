<style>.info-box-number{font-size:200%;padding-top:5px;}.info-box-content{text-align:center;}</style>
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
			<h1>
				Dashboard
			</h1>
			<div class="breadcrumb">
				<div class="form-group" style="text-align:right">
					<div class="input-group" style="text-align:right">
						  <button type="button" class="btn btn-default pull-right" id="daterange-btn" style="text-align:right">
							<span>
								<?php
									if($start_date != null)
									{
										echo date_format(date_create($start_date),"F d, Y")." - ".date_format(date_create($end_date),"F d, Y");
									}
									else
									{
										echo "Select Date...";
									}
								?>
							</span>
							<i class="fa fa-caret-down"></i>
						  </button>
					</div>
				</div>
			</div>
    </section>
	<br/>
    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-9">
				<div class="col-md-4 col-sm-4 col-xs-4">
				  <div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
					<div class="info-box-content">
					  <span class="info-box-number" id="users">-</span>
					  <span class="info-box-text">Users</span>
					</div>
				  </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
				  <div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
					<div class="info-box-content">
					  <span class="info-box-number" id="page_views">-</span>
					  <span class="info-box-text">Page Views</span>
					</div>
				  </div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-4 col-sm-4 col-xs-4">
				  <div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-business-time"></i></span>
					<div class="info-box-content">
					  <span class="info-box-number" id="avg_session">-</span>
					  <span class="info-box-text">Avg Session Duration</span>
					</div>
				  </div>
				</div>      
				<div class="col-lg-4 col-xs-4">
					<div class="small-box bg-aqua">
						<div class="inner">
						  <h3><?=$total_inquires?></h3>
						  <p>Inquiries</p>
						</div>
						<div class="icon">
						  <i class="fa fa-envelope"></i>
						</div>
						<a href="<?=base_url()?>gjinquiry" class="small-box-footer">
						  More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-xs-4">
				  <div class="small-box bg-green">
					<div class="inner">
					  <h3><?=$total_products?></h3>
					  <p>Products</p>
					</div>
					<div class="icon">
					  <i class="fa fa-shopping-cart"></i>
					</div>
					<a href="<?=base_url()?>gjproduct" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>
				<div class="col-lg-4 col-xs-4">
				  <div class="small-box bg-yellow">
					<div class="inner">
					  <h3><?=$total_subscriber?></h3>
					  <p>Subscriber</p>
					</div>
					<div class="icon">
					  <i class="fa fa-rss-square"></i>
					</div>
					<a href="<?=base_url()?>gjsubscriber" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>
			</div>
			<div class="col-md-3 bg-red" style="text-align:center;padding-bottom:75px;overflow: hidden;">
				<h1 style="font-size:700%" id="realtime">-</h1>
				Live visitors
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Browser Usage</h3>	
					</div>
					<div class="box-body" id="results">
						<canvas id="pieChart" style="height: 350px; width: 530px;" width="530" height="350"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Operating Systems</h3>	
					</div>
					<div class="box-body">
						<canvas id="barChart" style="height: 350px; width: 530px;" width="530" height="350"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Top Countries</h3>
					</div>
                    <div class="box-body with-border">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr role="row">
                                    <th>Country</th>
                                    <th>Page Views</th>
                                    <th>Users</th>
                                </tr>
                            </thead>
                            <tbody id="country">
                                <td>Loading...</td>
                                <td>Loading...</td>
                                <td>Loading...</td>
                            </tbody>
                        </table>
				    </div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Top Cities</h3>
					</div>
                    <div class="box-body with-border">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr role="row">
                                    <th>City</th>
                                    <th>Page Views</th>
                                    <th>Users</th>
                                </tr>
                            </thead>
                            <tbody id="city">
                                <td>Loading...</td>
                                <td>Loading...</td>
                                <td>Loading...</td>
                            </tbody>
                        </table>
				    </div>
				</div>
			</div>

            <div class="col-sm-8">
				<div class="box box-success">
					<div class="box-header with-border">
					  <h3 class="box-title">Top Pages</h3>
					</div>
                    <div class="box-body with-border">
                        <table id="example2" class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr role="row">
                                    <th>Pages</th>
                                    <th>Page Views</th>
                                    <th>Average Time</th>
                                </tr>
                            </thead>
                            <tbody id="page_views_table">
                                <td>Loading ...</td>
                                <td>Loading ...</td>
                                <td>Loading ...</td>
                            </tbody>
                        </table>
				    </div>
				</div>
			</div>
		</div>
    </section>
  </div>

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
	$(function () {

        /*-----------DATE RANGE----------*/
		$('#daterange-btn').daterangepicker(
		{
			ranges   : {
			  'Today'       : [moment(), moment()],
			  'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			  'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
			  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			  'This Month'  : [moment().startOf('month'), moment().endOf('month')],
			  'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			},
			startDate: moment().subtract(29, 'days'),
			endDate  : moment()
		  },
		  function (start, end) {
			$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
		  }
		);
		$('#daterange-btn').on('apply.daterangepicker', function(ev, picker) {
		  var startDate = picker.startDate;
		  var endDate = picker.endDate;
		  window.location.href = "<?=base_url();?>/gjdashboard/index?start_date="+startDate.format('YYYY-MM-DD')+"&end_date="+ endDate.format('YYYY-MM-DD');
		});
		/*-----------REALTIME------------*/
		setInterval(function(){ 
			$.ajax({
		        url: "<?=base_url();?>/gjdashboard/realtime",
		        type: 'GET',
		        success: function(res) {
		        	$("#realtime").html(res);
		        }
		    })	
		}, 5000);

        var browsers = new Chart(document.getElementById("pieChart"), {
            "type": "doughnut",
            "data": {
                "labels": [],
                "datasets": [{
                    "label": "Browsers",
                    "data": [0,0,0,0,0,100],
                    "backgroundColor": ["#F56954", "#00A65A","#F39C12", "#00C0EF", "#3C8DBC"]
                }]
            },
            'options' : {
                'maintainAspectRatio' : false
            }
        });
        var os = new Chart(document.getElementById("barChart"), {
            "type": "bar",
            "data": {
                "labels": [],
                "datasets": [{
                    "label": "Operating System v/s Page Visits",
                    "data": [],
                    "fill": true,
                    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                    "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "yAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }]
                }
            }
        });

        setTimeout(function(){

            var start_date = "<?=isset($_GET['start_date'])?$_GET['start_date']:""?>";
            var end_date = "<?=isset($_GET['end_date'])?$_GET['end_date']:""?>";

            $.ajax({
                url: "<?=base_url();?>/gjdashboard/users?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    var users = res.split("|||||")[0];
                    var page_views = res.split("|||||")[1];
                    var avg_session = res.split("|||||")[2];
                    $("#users").html(users);
                    $("#page_views").html(page_views);
                    $("#avg_session").html(avg_session);
                }
            });
            $.ajax({
                url: "<?=base_url();?>/gjdashboard/browser?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    var browsers_data_name = res.split("|||||")[0];
                    var browsers_data_user = res.split("|||||")[1];
                    browsers.data.datasets[0].data = browsers_data_user.split(",");
                    browsers.data.labels = browsers_data_name.split(",");
                    browsers.update();
                }
            });
            $.ajax({
                url: "<?=base_url();?>/gjdashboard/os?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    var os_data_name = res.split("|||||")[0];
                    var os_data_user = res.split("|||||")[1];
                    os.data.datasets[0].data = os_data_user.split(",");
                    os.data.labels = os_data_name.split(",");
                    os.update();
                }
            });
            $.ajax({
                url: "<?=base_url();?>/gjdashboard/country?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    $("#country").html(res);
                    $('#example1').DataTable({
                        aaSorting: [[1, 'desc']]
                    });

                }
            });
            $.ajax({
                url: "<?=base_url();?>/gjdashboard/city?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    $("#city").html(res);
                    $('#example3').DataTable({
                        aaSorting: [[1, 'desc']]
                    });

                }
            });
            $.ajax({
                url: "<?=base_url();?>/gjdashboard/page_views?start_date="+start_date+"&end_date="+end_date,
                type: 'GET',
                success: function(res) {
                    $("#page_views_table").html(res);
                    $('#example2').DataTable({
                        aaSorting: [[1, 'desc']]
                    });
                }
            });
        }, 3000);
	})
</script>
