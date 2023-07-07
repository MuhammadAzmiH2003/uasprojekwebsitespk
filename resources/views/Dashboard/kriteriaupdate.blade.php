@include('Dashboard.header')

@include('sweetalert::alert')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Data Kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kriteria</a></li>
              <li class="breadcrumb-item active">Data Kriteria</li>
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
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase"> Data Kriteria</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="{{ route('kriteriatambah.index') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-dark flex"
                                            value="Submit"
                                        >
                                            Kriteria
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama Kriteria</th>
                                        <th>Sifat</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($kriteria as $p)
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>{{$p->kriteria}}</td>   
                                        <td>{{$p->sifat}}</td>
                                        <td>{{$p->bobot}}</td>
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="/kriteriaupdate/edit/{{ $p->id }}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                        <i
                                                            class="fa-solid fa-pen-to-square"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="/kriteriaupdate/hapus/{{ $p->id }}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i
                                                            class="fa-solid fa-trash-can"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="
                                                  "
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            </table>
                            <div class="pt-3">
                                {{ $kriteria->links() }}    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Akhir content wrapper -->

@include('Dashboard.footer')