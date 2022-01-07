@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                <form Action="{{ route('asal.store')}}" method="POST">

                                @csrf
                                   <div class="panel-body">
                                       <label>Asal Berangkat</label>
                                       <input type="text" class="form-control" name="asal_brangkat">
                                    </div>

                                    
                                    <br>
                                    <a href="{{ url('admin/asal') }}"
                                                    class="btn btn-outline-warning">Kembali</a>
                                   <div class="panel-body">
                                       <button type="submit" class="btn btn-primary">Tambah</button>
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