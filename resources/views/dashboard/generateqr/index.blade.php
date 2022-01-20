@extends('dashboard/layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card align-items-center" style=" width: 18rem;">
                <div class="card-body">
                    <a href="/dashboard/generateqr/mahasiswa"> Generate QR Mahasiswa</a>
                </div>
            </div>

            <div class="card align-items-center mt-4" style=" width: 18rem;">
                <div class="card-body">
                    <a href="/dashboard/generateqr/dosen"> Generate QR Dosen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection