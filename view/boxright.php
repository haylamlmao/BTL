<div class="boxright">
 <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php 

            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
             ?>

            <h4>Xin chào </h4><br>
            <?= $user?>
                
            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

            <li class="form_li"><a href="index.php?act=edittk">Cập nhật tài khoản</a></li>    
             <?php if($role==1){ ?>  
            <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>    
              <?php } ?>  
            <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>   

            <?php


            }else{

            ?>

            <form action="index.php?act=dangnhap" method="POST">
            <h4>Tên đăng nhập</h4><br>
            <input type="text" name="user" id="">

            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" id=""><br>

            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?

            <br><input type="submit" value="Đăng nhập" name="dangnhap">
            </form>

            <li class="form_li"><a href="#">Quên mật khẩu</a></li>

            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            <?php }?>
        </div>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                    foreach($dsdm as $danhmuc) {
                        extract($danhmuc);
                        $lickdm = "index.php?act=sanpham&iddm=".$id;
                        echo '<li><a href="'.$lickdm.'">'.$name.'</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
                <button name="btn">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN YÊU PHẨM THÍCH</div>
        <div class="box_content">
            <?php 
        
          foreach($dstop10 as $sp){
            extract($sp);
                    
                    $linksp = "index.php?act=sanphamct&id=" .$id;
                    $img = $img_part.$img;
                    echo '<div class="selling_products" style="width:100%;">
                                <img src="'.$img.'" alt="anh">
                                <a href="'.$linksp.'">'.$name.'</a>
                         </div>';
          }
            ?>
            <!-- <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
                <img src="./img/clockforgirl.jpg" alt="anh">
                <a href="">Đồng hồ đeo tay nữ</a>
            </div> -->
        </div>
    </div>
</div>