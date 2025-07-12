@extends('layout')

@section('content')
<div class="bg-pink-50/40 border border-pink-200 shadow-lg rounded-xl p-6 space-y-4 animate-fade-in">
  <h2 class="text-3xl font-bold text-pink-700">{{ $post->title }}</h2>
  <div class="text-gray-700 text-justify leading-relaxed">
    {{ $post->content }}
  </div>
  
  <div class="mt-6">
    <a href="{{ route('posts.index') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-full shadow transition duration-200">
      ← Kembali ke Daftar
    </a>
  </div>
</div>
@endsection
