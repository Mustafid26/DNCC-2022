<?php
require_once __DIR__ . "/connect.php";

function ambilData(){
    $connect = connect();
    $sql = "SELECT * FROM `tugas_mustafid`";
    $result = $connect->query($sql);

    return $result;
}
function ambilSatuData($id){
    $connect = connect();
    $sql = "SELECT * FROM `tugas_mustafid` WHERE id_tugas =  $id";
    $result = $connect->query($sql);

    return $result;
}
function tambahData($tugas,$deadline){
    $connect = connect();
    $sql = "INSERT INTO `tugas_mustafid`(`nama_tugas`, `deadline`) VALUES ('$tugas','$deadline')";
    $result = $connect->exec($sql);

    return $result;
}
function editData($id, $tugas, $deadline){
    $connect = connect();
    $sql = "UPDATE `tugas_mustafid` SET `nama_tugas`='$tugas',`deadline`='$deadline' WHERE id_tugas = $id";
    $result = $connect->exec($sql);

    return $result;
}
function hapusData($id){
    $connect = connect();
    $sql = "DELETE FROM `tugas_mustafid` WHERE id_tugas = $id";
    $result = $connect->exec($sql);

    return $result;
}
?>