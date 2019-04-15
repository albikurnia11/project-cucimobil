<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">
            <h4 class="panel-title">Tambah Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/store">
          <div class="form-group">
              @csrf
              <label for="no_nota">Nota</label>
              <input type="number" class="form-control" name="no_nota"/>
          </div>
          <div class="form-group">
              <label for="jenis">Jenis</label>
              <input type="text" class="form-control" name="jenis"/>
          </div>
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="bayar">Bayar</label>
              <input type="text" class="form-control" name="bayar"/>
          </div>
          <div class="form-group">
              <label for="kembali">Kembali</label>
              <input type="text" class="form-control" name="kembali"/>
          </div>
          <div class="form-group">
              <label for="total">Total</label>
              <input type="number" class="form-control" name="total"/>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal"/>
          </div>

          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
</section>
