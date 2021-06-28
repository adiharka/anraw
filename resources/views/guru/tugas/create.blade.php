@extends('guru.master')

@section('title')
<title>Tambah Tugas</title>
@endsection

@section('header')
<script>
    document.getElementById('tugas').className = 'active active-click';
</script>
<div class="flex-row header">
    <div class="flex-row">
        <div class="flex-row isi-button primary-button " style="align-items: flex-start">
            <a href="{{ url()->previous() }}" style="display: flex;">
                <svg id="back-button" width="30" height="30" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.0003 18.3333C14.6027 18.3333 18.3337 14.6023 18.3337 9.99996C18.3337 5.39759 14.6027 1.66663 10.0003 1.66663C5.39795 1.66663 1.66699 5.39759 1.66699 9.99996C1.66699 14.6023 5.39795 18.3333 10.0003 18.3333Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.0003 6.66663L6.66699 9.99996L10.0003 13.3333" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M13.3337 10H6.66699" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <h1 id="header">
            Tambah Tugas</h1>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">

        <form method="POST" action="{{ route('guru.tugas.store')}}" class="container-child" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="class">Kelas*</label>
                <select name="class" id="class" class="form-control">
                    <option value="" disabled selected>Pilih kelas</option>
                    @forelse ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->classroom->class }} {{ $subject->classroom->major }}
                        {{$subject->classroom->letter}} - {{$subject->name}}</option>
                    @empty
                    <option value="" disabled selected>Belum memiliki kelas, harap kontak Admin</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul* (max 13 karakter)</label>
                <input type="text" maxlength = "13" value="{{ old('judul') }}" class="form-control" name="judul" id="judul" placeholder="Judul Tugas">
            </div>
            <div class="form-group">
                <label for="detail">Detail*</label>
                <textarea id="detail" class="form-control" name="detail" rows="4" cols="50" placeholder="Detail Tugas">{{ old('detail') }}</textarea>
            </div>
            <div class="form-group">
                <label for="detail">Foto</label>
                <img src="{{ url('img/no-img.png') }}" class="btn-img" id="avadef" onclick="klik()">
                <input type="file" name="photo" accept="image/*" id="ava" onchange="avadisp(this)" style="display: none">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline*</label>
                <input type="datetime-local" class="form-control" value="{{ old('deadline') }}" name="deadline" id="deadline">
            </div>
            <div class="form-group primary-button">
                <button type="submit">Tambah</button>
            </div>
        </form>

    </div>

</div>
@endsection
