@extends('layouts.home', ['module' => 'Upload'])

@section('content_dashboard')
    <div class="container">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">History Pengajuan Proposal</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Judul Proposal</th>
                            <th>Jumlah Dana</th>
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

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

@endsection