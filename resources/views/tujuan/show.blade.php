@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('tujuan.show', $tujuan->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                      <div class="panel-body">
                        <label>Tujuan Berangkat</label>
                        <input type="text" class="form-control" name="tujuan_brangkat" value="{{$tujuan->tujuan_brangkat}}">
                    </div>
                    <div class="form-group">
                             <br>
                            <a href="{{ url('admin/tujuan') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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