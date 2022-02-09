@extends('layouts.master')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>List Jurney</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th width="2">No</th>
                            <th>Name Location</th>
                            <th>Category</th>
                            <th>Tempratur</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bandung Zoo Park</td>
                            <td>Rekreasi</td>
                            <td>20 C&#176;</td>
                            <td class="text-center">
                                <a href="{{url('user/perjalanan/detail', 1)}}" class="btn btn-warning btn-sm">Detail</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/datatables.css')}}">
@endpush

@push('js')
    <script src="{{URL::to('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{URL::to('assets/js/tooltip-init.js')}}"></script>
@endpush
