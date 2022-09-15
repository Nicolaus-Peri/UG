<section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-header p-2">
    <ul class="nav nav-pills">
      <li class="nav-item col-2"><a class="nav-link" href="{{url('/trainermember')}}">Trainer List</a></li>  
      <li class="nav-item col-2"><a class="nav-link" href="{{url('/jadwaltrainer')}}">Jadwal Trainer</a></li>
    </ul>
  </div>
  <div class="card-body pb-0">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Jenis Latihan</th>
                    <th>Hari</th>
                    <th>Trainer</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($jadwals as $jadwal)
                    <tr>
                      <td>{{ $jadwal->id }}</td>
                      <td>{{ $jadwal->str_value }}</td>
                      <td>{{ $jadwal->day }}</td>
                      <td>{{ $jadwal->trainer }}</td>
                    </tr>
                  @csrf
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>