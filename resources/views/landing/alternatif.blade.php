
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Alternatif</a></li>
              <li class="breadcrumb-item active">Data Alternatif</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <div class="card card-info">
                  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis produk</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jenis produk">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                    <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class=" fs-6">
                                        <th>Harga Susu</th>
                                        <th>Kandungan Gizi</th>
                                        <th>Kandungan Gula</th>
                                        <th>Kandungan Lemak</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                    </tr>
                                </thead>                            
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>10.00</td>
                                        <td>10.00</td>
                                        <td>10.00</td>
                                        <td>10.00</td>
                                        <td>10.00</td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('Dashboard.footer')