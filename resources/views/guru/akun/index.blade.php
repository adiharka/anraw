@extends('guru.master')

@section('content')
<script>
    document.getElementById('akun').className = 'active active-click';
</script>    
                <h1 id="header">Slamet Pramono, M. Si</h1>
                <div class="task-group">
                    <p style="margin-top: 0;">NIP   : 0014222021</p>
                    <p>No. HP : +62 812-359-424</p>
                    <p>Jl. Wetan Dalan No.20, Kecamatan Land Dawn, Kabupaten Kulon</p>
                    <div class="form-group flex-row primary-button" style="align-items: flex-start; margin-bottom: 0; margin-top: 12px;">
                        <a href="{{ route('logout')}}"><button type="submit" value="Submit">Logout</button></a> 
                    </div>
                </div>
@endsection