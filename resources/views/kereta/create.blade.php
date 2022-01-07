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
                <form Action="{{ route('kereta.store')}}" method="POST">

                                @csrf
                                   <div class="panel-body">
                                       <label>Nama Kereta</label>
                                       <input type="text" class="form-control" name="nama_KA">
                                    </div>

                                    <div class="panel-body">
                                        <label>Asal Berangkat</label>
                                        <select name="asal_id" class="form-control">
                                            @foreach($asal as $data)
                                            <option value="{{$data->id}}">{{$data->asal_brangkat}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    <div class="panel-body">
                                        <label>tujuan Berangkat</label>
                                        <select name="tujuan_id" class="form-control">
                                            @foreach($tujuan as $data)
                                            <option value="{{$data->id}}">{{$data->tujuan_brangkat}}</option>
                                            @endforeach
                                        </select>
                                    </div>  

                                    
                                    <br>
                                    <a href="{{ url('admin/kereta/create') }}"
                                                    class="btn btn-outline-warning">Pesan</a>
                                   <div class="panel-body">
                                       <button type="reset" class="btn btn-warning">Reset</button>
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