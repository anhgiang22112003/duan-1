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
 <h1>Danh sách tài khoản</h1>
                               <table border=1 width=1110 height=200 >
                                    <tr style="text-align:center;">
                                        
                                        <th width=100>Mã TK</th>
                                        <th width=100>Tên</th>
                                        <th width=100>Email</th>
                                        <th width=100>Tên đăng nhập</th>
                                        <th width=100>Mật khẩu</th>
                                        <th width=100>Số điện thoại</th>
                                        <th width=100>Địa chỉ</th>
                                        <th width=100>Vai trò</th>
                                        <th width=100>Thao tác</th>
                                    </tr>
                                    <?php
                                    foreach ($listacc as $acc) {
                                        extract($acc);
                                        $suatk="#";
                                        $xoatk="index.php?act=xoatk&id=".$id;
                                        echo'<tr>
                                             <td style="text-align:center;">'.$id.'</td>
                                             <td style="text-align:center;">'.$name.'</td>
                                             <td style="text-align:center;">'.$email.'</td>
                                             <td style="text-align:center;">'.$user.'</td>
                                             <td style="text-align:center;">'.$pass.'</td>
                                             <td style="text-align:center;">'.$tel.'</td>
                                             <td style="text-align:center;">'.$address.'</td>
                                             <td style="text-align:center;">'.$role.'</td>
                                             <td style="text-align:center;"><a href="'.$suatk.'"><input type="button" value="Sửa"></a><a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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
 </body>
 </html>                      
                       