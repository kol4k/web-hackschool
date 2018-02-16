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
	];

    loadJS(requiredJS);
    
    $('.progress .progress-bar').progressbar({
		display_text: 'fill'
	});
</script>

<h2 class="heading-border">Catatan</h2>
<p class="lead">Semua <span class="label label-success">data</span> yang terinput tidak boleh di-ubah tanpa izin <span class="label label-default">admin.</span></p>
<div class="table-responsive">
	<table class="table table-minimal project-list">
		<thead>
			<tr>
				<th>TITLE</th>
				<th>DATE START</th>
				<th>DAYS TO DEADLINE</th>
				<th>PROGRESS</th>
				<th>PRIORITY</th>
				<th>LEADER</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="#">Spot Media</a></td>
				<td>18-04-2017</td>
				<td>12 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="95"></div>
					</div>
				</td>
				<td><span class="label label-warning">MEDIUM</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"/> <span>Michael</span></a></td>
				<td><span class="label label-success">ACTIVE</span></td>
			</tr>
			<tr>
				<td><a href="#">E-Commerce Site</a></td>
				<td>24-05-2017</td>
				<td>30 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="40"></div>
					</div>
				</td>
				<td><span class="label label-success">LOW</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"/> <span>Antonius</span></a></td>
				<td><span class="label label-warning">PENDING</span></td>
			</tr>
			<tr>
				<td><a href="#">Project 123GO</a></td>
				<td>20-12-2016</td>
				<td>50 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="65"></div>
					</div>
				</td>
				<td><span class="label label-danger">HIGH</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"/> <span>Antonius</span></a></td>
				<td><span class="label label-success">ACTIVE</span></td>
			</tr>
			<tr>
				<td><a href="#">Wordpress Theme</a></td>
				<td>05-03-2017</td>
				<td>40 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="77"></div>
					</div>
				</td>
				<td><span class="label label-warning">MEDIUM</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"/> <span>Michael</span></a></td>
				<td><span class="label label-success">ACTIVE</span></td>
			</tr>
			<tr>
				<td><a href="#">Redesign Landing Page</a></td>
				<td>15-02-2017</td>
				<td>30 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="25"></div>
					</div>
				</td>
				<td><span class="label label-success">LOW</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle"/> <span>Jason</span></a></td>
				<td><span class="label label-success">ACTIVE</span></td>
			</tr>
			<tr>
				<td><a href="#">Project 123GO</a></td>
				<td>20-09-2017</td>
				<td>N/A</td>
				<td>
					<div class="progress">
						<div class="progress-bar progress-bar-default" data-transitiongoal="100"></div>
					</div>
				</td>
				<td><span class="label label-danger">HIGH</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"/> <span>Antonius</span></a></td>
				<td><span class="label label-default">CLOSED</span></td>
			</tr>
			<tr>
				<td><a href="#">Wordpress Theme</a></td>
				<td>05-10-2016</td>
				<td>N/A</td>
				<td>
					<div class="progress">
						<div class="progress-bar progress-bar-default" data-transitiongoal="100"></div>
					</div>
				</td>
				<td><span class="label label-warning">MEDIUM</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"/> <span>Michael</span></a></td>
				<td><span class="label label-default">CLOSED</span></td>
			</tr>
			<tr>
				<td><a href="#">Redesign Landing Page</a></td>
				<td>15-11-2016</td>
				<td>30 days</td>
				<td>
					<div class="progress">
						<div class="progress-bar" data-transitiongoal="33"></div>
					</div>
				</td>
				<td><span class="label label-success">LOW</span></td>
				<td class="leader"><a href="#"><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle"/> <span>Jason</span></a></td>
				<td><span class="label label-warning">PENDING</span></td>
			</tr>
		</tbody>
	</table>
</div>

<div class="margin-bottom-30"></div>

