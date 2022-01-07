@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('penumpang.show', $penumpang->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <label>Nama Penumpang</label>
                        <input type="text" class="form-control" name="nama_penumpang" value="{{$penumpang->nama_penumpang}}">
                    </div>
                    <div class="panel-body">
                        <label>Nama Kereta</label>
                        <input type="text" class="form-control" name="kereta_id" value="{{$penumpang->keretas->nama_KA}}">
                    </div>
                    <div class="panel-body">
                        <label>Asal Berangkat</label>
                        <input type="text" class="form-control" name="asal" value="{{$penumpang->asal}}">
                    </div>
                    <div class="panel-body">
                        <label>Tujuan Berangkat</label>
                        <input type="text" class="form-control" name="tujuan" value="{{$penumpang->tujuan}}">
                    </div>
                    <div class="panel-body">
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$penumpang->kelas}}">
                    </div>
                    <div class="form-group">
                             <br>
                            <a href="{{ url('admin/penumpang') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                     </form>
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