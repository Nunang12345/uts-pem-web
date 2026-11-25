@extends('layouts.app')

@section('title', 'Features — UTS Pem Web')

@section('content')
<div class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] p-6 sm:p-8">
    <h1 class="text-xl font-bold text-slate-900 mb-2">Features</h1>
    <p class="text-sm text-slate-500 mb-6">Fitur-fitur yang tersedia di aplikasi biodata UTS Pemrograman Web ini.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="rounded-xl border border-slate-200 p-4">
            <h2 class="font-semibold text-slate-900">CRUD Biodata</h2>
            <p class="text-sm text-slate-500 mt-1">Tambah, lihat, ubah, dan hapus biodata anggota tim dengan mudah.</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-4">
            <h2 class="font-semibold text-slate-900">Upload Foto</h2>
            <p class="text-sm text-slate-500 mt-1">Setiap biodata bisa dilengkapi foto profil. Kalau belum ada foto, tampil avatar inisial otomatis.</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-4">
            <h2 class="font-semibold text-slate-900">Peran Master &amp; Pegawai</h2>
            <p class="text-sm text-slate-500 mt-1">Setiap anggota punya peran: master (front-end) atau pegawai (back-end).</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-4">
            <h2 class="font-semibold text-slate-900">Validasi &amp; Notifikasi</h2>
            <p class="text-sm text-slate-500 mt-1">Form tervalidasi dan setiap aksi berhasil menampilkan pesan notifikasi hijau.</p>
        </div>
    </div>
</div>
@endsection
