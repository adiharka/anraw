@extends('admin.master')

@section('header')
<script>
    document.getElementById('kelas').className = 'active active-click';
    document.title = 'List Kelas';
</script>
<div class="flex-row header">
    <h1 id="header">List Kelas</h1>
    <div class="form-group flex-row primary-button" style="max-width: 175px; align-items: flex-end; margin: 0">
        <a href="{{ route('admin.kelas.create')}}"><button type="submit" value="Submit">Tambah</button></a>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group">
        <h1>Kelas X</h1>
        <div class="tasks">
            <?php $count=0 ?>
            @foreach ($class as $kelas)
            @if ($kelas->class == 'X')
            <?php $count++ ?>
            <div onclick="location.href='#'" color="{{ $color[$kelas->letter] }}" class="task">
                <h1>X {{ $kelas->major }} {{$kelas->letter}}</h1>
                <p>jumlah siswa : {{ $kelas->student_count }}</p>
            </div>
            @endif
            @endforeach
            @if ($count == 0)
            <div onclick="location.href='#'" class="task disabled">
                <p>Tidak ada kelas</p>
            </div>
            @endif
        </div>
    </div>
    <div class="task-group">
        <h1>Kelas XI</h1>
        <div class="tasks">
            <?php $count=0 ?>
            @foreach ($class as $kelas)
            @if ($kelas->class == 'XI')
            <?php $count++ ?>
            <div onclick="location.href='#'" color="{{ $color[$kelas->letter] }}" class="task">
                <h1>XI {{ $kelas->major }} {{$kelas->letter}}</h1>
                <p>jumlah siswa : {{ $kelas->student_count }}</p>
            </div>
            @endif
            @endforeach
            @if ($count == 0)
            <div onclick="location.href='#'" class="task disabled">
                <p>Tidak ada kelas</p>
            </div>
            @endif
        </div>
    </div>
    <div class="task-group">
        <h1>Kelas XII</h1>
        <div class="tasks">
            <?php $count=0 ?>
            @foreach ($class as $kelas)
            @if ($kelas->class == 'XII')
            <?php $count++ ?>
            <div onclick="location.href='#'" color="{{ $color[$kelas->letter] }}" class="task">
                <h1>XII {{ $kelas->major }} {{$kelas->letter}}</h1>
                <p>jumlah siswa : {{ $kelas->student_count }}</p>
            </div>
            @endif
            @endforeach
            @if ($count == 0)
            <div onclick="location.href='#'" class="task disabled">
                <p>Tidak ada kelas</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
