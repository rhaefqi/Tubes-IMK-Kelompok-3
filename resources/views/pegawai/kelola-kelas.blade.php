@extends('layouts.main-pegawai')

@section('container')
<h1 class="text-primary font-open font-bold text-5xl mt-5 ml-8">
    <span>Kelola kategori Buku</span>
</h1>
<livewire:alert-success />
<livewire:tabel-kategori />
@endsection