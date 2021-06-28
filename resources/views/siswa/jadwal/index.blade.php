@extends('siswa.master')

@section('title')
<title>Pelajaran</title>

@endsection

@section('header')
<script>
    document.getElementById('jadwal').className = 'active active-click';

</script>
<h1 id="header">Pelajaran</h1>
@endsection

@section('content')
<div class="task-group">
    <h1>List Pelajaran</h1>
    <div class="tasks">
        <?php $count=0 ?>
        @foreach($subject as $pelajaran)
            <?php $count++ ?>
            <div color="{{ $color[$pelajaran->name] }}" class="task"
                style="box-shadow:none; cursor:default">
                <div class="flex-row" style="gap:4px; height:100%">
                    <div class="flex-col" style="height:100%; align-items: flex-start">
                        <h1>{{ $pelajaran->name }}</h1>
                        <p>Terdapat {{ $tugas->where('subject_id', $pelajaran->id)->count() }} tugas</p>
                    </div>
                    <div class="flex-col" style="height:100%; align-items: flex-start">
                        {{-- <a href="{{ route('guru.kelas.show', $kelas->classroom_id) }}">></a> --}}
                    </div>
                </div>
            </div>
        @endforeach
        @if($count == 0)
            <div onclick="location.href='#'" class="task disabled">
                <p>Tidak ada kelas</p>
            </div>
        @endif
    </div>
</div>
<div class="flex-wrap" style="margin-top: 0.5rem">
    <div class="task-group" style="width: 100%;">
        <h1>Teman Kelas</h1>
        @if(!$students->isEmpty())
            <table id="table">
                <input type="text" id="searchInput" style='margin-bottom: 1rem' class="form-control" onkeyup="search(1)"
                    placeholder="Ketik untuk mencari">
                <tr class="tableheader">
                    <th width="25px" class="rowstart">ID</th>
                    <th>Nama</th>
                    <th>NISN</th>
                </tr>
                <?php $count=0 ?>
                @foreach($students as $siswa)
                    <?php $count++ ?>
                    <tr>
                        <td class="rowstart">{{ $siswa->id }}</td>
                        @if ($siswa->user->id == Auth::id())
                        <td>{{ $siswa->user->name }} <strong>(Anda)</strong></td>
                        @else
                        <td>{{ $siswa->user->name }}</td>
                        @endif
                        <td>{{ $siswa->NISN }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Tidak ada siswa</p>
        @endif
    </div>
</div>
@endsection
