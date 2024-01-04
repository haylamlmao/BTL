<?php
function insert_taikhoan($email,$user,$pass){
    $sql = "INSERT INTO webtest.taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' and pass = '".$pass."' ";
    $sp= pdo_query_one($sql);
    return $sp;
    
 }
 function  updatetk($id,$user,$pass,$email,$address,$tel){
    $sql = "update taikhoan set user= '".$user."', pass= '".$pass."',email= '".$email."', address= '".$address."',tel= '".$tel."'  where id = $id";
    pdo_execute($sql);
 }
 function loadall_taikhoan(){
    $sql = "SELECT * FROM webtest.taikhoan order by user ";
    $listdm=pdo_query($sql);    
    return $listdm;
}
function delete_taikhoan($id){
    $id = $_GET['id'];
    $sql = "DELETE FROM taikhoan WHERE id=$id";
    pdo_execute($sql);
}
function sua_taikhoan($id){
    $sql = "SELECT * FROM webtest.taikhoan WHERE id = $id";
    $lissuatk = pdo_query_one($sql);
    return $lissuatk;
}
?>