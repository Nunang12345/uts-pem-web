@if ($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 mb-5">
        <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="nama" class="block text-sm font-medium text-slate-700 mb-1">Nama</label>
    <input type="text" name="nama" id="nama" value="{{ old('nama', $biodata->nama ?? '') }}" required
        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal focus:border-teal" placeholder="Nama lengkap">
</div>

<div class="mb-4">
    <label for="nim" class="block text-sm font-medium text-slate-700 mb-1">NIM</label>
    <input type="text" name="nim" id="nim" value="{{ old('nim', $biodata->nim ?? '') }}" required
        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal focus:border-teal" placeholder="12.11.0000">
</div>

<div class="mb-4">
    <label for="peran" class="block text-sm font-medium text-slate-700 mb-1">Peran</label>
    <select name="peran" id="peran" required
        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-teal focus:border-teal">
        <option value="">-- Pilih peran --</option>
        <option value="master" {{ old('peran', $biodata->peran ?? '') === 'master' ? 'selected' : '' }}>Master</option>
        <option value="pegawai" {{ old('peran', $biodata->peran ?? '') === 'pegawai' ? 'selected' : '' }}>Pegawai</option>
    </select>
</div>

<div class="mb-4">
    <label for="deskripsi" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" rows="4" required
        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal focus:border-teal" placeholder="Tulis deskripsi biodata...">{{ old('deskripsi', $biodata->deskripsi ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label for="foto" class="block text-sm font-medium text-slate-700 mb-1">Foto</label>
    @if (!empty($biodata->foto))
        <img src="{{ asset('storage/' . $biodata->foto) }}" alt="{{ $biodata->nama }}" class="w-32 h-32 object-cover rounded-lg mb-2">
        <p class="text-xs text-slate-500 mb-1">Foto saat ini — pilih file baru untuk menggantinya.</p>
    @endif
    <input type="file" name="foto" id="foto" accept="image/*"
        class="w-full text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-teal file:text-white hover:file:bg-teal-dark">
    <p class="text-xs text-slate-400 mt-1">JPG, JPEG, PNG, atau WebP, maks. 2 MB. Boleh dikosongkan.</p>
</div>
