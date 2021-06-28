@extends('siswa.master')

@section('title')
    <title>Akun</title>
@endsection

@section('header')
<script>
    document.getElementById('akun').className = 'active active-click';
</script>
<h1 id="header">{{ $akun->name }}</h1>
@endsection

@section('content')
<div class="task-group">
    <p style="margin-top: 0;">NISN : {{ $akun->student->NISN }}</p>
    <p>No. HP : {{ $akun->student->phonenumber }}</p>
    {{-- <p>Alamat : {{ $akun->address }}</p> --}}
    <div class="form-group flex-row primary-button"
        style="align-items: flex-start; margin-bottom: 0; margin-top: 12px;">
        <a href="{{ route('logout')}}"><button type="submit" value="Submit">Logout</button></a>
    </div>
</div>
@endsection
