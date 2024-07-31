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
# Опис полів 

<blockquote>
<p><i class="fas fa-user-edit"></i> Автор ідеї та втілення: <strong>Олександр Мороз (WpDews)</strong><br>
<i class="fas fa-envelope"></i> E-mail: <a href="mailto:aleksmorro@gmail.com">aleksmorro@gmail.com</a><br>
<i class="fa-brands fa-telegram"></i> Telegram: <a href="https://t.me/WpDews">WpDews</a>
</p>
</blockquote>

Приклад використання PHP-скрипта для обробки форми і відправки даних в CRM-системи, на електронну пошту та в Telegram-чат.

## Використання змінних

<div class="container">
<iframe src="https://www.youtube.com/embed/1IT3Q9Yf2TU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

### Початковий код PHP-скрипта для обробки замовлення:

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
```

Змінна <code>$price_old</code> містить стару ціну товару - вивід в документі <code><?= $price_old; ?></code><br>
<code>$price_new</code> - нову ціну - <code><?= $price_new; ?></code><br>
<code>$discount</code> - відсоток знижки - <code><?= $discount; ?>%</code> обраховувається автоматично<br>
Змінні <code>$price_new2</code>, <code>$price_new3</code>, <code>$price_new4</code> містять ціни зі знижкою 5%, 10% та 15% відповідно.<br>

### Приклад виводу знижки на сторінці:

```php
<div class="number-discount">
	<h3 class="block-title">ЗАОЩАДЖУЙ ПРЯМО ЗАРАЗ!</h3>
	<ol role="list" class="discount-list">
		<li>2 шт = <strong><?= round($price_new2 *2); ?></strong> грн ( знижка 5% )</li>
		<li>3 шт = <strong><?= round($price_new3 *3); ?></strong> грн ( знижка 10% )</li>
		<li>4 шт = <strong><?= round($price_new4 *4); ?></strong> грн ( знижка 15% )</li>
	</ol>
</div>
```
<code>$product_id</code> - ідентифікатор товару, <br>
<code>$fbp</code> - параметр з URL-адреси, <br>
<code>$_SESSION['fbp']</code> - змінна сесії.<br>

### Встановлення пікселя Facebook Pixel:

```php
$fbp = (isset($_GET['fbp'])) ? trim($_GET['fbp']) : 'XXXXXXXXXXXXXX';
$_SESSION['fbp'] = $fbp;
```
Де <code>XXXXXXXXXXXXXX</code> - ваш ідентифікатор пікселя Facebook Pixel. 
<br><br>

<div class="admonitionblock admonitionblock-note"><i class="fas fa-info-circle"></i> <strong>Інформація:</strong> 
Піксель встановлюється автоматично при завантаженні сторінки, якщо він не встановлений в URL-адресі.
Та передається автоматично в форму замовлення та на сторінку дякую.
</div>

<div class="admonitionblock admonitionblock-warning"><i class="fas fa-exclamation-triangle"></i> <strong>Увага:</strong> 
Для тестування ваших подій за допомогою пікселя Facebook Pixel, ви можете використовувати розширення браузера <a href="https://chrome.google.com/webstore/detail/facebook-pixel-helper/fdgfkebogiimcoedlicjlajpkdmockpc" target="_blank" title="Facebook Pixel Helper">Facebook Pixel Helper</a>.
</div>

<div class="admonitionblock admonitionblock-important"><i class="fas fa-exclamation-circle"></i> <strong>Важливо:</strong> 
При використанні Facebook Pixel Helper всі розширення блокування реклами та відстеження повинні бути вимкнені.
</div>

### Використання динамічного пікселя Facebook Pixel:

Завдяки початковому [коду](/command/#php-), ви можете використовувати динамічний піксель Facebook Pixel для відстеження відвідувачів, які переглядають ваш сайт.

```php
<?php
$fbp = (isset($_SESSION['fbp'])) ? $_SESSION['fbp'] : '';
?>
```


Відповідає за встановлення пікселя Facebook Pixel на сторінці та прийому динамічного параметра з URL-адреси.

```php
<a href="yoursite.loc/?fbp=XXXXXXXXXXXXXX">
```

Де <code>yoursite.loc</code> - ваш сайт,
<code>XXXXXXXXXXXXXX</code> - ваш ідентифікатор пікселя Facebook Pixel. 

### Налаштування форми на відправку даних:

```php
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
```

Форма має містити в собі поля для введення імені, телефону, вибору кількості товару, приховані поля для передачі даних в скрипт обробки замовлення, а також кнопку відправки даних. Метод відправки POST. та дії на скрипт обробки замовлення <code>action="order.php"</code>.

**Приховані поля:** та **обовязкові поля** для передачі даних в скрипт обробки замовлення:

- <code>product</code> - назва товару,
- <code>product_id</code> - ідентифікатор товару,
- <code>product_price</code> - ціна товару,
- <code>fbp</code> - ідентифікатор пікселя Facebook Pixel,
- <code>count</code> - кількість товару,
- <code>payment</code> - спосіб оплати,
- <code>delivery</code> - спосіб доставки,
- <code>servername</code> - адреса сервера,
- <code>type</code> - тип замовлення.
- <code>name</code> - ім'я покупця,
- <code>phone</code> - телефон покупця,

Мають бути обовязково додані для передачі параметрів на сторінку дякую та оброблення замовлення.

**Параметри вибору кількості товару:**

```php
<select name="comment" class="form-control-lg form-select mt-3" required="">
    <option value="" selected disabled>Оберіть кількість</option>
	<option value="1 шт" data-productid="<?= $product_id; ?>" data-count="1" data-prise="<?= $price_new; ?>">1 шт - <?= $price_new; ?>грн</option>
    <option value="2 шт" data-productid="<?= $product_id; ?>" data-count="2" data-prise="<?= $price_new2; ?>">2 шт - <?= round($price_new2 *2); ?>грн (-5% знижки)</option>
    <option value="3 шт" data-productid="<?= $product_id; ?>" data-count="3" data-prise="<?= $price_new3; ?>">3 шт - <?= round($price_new3 *3); ?>грн (-10% знижки)</option>
    <option value="4 шт" data-productid="<?= $product_id; ?>" data-count="4" data-prise="<?= $price_new4; ?>">4 шт - <?= round($price_new4 *4); ?>грн (-15% знижки)</option>
