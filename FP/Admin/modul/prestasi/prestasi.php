<?php
include "config/cekId.php";
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
    $link = "modul/prestasi/aksi_prestasi.php";
    switch (isset($_GET['act'])) {
        case 'editor':
            if (isset($_GET['id'])) {
                $query = mysqli_query($conn,"select * from prestasi where id_prestasi='$_GET[id]'");
                $result = mysqli_fetch_array($query);
                $id_prestasi = $result['id_prestasi'];
                $judul = $result['judul'];
                $isi = $result['isi'];
                $gambar = $result['gambar'];
                $aksi = "update";
                $readonly="readonly";
            } else {
                $id_prestasi = "A" . cekId("prestasi", "id_prestasi");
                $judul = "";
                $isi ="";
                $gambar ="";
                $aksi = "insert";
                $readonly="";
            }
            ?>
            <div class="container">
            <h3>Insert Prestasi</h3> 
            <form action="<?php echo $link; ?>?menu=prestasi&act=<?php echo $aksi; ?>" method=post id="frmmodul" enctype="multipart/form-data">
                
            <div class="form-group">
            <label for="nama">id_prestasi anda:</label>
            <input type="text" readonly class="form-control" <?php echo $readonly;?> id="id_prestasi" name="id_prestasi" value="<?php echo $id_prestasi; ?>">
            </div>
            <div class="form-group">
            <label for="alamat">judul anda:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
            </div>
            <div class="form-group">
            <label for="nama">Prestasi:</label>
            <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"><?php echo $isi; ?></textarea>
            </div>
             <div class="form-group">
            <label for="nama">Gambar:</label>
            <input type="file" id="gambar" class="form-control" name="gambar" value="<?php echo $gambar; ?>" >
            <?php
            if ($aksi == "update") 
            {
                echo'<img src="upload/thumbs/prestasi/' . $gambar . '" height=106px width=auto>';
                echo '<input type="hidden" name="oldgambar" value="' . $gambar . '">';
            }
            ?>
            </div>       
            <input type="submit" class="btn btn-primary"></input>
            
                </form>
            </div>
            <?php
            break;
            default:
            $query = mysqli_query($conn,"SELECT * FROM prestasi") or die("Query error : " . $conn->error);
            ?>
            <div class="container">
            <center>
            <h3>Menu Prestasi</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='?menu=prestasi&act=editor'">Tambah</button>
            </center>
                <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>id_prestasi</th>
                        <th>judul</th>
                        <th>isi</th>
                        <th>gambar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<tr><td>' . $no . '</td>
                        <td>' . $row[0] . '</td>
                        <td>' . $row[1] . '</td>
                        <td>' . $row[2] . '</td>
                        <td style="width: 80px"> <img src="upload/thumbs/prestasi/' . $row[3] . '" width="100%" height=auto></td>
                        <td class="text-center">
                        <a class="btn btn-warning me-3" href="?menu=prestasi&act=editor&id=' . $row[0]. '">EDIT</a>
                        <a class="btn btn-danger" onclick="return confirm(\'Apakah yakin dihapus?\')" href="'.$link.'?menu=modul&act=delete&id='.$row[0].'">HAPUS</a>
                        </td>
                        </tr>';
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
            <?php
}
}
?>