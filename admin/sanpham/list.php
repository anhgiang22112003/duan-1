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
    <h1>Danh sách sản phẩm</h1>
                            <form action="" method="post">
                                   <table>
                                    <tr>
                                        <th>
                                        <input type="text" name="kyw">
                                        </th>
                                        <th>
                                        <select name="iddm" id="">
                                        <option value="0" selected>Tất cả</option>
                                        <?php
                                       foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo'<option value="'.$id.'">'.$name.'</option>';
                                    }
                                        ?>
                                    </select>
                                        </th>
                                        <th>
                                        <input type="submit" name="listok" value="OK">
                                        </th>
                                    </tr>
                                   </table>  
                                    
                                    
                                </form>
                               
                                
                                <table border=1 width=1110  >
                                    <tr style="text-align:center; height=200">
                                    <th>Mã loại</th>
                                    <th width=200>Tên sản phẩm</th>
                                    <th width=200>Hình</th>                                   
                                    <th width=100>Giá</th>  
                                    <th width=400>Thông tin</th>                                  
                                    <th width=400>Mô tả</th>                                    
                                    <th width=70>Lượt xem</th>
                                    <th width=70>Thao tác</th>
                                    </tr>
                                    <?php
                                    foreach ($listsanpham as $sanpham) {
                                        extract($sanpham);
                                        $suasp="index.php?act=suasp&id=".$id;
                                        $xoasp="index.php?act=xoasp&id=".$id;
                                        $hinhpath="../uploads/".$img;
                                        if(is_file($hinhpath)){
                                            $hinh = "<img src='".$hinhpath."' height= '140px' width='150px'>";
                                        }else{
                                            $hinh = "khong co anh";
                                        }
                                        echo'
                                            <tr style="text-align:center">
                                             <td>'.$id.'</td>
                                            <td height=200>'.$name.'</td>
                                             <td height=200>'.$hinh.'</td>
                                             <td height=200>'.$price.'</td>
                                             <td height=200>'.$thongtin.'</td> 
                                             <td height=200>'.$mota.'</td> 
                                             <td height=200>'.$luotxem.'</td>
                                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a><br><br><a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                    }
                                    ?>
                                    
                                    <!-- <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""> </td>
                                        <td>0001</td>
                                        <td>Quần áo nam</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"> </td>
                                    </tr> -->
                                </table><br>
                                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</body>
</html>
                 

