<?php 
 function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO webtest.binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro){
    $sql = "SELECT * FROM webtest.binhluan where 1";
    if($idpro>0) $sql.=" and idpro='".$idpro."'";
     $sql.=" order by id DESC";
    $listbl=pdo_query($sql);    
    return $listbl;
}

function delete_binhluan($id){
    $id = $_GET['id'];
    $sql = "DELETE FROM binhluan WHERE id=$id";
    pdo_execute($sql);
}
?>