

@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')



<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penilaian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Penilaian</a></li>
              <li class="breadcrumb-item active">Penilaian</li>
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
                    <div class="card-body table-responsive">
                            <table class="table">
                                <thead>
                                </thead>
                                
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Nama Produk</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Harga susu</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Kandungan Gizi</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Kandungan Gula</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Kandungan Lemak</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="fs-6">
                                    <tr class=" text-break">  
                                        <td>Tanggal Kadalwarsa</td>
                                        <td>
                                          <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              <option value="1">10.000.</option>
                                              <option value="2">10.000.</option>
                                              <option value="3">10.000.</option>
                                            </select>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-footer">
                                  <button type="submit" class="btn btn-default float-left">Submit</button>
                            </div>
                        </div>
                  </div>
                    <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class=" fs-6">
                                        <th>Nama Produk</th>
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