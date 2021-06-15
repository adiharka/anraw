@extends('admin.master')
@section('header')
<script>
    document.getElementById('guru').className = 'active active-click';
    document.title = 'Edit Guru';
</script>
<div class="flex-row header">
    <div class="flex-row">
        <div class="flex-row isi-button primary-button " style="align-items: flex-start">
            <a href="{{ url()->previous() }}" style="display: flex;">
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
        <h1 id="header">
            Edit Guru</h1>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">

        <form method="POST" action="{{ route('admin.guru.update', $id)}}" class="container-child">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama guru" value="{{ old('name', $teacher->user->name)}}" >
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" name="nip" class="form-control" id="nip" placeholder="1234XXXX" value="{{ old('nip', $teacher->NIP)}}">
            </div>
            <div class="form-group">
                <label for="no">No. Handphone</label>
                <input class="form-control" name="no" type="text" id="no" placeholder="08XXXXX" value="{{ old('no', $teacher->phonenumber)}}">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input class="form-control" name="address" type="text" id="address" placeholder="Nama jalan, Kecamatan, Kabupaten" value="{{ old('address', $teacher->address)}}">
            </div>
            <div class="form-group primary-button">
                <button type="submit">Edit</button>
            </div>
        </form>

    </div>

</div>
@endsection
