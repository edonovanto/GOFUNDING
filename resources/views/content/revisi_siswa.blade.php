@extends('layouts.home', ['module' => 'Upload'])

@section('content_dashboard')
<link rel="stylesheet" href="/css/history.css">
    <div class="container">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">History Pengajuan Proposal</h3>
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
                            <th>Pesan Revisi</th>
                            <th>Tanggal Revisi</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($upload as $row)
                        <tr>
                            <td>{{ $row->judul }}</td>             
                            <td>{{ $row->message }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                            <a href="revisi/{{$row->revisi_proposal}}" download="{{$row->revisi_proposal}}">
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" name="download">Download Revisi</button>
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

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

@endsection