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
 <h1>Danh sách bình luận</h1>
                               <table border=1 width=1110 height=200 >
                                    <tr style="text-align:center;">
                                        <th width=100>ID</th>
                                        <th width=100>Nội dung</th>
                                        <th width=100>ID user</th>
                                        <th width=100>ID pro</th>
                                        <th width=100>Ngày bình luận</th>
                                        <th width=100>Thao tác</th>
                                    </tr>
                                    <?php
                                    foreach ($listbinhluan as $bl) {
                                        extract($bl);
                                        $suabl="index.php?act=suabl&id=".$id;
                                        $xoabl="index.php?act=xoabl&id=".$id;
                                        echo'<tr>
                                             <td style="text-align:center;">'.$id.'</td>
                                             <td style="text-align:center;">'.$noidung.'</td>
                                             <td style="text-align:center;">'.$iduser.'</td>
                                             <td style="text-align:center;">'.$idpro.'</td>
                                             <td style="text-align:center;">'.$ngaybl.'</td>
                                             <td style="text-align:center;"><a href="'.$suabl.'"><input type="button" value="Sửa"></a><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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
                                <a href="index.php?act=addbl"><input type="button" value="Nhập thêm"></a>				
                            <br> 
 </body>
 </html>                      
                       