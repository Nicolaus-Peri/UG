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
    @foreach($trainers as $trainer)
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            {{ $trainer->detail }}
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>{{( $trainer->nama )}}</b></h2>
                <p class="text-muted text-sm"><b>About: </b> {{( $trainer->jenis_kelamin )}} </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-address-book"></i></span>{{( $trainer->email )}}</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>{{ $trainer->no_telp }}</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="/image/{{ $trainer->image }}" alt="user-avatar" width="120px">
              </div>
            </div>
          </div>
        </div>
      </div>
    @csrf
  @endforeach
  {!! $trainers->links() !!}
  </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>