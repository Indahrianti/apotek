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
            <a href="{{ route('transaksi.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penumpang</th>
                            <th>jumlah</th>
                            <th>no telepon</th>
                            <th>total</th>
                            <th>Action</th>
                        </t>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach($transaksi as $data)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->penumpangs->nama_penumpang}}</td>
                            <td>{{ $data->jumlah}}</td>
                            <td>{{ $data->no_telp}}</td>
                            <td>{{ $data->total}}</td>
                            <td>

                                <form action="{{route('transaksi.destroy', $data->id)}}" method="post">
                                @method('delete')
                                @csrf

                                <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-success">Ubah</a>
                                <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-warning">Tampil</a>
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
