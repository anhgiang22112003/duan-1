<header>
	<h1>Thêm mới loại hàng hóa</h1>
</header>

<div id="form">

<form action="index.php?act=adddm" id="waterform" method="post">

<div class="formgroup" id="name-form">
    Mã loại<br>
    <input type="text" id="name" name="maloai" disabled>
</div>

<div class="formgroup" id="message-form">
    Tên loại<br>
    <input type="text" id="name" name="tenloai">
</div>

<input type="submit" name="themmoi" value="Thêm mới">
    
    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" ></a>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
</div>
