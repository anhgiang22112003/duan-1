<header>
	<h1>Thêm mới bình luận<nav></nav></h1>
</header>

<div id="form">

<form action="index.php?act=addbl" id="waterform" method="post">

<div class="formgroup" id="name-form">
    Nội dung<br>
    <input type="text" id="name" name="noidung" >
</div>
<div class="formgroup" id="name-form">
    ID User<br>
    <input type="text" id="name" name="iduser"  >
</div>
<div class="formgroup" id="name-form">
    Name User<br>
    <input type="text" id="name" name="nameuser"  >
</div>
<div class="formgroup" id="name-form">
    ID Pro<br>
    <input type="text" id="name" name="idpro"  >
</div>
<div class="formgroup" id="name-form">
    Ngày bình luận<br>
    <input type="date" id="name" name="ngaybl"  >
</div>
<input type="submit" name="themmoi" value="Thêm mới">
    
    <a href="index.php?act=dsbl"><input type="button" value="DANH SÁCH" ></a>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
</div>
