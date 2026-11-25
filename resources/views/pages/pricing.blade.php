@extends('layouts.app')

@section('title', 'Pricing — UTS Pem Web')

@section('content')
<div class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] p-6 sm:p-8 text-center">
    <h1 class="text-xl font-bold text-slate-900 mb-2">Pricing</h1>
    <p class="text-sm text-slate-500 mb-6">Aplikasi ini dibuat untuk keperluan UTS dan gratis digunakan oleh tim.</p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
        <div class="rounded-xl border border-slate-200 p-5">
            <h2 class="font-semibold text-slate-900">Gratis</h2>
            <p class="text-2xl font-bold text-teal mt-2">Rp0</p>
            <p class="text-sm text-slate-500 mt-2">CRUD biodata, upload foto, dan semua fitur dasar.</p>
        </div>
        <div class="rounded-xl border-2 border-teal p-5">
            <h2 class="font-semibold text-slate-900">Tim UTS</h2>
            <p class="text-2xl font-bold text-teal mt-2">Rp0</p>
            <p class="text-sm text-slate-500 mt-2">Semua fitur gratis, khusus untuk anggota tim UTS ini.</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-5">
            <h2 class="font-semibold text-slate-900">Dosen</h2>
            <p class="text-2xl font-bold text-teal mt-2">Rp0</p>
            <p class="text-sm text-slate-500 mt-2">Akses penuh untuk penilaian dan pemeriksaan hasil UTS.</p>
        </div>
    </div>
</div>
@endsection
