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
            <span class="m-0 ">Tambah Data produk</span>
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
                <h3 class="text-center ">Input Data Susu</h3>
              </div>
             <!-- form start -->
             <form action="{{ route('Produk.index')}}" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Image</label>
                    <input type="file" class="form-control"  required="required"  name="image">
                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div> 
                  <div class="form-group">
                    <label for="jobs">Nama Produk</label>
                    <input type="text" class="form-control"  placeholder="Masukan Jobs" required="required" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="title">Thumnel</label>
                    <input type="text" class="form-control"  placeholder="Masukan Tittle" required="required" name="thumnel">
                  </div>
                  <div class="form-group">
                    <label for="desc">Description</label>
                    <input id="description" type="hidden" name="deskripsi" >
                    <trix-editor input="description"></trix-editor>
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