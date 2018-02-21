<script>
	var requiredCSS = [
		"{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}",
	];

	loadCSS(requiredCSS);

	var requiredJS = [
		"{{ asset('assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}",
		"{{ asset('assets/vendor/Flot/jquery.flot.js') }}",
		"{{ asset('assets/vendor/Flot/jquery.flot.resize.js') }}",
		"{{ asset('assets/vendor/Flot/jquery.flot.pie.js') }}",
		"{{ asset('assets/vendor/Flot/jquery.flot.time.js') }}",
		"{{ asset('assets/vendor/flot.tooltip/jquery.flot.tooltip.js') }}",
		"{{ asset('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }}",
		"{{ asset('assets/scripts/dashboards/dashboard2.js') }}",
		"{{ asset('assets/js/helper.js') }}",
	];

    loadJS(requiredJS);
    
    $('.progress .progress-bar').progressbar({
		display_text: 'fill'
	});
</script>

<h2 class="heading-border">Catatan</h2>
<p class="lead">Semua <span class="label label-success">data</span> yang terinput adalah hasil <span class="label label-default">pengguna.</span></p>
<div class="table-responsive">
	<table class="table table-minimal project-list">
		<thead>
			<tr>
				<th>PELAJARAN</th>
				<th>KODE</th>
				<th>TANGGAL</th>
				<th>NILAI</th>
				<th>HASIL</th>
			</tr>
		</thead>
		<tbody>
			@foreach($nilai as $v)
			<tr>
				<td>{{ $v['pelajaran'] }}</td>
				<td>{{ $v['kode_ujian'] }}</td>
				<td>{{ $v['waktu'] }}</td>
				<td><code>{{ $v['nilai'] }}</code></td>
				@if($v['nilai'] >= 80)
				<td><span class="label label-success">AMAN</span></td>
				@elseif($v['nilai'] <= 75)
				<td><span class="label label-danger">RENDAH</span></td>
				@endif				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="margin-bottom-30"></div>

