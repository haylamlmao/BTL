<?php    
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO webtest.danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $id = $_GET['id'];
        $sql = "DELETE FROM danhmuc WHERE id=$id";
        pdo_execute($sql);
    }

    function loadall(){
        $sql = "SELECT * FROM webtest.danhmuc order by name";
        $listdm=pdo_query($sql);    
        return $listdm;
    }

    function loadone($id){
        $id = $_GET['id'];
        $sql = "SELECT * FROM danhmuc WHERE id = $id";
        $dm= pdo_query_one($sql);
        return $dm;
     }

     function updatedm($id,$tenloai){
        $sql = "update danhmuc set name= '".$tenloai."' where id = $id";
        pdo_execute($sql);
     }
?>