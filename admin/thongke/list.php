<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            width: 1110px;
            height: 50px;
            background-color: #A9A9A9;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="content">
                                <h1>Thống kê sản phẩm theo loại</h1> 
                                <table border=1 width=1110 height=200 >
                                    <tr style="text-align:center;">
                                   
                                    <th width=200>Mã danh mục</th>
                                    <th width=200>Tên danh mục</th> 
                                    <th width=100>Số lượng</th>                      
                                    <th width=100>Giá cao nhất</th>  
                                    <th width=400>Giá thấp nhất</th>                                  
                                    <th width=400>Giá trung binh</th>                                    
                                    </tr>
                                    <?php
                                    foreach ($listthongke as $thongke) {
                                        extract($thongke);
                                        echo'
                                           <tr style="text-align:center;">
                                             <td>'.$madm.'</td>
                                            <td>'.$tendm.'</td>
                                             <td>'.$countsp.'</td>
                                             <td>'.$maxprice.'</td>
                                             <td>'.$minprice.'</td> 
                                             <td>'.$avgprice.'</td> 
                                            
                                        </tr>';
                                    }
                                    ?>
                                    
                                    
                                </table><br>
                                <h1>Thống kê sản phẩm theo lượt xem</h1> 
                                <table border=1 width=1110 height=200 >
                                    <tr style="text-align:center;">
                                   
                                    <th width=200>Mã sản phẩm</th>
                                    <th width=200>Tên sản phẩm</th> 
                                    <th width=100>Lượt xem</th>                      
                                                                      
                                    </tr>
                                    <?php
                                    foreach ($listlx as $lx) {
                                        extract($lx);
                                        echo'
                                           <tr style="text-align:center;">
                                             <td>'.$masp.'</td>
                                            <td>'.$tensp.'</td>
                                             <td>'.$luotxem.'</td>
                                        </tr>';
                                    }
                                    ?>
                                   </table><br>
                                   <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đô" ></a> 
</body>
</html>
                 

