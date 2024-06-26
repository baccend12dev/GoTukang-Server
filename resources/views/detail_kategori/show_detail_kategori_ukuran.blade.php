@extends('adminpro.main')
{{-- @extends('adminlayouts.main_show_page') --}}

@section('title', 'Detail Data')

@section('page_name', 'Detail Data')

@section('content')
    

        
    <div class="content">
        <div class="container-fluid">

          @foreach ($kategori_tukang as $kategori)

   
          <div class="row">
            <div class="col-md-12">
            <div class="card">


                {{-- <div class="card-header card-header-tabs  card-header-primary">
                    <h4 class="card-title ">Data tukang</h4>
                </div> --}}
                <div class="card-header card-header-tabs" data-background-color="purple">
                    <h4 class="card-title ">Data tukang</h4>
                </div>

                

                {{-- <div class="card-body"> --}}
                <div class="card-content">

                <div class="table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table class="table table-bordered table-striped">
                        <thead class=" text-primary">
                        <th>Nama tukang</th>
                        <th>Nama Toko</th>
                        <th>Alamat Toko</th>
                    </thead>
                    <tbody>   
                            <tr>
                                <td>{{ $kategori->nama_tukang }}</td>
                                <td>{{ $kategori->nama_toko }}</td>                                
                                <td>{{ $kategori->alamat_tukang }}</td>                                
                            </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
            <div class="card">
  

                <div class="card-header card-header-tabs" data-background-color="purple">
                        
                    <div class="nav nav-tabs" data-tabs="tabs">
                        <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Detail Kategori</h4></span>
                        <a type="button" class="btn btn-primary pull-right " onclick="return confirm('Yakin ingin menghapus data ini?')"  href="/data_detail_kategori/delete/{{ $kategori->id_detail_kategori }}"><i class="material-icons">delete</i> Detele</a>
                        <a type="button" class="btn btn-primary pull-right " href="/data_detail_kategori/edit/{{ $kategori->id_detail_kategori }}"><i class="material-icons">edit</i> Edit</a>
                    </div>
                </div>

                {{-- <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem;">Detail Kategori</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-primary" href="/data_detail_kategori/edit/{{ $kategori->id_detail_kategori }}"><i class="material-icons">edit</i> Edit</a>
                          </li>
                          <li class="nav-item">
                            <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-primary ml-3" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_detail_kategori/delete/{{ $kategori->id_detail_kategori }}"><i class="material-icons">delete</i> Detele</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}


                {{-- <div class="card-body"> --}}
                <div class="card-content">
                <div class="table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table class="table table-bordered table-striped">
                    <thead class=" text-primary">
                        <th>Nama Kategori</th>
                        <th>Keterangan</th>
                        <th>Bahan Jahit</th>
                        <th>Harga Bahan (Rp)</th>
                        <th>Ongkos Jahit (Rp)</th>
                        <th>Lama Pengerjaan (Hari)</th>
                        {{-- <th>Nama Ukuran</th>
                        <th>Gambar Ukuran</th> --}}
                        {{-- <th class="text-center">Actions</th> --}}
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                            <tr>
                                {{-- <td>{{ $ukuran->nama_ukuran }}</td>
                                <td>{{ $ukuran->gambar_ukuran }}</td> --}}
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>{{ $kategori->keterangan_kategori }}</td>
                                <td>{{ $kategori->bahan_jahit }}</td>
                                <td>{{ $kategori->harga_bahan }}</td>
                                <td>{{ $kategori->ongkos_tukang }}</td>
                                <td>{{ $kategori->perkiraan_lama_waktu_pengerjaan }}</td>


                                {{-- <td class="td-actions text-center"> --}}
                                    {{-- <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_tukang/show/{{ $data_tukang->id_tukang }}"><i class="material-icons">person</i></a> --}}
                                    {{-- <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_tukang/delete/{{ $data_tukang->id_tukang }}"><i class="material-icons">delete</i></a> --}}
                                {{-- </td> --}}
                                
                            </tr>
                      </tbody>
                    </table>
                </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
            <div class="card">


                <div class="card-header card-header-tabs" data-background-color="purple">
                        
                    <div class="nav nav-tabs" data-tabs="tabs">
                        <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Detail Ukuran</h4></span>
                        {{-- <a type="button" class="btn btn-primary pull-right" href="/data_tukang/add"><i class="material-icons">add</i> Tambah Data</a> --}}
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">add</i> Tambah Data</button>

                    </div>
                </div>


                {{-- <div class="card-header card-header-tabs card-header-primary  mb-3">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; ">Detail Ukuran</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <button type="button" rel="tooltip" data-placement="bottom" title="Tambah Data" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">add</i> Tambah Data</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}

                {{-- <div class="card-body"> --}}
                <div class="card-content">

                <div class="table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table class="table table-bordered table-striped">
                        <thead class=" text-primary">
                        <th>Nama Ukuran</th>
                        <th class="text-center">Gambar Ukuran</th>
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($ukuran_kategori_tukang as $ukuran)
                            <tr>
                                <td>{{ $ukuran->nama_ukuran }}</td>
                                {{-- <td>{{ $ukuran->gambar_ukuran }}</td> --}}
                                <td class="text-center">
                                    <img src="{{ url('img_ukuran/'.$ukuran->gambar_ukuran) }}" style="width: 120px; height: 120px; border-radius: 20px;" class="card-img-top mb-3" alt="...">
                                </td>
                                <td class="td-actions text-center">
                                    {{-- <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_tukang/show/{{ $data_tukang->id_tukang }}"><i class="material-icons">person</i></a> --}}
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_detail_kategori/ukuran/delete/{{ $ukuran->id_ukuran_detail_kategori }}"><i class="material-icons">close</i></a>
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ukuran</h5>
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
            </div>
            <div class="modal-body">

                <form method="post" action="/data_detail_kategori/ukuran/store" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @foreach ($kategori_tukang as $kategori)
                    <input type="hidden" name="id_detail_kategori" id="id_detail_kategori" value="{{ $kategori->id_detail_kategori }}">
                    @endforeach

                    {{-- <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Ukuran') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group" id="exampleFormControlSelect1" >
                              <select class="form-control" id="exampleFormControlSelect1" name="id_ukuran">
                                @foreach ($ukurans as $data_ukuran)
                                    <option value="{{ $data_ukuran->id_ukuran }}">{{ $data_ukuran->nama_ukuran }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                      </div>  --}}

                    <div>
                    {{-- <div class="col-lg-5 col-md-6 col-sm-3"> --}}
                        <div class="form-group" id="exampleFormControlSelect1" >
                        <select class="selectpicker" data-style="btn btn-primary btn-round" title="Pilih Ukuran" name="id_ukuran">
                            @foreach ($ukurans as $data_ukuran)
                                <option value="{{ $data_ukuran->id_ukuran }}">{{ $data_ukuran->nama_ukuran }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
            
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-simple" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-simple">Tambah Data</button>
                    </div>
                </form>

        </div>
        </div>
    </div>

@endsection