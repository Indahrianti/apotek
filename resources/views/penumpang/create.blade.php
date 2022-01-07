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
                <form Action="{{ route('penumpang.store')}}" method="POST">

                                @csrf
                                   <div class="panel-body">
                                       <label>Nama Penumpang</label>
                                       <input type="text" class="form-control" name="nama_penumpang">
                                    </div>

                                          <div class="panel-body">
                                            <label>Kereta Id</label>
                                            <select name="kereta_id" class="form-control">
                                                @foreach($kereta as $data)
                                                <option value="{{$data->id}}">{{$data->nama_KA}}</option>
                                                @endforeach
                                            </select>

                                         </div> 

                                    <div class="panel-body">
                                       <label>Asal Berangkat</label>
                                       <input type="text" class="form-control" name="asal">
                                    </div>

                                    <div class="panel-body">
                                       <label>Tujuan Berangkat</label>
                                       <input type="text" class="form-control" name="tujuan">
                                    </div>

                                       <div class="panel-body">
                                        <label>Kelas</label>
                                        <select name="kelas" class="form-control">

                                            <option value="ekonomi">Ekonomi</option>
                                            <option value="bisnis">Bisnis</option>

                                        </select>
                                    </div>
                                    <br>
                                    <a href="{{ url('admin/transaksi/create') }}"
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