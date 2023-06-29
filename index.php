<?php
session_start();
include "block/header.php";
include "connectDB.php";
?>
<div class="main"> 
            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
              <div class="itc-slider-wrapper">
                <div class="itc-slider-items">
                  <div class="itc-slider-item">
                    <img src="images/slider/1.jpg" />
                  </div>
                  <div class="itc-slider-item">
                    <img src="images/slider/2.jpeg" />
                  </div>
                  <div class="itc-slider-item">
                    <img src="images/slider/3.jpeg" />
                  </div>
               
                </div>
              </div>
              <button class="itc-slider-btn itc-slider-btn-prev"></button>
              <button class="itc-slider-btn itc-slider-btn-next"></button>
            </div>
        </div>
<div class="row">
		<div class="item center">
				Категория:
			<select>
				<option>Пицца</option>
				<option>Бургер</option>
				<option>Суши</option>
			</select>
			Доставка:
			<select>
				<option>сейчас</option>
			</select>
		</div>
</div>
<div class="row">
<?php 
	$products = $conn->query('select * from products');
	foreach ($products as $product) {
		?>
		<div class="item catprod">
			<h2><?= $product['name'] ?></h2>
			<p><img src="images/<?= $product['image'] ?>" /></p>
			<p><span><?= $product['description'] ?></span></p>
			<p><span><?= $product['price'] ?> руб.</span></p>
			<p>
				<form action="action/addcart.php" method="post">
					<input type="hidden" name="id" value="<?= $product['id'] ?>">
					<button class="btn">Добавить в корзину</button>
			</form>
			</p>
		</div>
		<?php 
	}

?>
</div>




<?php
			if(isset($_GET["suc"]) && $_GET["suc"] == 1){
				echo "<div id='hide' class='show' align='center' style='color: green'><a style='float: right;cursor: pointer; margin-right: 5px' onclick='hide()'>Х</a><br /><br /><br />Ваши данные добавлены!</div>";
			}elseif(isset($_GET["suc"]) && $_GET["suc"] == 0){
				echo "<div class='show' align='center' style='color: red'><a style='float: right;cursor: pointer; margin-right: 5px' onclick='hide()'>Х</a><br /><br /><br />Произошла ошибка!!</div>";
			}
		?>
<form action="action/form.php" method="post">
<div class="container" >
	<div class="row">

		<h2>Форма обратной связи</h2>
	</div>
	<div class="row">
			<div class="item-25">
				<label>Ваше имя:</label>
			</div>
			<div class="item-75">
				<input type="text" name="name" id="fname" placeholder="Ваше имя" />
			</div>
	</div>
	<div class="row">
			<div class="item-25">
				<label>Фамилия:</label>
			</div>
			<div class="item-75">
				<input type="text" name="sname" id="sname" placeholder="Ваша фамилия" />
			</div>
	</div>
	<div class="row">
			<div class="item-25">
				<label>Email:</label>
			</div>
			<div class="item-75">
				<input type="email" name="email" id="email" placeholder="Email" />
			</div>
	</div>
	<div class="row">
			<div class="item-25">
				<label>Сообщение:</label>
			</div>
			<div class="item-75">
				<textarea id="message" name="message" placeholder="Ваше сообщение" style="height: 200px">
					
				</textarea>
			</div>
	</div>
	<div class="row">
			<input type="submit" value="Отправить">
	</div>
</div>
</form>
	<div class="row">
			<div class="item center">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acaf41720a0e0f88b39859a7dae7b5660c58bc35889dfe756ab1a7538d10bf8cd&amp;width=867&amp;height=407&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
</div>
<script type="text/javascript">
	function hide(){
		document.getElementById('hide').style.display = 'none';
	}


</script>
<?php
include "block/footer.php";
?>