<?php
    if(is_array($bl)){
        extract($bl);
    }
?>
<header>
	<h1>Cập nhật bình luận</h1>
</header>

<div id="form">

<form action="index.php?act=updatebl" id="waterform" method="post">

<div class="row mb10" id="name-form">
    Nội dung<br>
    <input type="text" id="name" name="noidung" value="<?php if(isset($noidung)&&($noidung!="")) echo $noidung; ?>" >
</div>

<div class="row mb10">
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
    <input type="submit" name="capnhat" value="Cập nhật">
    <a href="index.php?act=dsbl"><input type="button" value="DANH SÁCH" ></a>
</div>

    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
</div>