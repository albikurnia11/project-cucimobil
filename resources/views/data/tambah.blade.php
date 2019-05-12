<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">
            <h4 class="panel-title">Tambah Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/data/store">
          <div class="form-group">
              @csrf
              <label for="jenis">Jenis</label>
              <input type="text" class="form-control" name="jenis_mobil"/>
          </div>
          <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" name="harga"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
</section>
