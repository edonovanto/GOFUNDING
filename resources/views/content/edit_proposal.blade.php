@extends('layouts.home',['module' => 'Upload'])

@section('content_dashboard')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  @if(Session::has('message'))
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;" data-autohide="false">
      <div class="toast-header">
        <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
          focusable="false" role="img">
          <rect fill="#00ff00" width="100%" height="100%" /></svg>
        <strong class="mr-auto">SUCCESS!</strong>
        <small>1s ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
          {{ Session::get('message') }}
      </div>
    </div>
  </div>
  @endif

      <div class="container">
          <div class="card card-primary">        
                <div class="card-header">
                  <h3 class="card-title">Edit Pengajuan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('uploadEditProposal', ['id' => $upload->id])}}" enctype="multipart/form-data">

                {{csrf_field()}}

                  <div class="card-body">
                    <div class="form-group">
                      <label>Judul Proposal</label>

                      <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan judul proposal" name="judul" value="{{ old('judul', $upload->judul) }}">

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
                      <input type="text" class="form-control" placeholder="Masukkan jumlah yang diajukan" name="jumlah" value="{{ old('jumlah',$upload->jumlah) }}">
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

                    <button type="submit" class="btn btn-success float-right buat" name="button">Edit Proposal</button>
                </form>
              </div>
      </div>


  <script>
      export default {
          mounted() {
              console.log('Component mounted.')
          }
      }
  </script>

  <script>
  $(document).ready(function(){
    $('.toast').toast('show');
  });
  </script>
  @endsection
