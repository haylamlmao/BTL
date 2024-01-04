<main class="catalog  mb ">

    <div class="boxleft ">
        <div class="mb">
            <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
            <?php 
            if(isset($_SESSION['user'])&&(is_array(['user']))){
                extract($_SESSION['user']);


            }
            
            ?>
          <form action="index.php?act=edittk" method="post">
                email
                <input type="email" name="email" value="<?=$email?>"><br>
                user
                <input type="text" name="user" value="<?=$user?>"> <br>
                password
                <input type="passwrod" name="pass" value="<?=$pass?>"><br>
                Địa chỉ
                <input type="text" name="address" value="<?=$address?>"><br>
                Điện thoại
                <input type="text" name="tel" value="<?=$tel?>"><br>

                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cập Nhật" name="capnhat">
                <input type="reset" value="Nhập Lại">
          </form>
          
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
        
        ?>
       
    </div>
    <?php
        include "view/boxright.php";
    ?>
</main>
<!-- BANNER 2 -->