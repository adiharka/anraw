@extends('guru.master')

@section('title')
    <title>Absen</title>
@endsection

@section('header')
<h1 id="header">{{Auth::user()->name}}</h1>
<script>
    document.getElementById('akun').className = 'active active-click';
</script>
@endsection

@section('content')
                <div class="task-group">
                    <h3>Info Diri</h3>
                    <div class="listdata">
                        <p>NIP   : {{$guru->NIP}}</p>
                        <p>No. HP : {{$guru->phonenumber}}</p>
                        <p>Alamat : {{$guru->address}}</p>
                    </div>
                    <div class="form-group flex-row primary-button" style="align-items: flex-start; margin-bottom: 0; margin-top: 12px;">
                        <a href="{{ route('logout')}}"><button type="submit" value="Submit">Logout</button></a>
                    </div>
                </div>
@endsection
