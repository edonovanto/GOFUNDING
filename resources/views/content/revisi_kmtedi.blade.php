@extends('layouts.home',['module' => 'Upload'])

@section('content_dashboard')

<link rel="stylesheet" href="/css/history.css">
    <div class="container">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Proposal Diajukan</h3>
                <div class="card-tools">
                <div class="input-group">
                    <form action="{{ route('histori') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Cari Judul" name="search">
                    </form>
                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>File Proposal</th>
                            <th>Judul Proposal</th>
                            <th>Dana Diajukan</th>
                            <th>Tanggal Pengajuan</th>
                            <!-- <th>Status</th> -->
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><embed src="/upload/{{$upload->file_proposal}}" style="width: 100%;height: 900px;border: none;" /></td>
                            <td>{{ $upload->judul }}</td>             
                            <td>{{ $upload->jumlah }}</td>
                            <td>{{ $upload->created_at }}</td>
                            <!-- <td><span class="tag tag-success">Approved</span></td> -->
                            <td>
                            <a href="{{route('editProposal', ['proposalId' => $upload->id])}}">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#revisi" data-whatever="@getbootstrap">Revisi</button>
                            </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>

    <!-- Modal Revisi-->
    <form role="form" method="post" action="{{route('revisi')}}" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="modal fade" id="revisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>
    </form>

    <!-- Modal Terima -->
    <div class="modal fade" id="terima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Proposal telah diterima dan diteruskan ke Dosen
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection