@extends('layouts.app')

@section('title', 'Edit Biodata — UTS Pem Web')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] p-6 sm:p-8">
    <h1 class="text-xl font-bold text-slate-900 mb-1">Edit Biodata</h1>
    <p class="text-sm text-slate-500 mb-6">Perbarui biodata {{ $biodata->nama }}.</p>

    <form action="{{ route('biodata.update', $biodata) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('biodata._form')

        <div class="flex gap-3">
            <button type="submit" class="px-5 py-2.5 rounded-lg bg-teal text-white text-sm font-medium hover:bg-teal-dark">Perbarui</button>
            <a href="{{ route('home') }}" class="px-5 py-2.5 rounded-lg border border-slate-300 text-sm text-slate-600 hover:bg-slate-50">Batal</a>
        </div>
    </form>
</div>
@endsection
