@extends('dashboard/layouts/main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5 mt-4">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Create Dosen</h1>
            <form action="/createdsn" method="post">
                @csrf

                <div class="form-floating">
                    <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="nama" required value="{{ old('nama') }}">
                    <label for="nama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="nid" class="form-control @error('nid') is-invalid @enderror" id="nid" placeholder="nid" required value="{{ old('nid') }}">
                    <label for="nid">Nid</label>
                    @error('nid')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>

        </main>
    </div>
</div>
@endsection