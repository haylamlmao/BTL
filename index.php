<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";

$spnew = loadall_sanpham_home();
$dsdm =loadall();
$dstop10 = loadall_sanpham_top10();

if((isset($_GET['act']))&&($_GET['act']!="")){
    $acct = $_GET['act'];
    switch ($acct) {
        case 'sanpham':
            $iddm = '';
            $kyw = '';
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
            }
            if(isset($_POST['btn'])){
                $kyw = $_POST['kyw'];
            }
            $lisspdm =  loadall_sanphamdm($iddm,$kyw);       

         include "./view/sapham.php";
         break;

        case 'sanphamct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
                $sp =  loadone_sanpham($id);
                extract($sp);
                $sp_cungloai=loadsanpham_cungloai($id,$iddm);
            }
            include "./view/chitietsanpham.php";
            break;
            
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Đăng ký thành công";
            }
            include "./view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user,$pass);
                
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    $thongbao = "Đăng nhập thành công";
                    include "./view/home.php";
                }else{
                    $thongbao = "Tai khoản bạn không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                }
            }
            break;

        case 'edittk':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                updatetk($id,$user,$pass,$email,$address,$tel);
                $_SESSION['user'] =  check_user($user,$pass);
               header('Location: index.php?act=edittk');
                
            }
            include "./view/taikhoan/edit.php";
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;




          default :
          include "view/home.php";  
          break;
    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>
