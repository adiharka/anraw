@extends('guru.master')

@section('content')
<script>
    document.getElementById('absen').className = 'active active-click';
</script>    
<h1 id="header">Absen</h1>
<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group group-jadwal flex-col" style="gap: 12px;">
        <div class="fill flex-row center" color="red">Seni Budaya</div>
        <form action="" class="form-group card" style="gap: 8px">
            <h1 style="line-height: 1;">07:00-09:00</h1>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="hadir" name="absen" value="hadir">
                <label for="hadir">Hadir</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="sakit" name="absen" value="sakit">
                <label for="sakit">Sakit</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="izin" name="absen" value="izin">
                <label for="izin">Izin</label>
            </div>
            <div class="form-group flex-row primary-button absen-button" style="margin-bottom: 0; margin-top: 12px;">
                <button type="submit" value="Submit">Absen</button>
            </div>
        </form>
    </div>
    <div class="task-group group-jadwal flex-col" style="gap: 12px;">
        <div class="fill flex-row center" color="tosca">Kimia</div>
        <form action="" class="form-group card" style="gap: 8px">
            <h1 style="line-height: 1;">09:00-11:00</h1>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="hadir" name="absen" value="hadir">
                <label for="hadir">Hadir</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="sakit" name="absen" value="sakit">
                <label for="sakit">Sakit</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="izin" name="absen" value="izin">
                <label for="izin">Izin</label>
            </div>
            <div class="form-group flex-row primary-button absen-button" style="margin-bottom: 0; margin-top: 12px;">
                <button type="submit" value="Submit">Absen</button>
            </div>
        </form>
    </div>
    <div class="task-group group-jadwal flex-col" style="gap: 12px;">
        <div class="fill flex-row center" color="purple">Fisika</div>
        <form action="" class="form-group card" style="gap: 8px">
            <h1 style="line-height: 1;">12:00-13:30</h1>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="hadir" name="absen" value="hadir">
                <label for="hadir">Hadir</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="sakit" name="absen" value="sakit">
                <label for="sakit">Sakit</label>
            </div>
            <div class="flex-row form-content" style="gap: 6px;">
                <input type="radio" id="izin" name="absen" value="izin">
                <label for="izin">Izin</label>
            </div>
            <div class="form-group flex-row primary-button absen-button" style="margin-bottom: 0; margin-top: 12px;">
                <button type="submit" value="Submit">Absen</button>
            </div>
        </form>
    </div>
</div>
@endsection