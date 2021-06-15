@extends('admin.master')

@section('header')
<script>
    document.getElementById('kelas').className = 'active active-click';
    document.title = 'Tambah Kelas';
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
        <h1 id="header">Tambah Kelas</h1>
    </div>
</div>
@endsection
@section('content')
<div class="flex-wrap" style="justify-content: flex-start;">
    @if(session('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Something it's wrong:
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="task-group" style="width: 100%;">
        <form method="POST" action="{{ route('admin.kelas.store')}}" class="container-child">
            @csrf
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <div class="form-double">
                    <select name="class" id="class" class="form-control">
                        <option value="" disabled selected>kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    <select name="major" id="major" class="form-control">
                        <option value="" disabled selected>jurusan</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="BHS">BHS</option>
                    </select>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="angkatan">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" placeholder="angkatan">
            </div> --}}
            <div class="form-group primary-button">
                <button type="submit">Tambah</button>
            </div>
        </form>

    </div>

</div>
@endsection
