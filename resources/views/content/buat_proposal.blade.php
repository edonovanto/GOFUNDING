@extends('layouts.home',['module' => 'Upload'])

@section('content_dashboard')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

      <div class="container">
          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Buat Pengajuan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('upload')}}" enctype="multipart/form-data">

                {{csrf_field()}}

                  <div class="card-body">
                    <div class="form-group">
                      <label>Judul Proposal</label>

                      <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan judul proposal" name="judul" value="{{ old('judul') }}">

                      @if($errors->has('judul'))
                      <div class="text-danger">
                        {{$errors->first('judul')}}
                      </div>
                      @endif

                    </div>
                    

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Masukkan jumlah yang diajukan" name="jumlah" value="{{ old('jumlah') }}">
                      <div class="input-group-append">
                        <span class="input-group-text">,00</span>
                      </div>
                    </div>
                    
                      @if($errors->has('jumlah'))
                      <div class="text-danger">
                        {{$errors->first('jumlah')}}
                      </div>
                      @endif

                    <br>

                    <div class="form-group">
                      <label for="exampleInputFile">File input (max 2mb)</label>
                        <div class="">
                          <input type="file" class="" name="file_proposal">
                        </div>
                        @if($errors->has('file_proposal'))
                        <div class="text-danger">
                        {{$errors->first('file_proposal')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Saya telah mengisi format pengisian dengan benar </label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                    <button type="submit" class="btn btn-success float-right buat" name="button">Ajukan</button>
                </form>
              </div>
              
      @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
      </div>


  <script>
      export default {
          mounted() {
              console.log('Component mounted.')
          }
      }
  </script>
  @endsection
