@extends('layout.main')
@section('container')
    <div class="container mx-5">
        <h4>Edit Buku</h4>
        <form method="post" action="{{ route('buku.update', $data_buku->id)}}">
            @csrf
            <div>Judul
                <input type="text" name="judul" value="{{$data_buku->judul}}">
            </div>
            <div>Penulis
                <input type="text" name="penulis" value="{{$data_buku->penulis}}">
            </div>
            <div>Harga
                <input type="text" name="harga" value="{{$data_buku->harga}}">
            </div>
            <div>Tanggal Terbit
                <input type="date" name="tgl_terbit" value="{{$data_buku->tgl_terbit}}">
            </div>
            <div>
                <button class="btn btn-warning" type="submit">Simpan</button>
                <a class="btn btn-danger" href="/buku">Batal</a>
            </div>
        </form>
    </div>
