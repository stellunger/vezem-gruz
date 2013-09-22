<!-- Head -->
<div class="container head">
	<div class="row">
		<div class="span6 justify">
			<h3>АВТОМОБИЛЬНЫЕ ГРУЗОПЕРЕВОЗКИ</h3>
			
			<p>Наша транспортная компания специализируется на междугородних 
			автомобильных грузоперевозках.</p>

			<p><strong>Основные направления:</strong></p>

			<ul>
				<li><a href="<?php echo base_url(); ?>where/sever/nadym"><b>Север >></b></a></li>
				<li><a href="<?php echo base_url(); ?>where/ural/ural"><b>Урал >></b></a></li>
				<li><a href="<?php echo base_url(); ?>where/zapad/zapad"><b>Запад >></b></a></li>
				<li><a href="<?php echo base_url(); ?>where/yug/yug"><b>Юг >></b></a></li>
				<li><a href="<?php echo base_url(); ?>where/kazahstan/aktau"><b>Казахстан >></b></a></li>
				<li><a href="<?php echo base_url(); ?>where/sibir-dv/sibir-dv"><b>Сибирь и Дальний Восток >></b></a></li>
			</ul>

			<p>Перевозка грузов может осуществляться как отдельной машиной, так и в
			составе сборного груза. Также предлагаем полный спектр дополнительных
			услуг.</p>

			<!--<p><a href="about.html" class="smalltopspace btn btn-inverse btn-large anchorLink">
			Подробнее <i class="icon-share-alt icon-white"></i></a></p>-->

		</div>
		<div class="span6">
			<div class="rslides_container">
				<ul class="rslides" id="slider3">
					<li><img src="<?php echo base_url(); ?>img/slide1.jpg" alt=""/></li>
					<li><img src="<?php echo base_url(); ?>img/slide2.jpg" alt=""/></li>
					<li><img src="<?php echo base_url(); ?>img/slide3.jpg" alt=""/></li>
				</ul>
			</div>
			<img src="<?php echo base_url(); ?>img/slidershadow.png" alt="">
		</div>
	</div>
</div>

<div class="container">
	<div class="homeshadowsep">
	</div>
	<h3 align="center">Звоните! +7 (343) 349-53-37<br/></h3>
	<p align="center"><small>Время работы: понедельник-пятница с 9:00 до 18:00 (MSK +2).</small></p>
	<div class="homeshadowsep">
	</div>
</div>

<div class="container">
	<div class="row justify">		

		<div class="span4">

			<h4>Перевозки отдельным грузом</h4>

			<p><img src="<?php echo base_url(); ?>img/products/main-01.png"
			alt="Перевозки отдельным грузом" /></p>
			
			<p>Перевозка крупных партий неделимого груза и неделимых партий
			груза отдельной автомашиной от 1,5 до 25 тонн, от 12 до 120 м3.</p>

			<p><a href="<?php echo base_url(); ?>services/otdelnym-gruzom" class="btn btn-success">
			Отдельным грузом <i class="icon-share-alt icon-white"></i></a></p>	

		</div>

		<div class="span4">

			<h4>Перевозки в составе сборного груза</h4>

			<p><img src="<?php echo base_url(); ?>img/products/main-02.png"
			alt="Перевозки в составе сборного груза" /></p>
			
			<p>Перевозка небольших партий груза от 300 кг и 0,5 м3 в составе
			сборного груза. Максимально выгодная стоимость!</p>

			<p><a href="<?php echo base_url(); ?>services/sbornym-gruzom" class="btn btn-success">
			В сборном грузе <i class="icon-share-alt icon-white"></i></a></p>

		</div>
		
		<div class="span4">
			<h4 class="center"><img src="<?php echo base_url(); ?>img/turnright.png" class="rightpad" alt="">Оформить заявку</h4>
			<div class="smallpause"></div>
			<div class="block">								
				<div class="form rightpic">
				<form method="post" action="<?php echo base_url();?>sendmail" id="contactform">	
				<table>			   
				<tr class="element">
					<td></td>
					<td>
					<label>Имя</label>
					<input type="text" name="name" id="inputName" class="text input-xlarge" />
					</td>
				</tr>
				<tr class="element">
					<td>
					</td>
					<td>
					<label>Телефон</label>					
					<input type="text" name="phone" id="inputPhone" class="text input-xlarge" />
					</td>
				</tr>
				<tr class="element" style="vertical-align: text-top;">
					<td>
					</td>
					<td>
					<label>Описание заявки</label>										
					<textarea rows="7" name="comment" id="inputMessage"i dclass="text textarea input-xlarge" ></textarea>
					</td>
				</tr>
				<tr class="element">
					<td> 
					&nbsp;
					</td>
					<td>		
					<button type="submit" class="btn">Отправить заявку</button>
					</td>
				</tr>
				</table>					
				</form>
				</div>
			</div>
		</div>
	</div>	
</div>
