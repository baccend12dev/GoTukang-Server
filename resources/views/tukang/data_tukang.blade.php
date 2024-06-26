@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Data tukang')

@section('page_name', 'Data tukang')

@section('content')
    

        
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">

                {{-- ini untuk layout adminlayouts

                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="font-size: 1.125rem; text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data tukang</span>
                        <ul class="nav nav-tabs justify-content-end" data-tabs="tabs">
                          <li class="nav-item">
                            <a type="button" class="nav-link active" href="/data_tukang/add"><i class="material-icons">add</i> Tambah Data</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}

                  <div class="card-header card-header-tabs" data-background-color="purple">
                        
                    <div class="nav nav-tabs" data-tabs="tabs">
                        <span class="nav-tabs-title"><h4 style=" text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); ">Data tukang</h4></span>
                        <a type="button" class="btn btn-primary pull-right " href="/data_tukang/add"><i class="material-icons">add</i> Tambah Data</a>
                    </div>
                </div>


                {{-- <div class="card-header card-header-tabs  card-header-primary">
                    <h4 class="card-title ">Data tukang</h4>
                    <p class="card-category"></p>
                    <a type="button" class="nav-link active" href="/data_tukang/add"><i class="material-icons">add</i> Tambah Data</a>
                    <p class="card-category"></p>
                </div> --}}

                
                {{-- <div class="card-body"> --}}
                <div class="card-content">

                <div class="table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped"> --}}
                    <table id="datatables" class="table table-bordered table-striped">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        {{-- <th>Telp</th> --}}
                        {{-- <th>Nama Toko</th> --}}
                        {{-- <th>Keterangan Toko</th> --}}
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Alamat</th>
                        {{-- <th>Spesifikasi tukang</th> --}}
                        {{-- <th>Jangkauan Kategori tukang</th> --}}
                        {{-- <th>Hari Buka</th> --}}
                        {{-- <th>Jam Buka</th> --}}
                        {{-- <th>Jam Tutup</th> --}}
                        {{-- <th class="text-center">Foto</th> --}}
                        <th class="text-center">Actions</th>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    <tbody>   
                        @foreach ($tukang as $data_tukang)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_tukang->nama_tukang }}</td>
                                <td>{{ $data_tukang->email_tukang }}</td>
                                <td>{{ $data_tukang->password_tukang }}</td>
                                {{-- <td>{{ $data_tukang->telp_tukang }}</td> --}}
                                {{-- <td>{{ $data_tukang->nama_toko }}</td> --}}
                                {{-- <td>{{ $data_tukang->keterangan_toko }}</td> --}}
                                <td>{{ $data_tukang->latitude_tukang }}</td>
                                <td>{{ $data_tukang->longitude_tukang }}</td>
                                <td>{{ $data_tukang->alamat_tukang }}</td>
                                {{-- <td>{{ $data_tukang->spesifikasi_tukang }}</td> --}}
                                {{-- <td>{{ $data_tukang->jangkauan_kategori_tukang }}</td> --}}
                                {{-- <td> --}}
                                    {{-- {{ $hari_buka_tukang }} --}}
                                    {{-- @foreach ($data_tukang->hari_buka as $value)
                                        {{ $value }},
                                    @endforeach --}}
                                    {{-- @foreach ($data_tukang as $value)
                                        {{ $value['hari_buka'] }},
                                    @endforeach --}}
                                {{-- </td> --}}
                                
                                {{-- <td>{{ $data_tukang->jam_buka }}</td> --}}
                                {{-- <td>{{ $data_tukang->jam_tutup }}</td> --}}
                                {{-- <td>
                                    <img src="{{ url('img_tukang/'.$data_tukang->foto_tukang) }}" style="width: 120px; height: 120px; border-radius: 10px;" class="card-img-top mb-3" alt="...">
                                </td> --}}
                                {{-- <td class="text-center">{{ $data_tukang->foto_tukang }}</td> --}}
                                
                                <td class="td-actions text-center">
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Lihat Data" class="btn btn-info" href="/data_tukang/show/{{ $data_tukang->id_tukang }}"><i class="material-icons">person</i></a>
                              
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success" href="/data_tukang/edit/{{ $data_tukang->id_tukang }}"><i class="material-icons">edit</i></a>
                             
                                    {{-- <button type="button" class="btn btn-xs btn-danger hapus" data-id="{{$data_tukang->id_tukang}}"><i class="fa fa-trash"></i></button> --}}
                                    <a type="button" rel="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="/data_tukang/delete/{{ $data_tukang->id_tukang }}"><i class="material-icons">close</i></a>
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


    {{-- <script>
        $('.hapus').on("click",function() {
		 var id = $(this).attr('data-id');
		 $.ajax({
				url : "{{url('hapuskelas')}}/"+id,
				type: "POST",
				success: function(data)
				{	
					window.location ="{{url('data_tukang')}}";							
				}				
			 });	
	 });
    </script> --}}
@endsection