@extends('guru.master')

@section('title')
<title>Jadwal</title>
@endsection

@section('header')
<script>
    document.getElementById('jadwal').className = 'active active-click';

</script>
<h1 id="header">Kelas Yang Diajar</h1>
@endsection

@section('content')
<div class="task-group">
    <h1>List Kelas</h1>
    <div class="tasks">
        <?php $count=0 ?>
        @foreach ($subject as $kelas)
        <?php $count++ ?>
        <div color="{{ $color[$kelas->classroom->letter] }}" class="task" style="box-shadow:none; cursor:default">
            <div class="flex-row" style="gap:4px; height:100%">
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <h1> {{ $kelas->classroom->class }} {{ $kelas->classroom->major }} {{$kelas->classroom->letter}}
                    </h1>
                    <p> {{ $kelas->name }}</p>
                </div>
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <a href="{{ route('guru.kelas.show', $kelas->classroom_id)}}">></a>
                </div>
            </div>
        </div>
        @endforeach
        @if ($count == 0)
        <div onclick="location.href='#'" class="task disabled">
            <p>Tidak ada kelas</p>
        </div>
        @endif
    </div>
</div>

@endsection
