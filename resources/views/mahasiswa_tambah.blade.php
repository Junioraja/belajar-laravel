<!DOCTYPE html>
<html>
<h2>
    Tambah Mahasiswa Baru
</h2>
@if (session('pesan'))
    <p style="color: green;">
        {{ session('pesan') }}
@endif

<form action="{{ url(('/simpan-mahasiswa')) }}" method="post">
    @csrf <label>Nama:</label>
    <input type="text" name="nama" required><br><br>
    <label>NIM:</label>
    <input type="text" name="nim" required><br><br>
    <button type="submit">Simpan</button>
</form>

</html>