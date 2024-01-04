<?php
session_start();
include '../../model/binhluan.php';
include '../../model/pdo.php';

$idpro = $_REQUEST['idpro'];
$listbl = loadall_binhluan($idpro);
// echo $idpro;
?>


    
    <div class="mb">
    <div class="box_title">BÌNH LUẬN</div>
    <div class="box_content2 product_portfolio">
       

            
            <table>
            <?php
            // echo "noi dung binh luan".$idpro;
            foreach($listbl as $binhluan){
               
                extract($binhluan);
               echo '
               <tr>
                <td>'.$noidung.'</td>
                <td>'.$iduser.'</td>
                <td>'.$ngaybinhluan.'</td>
                </tr>
               ';
               
            }
            ?>
        </table>
        <?php
        if(isset($_SESSION['user'])){
            ?>
             </div>
        <div class="box_search">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" name="noidung" >
            <input type="hidden" name="ngaybinhluan">
            <button name="guibinhluan">Gửi bình luận</button>
        </form>
    </div>
    <?php 
    if(isset($_POST['guibinhluan'])){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaybinhluan = date("Y-m-d H:i:s");
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("Location:".$_SERVER['HTTP_REFERER']);    
    }
    ?>
    <?php
}else{
    echo '<p style="color:red;font-weight:450;font-size:17px;font-family:Roboto,sans-serif">Vui lòng đăng nhập tài khoản để bình luận</p>';
}
    ?>
        
       
        
    </div>
 

   








    