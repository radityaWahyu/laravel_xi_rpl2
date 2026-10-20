@extends('main')

@section('content')

<div class="mt-[200px] ml-10">
    <form method="post" action="{{ route('kirim_data') }}">
        @csrf
        <label>Nama Lengkap</label><br/>
        <input type="text" name="nama" value="{{ old('nama') }}"/><br/>
        @error('nama')
            <p class="text-red-400">{{$message}}</p>
        @enderror
        <label>Email</label><br/>
        <input type="text" name="email" value="{{ old('email') }}"/><br/>
         @error('email')
            <p class="text-red-400">{{$message}}</p>
        @enderror
        <label>Jurusan</label><br/>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"/><br/>
         @error('jurusan')
            <p class="text-red-400">{{$message}}</p>
        @enderror
        <input type="submit" class="bg-amber-400 px-4 py-2" value="simpan" />
    </form>
</div>

@endsection