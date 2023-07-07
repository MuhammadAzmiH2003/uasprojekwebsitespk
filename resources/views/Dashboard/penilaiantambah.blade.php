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
            <span class="m-0 ">Tambah Data penilaian</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""><- Kembali</a></li>
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
                <h3 class="text-center ">Input Data penilaian</h3>
              </div>
             <!-- form start -->
             <form action="{{ route('Penilaian.index')}}" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="jobs">Nama Produk</label>
                    <input type="text" class="form-control"  placeholder="Masukan Jobs" required="required" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="title">Harga susu</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="harga">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Kandungan Gizi</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="gizi">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Kandungan Gula</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="gula">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Kandungan Lemak</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="lemak">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Tanggal Kadaluwarsa</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="kadalwarsa">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                  </div>
                  <div class=" mx-auto">
                    <button type="submit" class="btn btn-dark " value="Simpan Data">Simpan</button>
                  </div>
                </div>
              <!-- Akhir form -->
            </form>
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('Dashboard.footer')