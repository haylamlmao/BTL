<main class="catalog  mb ">

    <div class="boxleft">
        <div class="mb">
            <div class="box_title">CHI TIẾT SẢN PHẨM</div>
            <?php 
           
                    if(isset($sp) && is_array(($sp))){
                        extract($sp);
                                    echo '
                                    <div class="box_content">
                                    <img src="uploads/'.$img.'">
                                </div>
                                    ';
                                
                    }
            ?>
            <!-- <div class="box_content">
                <img src="img/iphoneX.jpg">
            </div> -->
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){   
                 $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
               
        </script>


        <div class="mb" id="binhluan">
            <?php
            if(isset($thongbao_bl)&&$thongbao_bl!=''){
                echo $thongbao;
            }
            ?>
            
            <!-- <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
               
            </div>
            <div class="box_search">
                <form action="" method="POST">
                    <input type="hidden" name="idpro" value="">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                  
                </form>
            </div> -->

        </div>

       

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
             <?php 
             foreach( $sp_cungloai as $spcungloai){
                extract($spcungloai);
                $linksp = "index.php?act=sanphamct&id=".$id;
                echo '
                <li><a href="'.$linksp.'"></a>'.$name.'</li>
                ';
             }
             
             ?>
            </div>
        </div>
    </div>
    <?php
        include "boxright.php";
    ?>
</main>
<!-- BANNER 2 -->