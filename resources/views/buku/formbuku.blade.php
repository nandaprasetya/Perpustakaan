@extends('template.template')

@section('title', 'Form Buku')

@section('content')
<div id="formbuku" class="d-flex justify-content-center align-items-center">
    <div class="background-form-buku">
        <div class="inner-background-form-buku"></div>
    </div>
    <div class="py-4 pe-4 ps-1 d-flex flex-column justify-content-center align-items-center">
    <div class="inner-form-buku d-flex flex-column justify-content-center align-items-center">
    <h1>FORM BUKU</h1>
    <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data" class="d-flex flex-column">
        @csrf
        <div class="mb-3 d-flex flex-column">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" id="judul" name="judul" placeholder="Judul">
        </div>
        <div class="mb-3 d-flex">
            <div class="col me-1">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" id="penulis" name="penulis" placeholder="Penulis">
            </div>
            <div class="col mx-1">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" placeholder="Penerbit">
            </div>
            <div class="col ms-1">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="date" name="tahun_terbit" id="">
            </div>
        </div>
        <div class="mb-3 d-flex">
            <div class="col me-2">
                <label for="cover" class="form-label">Cover</label>
                <input type="file" name="cover" id="">
            </div>
            <div class="col ms-2">
                <label for="halaman" class="form-label">Halaman</label>
                <input type="number" id="halaman" name="halaman" placeholder="Jumlah Halaman" id="">
            </div>
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi Buku" rows="3"></textarea>
        </div>
        <div class="mb-3 d-flex flex-column">
        </div>
        <input type="submit" value="KIRIM" class="submit-btn bg-primary">
    </form>
</div>
</div>
</div>
@endsection