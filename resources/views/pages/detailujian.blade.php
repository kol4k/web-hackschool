
<script>
	var requiredCSS = [
		"{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}",
	];

	loadCSS(requiredCSS);

	var requiredJS = [
		"{{ asset('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }} ",
		"{{ asset('assets/js/helper.js') }} "
	];

	loadJS(requiredJS);
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
						<input type="hidden" name="kode_ujian" value="{{ $data['message']['kode_ujian'] }}">
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
								<h2 class="project-title">{{ $data['message']['tipe'] }} - {{ $data['message']['pelajaran'] }}</h2>
								<span class="label label-success status">{{ $data['message']['status'] }}</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-right">
						<div class="btn-group">
							@if($data['is']['already_played'] == false)
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#konfirmasi">MULAI UJIAN</button><br><br>
							@else
							<button type="button" class="btn btn-warning">SELESAI</button><br><br>				
							@endif
						</div>
					</div>
				</div>
				<div class="project-subheading">
					<div class="layout-table project-metrics">
						<div class="cell">
							<div class="main-info-item">
								<span class="title">WAKTU MULAI</span>
								<span class="value">{{ $data['message']['waktu_mulai'] }}</span>
							</div>
						</div>
						<div class="cell">
							<div class="main-info-item">
								<span class="title">WAKTU SELESAI</span>
								<span class="value">{{ $data['message']['waktu_selesai'] }}</span>
							</div>
						</div>
						<div class="cell">
							<div class="main-info-item">
								@if($data['is']['already_played'] == false)
								<span class="title">PROGRESS</span>
								<div id="project-progress" class="progress progress-transparent custom-color-orange2">
									<div class="progress-bar" data-transitiongoal="0"></div>
								</div>
								@else
								<span class="title">NILAI</span>
								{{--  <div id="project-progress" class="progress progress-transparent custom-color-orange2">
									<div class="progress-bar" data-transitiongoal="{{ $data['is']['nilai'] }}"></div>
								</div>  --}}
								{{ $data['is']['nilai'] }}
								@endif
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
					@if($rank === [])
						<p class="text-center">Jadilah yang Pertama mengerjakan!</p>
					@endif
					@foreach($rank as $list_rank)
					<li>
						<div class="media">
							<div class="picture custom-bg-blue3">{{ $list_rank['user']['photo'] }}</div>
							<span class="status"></span>
						</div>
						<div class="info">
							<span class="name">{{ $list_rank['user']['nama'] }}</span>
							<span class="email">{{ $list_rank['user']['kelas'] }}</span>
						</div>
						<div class="controls">
							@if($loop->iteration === 1)
							<a href="#"><font style="color:#e56565;">{{ $loop->iteration }}</font></a>
							@elseif($loop->iteration === 2)
							<a href="#"><font style="color:#f8bc4c">{{ $loop->iteration }}</font></a>							
							@elseif($loop->iteration === 3)
							<a href="#"><font style="color:#ddd75a">{{ $loop->iteration }}</font></a>							
							@else
							<a href="#"><font>{{ $loop->iteration }}</font></a>							
							@endif														
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<!-- end project team -->
	</div>
</div>