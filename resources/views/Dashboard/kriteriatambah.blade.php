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
            <span class="m-0 ">Tambah Kriteria</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('kriteriaupdate.index') }}"><- Kembali</a></li>
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
                <h3 class="text-center ">Input Kriteria</h3>
              </div>
             <!-- form start -->
             <form action="{{ route('Kriteria.index')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="kriteria">Nama Kriteria</label>
                    <input type="text" class="form-control"  placeholder="Masukan kriteria" required="required" name="kriteria">
                  </div>
                  <div class="form-group">
                    <label for="title">Sifat</label>
                    <select class="form-select" aria-label="Default select example" required="required" name="sifat">
                                              <option selected>Pilih sifat kriteria</option>
                                              <option value="course">cost</option>
                                              <option value="benevit">benefit</option>
                                            </select>
                  </div>         
                  <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="text" class="form-control"  placeholder="Masukan Kepetingan" required="required" name="bobot">
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