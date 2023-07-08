<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../uploads/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height= '80px' >";
    }else{
        $hinh = "khong co anh";
    }
?>
<header>
	<h1>Cập nhật sản phẩm</h1>
</header>

<form action="index.php?act=updatesp" id="waterform" method="post"  enctype="multipart/form-data">
       <div class="rowm b10">
       <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                     foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    if($iddm==$id) $s="selected"; else $s="";
                    echo'<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                    }
                    ?>
        </select>
</div>
<table>
    <tr>
        <td>
        Tên sản phẩm<br>
    <input type="text" id="name" name="tensp" value="<?=$sanpham['name']?>">
        </td>
    </tr>
    <tr>
        <td>
        Giá<br>
    <input type="text" id="name" name="giasp" value="<?=$price?>">
        </td>
    </tr>
    <tr>
        <td>
        Hình<br>
    <input type="file" id="name" name="hinh" >  
    <?=$hinh?>
        </td>
    </tr>
    <tr>
        <td>
        Thông tin<br>
    <textarea name="thongtin" id="" cols="30" rows="10"><?=$thongtin?></textarea>
        </td>
    </tr>
    <tr>
        <td>
        Mô tả<br>
    <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
        </td>
    </tr>
    <tr>
        <td>
        <input type="hidden" name="id" value="<?=$sanpham['id']?>">
    <input type="submit" name="capnhat" value="Cập nhật">
    <a href="index.php?act=listsp"><input type="button" value="Danh sách" ></a>
        </td>
    </tr>
</table>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
