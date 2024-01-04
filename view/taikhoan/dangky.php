<main class="catalog  mb ">

    <div class="boxleft ">
        <div class="mb">
            <div class="box_title">ĐĂNG KÝ</div>
          <form action="index.php?act=dangky" method="post">
                <input type="email" name="email" id=""> email 
                <input type="text" name="user" id="">user 
                <input type="passwrod" name="pass" id="">password 
                <input type="submit" value="Đăng Ký" name="dangky">
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