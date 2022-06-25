<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <a class="btn btn-success" href="#">Create</a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor Member</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse (@members as $member)
                  <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->nama}}</td>
                    <td>{{$member->alamat}}}</td>
                    <td> {{$member->no_telp}}</td>
                    <td>Active</td>
                    <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                  </td>
                  </tr>
                  @empty
                  <div class="alert alert-danger">
                    Data Member belum tersedia
                  </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nomor Member</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
                {{ $members->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    