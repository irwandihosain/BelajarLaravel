@extends('dashboard/layouts/main')

@section('container')


<div class="row justify-content-center mt-4">
    <div class="col-md-3 text-center">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Generate Qr</h1>
            <div class="form-floating">
                <input type="text" name="qr_text" class="form-control @error('nim') is-invalid @enderror" id="qr_text" placeholder="Nim" autofocus required value="{{ old('email') }}">
                <label for="qr_text">Nim</label>
            </div>
            <button id="generate_code" class="w-100 btn btn-lg btn-primary mt-4" type="submit">Generate Qr Code</button>
            <img src="" alt="qr_code" id="qr_img">
            <button id="send" class="w-100 btn btn-lg btn-primary mt-4" type="submit">kirim</button>
            <form action="/generateqrmhs" method="post" enctype="multipart/form-data">
                @csrf
            </form>
        </main>
    </div>
</div>

@endsection