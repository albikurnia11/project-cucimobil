@extends('home')

@section('content')
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
                    <td>Jenis</td>
                    <td>Harga</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <div class="pull-right">
                  <a class="btn btn-success" href="/data/create" class="btn btn-primary">Add Data</a>
                  <br>
                    <br>
                    </div>
                    <tbody>
        @php $no = 1; @endphp
        @foreach($data as $datas)
        
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$datas->jenis_mobil}}</td>
                        <td>{{$datas->harga}}</td>
                        <td>
                          <a href="/data/edit/{{$datas->id }}" class="btn btn-sm btn-primary m-r-2">Edit</a>
                        </td>
                        <td>
                          <a href="/data/destroy/{{ $datas->id }}" class="btn btn-sm btn-white m-r-2">Delete</a>
                        </td>
                      </tr>
        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
@endsection