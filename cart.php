<?php
session_start();
include "block/header.php";
include "connectDB.php";
?>
<div class="main"> 
      <?php 
      	$id = $_SESSION['id']??0;
      	$arr_id = explode(',', $id);

      	$arr_products = [];
      	for($i=0;$i<count($arr_id);$i++){
      			$row = $conn->query('select * from products where id = '.$arr_id[$i]);
      			$arr_products[] = $row->fetch_assoc();
      	}
      ?>     
   <ul>
   	<?php foreach ($arr_products as $value) { ?>
			<li><?= $value['name']?> - <?= $value['price']?> руб.</li>
    <?php } ?>
    </ul>
    <?php 
    	$summa = 0;
    	foreach ($arr_products as $value){
    		$summa += $value['price'];
    	}

    ?>
    <p>Общая сумма - <?=$summa?></p>
    <p>	<button class="btn">Оплатить</button></p>
</div>
<?php
include "block/footer.php";
?>