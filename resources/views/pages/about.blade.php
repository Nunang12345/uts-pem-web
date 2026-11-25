@extends('layouts.app')

@section('title', 'About — UTS Pem Web')

@section('content')
<div class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] p-6 sm:p-8">
    <h1 class="text-xl font-bold text-slate-900 mb-2">About</h1>
    <p class="text-sm text-slate-500 leading-relaxed">
        Aplikasi biodata ini dibuat untuk Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.
        Aplikasi menampilkan daftar biodata anggota tim beserta peran masing-masing — master dan pegawai —
        lengkap dengan fitur tambah, edit, hapus, dan upload foto.
    </p>
    <p class="text-sm text-slate-500 leading-relaxed mt-3">
        Dibangun dengan Laravel 12 dan Tailwind CSS. Dibuat sejujurnya oleh tim, tanpa mencotek dari tim lain.
    </p>
</div>
@endsection
