<?php
//Controller cho xem đơn hàng
function viewcart($del){
	global $img_path;
    $tong = 0;
    $i=0;
	if($del==1){
		$xoasp_th='<th>Thao tác</th>';
		$xoasp_td2='<td></td>';
	}else{
		$xoasp_th="";
		$xoasp_td2="";
	}
	echo'<thead>
	<tr>
		<th></th>
		<th>Hình</th>
		<th>Số lượng</th>
		<th>Tên sản phẩm</th>
		<th>Giá</th>
		<th>Thành tiền</th>
        <th></th>
		'.$xoasp_th.'
	</tr>
</thead>';
    foreach ($_SESSION['mycart'] as $cart){
    $hinh = $img_path.$cart[2];
    $tt = $cart[3] * $cart[4];
    $tong+= $tt;
	if($del==1){
		$xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'">Xóa</a></td>';
	}else{
		$xoasp_td="";
	}
    
   echo'
   
	<tr class="rem1">
    <td class="invert">'.($i+1).'</td>
	<td class="invert-image">
	<a href="">
	<img src="'.$hinh.'" alt=" " height="120" width= "65%" class="img-responsive">
	</a>
	</td>
	<td class="invert">
	<input type="number" min="1" name="" value="'.$cart[4].'">

	</td>
	<td class="invert">'.$cart[1].'</td>
	<td class="invert">'.$cart[3].'</td>
	<td class="invert">'.$tt.'</td>
	<td class="invert">'.$xoasp_td.'</td>
	</tr>';
    $i++;
    
}
	echo '<tr>
	<td colspan="7">Tổng tiền :'.$tong.'<sup>vnđ</sup> </td>
	</tr>';
}
function bill_chi_tiet($listbill){
	global $img_path;
    $tong = 0;
    $i=0;
	echo'<thead>
	<tr>
		<th></th>
		<th>Hình</th>
		<th>Số lượng</th>
		<th>Tên sản phẩm</th>
		<th>Giá</th>
		<th>Thành tiền</th>
        <th></th>	
	</tr>
</thead>';
    foreach ($listbill as $cart){
    $hinh=$img_path.$cart['img'];
    $tt+=$cart['thanhtien'];
   echo'
   
	<tr class="rem1">
	<td class="invert-image">
	<a href="">
	<img src="'.$hinh.'" alt=" " height="120" width= "65%" class="img-responsive">
	</a>
	</td>
	<td class="invert">
	<input type="number" min="1" name="" value="'.$cart['soluong'].'">

	</td>
	<td class="invert">'.$cart['name'].'</td>
	<td class="invert">'.$cart['price'].'</td>
	<td class="invert">'.$cart['thanhtien'].'</td>
	</tr>';
    $i+=1;
    
}
	echo '<tr>
	<td colspan="7">Tổng đơn hàng :'.$tong.'<sup>vnđ</sup> </td>
	</tr>';
}
//Controller tổng đơn hàng đã đặt
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart){
    $tt = $cart[3] * $cart[4];
    $tong+= $tt;
}
	return $tong;
}
function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql = "Insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="Insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="Select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql="Select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}

function loadall_thongke(){
	$sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) avgprice";
	$sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
	$sql.=" group by danhmuc.id order by danhmuc.id desc";
	$listtk=pdo_query($sql);
	return $listtk;
}
?>