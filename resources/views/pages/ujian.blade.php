@foreach($data['message'] as $list)
<div class="col-md-6 col-lg-4">
    <div class="panel project-item">
        <div class="panel-heading">
            <h2 class="panel-title"><a href="#">{{ $list['tipe'] }}</a></h2>
            <div class="right">
                <span class="label label-success">{{ $list['status'] }}</span>
            </div>
        </div>
        <div class="panel-body">
            <div class="left">
                <div class="info">
                    <span class="title">DURASI</span>
                    <span class="value">{{ $list['waktu_mulai'] }} - {{ $list['waktu_selesai'] }} WIB</span>
                </div>
                <div class="info">
                    <span class="title">PELAJARAN</span>
                    <span class="value">{{ $list['pelajaran'] }}</span>
                </div>
                <div class="info">
                    <span class="title">PEMBIMBING</span>
                    <span class="value">
                        <img src="{{ asset('assets/img/people/male1.png') }}" class="leader-picture" alt=""> Carol Wilson</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="controls right">
                <a href="#">Lihat Tugas</a>
            </div>
        </div>
    </div>
</div>
@endforeach