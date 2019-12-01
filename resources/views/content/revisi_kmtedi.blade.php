@extends('layouts.home',['module' => 'Upload'])

@section('content_dashboard')
<div class="middlePage">
<div class="page-header">
  <h1 class="logo">Form Revisi Proposal</small></h1>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Tampilan Proposal</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-5" >
<embed src="/upload/{{$upload->file_proposal}}" style="width: 400px;height: 900px;border: none;" /></td>
</div>

<div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
<fieldset>

<form role="form" method="post" action="{{route('revisi')}}" enctype="multipart/form-data">

{{csrf_field()}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi Revisi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="message-text" class="col-form-label" name>Judul Proposal</label>
                <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan judul proposal" name="judul" value="{{$upload->judul}}">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label" name>Pesan (Optional):</label>
                <textarea class="form-control" id="message-text" name="message"></textarea>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Upload Proposal Revisi</label>
                <br>
                <input type="file" class="" name="revisi_proposal">
                @if($errors->has('revisi_proposal'))
                  <div class="text-danger">
                    {{$errors->first('revisi_proposal')}}
                  </div>
                @endif
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="button">Kirim Revisi</button>
        </div>
        </div>
    </div>
</form>
</div>
    
</div>
    
</div>
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
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
@endsection