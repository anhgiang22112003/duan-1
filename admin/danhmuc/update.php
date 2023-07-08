<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<header>
	<h1>Cập nhật loại hàng hóa</h1>
</header>

<div id="form">

<form action="index.php?act=updatedm" id="waterform" method="post">

<div class="row mb10" id="name-form">
    Mã loại<br>
    <input type="text" id="name" name="maloai" disabled>
</div>

<div class="row mb10" id="message-form">
    Tên loại<br>
    <input type="text" id="name" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
</div>
<div class="row mb10">
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
    <input type="submit" name="capnhat" value="Cập nhật">
    
    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" ></a>
</div>

    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
</div>
