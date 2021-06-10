@extends('admin.master')

@section('header')
<script>
    document.getElementById('guru').className = 'active active-click';
    document.title = 'Detail Guru';

</script>
<div class="flex-row header">
    <div class="flex-row">
        <div class="flex-row isi-button primary-button " style="align-items: flex-start">
            <a href="{{ route('admin.guru.index')}}" style="display: flex;">
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
        <h1 id="header">Detail Guru</h1>
    </div>
    <div class="form-group flex-row primary-button" style="align-items: flex-end; margin: 0; max-width: 175px;">
        <a href="{{ route('admin.guru.subject', $id) }}"><button type="submit" value="Submit">Atur Kelas</button></a>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">
        <h3>Info</h3>

        <div class="listdata">
            <p>Nama : {{$teacher->user->name}}</p>
            <p>NIP : {{$teacher->NIP}}</p>
            <p>Nomor Telp : {{$teacher->phonenumber}}</p>
            <p>Alamat : {{$teacher->address}}</p>
        </div>
    </div>
    <div class="task-group">
        <h1>Kelas yang diajar</h1>
        <div class="tasks">
            <?php $count=0 ?>
            @foreach ($subject as $kelas)
            <?php $count++ ?>
            <div onclick="location.href='#'" color="{{ $color[$kelas->classroom->letter] }}" class="task">
                <h1> {{ $kelas->classroom->class }} {{ $kelas->classroom->major }} {{$kelas->classroom->letter}}</h1>
                <p> {{ $kelas->name }}</p>
            </div>
            @endforeach
            @if ($count == 0)
            <div onclick="location.href='#'" class="task disabled">
                <p>Tidak ada kelas</p>
            </div>
            @endif
        </div>
    </div>
    {{-- <div class="task-group" style="width: 100%;">
        <div class="listdata">
            <p>Nama : {{$teacher->user->name}}</p>
    <p>NIP : {{$teacher->NIP}}</p>
    <p>Nomor Telp : {{$teacher->phonenumber}}</p>
    <p>Alamat : {{$teacher->address}}</p>
</div>
</div> --}}

</div>
@endsection
