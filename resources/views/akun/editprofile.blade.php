@extends('layout.dash')

@section('title')
<div class="col-md-5 align-self-center">
    <h3 class="text-themecolor">Edit Profil</h3>
</div>
<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Profil</li>
    </ol>
</div>
@endsection

@section('content')
<form action="#" class="form-horizontal form-bordered">
  <div class="form-body">
      <div class="form-group row">
          <label class="control-label text-right col-md-2">Nama Depan</label>
          <div class="controls">
              <input type="text" placeholder="Markam" class="form-control"> </div>
      </div>
      <div class="form-group row">
          <label class="control-label text-right col-md-2">Nama Belakang</label>
          <div class="col-md-10">
              <input type="text" placeholder="medium" class="form-control"> </div>
      </div>
      <div class="form-group row">
          <label class="control-label text-right col-md-2">Jenis Kelamin</label>
          <div class="col-md-10">
              <select class="form-control custom-select">
                  <option value="">Laki-Laki</option>
                  <option value="">Perempuan</option>
              </select>
          </div>
      </div>
      <div class="form-group row">
          <label class="control-label text-right col-md-2">Email</label>
          <div class="col-md-10">
              <input type="email" placeholder="medium@example.com" class="form-control"> </div>
      </div>
      <div class="form-group row">
          <label class="control-label text-right col-md-2">No. Telp</label>
          <div class="col-md-10">
              <input type="text" placeholder="(+62)" class="form-control"> </div>
      </div>
      <div class="form-group row">
          <label class="control-label text-right col-md-2">Program Studi</label>
          <div class="col-md-10">
              <select class="form-control custom-select">
                  <option value="">D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                  <option value="">D4 Teknologi Rekayasa Perangkat Lunak</option>
                  <option value="">D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                  <option value="">D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                  <option value="">D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
              </select>
          </div>
      </div>
  </div>
  <div class="form-actions">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="offset-sm-9 col-md-10">
                      <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                      <button type="button" class="btn btn-inverse">Cancel</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</form>
@endsection