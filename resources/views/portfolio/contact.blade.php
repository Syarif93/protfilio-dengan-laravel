@extends('layouts.main')

@section('title', 'Kontak')
@section('main')
    <div class="container-contact">
        <h1 class="lg-heading">
            Hubungi <span class="text-secondary">Saya</span>
        </h1>
        <h2 class="sm-heading">
            Hubungi saya untuk informasi lengkap...
        </h2>
        <div class="form-contact">
            <div class="form-input">
                <h3 class="text-secondary">Hubungi Saya</h3>
                <input type="text" placeholder="Nama">
                <hr>
                <input type="text" placeholder="Email">
                <hr>
                <textarea name="mesage" placeholder="Masukkan pesan" rows="10"></textarea>
                <hr>
            </div>
        </div>
    </div>
@endsection