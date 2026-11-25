@extends('layouts.app')

@section('title', 'FAQs — UTS Pem Web')

@section('content')
<div class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] p-6 sm:p-8">
    <h1 class="text-xl font-bold text-slate-900 mb-6">FAQs</h1>

    <div class="space-y-5">
        <div>
            <h2 class="font-semibold text-slate-900">Bagaimana cara menambah biodata?</h2>
            <p class="text-sm text-slate-500 mt-1">Klik kartu dengan tombol "+" di halaman utama, isi form (nama, NIM, peran, deskripsi, dan foto bila ada), lalu tekan Simpan.</p>
        </div>
        <div>
            <h2 class="font-semibold text-slate-900">Apakah foto wajib diisi?</h2>
            <p class="text-sm text-slate-500 mt-1">Tidak. Kalau foto dikosongkan, kartu akan menampilkan avatar lingkaran berisi inisial nama.</p>
        </div>
        <div>
            <h2 class="font-semibold text-slate-900">Bagaimana cara mengedit atau menghapus biodata?</h2>
            <p class="text-sm text-slate-500 mt-1">Setiap kartu punya tombol Edit dan Hapus. Menghapus akan meminta konfirmasi terlebih dahulu.</p>
        </div>
        <div>
            <h2 class="font-semibold text-slate-900">Apa peran master dan pegawai?</h2>
            <p class="text-sm text-slate-500 mt-1">Master mengerjakan front-end dan mengirimkan hasil ke grup, sedangkan pegawai mengerjakan back-end pada UTS ini.</p>
        </div>
    </div>
</div>
@endsection
