<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>
<h1 style="position:relative; top:-500px; text-align:center;background-color:#A9A9A9;" >Biểu đồ thống kê</h1>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
    ['Danh mục','Số lượng sản phẩm'],
 <?php 
    $tongdm=count($listthongke);
    $i=1;
    foreach($listthongke as $thongke){
        extract($thongke);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
        $i+=1;
    }
    ?>

]);

var options = {
  'title':'Thống kê theo danh mục', 'width':1100, 'height':800
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}

</script>
</body>
</html>



