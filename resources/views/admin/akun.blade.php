@extends('admin.master')

@section('header')
<script>
    document.getElementById('akun').className = 'active active-click';
    document.title = 'Info Akun';
</script>
<div class="flex-row header">
    <h1 id="header">Akun</h1>
</div>
@endsection
@section('content')

<div class="task-group">
    <div class="form-group flex-row primary-button" style="align-items: flex-start; margin-bottom: 0">
        <a href="{{ route('logout')}}"><button type="submit" value="Submit">Logout</button></a>
    </div>
</div>
@endsection
