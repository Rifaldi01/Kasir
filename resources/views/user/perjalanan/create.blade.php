@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Create Journey</h5>
                </div>
                <div class="card-body">
                    <form action="" method="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" >Name Location</label>
                                <input class="form-control" type="text" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="validationCustomUsername">Category</label>
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option hidden>---Select---</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="validationCustomUsername">Tempratur</label>
                                <input class="form-control"  type="number" placeholder="C&#176;" required="">
                            </div>
                        </div>
                        <span><label class="form-label">Location</label></span>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option value="AL">Provinsi</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option value="AL">Kota</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option value="AL">Kecamatan</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option value="AL">Desa</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <input type="text" class="form-control" placeholder="Rt/Rw" >
                            </div>
                        </div>
                        <span><label class="form-label">Tanggal</label></span>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Tanggal">
                            </div>
                            <div class="col-md-3">
                                <input type="time" class="form-control" placeholder="Waktu">
                            </div>
                        </div>
                        <button class="btn btn-primary float-end" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/select2.css')}}">
@endpush

@push('js')
    <script src="{{URL::to('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{URL::to('assets/js/select2/select2-custom.js')}}"></script>
@endpush
