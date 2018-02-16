<script>
	var requiredCSS = [
		"{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}",
	];

	loadCSS(requiredCSS);

	var requiredJS = [
		"{{ asset('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }} "
	];

	loadJS(requiredJS);
    $(function() {
        if($('#project-progress .progress-bar').length) {
            $('#project-progress .progress-bar').progressbar({
                display_text: 'fill'
            });
    
            // accordion toggle collapse
            $('.project-accordion [data-toggle="collapse"]').on('click', function() {
                $(this).find('.toggle-icon').toggleClass('fa-minus-circle fa-plus-circle');
            });
        }
    });    
</script>
<div id="konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="konfirmasi">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <center>
					<form id="playujian" method="POST" action="{{ Route('store.ujian') }}">
						{{ csrf_field() }}
						<input type="hidden" name="kode_ujian" value="{{ $data['kode_ujian'] }}">
					</form>
                    <img src="{{ asset('assets/img/modal-confirm-1.png') }}">
                    <p>Apakah anda yakin ingin memulainya?</p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tidak</button>
                <button type="submit" class="btn btn-primary" form="playujian"><i class="fa fa-check-circle"></i> Mulai</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel">
			<div class="project-heading">
				<div class="row">
					<div class="col-md-9">
						<div class="media">
							<div class="media-left">
								<img src="assets/img/project-logo.png" class="project-logo" alt="Project Logo">
							</div>
							<div class="media-body">
								<h2 class="project-title">{{ $data['tipe'] }}</h2>
								<span class="label label-success status">{{ $data['status'] }}</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-right">
						<div class="btn-group">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#konfirmasi">MULAI UJIAN</button><br><br>
							{{--  <a href="/playujian?code={{ $data['kode_ujian'] }}" type="button" class="btn btn-primary">MULAI UJIAN</a>  --}}
						</div>
					</div>
				</div>
				<div class="project-subheading">
					<div class="layout-table project-metrics">
						<div class="cell">
							<div class="main-info-item">
								<span class="title">WAKTU MULAI</span>
								<span class="value">{{ $data['waktu_mulai'] }}</span>
							</div>
						</div>
						<div class="cell">
							<div class="main-info-item">
								<span class="title">WAKTU SELESAI</span>
								<span class="value">{{ $data['waktu_selesai'] }}</span>
							</div>
						</div>
						<div class="cell">
							<div class="main-info-item">
								<span class="title">PROGRESS</span>
								<div id="project-progress" class="progress progress-transparent custom-color-orange2">
									<div class="progress-bar" data-transitiongoal="85"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="project-info">
					<h3 class="info-heading">HUBUNGI SLAMET RIYADI</h3>
                    <a href="#" class="btn btn-success"><i class="fa fa-whatsapp"></i> WHATSAPP</a>
                    <a href="#" class="btn btn-default"><i class="fa fa-envelope-o"></i> EMAIL</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<!-- project team -->
		<div class="panel">
			<div class="panel-heading">
				<h4 class="panel-title">Ranking Ujian</h4>
				<div class="right">
					<button type="button" class="btn btn-primary">
						<span class="sr-only">Add Contact</span>
						<i class="fa fa-star"></i>
					</button>
				</div>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled list-contacts">
					<li>
						<div class="media">
							<img src="assets/img/people/female3.png" class="picture" alt="">
							<span class="status online"></span>
						</div>
						<div class="info">
							<span class="name">Theresa Santos</span>
							<span class="title">Team Leader</span>
						</div>
						<div class="controls">
							<a href="#"><i class="fa fa-commenting-o"></i></a>
						</div>
					</li>
					<li>
						<div class="media">
							<div class="picture custom-bg-blue3">MB</div>
							<span class="status"></span>
						</div>
						<div class="info">
							<span class="name">Michael Bradley</span>
							<span class="email">Business Analyst</span>
						</div>
						<div class="controls">
							<a href="#"><i class="fa fa-commenting-o"></i></a>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="assets/img/people/male1.png" class="picture" alt="">
							<span class="status online"></span>
						</div>
						<div class="info">
							<span class="name">Bruce Bowman</span>
							<span class="email">UI Designer</span>
						</div>
						<div class="controls">
							<a href="#"><i class="fa fa-commenting-o"></i></a>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="assets/img/people/female4.png" class="picture" alt="">
							<span class="status"></span>
						</div>
						<div class="info">
							<span class="name">Karen Price</span>
							<span class="email">Legal</span>
						</div>
						<div class="controls">
							<a href="#"><i class="fa fa-commenting-o"></i></a>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="assets/img/people/female5.png" class="picture" alt="">
							<span class="status online"></span>
						</div>
						<div class="info">
							<span class="name">Martha Mendoza</span>
							<span class="email">Full-Stack Developer</span>
						</div>
						<div class="controls">
							<a href="#"><i class="fa fa-commenting-o"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end project team -->
	</div>
</div>