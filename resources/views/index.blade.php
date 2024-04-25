<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>

<body>
<a href="{{ route('siswa.create') }}" >Tambah Barang</a>
<br />
<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 
<input type="text" name="nama">
<br />
<input type="text" name="alamat">
<br />
<input type="text" name="hobi">
<br />
<input type="submit" value="simpan">
</form>

<br />
<a href="{{ route('siswa.show', '1') }}" >Show</a>
<br />
</body>
</html>
