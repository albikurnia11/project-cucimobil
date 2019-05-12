<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">

            <h4 class="panel-title">Edit Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/data/update/{{ $data->id }}">
              @method('PUT') 
              @csrf
          <div class="form-group">
              @csrf
              <label for="jenis">Jenis</label>
              <input type="text" value={{ $data->jenis_mobil }} class="form-control" name="jenis_mobil" />
          </div>
          <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" value={{ $data->harga }} class="form-control" name="harga"/>
          </div>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
  </div>
</div>
</section>
