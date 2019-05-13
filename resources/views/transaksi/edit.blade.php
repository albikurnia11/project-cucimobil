<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">

            <h4 class="panel-title">Edit Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/transaksi/update/{{ $data->id }}">
              @method('PUT') 
              @csrf
          <div class="form-group">
              @csrf
              <label for="no_nota">Nota</label>
              <input type="number" value={{ $data->no_nota }} class="form-control" name="no_nota" />
          </div>
          <div class="form-group">
              <label for="jenis">Jenis</label>
              <input type="text" value={{ $data->jenis }} class="form-control" name="jenis"/>
          </div>
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" value={{ $data->nama }} class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="biaya">Biaya</label>
              <input type="text" value={{ $data->biaya }} class="form-control" name="biaya" />
          </div>
          <div class="form-group">
              <label for="bayar">Bayar</label>
              <input type="text" value={{ $data->bayar }} class="form-control" name="bayar" />
          </div>
          <div class="form-group">
              <label for="diskon_harga">Diskon</label>
              <input type="text" value={{ $data->diskon_harga }} class="form-control" name="diskon_harga" />
          </div>
          <div class="form-group">
              <label for="alamat">Kembali</label>
              <input type="text" value={{ $data->kembali }} class="form-control" name="kembali"/>
          </div>
          <div class="form-group">
              <label for="total">Total</label>
              <input type="number" value={{ $data->total }} class="form-control" name="total"/>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" value={{ $data->tanggal }} class="form-control" name="tanggal" />
          </div>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
  </div>
</div>
</section>
