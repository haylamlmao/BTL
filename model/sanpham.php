<?php    
    function insert_sanpham($tensp,$giasp,$image,$mota,$iddm){
        $sql = "INSERT INTO webtest.sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$image','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $id = $_GET['id'];
        $sql = "DELETE FROM sanpham WHERE id=$id";
        pdo_execute($sql);
    }

    function loadall_sanpham_home(){
        $sql = "SELECT * FROM webtest.sanpham where 1 order by id DESC LIMIT 0,9";
        $listsp=pdo_query($sql);    
        return $listsp;
    }
    function loadall_sanpham_top10(){
        $sql = "SELECT * FROM webtest.sanpham where 1 order by price  ASC LIMIT 0,10";
        $listsp=pdo_query($sql);    
        return $listsp; 
    }

    function loadall_sanphamdm($iddm,$kyw){
        $sql = "SELECT * FROM webtest.sanpham where 1";
        if($iddm>0){
            $sql.=" and iddm='.$iddm.'";
            
        }
        if($kyw !=''){
            $sql.=" and name like '%".$kyw."%'";
        }
        $lisspdm = pdo_query($sql);
        return $lisspdm;
    }

    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE id = $id";
        $sp= pdo_query_one($sql);
        return $sp;
        
     }

    function loadsanpham_cungloai($id,$iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm= ".$iddm." and id <> $id";
        $listsp=pdo_query($sql);    
        return $listsp;
     }

    //  function searchsp($kyw){
    //     $sql = "SELECT * FROM duanmau2023.sanpham WHERE 1";
    //     if($kyw!=""){
    //         $sql .=" and name LIKE '%".$kyw."%'";
    //     }
    //     $listsearch = pdo_query($sql);
    //     return $listsearch;
    //  }
     

     function  updatesp($id,$iddm,$tensp,$giasp,$mota,$fileName){
        if($fileName!= "")
        $sql = "update sanpham set iddm= '".$iddm."', name= '".$tensp."',price= '".$giasp."', mota= '".$mota."',img= '".$fileName."'  where id = $id";
        else
        $sql = "update sanpham set iddm= '".$iddm."', name= '".$tensp."',price= '".$giasp."', mota= '".$mota."' where id = $id";
         pdo_execute($sql);
     }
?>