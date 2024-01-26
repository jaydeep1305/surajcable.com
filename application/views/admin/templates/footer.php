  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="https://svtechknowledge.com">SV Tech Knowledge </a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
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
<!-- CK Editer (Text Editer) -->
<script>
	// image gallery
	// init the state from the input
	$(".image-checkbox").each(function () {
		if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
			$(this).addClass('image-checkbox-checked');
		}
		else {
			$(this).removeClass('image-checkbox-checked');
		}
	});

	$(document).ready(function(){
		try{inbox_table_tr();}catch(e){}
		try{bootstrap_toggle_gj();}catch(e){}
	});

	// sync the state to the input
	$(".image-checkbox").on("click", function (e) {
		$(this).toggleClass('image-checkbox-checked');
		var $checkbox = $(this).find('input[type="checkbox"]');
		$checkbox.prop("checked",!$checkbox.prop("checked"));
		e.preventDefault();
	});

	$(".copy").click(function(){
		var copied_content = $(this).data("copied");
		$("#copy-input").val(copied_content);
		var copyText = $("#copy-input");
		copyText.select();
		document.execCommand("copy");
	});
	
	CKEDITOR.replace('editor1', {
		allowedContent:true,
	});
	
	$.widget.bridge('uibutton', $.ui.button);
	
	$(".remove").click(function(){
		var url = $(this).data("url");
		$.ajax({
			url:url,
			error:function(){

			},
			success:function(){
				location.reload();
			}
		})
	});

</script>
</body>
</html>
