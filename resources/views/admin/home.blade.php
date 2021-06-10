@extends('admin.master')

@section('header')
<div class="flex-row header">
    <h1 id="header">Home</h1>
</div>
@endsection
@section('content')
<script>
    document.getElementById('home').className = 'active active-click';
</script>
                <div class="flex-wrap" style="justify-content: flex-start;">
                    <div class="task-group" style="width: 100%;">
                        <h1>Selamat Datang Bang Admin</h1>
                        <p>Tahun Pelajaran 2020/2021</p>

                    </div>

                </div>
@endsection
