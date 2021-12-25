<?php
include "config/cekId.php";
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
    $link = "modul/gallery/aksi_gallery.php";
    switch (isset($_GET['act'])) {
        case 'editor':
            if (isset($_GET['id'])) {
                $query = mysqli_query($conn,"select * from gallery where id_gallery='$_GET[id]'");
                $result = mysqli_fetch_array($query);
                $id_gallery = $result['id_gallery'];
                $judul = $result['judul'];
                $isi = $result['isi'];
                $gambar = $result['gambar'];
                $aksi = "update";
                $readonly="readonly";
            } else {
                $id_gallery = "A" . cekId("gallery", "id_gallery");
                $judul = "";
                $isi ="";
                $gambar ="";
                $aksi = "insert";
                $readonly="";
            }
            ?>
            <div class="container">
            <h3>Insert gallery</h3> 
            <form action="<?php echo $link; ?>?menu=gallery&act=<?php echo $aksi; ?>" method=post id="frmmodul" enctype="multipart/form-data">
                
            <div class="form-group">
            <label for="nama">id_gallery anda:</label>
            <input type="text" readonly class="form-control" <?php echo $readonly;?> id="id_gallery" name="id_gallery" value="<?php echo $id_gallery; ?>">
            </div>
            <div class="form-group">
            <label for="alamat">judul anda:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
            </div>
            <div class="form-group">
            <label for="nama">Nama gallery:</label>
            <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"><?php echo $isi; ?></textarea>
            </div>
             <div class="form-group">
            <label for="nama">Gambar:</label>
            <input type="file" id="gambar" class="form-control" name="gambar" value="<?php echo $gambar; ?>" >
            <?php
            if ($aksi == "update") 
            {
                echo'<img src="upload/thumbs/gallery/' . $gambar . '" height=106px width=auto>';
                echo '<input type="hidden" name="oldgalleryr" value="' . $gambar . '">';
            }
            ?>
            </div>       
            <input type="submit" class="btn btn-primary"></input>
            
                </form>
            </div>
            <?php
            break;
            default:
            $query = mysqli_query($conn,"SELECT * FROM gallery") or die("Query error : " . $conn->error);
            ?>
            <div class="container">
            <center>
            <h3>Menu Gallery</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='?menu=gallery&act=editor'">Tambah</button>
            </center>
                <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>id_gallery</th>
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
                        <td style="width: 80px"> <img src="upload/thumbs/gallery/' . $row[3] . '" width="100%" height=auto></td>
                        <td class="text-center">
                        <a class="btn btn-warning me-3" href="?menu=gallery&act=editor&id=' . $row[0]. '">EDIT</a>
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