@extends('layouts.home')

@section('content_dashboard')
      <div class="container">
          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Buat Pengajuan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('upload')}}">

                {{csrf_field()}}

                  <div class="card-body">
                    @if($errors->has('judul'))
                        <span class="invalid-feedback" role="alert">
                          <strong>Judul tidak boleh dikosongkan</strong>
                        </span>
                    @endif
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul Proposal</label>
                      <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan judul proposal" name="judul">
                    </div>
                    

                    <div class="input-group">
                    @if($errors->has('judul'))
                        <span class="invalid-feedback" role="alert">
                          <strong>Jumlah tidak boleh dikosongkan</strong>
                        </span>
                    @endif
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Masukkan jumlah yang diajukan" name="jumlah">
                      <div class="input-group-append">
                        <span class="input-group-text">,00</span>
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="file_proposal">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Saya telah mengisi format pengisian dengan benar</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                    <button type="submit" class="btn btn-success float-right buat">Ajukan</button>
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
  @endsection
