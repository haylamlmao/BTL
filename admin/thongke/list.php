<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
        <div class="row2">
         <div class="row2 font_title">
          <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
               
                <th>ma danh muc</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>

            <?php 
            foreach($lidtk as $thongke){
                extract($thongke);
                echo 
                '<tr> 
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$maxprice.'</td> 
                <td>'.$minprice.'</td> 
                <td>'.$avgprice.'</td> 
                  
               </tr> ';
            }
            
            ?>
           
           </table>
           </div>
           <div class="row mb10 ">
            <a href="index.php?act=bieudo">  <input class="mr20" type="button" value="Xem Biểu Đồ"></a>
       
           </div>
          </form>
         </div>
        </div>



       
    </div>
    
</body>
</html>