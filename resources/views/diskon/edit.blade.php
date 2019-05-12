<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">

            <h4 class="panel-title">Edit Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/diskon/update/{{ $data->id }}">
              @method('PUT') 
              @csrf
          <div class="form-group">
              @csrf
              <label for="Promo">Promo</label>
              <input type="text" value={{ $data->Promo }} class="form-control" name="Promo" />
          </div>
          <div class="form-group">
              <label for="Harga_Promo">Harga</label>
              <input type="text" value={{ $data->Harga_Promo }} class="form-control" name="Harga_Promo"/>
          </div>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
  </div>
</div>
</section>
