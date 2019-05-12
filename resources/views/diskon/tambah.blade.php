<section class="main-section">
  <!-- Add Your Content Inside -->
  <div class="content">
            <h4 class="panel-title">Tambah Data</h4>
          </div>
           <div class="panel-body">
                 <form method="post" action="/diskon/store">
          <div class="form-group">
              @csrf
              <label for="Promo">Promo</label>
              <input type="text" class="form-control" name="Promo"/>
          </div>
          <div class="form-group">
              <label for="Harga_Promo">Harga</label>
              <input type="text" class="form-control" name="Harga_Promo"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
</section>
