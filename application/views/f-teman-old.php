<form name="form-kirim" method="POST" action="index.php">
Nama <input type="text" name="nama"><br>
Alamat <textarea name="alamat"></textarea><br>
Agama <select name="agama">
    <option value="1">Islam</option>
    <option value="2">Kristen Katolik</option>
    <option value="3">Kristen Protestan</option>
    <option value="4">Hindu</option>
    <option value="5">Budha</option>
</select>
Tanggal Lahir <input type="date" name="tgl_lahir"><br>
No Handphone <input type="text" name="hp"><br><br>

<input type="submit" name="kirim" value="Simpan Data">
</form>