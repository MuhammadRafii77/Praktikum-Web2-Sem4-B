<?php
if (isset($_POST['Submit'])) {
    $nim = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $result = mysqli_query($con, "INSERT INTO matakuliah(kode, nama, sks, semester) 
VALUES('$kode', '$nama', '$sks', '$semester')") or die(mysqli_error($con));

    header("Location:?page=matakuliah-show");
    exit();
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="control-label">Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Matakuliah</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Matakuliah..." required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">SKS</label>
                        <input type="text" class="form-control" name="sks" placeholder="Masukkan Jumlah SKS..." required>
                    </div>
                    <div class="form-group">
                        <label for="semester" class="control-label">Semester</label>
                        <input type="number" class="form-control" name="semester" placeholder="Masukkan Semester..." required>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>