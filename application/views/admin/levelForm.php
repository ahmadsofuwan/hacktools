<?php
$action = 'add';
$display = '';
if (isset($_POST['action']))
	$action = $_POST['action'];
if ($action == 'update')
	$display = 'style="display: none;"'
?>
<div class="row justify-content-center">
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<?php echo $err ?>
					<h3 class="text-center"><b><?php echo strtoupper($title) ?></b></h3>
					<form method="post" enctype="multipart/form-data">
						<input type="hidden" name="pkey" value="">
						<input type="hidden" name="action" value="<?php echo $action ?>">

						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm">
								<input type="text" class="form-control" name="name" placeholder="Nama">
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Start</label>
							<div class="col-sm">
								<input type="number" class="form-control" name="start" progres='start'>
								<div class="progress bg-dark" style="height: 20px;">
									<div id="start" class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<label for="name" class="col-sm-1 col-form-label">End</label>
							<div class="col-sm">
								<input type="number" class="form-control" name="end" progres='end'>
								<div class="progress bg-dark" style="height: 20px;">
									<div id="end" class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>

						<div class="form-group row mt-5">
							<div class="col-sm">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
							<div class="col-sm">
								<a href="<?php echo base_url($baseUrl . 'List') ?>" class="btn btn-warning btn-block">Cancel</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('input').on('keyup change', function(data) {
		if ($(this).val() > 100)
			$(this).val(100);
		if ($(this).val() <= -1)
			$(this).val(5);
		var data = parseInt($(this).val());
		var progres = $(this).attr('progres');
		$('#' + progres).css('width', $(this).val() + '%');
		$('#' + progres).text($(this).val() + '%')
		var result = '';
		if (data <= 30) {
			result = 'bg-danger';
		} else if (data <= 50 & data > 30) {
			result = 'bg-warning';
		} else if (data <= 80 & data > 50) {
			result = 'bg-info';
		} else if (data <= 99 & data > 80) {
			result = 'bg-primary';
		}
		$('#' + progres).removeClass('bg-danger');
		$('#' + progres).removeClass('bg-warning');
		$('#' + progres).removeClass('bg-info');
		$('#' + progres).removeClass('bg-primary');
		$('#' + progres).addClass(result);
	});
</script>