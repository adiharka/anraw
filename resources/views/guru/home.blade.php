@extends('guru.master')

@section('title')
    <title>Homepage</title>
@endsection

@section('header')
    <script>
        document.getElementById('home').className = 'active active-click';
    </script>
<h1 id="header">Homepage Aula</h1>
@endsection


@section('content')
<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">
        <h1>Selamat Datang !!</h1>
        <p>Tahun Pelajaran 2020/2021</p>
    </div>
</div>

@endsection
