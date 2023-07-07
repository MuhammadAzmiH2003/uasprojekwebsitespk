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
            <span class="m-0 ">Edit Data Tour</span>
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
                <h3 class="text-center ">Edit Data produk</h3>
              </div>
             <!-- form start -->
             <form action="{{ url('/updateproduk/update/'.$produk->id) }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('put')
                <input type="hidden" name="id" id="id" value="{{ $produk->id }}">
                  <div class="card-body">
                      <div class="form-group">
                        <label for="nama">Image</label>
                        <input type="file" class="form-control" value="{{ $produk->image }}" name="image">
                        <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                      </div>
                      <div class="form-group">
                        <label for="jobs">Nama Produk</label>
                        <input type="text" class="form-control" value="{{ $produk->nama }}"   required="required" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="title">thumnel</label>
                        <input type="text" class="form-control" value="{{ $produk->thumnel }}"  required="required" name="thumnel">
                      </div>
                        <label for="desc">Description</label>
                        <input id="description" value="{{ $produk->deskripsi }}" type="hidden" name="deskripsi"  >
                        <trix-editor input="description"></trix-editor>
                      </div>
                      <div class=" mx-auto">
                        <button type="submit" class="btn btn-dark " value="Simpan Data">Simpan</button>
                      </div>
                  </div>
                </input>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('Dashboard.footer')