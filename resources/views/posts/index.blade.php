@extends('layout')

@section('content')
<a href="{{ route('posts.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-full mb-6 inline-block shadow transition duration-200">
  + Tambah Post
</a>

<div class="bg-white/70 backdrop-blur-md border border-pink-200 rounded-xl shadow-lg p-4">
  <table class="w-full table-auto text-sm text-gray-700">
    <thead>
      <tr class="bg-pink-100 text-pink-800">
        <th class="px-4 py-2 text-left">Judul</th>
        <th class="px-4 py-2 text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post)
      <tr class="hover:bg-pink-50">
        <td class="border-t px-4 py-3">{{ $post->title }}</td>
        <td class="border-t px-4 py-3 text-center space-x-2">
          <a href="{{ route('posts.show', $post->id) }}" class="inline-block text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded-full shadow-sm transition duration-200">
            Detail
          </a>
          <a href="{{ route('posts.edit', $post->id) }}" class="inline-block text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded-full shadow-sm transition duration-200">
            Edit
          </a>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus post ini?')"
              class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-full shadow-sm transition duration-200">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="2" class="px-4 py-3 text-center text-pink-600 italic">Belum ada post yang tersedia.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
