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
                            <th>Judul Proposal</th>
                            <th>Dana Diajukan</th>
                            <th>Tanggal Pengajuan</th>
                            <!-- <th>Status</th> -->
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($upload as $row)
                        <tr>
                            <td>{{ $row->judul }}</td>             
                            <td>{{ $row->jumlah }}</td>
                            <td>{{ $row->created_at }}</td>
                            <!-- <td><span class="tag tag-success">Approved</span></td> -->
                            <td>
                            <a href="upload/{{$row->file_proposal}}" download="{{$row->file_proposal}}">
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" name="download">Download PDF</button>
                            </a>
                            </td>
                            <td>
                            <a href="{{route('terima', ['proposalId' => $row->id])}}">
                                <button type="button" class="fas fa-times btn btn-success" data-toggle="modal">Terima</button>
                            </a>
                            <button type="button" class="fas fa-times btn btn-danger">Tolak</button>
                            <a href="{{route('revisiProposal', ['proposalId' => $row->id])}}">
                                <button type="button" class="btn btn-warning">Revisi</button>
                            </a>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>

    <div class="row">
          <div class="col-12">
              {{ $upload->links() }}
          </div>
    </div>

    <!-- Modal Terima -->
    <!-- <div class="modal fade" id="terima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div> -->


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
@endsection