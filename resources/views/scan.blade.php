@extends('layouts/main')

@section('container')

@if(session()->has('success'))
<div class="col-lg-7">
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
</div>
@endif

<div class="container">
    <div class="row">
        <form action="/ambilscan" method="POST">
            @csrf
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <label>Scan Qr Code</label>
                <input type="text" id="text" name="nim" readonly placeholder="scan qrcode" class="form-control">
            </div>
            <button class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>
@endsection