</select>
```

```php
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

Якщо встановленно вибір кількості товару, то відбувається автоматична зміна ціни товару та кількості товару в прихованих полях форми.

Якщо вибір кількості товару не встановлено, то відбувається встановлення значень за замовчуванням.

### Зміна цін на лендінгу

```php
<div class="price">
	<span class="price-old"><?= $price_old; ?> грн</span>
	<span class="price-new"><?= $price_new; ?> грн</span>
	<span class="price-discount">-<?= $discount; ?>%</span>
</div>
```

<div class="admonitionblock admonitionblock-note"><i class="fas fa-info-circle"></i> <strong>Інформація:</strong> 
Всі ціни та знижки замінені на змінні і для того щоб їх змінити достатньо змінити значення змінних в коді index.php.
Достатньо змінити значення змінних в коді на початку <a href="/command/#php-">index.php</a>.
</div>




## UPSELL

Система UPSELL дозволяє вам пропонувати покупцю додаткові товари або послуги під час оформлення замовлення. Це допомагає збільшити середній чек і прибуток від кожного замовлення.

Загальні параметри для використання системи UPSELL майже такі само як і для звичайного лендінгу, але параметри форми трошкі відрізняються.

### Рекомендація по роботі з системою UPSELL

- Встановлюємо "материнський UPSELL" в папку upsellsystem.
- Налаштування всіх параметрів в "материнський UPSELL".
- Вимикаємо товари в "материнському UPSELL".
- Встановлюємо "дочірній UPSELL" в папку з лендінгом.
- Включаємо товари в "дочірньому UPSELL".
- Встановлюємо параметри форми в "дочірньому UPSELL".

### Підключення UPSELL та відправка даних в CRM

```php
<?php require_once 'upsell/include/lib/upsell_config.php'; ?>
```

Підключення конфігураційного файлу системи UPSELL на початку документу.

```php
<?php require_once 'upsell/include/lib/upsell_config_footer.php'; ?>
```	

Підключення конфігураційного файлу системи UPSELL в кінці документу для захисту ваших сторінок.

### Параметри форми UPSELL

Відрізняються тільки адресою відправки даних. 

Метод відправки POST. та дії на скрипт обробки замовлення <code>action="upsell/index.php"</code>

```php
<form action="upsell/index.php" method="post">
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
```