<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">

            <h4 class="panel-title">Edit Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/update/{{ $data->id }}">
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
              <label for="bayar">Bayar</label>
              <input type="text" value={{ $data->bayar }} class="form-control" name="bayar" />
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
          <div class="form-group">
            <label for="diskon_id">Diskon</label>
           <select name="diskon_id" class="form-control">            
            @foreach ($diskons as $item)
            <?php if($item->id == $transaksi->diskon_id){ ?>
           <option selected="selected" value="{{ $item->id }}">{{ $item->Harga_Promo }}</option>
           <?php } else { ?>
           <option value="{{ $item->id }}">{{ $item->Hrga_Promo }}</option>
           <?php } ?>
           @endforeach
           </select>
          </div>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
  </div>
</div>
</section>
