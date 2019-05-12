<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">
            <h4 class="panel-title">Data Pencucian Mobil & Motor</h4>
          </div>
          <div class="panel-body">
            <!-- begin table-responsive -->
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Nota</td>
                    <td>Jenis</td>
                    <td>Nama</td>
                    <td>Biaya</td>
                    <td>Bayar</td>
                    <td>Diskon</td>
                    <td>Kembali</td>
                    <td>Tanggal</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <div class="pull-right">
                  <a class="btn btn-success" href="/transaksi/create" class="btn btn-primary">Add Data</a>
                  <br>
                    <br>
                    </div>
                    <tbody>
        @php $no = 1; @endphp
        @foreach($data as $datas)
        
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$datas->no_nota}}</td>
                        <td>{{$datas->jenis}}</td>
                        <td>{{$datas->nama}}</td>
                        <td>{{$datas->biaya}}</td>
                        <td>{{$datas->bayar}}</td>
                        <td>{{$datas->diskon_harga}}</td>
                        <td>{{$datas->kembali}}</td>
                        <td>{{$datas->tanggal}}</td>
                        <td>
                          <a href="/transaksi/edit/{{$datas->id }}" class="btn btn-sm btn-primary m-r-2">Edit</a>
                        </td>
                        <td>
                          <a href="/transaksi/destroy/{{ $datas->id }}" class="btn btn-sm btn-white m-r-2">Delete</a>
                        </td>
                      </tr>
        @endforeach
    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
