<?php

include "../../config/db_conn.php";
include "../../config/url.php";
include "../../config/NamaGambar.php";
include "../../config/hapusGambar.php";

$act = (isset($_GET['act'])) ? $_GET['act']:"none";

$menu = (isset($_GET['menu'])) ? $_GET['menu']:"none";

if($act == "insert" || $act=="update"){
    $id_prestasi = $_POST['id_prestasi'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if($act == 'update') {$oldgambar = $_POST['oldgambar'];}
    $gambar = ($_FILES['gambar']['name']);


}else{
    $id = $_GET['id_prestasi'];
    $oldgambar = $_GET['oldgambar'];
}

switch ($act){
    case 'insert':
        $extension = findexts($gambar);
        $NamaGambar = getNamaGambar($gambar, 'prestasi');

        if(($extension == "bmp") || ($extension == "gif") || ($extension == "jpeg") || ($extension == "jpg")){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], '../../upload/prestasi/' . $NamaGambar)){
                createThumb($gambar, 'prestasi', $NamaGambar);
        $query = "INSERT INTO prestasi(id_prestasi,judul, isi, gambar) VALUES ('$id_prestasi', '$judul', '$isi', '$NamaGambar')";
        $sql = mysqli_query($conn, $query);
        if($sql){
            url("prestasi&con=0");
        }else{
            url("prestasi&con=1");
        }
            }else{
                echo $query;
                url("prestasi&con=9");
            }
        }
        break;
    
    case 'update':
        $extension = findexts($gambar);
        $NamaGambar = getNamaGambar($gambar, 'prestasi');

        if(($extension == "bmp") || ($extension == "gif") || ($extension == "jpeg") || ($extension == "jpg")){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], "../../upload/prestasi/". $NamaGambar)){
                hapusGambar($oldgambar, "prestasi");
                createThumb($gambar, 'prestasi', $NamaGambar);

                $query = "UPDATE prestasi SET judul='$judul', isi='$isi', gambar='$NamaGambar' WHERE id_prestasi='$id_prestasi'";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    url("prestasi&con=2&alert=Prestasi Berhasil Di Update!");
                }else{
                    url("prestasi&con=3&alert=Gagal di Update!");
                }

                if($sql){
                    url("prestasi&con=0");
                }else{
                    url("prestasi&con=1");
                }
            }else{
                echo $query;
                url("prestasi&con=9");
            }
        }
        break;

    case 'delete':
        $id = $_GET['id'];
        $query = "DELETE FROM prestasi WHERE id_prestasi='$id'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            url("prestasi&con=4");
        }else{
            url("prestasi&con=5&alert=Gagal menghapus prestasi ini");
        }
    break;

    default:
        break;
}


?>