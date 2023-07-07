

@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')



<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Data SPK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">SPK</a></li>
              <li class="breadcrumb-item active">Data SPK</li>
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
                            <h2>BOBOT</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class=" fs-6">
                                        <th>{{ $widget1['kriteria'] }}</th>
                                        <th>{{ $widget2['kriteria'] }}</th>
                                        <th>{{ $widget3['kriteria'] }}</th>
                                        <th>{{ $widget4['kriteria'] }}</th>
                                        <th>{{ $widget5['kriteria'] }}</th>
                                        </tr>   
                                    </thead>                         
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="card card-info">
                        <div class="card-body table-responsive">
                            <h2>NORMALISASI</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class=" fs-6">
                                            <th>Merek Produk</th>
                                            <th>Kandungan Gizi</th>
                                            <th>Kandungan Lemak</th>
                                            <th>Kandungan Gula</th>
                                            <th>Tanggal Kadalwarsa</th>
                                            <th>Harga Susu</th>
                                        </tr>
                                    </thead>                            
                                    <tbody class="fs-6">
                                    @foreach ($data as $item)
                                        <tr class=" text-break"> 
                                        {{--  @if ($alternatif->bobot->sifat = "benevit" != "benevit" )
                                              <td>{{$alternatif->nama }}</td>
                                              <td>{{$C1min['alternatif'] }}</td>
                                              <td>{{$C2min['alternatif'] }}</td>
                                              <td>{{$C3min['alternatif'] }}</td>
                                              <td>{{$C4min['alternatif'] }}</td>
                                              <td>{{$C5min['alternatif'] }}</td>
                                        @else  --}}
                                             <td>{{$item->nama }}</td>
                                             <td>{{$item->c1 / $C1max['alternatif']}}</td>
                                             <td>{{$item->c2 / $C2max['alternatif']}}</td>
                                             <td>{{$C3min['alternatif'] / $item->c3}}</td>
                                             <td>{{$C4min['alternatif'] / $item->c4}}</td>
                                             <td>{{$C5min['alternatif'] / $item->c5}}</td>
                                         {{--  @endif  --}}
                                        </tr>
                                    @endforeach    
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="card card-info">
                        <div class="card-body table-responsive">
                            <h2>Hasil</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class=" fs-6">
                                            <th>Merek Produk</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>                            
                                    <tbody class="fs-6">
                                    @foreach ($data as $item)
                                        <tr class=" text-break">  
                                        <td>{{$item->nama}}</td>
                                            
                                            <td>
                                                {{(($item->c1 / $C1max['alternatif'])*$widget1['kriteria'])+
                                                (($item->c2 / $C2max['alternatif'])*$widget2['kriteria'])+
                                                (($C3min['alternatif'] / $item->c3)*$widget3['kriteria'])+
                                                (($C4min['alternatif'] / $item->c4)*$widget4['kriteria'])+
                                                (($C5min['alternatif'] / $item->c5)*$widget5['kriteria'])}}
                                            </td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('Dashboard.footer')