<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">Transaction List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                  <p>{{ $message }}</p>
                  </div>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                  <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Foto Bukti Pembayaran</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($transactions as $transaction)
                  <tr>
                  <td>{{ $transaction->id }}</td>
                  <td>{{ $transaction->user }}</td>
                  <td><img src="/image/{{ $transaction->image }}" width="120px"></td>
                  <td>
                    <a class="btn btn-primary" href="{{route('transactionlist.edit', $transaction)}}">Edit</a>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach
                  </table>
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
    