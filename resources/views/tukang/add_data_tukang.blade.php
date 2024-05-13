@extends('adminpro.main')
{{-- @extends('adminlayouts.main') --}}

@section('title', 'Tambah Data tukang')

@section('page_name', 'Tambah Data tukang')

@section('content')
        

  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-8">
          <div class="card">
                <form method="post" action="/data_tukang/store" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}
                  <div class="card-header card-header-tabs" data-background-color="purple">
                      <h4 class="card-title">Tambah Data tukang</h4>
                  </div>
                  <div class="card-content">
                    
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Nama</label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="nama_tukang" type="text" placeholder="Nama tukang"  autofocus />
                            </div>
                        </div>
                    </div>
  
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Email <small>*</small></label>
                        <div class="col-sm-7">
                            <div class="form-group label-floating is-empty">
                                <input class="form-control" name="email_tukang" type="email" placeholder="name@mail.com" required="true"  />
                            </div>
                        </div>
                    </div>
   
                    <div class="row">
                      <label class="col-sm-2 label-on-left">Password <small>*</small></label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="password_tukang" type="password" placeholder="xxxxxx"  required="true" />
                          </div>
                      </div>
                    </div>
  
                    <div class="row">
                      <label class="col-sm-2 label-on-left">No. Telp</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="telp_tukang" type="text" placeholder="08xxxxxx"   />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Nama Jasa</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="nama_jasa" type="text" placeholder="{{ __('Nama Jasa') }}"   />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Keterangan Jasa</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <textarea class="form-control" rows="3" name="keterangan_jasa" placeholder="{{ __('Keterangan Jasa') }}"></textarea>

                              {{-- <input class="form-control" name="keterangan_toko" type="text" placeholder="{{ __('Keterangan Toko') }}"   /> --}}
                          </div>
                      </div>
                    </div>
  
                    <div class="row">
                      <label class="col-sm-2 label-on-left">Latitude</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="latitude_tukang" type="text" placeholder="{{ __('Latitude') }}"   />
                          </div>
                      </div>
                    </div>
  
                    <div class="row">
                      <label class="col-sm-2 label-on-left">Longitude</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="longitude_tukang" type="text" placeholder="{{ __('Longitude') }}"   />
                          </div>
                      </div>
                    </div>
  
                    <div class="row">
                      <label class="col-sm-2 label-on-left">Alamat</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="alamat_tukang" type="text" placeholder="{{ __('Alamat') }}"   />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Spesifikasi tukang</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="spesifikasi_tukang" type="text" placeholder="{{ __('Spesifikasi tukang') }}"   />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 label-on-left">Jangkauan Kategori tukang</label>
                      <div class="col-sm-7">
                          <div class="form-group label-floating is-empty">
                              <input class="form-control" name="jangkauan_kategori_tukang" type="text" placeholder="{{ __('Jangkauan Kategori tukang') }}"   />
                          </div>
                      </div>
                    </div>

                    <div class="row">
                    <label class="col-sm-2 label-on-left">Foto</label>
  
                        <div class="col-md-4 col-sm-4">
                          <br>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ url('adminpro/assets/img/image_placeholder.jpg') }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-primary btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto_tukang" />
                                    </span>
  
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div> 
                    </div>
  
                    
                    <div class="form-footer text-right">
                      <div class="checkbox pull-left">
                        <div class="category form-category">
                          <small>*</small> Required fields
                        </div>
                      </div>
                      <a type="button" class="btn btn-white pull-fill" href="/data_tukang">Kembali</a>
                      <button type="submit" class="btn btn-primary pull-fill">Simpan</button>
                    </div>
  
                    
                  </div>
                  </div>
              </form>
          </div>
      </div>



        {{-- <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                  <p class="card-category"></p>
                  <h4 class="card-title ">Tambah Data tukang</h4>
                  <p class="card-category"></p>
                  </div>
                <div class="card-body">
      
                    <form method="post" action="/data_tukang/store" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="card-body ">

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_tukang" id="category" type="text" placeholder="{{ __('Nama') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="email_tukang" id="category" type="email" placeholder="{{ __('Email') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="password_tukang" id="category" type="password" placeholder="{{ __('Password') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('No. Telp') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="telp_tukang" id="category" type="number" placeholder="{{ __('08222xxxxxxx') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Nama Toko') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="nama_toko" id="category" type="text" placeholder="{{ __('Nama Toko') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Keterangan Toko') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <textarea class="form-control" rows="3" name="keterangan_toko" placeholder="{{ __('Keterangan Toko') }}"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Latitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="latitude_tukang" id="category" type="text" placeholder="{{ __('Latitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Longitude') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="longitude_tukang" id="category" type="text" placeholder="{{ __('Longitude') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Alamat') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="alamat_tukang" id="category" type="text" placeholder="{{ __('Alamat') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Spesifikasi tukang') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="spesifikasi_tukang" id="category" type="text" placeholder="{{ __('Spesifikasi tukang') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Jangkauan Kategori tukang') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="jangkauan_kategori_tukang" id="category" type="text" placeholder="{{ __('Jangkauan Kategori tukang') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Hari Buka') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              
                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Senin">
                                    Senin
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Selasa">
                                    Selasa
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Rabu">
                                    Rabu
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Kamis">
                                    Kamis
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Jumat">
                                    Jum'at
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Sabtu">
                                    Sabtu
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                              <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="hari_buka[]" type="checkbox" value="Minggu">
                                    Minggu
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>

                        

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Jam Buka') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="jam_buka" id="category" type="time" placeholder="{{ __('Jam Buka') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-3 col-form-label">{{ __('Jam Tutup') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <input class="form-control" name="jam_tutup" id="category" type="time" placeholder="{{ __('Jam Tutup') }}"   />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label for="image" class="col-sm-3 col-form-label">Foto tukang</label>
                          <div class="col-sm-7">
                            <input id="gambar_kategori" type="file" class="form-control" name="foto_tukang">
                            <img src="#" id="category-img-tag" width="300px" />   <!--for preview purpose -->
                          </div>
                        </div>    
          

                      </div>
                          
                          <button type="submit" class="btn btn-primary float-right">Simpan</button>
                          <a type="button" class="btn btn-secondary float-right" href="/data_tukang">Kembali</a>
                      </form>
                      
                </div>
            
              </div>
            </div>
        </div> --}}


    </div>
  </div>

@endsection

