<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Profile</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <form action="{{route('checkIn')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                    @if(session('error'))
                      <div class="alert alert-danger">
                          <b>Opps!</b> {{session('error')}}
                      </div>
                    @endif
                    @if(session('success'))
                      <div class="alert alert-success">
                          <b>Selamat!!</b> {{session('success')}}
                      </div>
                    @endif
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                      <button type="submit" class="btn btn-primary">Check In</button>
                    </div>
                  </div>
                  </form>
                </div>
                <div class="col-12 col-sm-6">
                  <form action="{{route('checkOut')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <button type="submit" class="btn btn-danger">Check Out</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Info Terbaru</h4>
                  @foreach($news as $news)
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#">{{ $news->title }}</a>
                        </span>
                        <span class="description">{{ $news->update_at }}</span>
                      </div>
                      <!-- /.user-block -->
                      <img src="/image/{{ $news->image }}" width="100px">
                      <p>{{ $news->description }}</p>
                    </div>
                    @endforeach
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-user"></i> {{ Auth::user()->nama }}</h3>
              <p class="text-muted">{{ Auth::user()->email }}</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Alamat
                  <b class="d-block">{{ Auth::user()->alamat }}</b>
                </p>
                <p class="text-sm">Nomor Telpon
                  <b class="d-block">{{ Auth::user()->no_telp }}</b>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>