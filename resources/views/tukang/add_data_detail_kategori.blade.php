@extends('adminpro.main')

@section('title', 'Tambah Data')

@section('page_name', 'Tambah Data')

@section('content')
        
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">

            <div class="card-header card-header-tabs" data-background-color="purple">
              <h4 class="card-title ">Tambah Data</h4>
            </div>
                  
            <div class="card-body">

              <form method="post" action="/data_tukang/show/kategori/store" class="form-horizontal">
                {{ csrf_field() }}

                <div class="card-content ">
                          
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Nama tukang</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" id="category" type="text" value="{{ $data->nama_tukang }}" disabled />
                        <input class="form-control" name="id_tukang" id="category" type="hidden" value="{{ $data->id_tukang  }}"  />
                      </div>
                    </div>
                  </div>  

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Kategori</label>
                    <div class="col-lg-5 col-md-6 col-sm-7"> 
                      <div class="form-group" >
                        <select class="form-control selectpicker" data-style="btn btn-primary btn-round" title="Kategori" name="id_kategori">
                          @foreach ($kategori as $data_kategori)
                            <option value="{{ $data_kategori->id_kategori }}">{{ $data_kategori->nama_kategori }}</option>
                          @endforeach
                        </select>
                      </div> 
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Keterangan</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <textarea class="form-control" rows="3" name="keterangan_kategori" placeholder="{{ __('Keterangan tambahan mengenai service') }}"></textarea>                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Keunggulan</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="keunggulan" id="category" type="text" placeholder="{{ __('Contoh : Rapih dan Berpengalaman') }}"  />                                  
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 label-on-left">Ongkos Tukang/Hari (Rp)</label>
                    <div class="col-sm-7">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="ongkos_tukang" id="category" type="number" placeholder="{{ __('100xxx') }}"   />                                  
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <label class="col-sm-2 label-on-left">Minimal lama hari penyewaan</label>
                    <div class="col-sm-2">
                      <div class="form-group label-floating is-empty">
                        <input class="form-control" name="perkiraan_lama_waktu_pengerjaan" id="category" type="number" placeholder="{{ __('Contoh : 1') }}" />                                  
                      </div>
                    </div>
                  </div>

                  <div class="form-footer text-right">
                    <a type="button" class="btn btn-white pull-fill" href="/data_tukang/show/{{ $data->id_tukang }}">Kembali</a>
                    <button type="submit" onclick="return confirm('Ingin menambahkan data?')" class="btn btn-primary pull-fill">Simpan</button>
                  </div>     
            
                </div>
              </form>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection