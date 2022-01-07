@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Asal
            <a href="{{ route('kereta.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama kereta</th>
                                                <th>Asal Keberangkatan</th>
                                                <th>Tujuan Keberangkatan</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($kereta as $data)

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->nama_KA}}</td>
                                                <td>{{ $data->asals->asal_brangkat}}</td>
                                                <td>{{ $data->tujuans->tujuan_brangkat}}</td>

                                                <td>
                                                    <form action="{{route('kereta.destroy', $data->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf

                                                    <a href="{{route('kereta.edit',$data->id)}}" class="btn btn-success">Ubah</a>
                                                    <a href="{{route('kereta.show',$data->id)}}" class="btn btn-warning">Tampil</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@endsection
