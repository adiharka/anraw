@extends('siswa.master')

@section('title')
   <title>Tugas</title>
@endsection

@section('header')
<script>
    document.getElementById('tugas').className = 'active active-click';
</script>

<h1 id="header">Tugas</h1>
@endsection

@section('content')
<div class="flex-wrap" style="justify-content: flex-start;">
    @foreach ($subjects as $subject)
    <div class="task-group">
        <h1>{{$subject->name}}</h1>
        <div class="tasks">
            {{-- @foreach ($tugas as $tugas)
            @if ($tugas->subject_id == $subject->id)
            <div onclick="location.href='#'" color="yellow" class="task">
                <h1>{{$tugas->judul}}</h1>
            <p>{{$tugas->deadline}}</p>
        </div>
        @endif
        @endforeach --}}
        <?php $count=0 ?>
        @foreach ($tugass as $tugas)
        @if ($tugas->subject->name == $subject->name)
        <?php $count++ ?>
        <div color="{{ $color[$subject->name] }}" class="task" style="box-shadow:none; cursor:default">
            <div class="flex-row" style="gap:4px; height:100%">
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <h1>{{ $tugas->judul }}</h1>
                    <p>{{ \Carbon\Carbon::parse($tugas->deadline)->format('D, d M y')}}</p>
                    <p>{{ \Carbon\Carbon::parse($tugas->deadline)->format('H:i')}}</p>
                </div>
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <a href="{{ route('siswa.tugas.show', $tugas->id)}}">></a>
                    @if( $kumpul->where('assignment_id', $tugas->id)->where('user_id', Auth::id())->count() >= 1)
                    <a style="pointer-events:none; background:#157c4c">✓</a>
                    @endif
                </div>
            </div>
        </div>

        @endif
        @endforeach
        @if ($count == 0)
        <div onclick="location.href='#'" class="task disabled">
            <p>Tidak ada tugas</p>
        </div>
        @endif
    </div>
</div>
@endforeach

@endsection
