@extends('guru.master')

@section('title')
<title>Detail Kelas</title>
@endsection

@section('header')
<script>
    document.getElementById('jadwal').className = 'active active-click';
</script>
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
        <h1 id="header">Detail Kelas</h1>
    </div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">
        <h1>Siswa</h1>
        @if (!$student->isEmpty())
        <table id="table">
        <input type="text" id="searchInput" style='margin-bottom: 1rem' class="form-control" onkeyup="search(1)" placeholder="Ketik untuk mencari">
            <tr class="tableheader">
                <th width="25px" class="rowstart">ID</th>
                <th>Nama</th>
                <th>NISN</th>
            </tr>
            <?php $count=0 ?>
            @foreach ($student as $siswa)
            <?php $count++ ?>
            <tr>
                <td class="rowstart">{{$siswa->id}}</td>
                <td>{{$siswa->user->name}}</td>
                <td>{{$siswa->NISN}}</td>
            </tr>
            @endforeach
        </table>
        @else
        <p>Tidak ada siswa</p>
        @endif
    </div>

</div>
@endsection
