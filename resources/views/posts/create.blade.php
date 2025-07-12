@extends('layout')

@section('content')
<div class="bg-pink-50/40 backdrop-blur-md border border-pink-200 rounded-xl shadow-lg p-6 animate-fade-in">
  <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
      <label class="block font-semibold text-pink-700">Judul</label>
      <input type="text" name="title"
        class="w-full border-2 border-pink-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
        placeholder="Masukkan judul post..." required>
    </div>

    <div>
      <label class="block font-semibold text-pink-700">Konten</label>
      <textarea name="content" rows="5"
        class="w-full border-2 border-pink-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
        placeholder="Tulis isi post di sini..." required></textarea>
    </div>

    <div class="flex justify-between items-center">
      <button type="submit"
        class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-full shadow transition duration-200">
        💾 Simpan Post
      </button>
      <a href="{{ route('posts.index') }}"
        class="text-pink-600 underline hover:text-pink-800 transition duration-150">← Kembali</a>
    </div>
  </form>
</div>
@endsection
