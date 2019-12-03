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
                            <th>Dana Diajukan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($upload as $row)
                        <tr>
                            <td>{{ $row->judul }}</td>             
                            <td>{{ $row->jumlah }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td><span class="tag tag-success">{{ $row->status }}</span></td>
                            <td>
                            <a href="{{route('hapusProposal', ['proposalId' => $row->id])}}">
                                <button type="button" class="btn btn-danger float-right" style="margin-right: 5px;">Batalkan Pengajuan</button>
                            </a>
                            <!-- <a href="{{route('editProposal', ['proposalId' => $row->id])}}">
                                <button type="button" class="btn btn-warning float-right" style="margin-right: 5px;">Edit PDF</button>
                            </a> -->
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