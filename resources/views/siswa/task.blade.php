@extends('siswa.master')

@section('content')
    
        <form class="container-child" style="max-width: 1000px;">
            <h1>TAMBAH TUGAS</h1>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Nama Tugas">
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class="form-control" name="detail" id="" cols="10"></textarea>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <div class="form-double">
                    <select class="form-control" id="kelas">
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select class="form-control" id="kelass">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input class="form-control" type="datetime-local" id="deadline" placeholder="08XXXXX">
            </div>
            <div class="form-group primary-button">
                <button type="submit">Tambah</button>
            </div>
        </form>
        <div class="container-child illust">
            <img src="img/task.png" alt="">
        </div>

        @endsection