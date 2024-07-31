---
hide:
  - toc
---

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" /> 

<style>
.fontawesome-icon {  
	text-shadow: 1px 1px 1px #ccc;  
	font-size:1.5em;  
}  
.fa-laptop-code,  
.fa-puzzle-piece,  
.fa-github-alt{  
	color:#f00;  
	font-size:1.5em  
} 


.admonitionblock{
	padding:15px;
	margin-bottom:21px;
	border:1px solid transparent;
	border-radius:4px;  
}  
.admonitionblock .admonitionblock-link{
	font-weight:normal
}  
.admonitionblock>p,.admonitionblock>ul{
	margin-bottom:0
}  
.admonitionblock>p+p{
	margin-top:5px
}  

/* TIP - ПОРАДА */  
.admonitionblock-tip{
	background-color:#dff0d8;
	border-color:#d6e9c6;
	color:#3c763d
}  
.admonitionblock-tip .admonitionblock-link{
	color:#2b542c
}    
/* NOTE - ІНФОРМАЦІЯ */  
.admonitionblock-note{
	background-color:#d9edf7;
	border-color:#bce8f1;
	color:#31708f
}  
.admonitionblock-note .admonitionblock-link{
	color:#245269
}  

/* WARNING - УВАГА */  
.admonitionblock-warning{
	background-color:rgba(255,209,0,0.12);
	border-color:rgba(255,209,0,0.24);
	color:#b89600
}  
.admonitionblock-warning .admonitionblock-link{
	color:#856d00
}
  
/* CAUTION - НЕБЕЗПЕКА */  
.admonitionblock-caution{
	background-color:rgba(239,104,53,0.12);
	border-color:rgba(191,52,0,0.15);
	color:#bf3400
}  
.admonitionblock-caution .admonitionblock-link{
	color:#962a01
}  

/* IMPORTANT - ВАЖЛИВО */  
.admonitionblock-important{
	background-color:rgba(232,76,61,0.1);
	border-color:rgba(232,76,61,0.15);
	color:#d82a1a
}  
.admonitionblock-important .admonitionblock-link{
	color:#ab2114
}  

.container {
    display: flex;
    justify-content: center;
}
    
    
iframe {
    aspect-ratio: 16 / 9;
    width: 100% !important;
}

</style>
# Приклад форми замовлення

<blockquote>
<p><i class="fas fa-user-edit"></i> Автор ідеї та втілення: <strong>Олександр Мороз (WpDews)</strong><br>
<i class="fas fa-envelope"></i> E-mail: <a href="mailto:aleksmorro@gmail.com">aleksmorro@gmail.com</a><br>
<i class="fa-brands fa-telegram"></i> Telegram: <a href="https://t.me/WpDews">WpDews</a>
</p>
</blockquote>

Повний приклад форми замовлення з можливістю вибору кількості товару та знижки від кількості. 


```php
<?php
$price_old = '1598';
$price_new = '799';
$discount = round((($price_old - $price_new) / $price_old) * 100);
$price_new2 = round($price_new - ($price_new*0.05)); // -5%
$price_new3 = round($price_new - ($price_new*0.1)); // -10%
$price_new4 = round($price_new - ($price_new*0.15)); // -15%

$product_id = '5';
$fbp = (isset($_GET['fbp'])) ? trim($_GET['fbp']) : '';
$_SESSION['fbp'] = $fbp;
?>
<form action="order.php" method="post">
	<h3 class="mb-3">Заповніть, будь ласка, форму нижче</h3>
	<input class="form-control form-control-lg" type="text" placeholder="Ваше ім'я" name="name" required="">
	<input class="form-control form-control-lg mt-3" type="text" placeholder="Ваш номер телефону" name="phone" required="" />
	<select name="comment" class="form-control-lg form-select mt-3" required="">
		<option value="" selected disabled>Оберіть кількість</option>
		<option value="1 шт" data-productid="<?= $product_id; ?>" data-count="1" data-prise="<?= $price_new; ?>">1 шт - <?= $price_new; ?>грн</option>
		<option value="2 шт" data-productid="<?= $product_id; ?>" data-count="2" data-prise="<?= $price_new2; ?>">2 шт - <?= round($price_new2 *2); ?>грн (-5% знижки)</option>
		<option value="3 шт" data-productid="<?= $product_id; ?>" data-count="3" data-prise="<?= $price_new3; ?>">3 шт - <?= round($price_new3 *3); ?>грн (-10% знижки)</option>
		<option value="4 шт" data-productid="<?= $product_id; ?>" data-count="4" data-prise="<?= $price_new4; ?>">4 шт - <?= round($price_new4 *4); ?>грн (-15% знижки)</option>
	</select>
	<input type="hidden" name="product" id="hiddenProduct"  value="Quick landing page" hidden="hidden" />
	<input type="hidden" name="product_id" id="product_id" value="<?= $product_id; ?>" hidden="hidden" />
	<input type="hidden" name="product_price" id="product_price"  value="<?= $price_new; ?>" hidden="hidden" />
	<input type="hidden" name="fbp" id="fbp"  value="<?= $fbp; ?>" hidden="fbp" />
	<input type="hidden" name="count" value="1"/>
	<input type="hidden" name="payment" value="4"/>
	<input type="hidden" name="delivery" value="1"/>
	<input type="hidden" name="servername" value="<?= dirname($_SERVER['SCRIPT_NAME']);?>">
	<input type="hidden" name="type" value="offer">
	<button type="submit" class="btn btn-danger btn-buy mt-4 mb-2">
		Зробити замовлення
	</button>
	<span class="mt-4 text-center" style="font-size: 12px">
    	Відправляючи дані ви погоджуєтесь з <br />
    	<a href="politics.html" target="_blank">політикою конфіденційності</a>
    </span>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$('select[name="comment"]').on('change', function() {
	var count = $(this).find('option:selected').data('count');
	var prise = $(this).find('option:selected').data('prise');
	var product_id = $(this).find('option:selected').data('productid');
	$('input[name="count"]').val(count);
	$('input[name="product_price"]').val(prise);
	$('input[name="product_id"]').val(product_id);
});
</script>
```

Данний код форми замовлення містить в собі можливість вибору кількості товару та знижки від кількості.

Завантажити приклад або ознайомитись можна за посиланням [github.com](https://github.com/wpdew-com/order_landing/) або скориставшись командою:

```bash
git clone https://github.com/wpdew-com/order_landing/ .; rm .gitignore; rm readme.md; rm -r -fo .git
```

Після завантаження ви можете використовувати цей код на своєму сайті.


