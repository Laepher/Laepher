@extends('layout.main')

@section("content")
    <div class="container mx-5">
        <h4>Tambah Buku</h4>
        <form method="post" action="{{ route('buku.store')}}">
            @csrf
            <div>Judul
                <input type="text" name="judul">
            </div>
            <div>Penulis
                <input type="text" name="penulis">
            </div>
            <div>Harga
                <input type="text" name="harga">
            </div>
            <div>Tanggal Terbit
                <input type="date" name="tgl_terbit">
            </div>
            <div>
                <button class="btn btn-warning" type="submit">Simpan</button>
                <a class="btn btn-danger" href="/buku">Batal</a>
            </div>
        </form>
    </div>
