@extends('admin.master')
@section('header')
<script>
    document.getElementById('guru').className = 'active active-click';
    document.title = 'Tambah Pelajaran';

</script>
<div class="flex-row header">
    <div class="flex-row">
        <div class="flex-row isi-button primary-button " style="align-items: flex-start">
            <a href="{{ route('admin.guru.show', $id)}}" style="display: flex;">
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
            Tambah Guru</h1>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">

        <form method="POST" action="{{ route('admin.guru.storeSubject', $id)}}" class="container-child">
            @csrf
            <div class="form-group">
                <label for="subject">Mata Pelajaran</label>
                <select name="subject" id="subject" class="form-control">
                    <option value="" disabled selected>Mata Pelajaran yg diampu</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Fisika">Fisika</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Biologi">Biologi</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Geografi">Geografi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="class">Kelas</label>
                <select name="class" id="class" class="form-control">
                    <option value="" disabled selected>Pilih kelas</option>
                    @forelse ($class as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->class }} {{ $kelas->major }} {{$kelas->letter}}</option>
                    @empty
                    <option value="" disabled selected>Tambahkan kelas terlebih dahulu</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group primary-button">
                <button type="submit">Tambah</button>
            </div>
        </form>

    </div>

</div>
@endsection
