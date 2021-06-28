@extends('guru.master')

@section('title')
<title>Absen</title>
@endsection

@section('header')
<script>
    document.getElementById('tugas').className = 'active active-click';

</script>
<h1 id="header">List Tugas</h1>
<div class="form-group flex-row primary-button"
    style="justify-content: flex-end; flex-direction:row; gap:0.5rem; margin: 0; width: fit-content;">
    <a href="{{route('guru.tugas.create')}}"><button type="submit" value="Submit">Tambah</button></a>
</div>
@endsection

@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    @foreach ($subjects as $subject)
    <div class="task-group">
        <h1>{{ $subject->classroom->class }} {{ $subject->classroom->major }}
            {{$subject->classroom->letter}} - {{$subject->name}}</h1>
        <div class="tasks">
        <?php $count=0 ?>
        @foreach ($tugas as $tugas)
        <?php $count++ ?>
        <div color="{{ $color[$subject->classroom->letter] }}" class="task" style="box-shadow:none; cursor:default">
            <div class="flex-row" style="gap:4px; height:100%">
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <h1>{{$tugas->judul}}</h1>
                    <p>{{ \Carbon\Carbon::parse($tugas->deadline)->format('D, d M y')}}</p>
                    <p>{{ \Carbon\Carbon::parse($tugas->deadline)->format('H:i')}}</p>
                </div>
                <div class="flex-col" style="height:100%; align-items: flex-start">
                    <a href="{{ route('guru.tugas.show', $tugas->id)}}">></a>
                    <form action="{{ route('guru.tugas.destroy', $tugas->id)}}" method="POST" class="btn">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; padding:0; margin:0">
                            <a color="remove" onclick="return confirm('Yakin untuk menghapus?')">x</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
