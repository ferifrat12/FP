<?php

include "../../config/db_conn.php";
include "../../config/url.php";
include "../../config/NamaGambar.php";
include "../../config/hapusGambar.php";

$act = (isset($_GET['act'])) ? $_GET['act']:"none";

$menu = (isset($_GET['menu'])) ? $_GET['menu']:"none";

if($act == "insert" || $act=="update"){
    $id_gambar = $_POST['id_gallery'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if($act == 'update') {$oldgambar = $_POST['oldgambar'];}
    $gambar = ($_FILES['gambar']['name']);


}else{
    $id = $_GET['id_gallery'];
    $oldgambar = $_GET['oldgambar'];
}

switch ($act){
    case 'insert':
        $extension = findexts($gambar);
        $NamaGambar = getNamaGambar($gambar, 'gallery');

        if(($extension == "bmp") || ($extension == "gif") || ($extension == "jpeg") || ($extension == "jpg")){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], '../../upload/gallery/' . $NamaGambar)){
                createThumb($gambar, 'gallery', $NamaGambar);
        $query = "INSERT INTO gallery(id_gallery,judul, isi, gambar) VALUES ('$id_gallery', '$judul', '$isi', '$NamaGambar')";
        $sql = mysqli_query($conn, $query);
        if($sql){
            url("gallery&con=0");
        }else{
            url("gallery&con=1");
        }
            }else{
                echo $query;
                url("gallery&con=9");
            }
        }
        break;
    
    case 'update':
        $extension = findexts($gambar);
        $NamaGambar = getNamaGambar($gambar, 'gallery');

        if(($extension == "bmp") || ($extension == "gif") || ($extension == "jpeg") || ($extension == "jpg")){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], "../../upload/gallery/". $NamaGambar)){
                hapusGambar($oldgambar, "gallery");
                createThumb($gambar, 'gallery', $NamaGambar);

                $query = "UPDATE gallery SET judul='$judul', isi='$isi', gambar='$NamaGambar' WHERE id_gallery='$id_gallery'";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    url("gallery&con=2&alert=Gallery Berhasil Di Update!");
                }else{
                    url("gallery&con=3&alert=Gagal di Update!");
                }

                if($sql){
                    url("gallery&con=0");
                }else{
                    url("gallery&con=1");
                }
            }else{
                echo $query;
                url("gallery&con=9");
            }
        }
        break;

    case 'delete':
        $id = $_GET['id'];
        $query = "DELETE FROM gallery WHERE id_gallery='$id'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            url("gallery&con=4");
        }else{
            url("gallery&con=5&alert=Gagal menghapus gallery ini");
        }
    break;

    default:
        break;
}


?>