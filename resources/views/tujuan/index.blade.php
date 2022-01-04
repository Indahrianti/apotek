@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Tujuan
            <a href="{{ route('asal.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tujuan</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($tujuan as $data)

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->tujuan_brangkat}}</td>
                                                <td>
                                                    <form action="{{route('tujuan.destroy', $data->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf

                                                    <a href="{{route('tujuan.edit',$data->id)}}" class="btn btn-success ">Ubah</a>
                                                    <a href="{{route('tujuan.show',$data->id)}}" class="btn btn-warning ">Tampil</a>
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

