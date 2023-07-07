@include('Dashboard.header')

@include('sweetalert::alert')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <span class="m-0 ">Edit Data Alternatif</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('altupdate.index') }}"><- Kembali</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center ">Edit Data Alternatif</h3>
              </div>
             <!-- form start -->
             <form action="{{ url('/altupdate/update/'.$alternatif->id) }}" method="post" enctype="multipart/form-data">
                @csrf
               @method('put')
                  <div class="card-body">
                    <input type="hidden" name="id" id="id" value="{{ $alternatif->id }}">
                      <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" value="{{ $alternatif->nama}}" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="jenis">K1</label>
                        <input type="text" class="form-control" value="{{ $alternatif->c1}}" name="c1">
                      </div>
                      <div class="form-group">
                        <label for="jenis">K2</label>
                        <input type="text" class="form-control" value="{{ $alternatif->c2}}" name="c2">
                      </div>
                      <div class="form-group">
                        <label for="jenis">K3</label>
                        <input type="text" class="form-control" value="{{ $alternatif->c3}}" name="c3">
                      </div>
                      <div class="form-group">
                        <label for="jenis">K4</label>
                        <input type="text" class="form-control" value="{{ $alternatif->c4}}" name="c4">
                      </div>
                      <div class="form-group">
                        <label for="jenis">K5</label>
                        <input type="text" class="form-control" value="{{ $alternatif->c5}}" name="c5">
                      </div>
                      <div class=" mx-auto">
                        <button type="submit" class="btn btn-dark " value="Simpan Data">Simpan</button>
                      </div>
                  </div>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('Dashboard.footer')