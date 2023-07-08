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
 <h1>Danh sách loại hàng</h1>
                               <table border=1 width=600 height=200 >
                                    <tr style="text-align:center;">
                                        <th></th>
                                        <th>Mã loại</th>
                                        <th>Tên loại</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        $suadm="index.php?act=suadm&id=".$id;
                                        $xoadm="index.php?act=xoadm&id=".$id;
                                        echo'<tr>
                                             <td><input type="checkbox" name="" id=""></td>
                                             <td style="text-align:center;">'.$id.'</td>
                                             <td style="text-align:center;">'.$name.'</td>
                                             <td style="text-align:center;"><a href="'.$suadm.'"><input type="button" value="Sửa"></a><a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
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
                                </table>
							
                            <br> 
                                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>


 </body>
 </html>                      
                       