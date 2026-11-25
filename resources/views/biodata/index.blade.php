@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- Kartu tambah biodata --}}
    <a href="{{ route('biodata.create') }}" class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] min-h-[420px] flex items-center justify-center hover:shadow-[0_4px_20px_rgba(0,0,0,0.10)] transition-shadow">
        <span class="w-28 h-28 rounded-full flex items-center justify-center shadow-inner" style="background: radial-gradient(circle at 35% 30%, #a5d6a7, #66bb6a 55%, #4caf50);">
            <span class="text-white text-6xl font-light leading-none select-none">+</span>
        </span>
    </a>

    {{-- Kartu biodata --}}
    @foreach ($biodatas as $biodata)
        <article class="bg-white rounded-2xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] overflow-hidden flex flex-col">
            @if ($biodata->foto)
                <img src="{{ asset('storage/' . $biodata->foto) }}" alt="{{ $biodata->nama }}" class="w-full aspect-[5/4] object-cover object-top">
            @else
                <div class="w-full aspect-[5/4] bg-teal-50 flex items-center justify-center">
                    <span class="w-32 h-32 rounded-full bg-teal text-white flex items-center justify-center text-5xl font-bold">{{ $biodata->inisial() }}</span>
                </div>
            @endif

            <div class="p-5 flex flex-col flex-1">
                <h2 class="font-bold text-lg text-slate-900 lowercase">{{ $biodata->nama }}</h2>
                <p class="text-sm text-slate-500 mt-1 leading-relaxed">{{ $biodata->deskripsi }}</p>
                <p class="text-xs text-teal mt-2 font-semibold uppercase tracking-wide">{{ $biodata->peran }} &middot; NIM {{ $biodata->nim }}</p>

                <hr class="my-4 border-slate-200 mt-auto pt-0">
                <div class="flex gap-2">
                    <a href="{{ route('biodata.edit', $biodata) }}" class="px-3 py-1.5 text-sm rounded-md border border-blue-500 text-blue-600 hover:bg-blue-50">Edit</a>
                    <form action="{{ route('biodata.destroy', $biodata) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus biodata {{ $biodata->nama }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1.5 text-sm rounded-md border border-red-400 text-red-500 hover:bg-red-50">Hapus</button>
                    </form>
                </div>
            </div>
        </article>
    @endforeach

</div>
@endsection
