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

# Вітання!

<blockquote>
<p><i class="fas fa-user-edit"></i> Автор ідеї та втілення: <strong>Олександр Мороз (WpDews)</strong><br>
<i class="fas fa-envelope"></i> E-mail: <a href="mailto:aleksmorro@gmail.com">aleksmorro@gmail.com</a><br>
<i class="fa-brands fa-telegram"></i> Telegram: <a href="https://t.me/WpDews">WpDews</a>
</p>
</blockquote>

## Сторінка документації


<!--
Цей PHP-скрипт обробляє замовлення, збираючи дані форми, перевіряючи їх і надсилаючи їх до різних CRM і Telegram. Сценарій також керує сповіщеннями електронною поштою та перевіряє IP-адреси спаму.

<div class="container">
<iframe src="https://www.youtube.com/embed/1IT3Q9Yf2TU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

## Особливості

- PHP 5.6 або вище
- розширення cURL увімкнено
- Дійсний токен бота Telegram і ідентифікатор чату
- CRM API Маркери та URL-адреси CRM

## Налаштування

1. **Налаштуйте CRM і Telegram:**

   - Замініть значення заповнювачів для `$tgtoken`, `$tgchatid`, `$crm_lp_token`, `$crm_lp_adress`, `$crm_salesdrive_token`, `$crm_salesdrive_sources`, `$crm_key_token`, `$crm_key_sources`, `$crm_ebash_token`, `$crm_ebash_adress`, and `$crm_ebash_ofise` своїми фактичними обліковими даними.

2. **IP-адреси спаму:**

   - Додайте відомі IP-адреси спаму до масиву `$spamip`.

3. **ReCaptcha:**

   - Встановіть ключ свого сайту в `$SiteKey` змінній, якщо ви використовуєте ReCaptcha (наразі закоментовано).

4. **Поля форми:**

   - Переконайтеся, що ваша HTML-форма містить поля для `name`, `phone`, а інші додаткові поля, такі як `fbp`, `comment`, `product_id`, тощо.

## Використання

Включіть цей сценарій у свій обробник форми обробки замовлення. Сценарій:

1. Збирайте та очищайте дані форми.
2. Перевірте, чи є IP-адреса в списку спаму.
3. Надсилайте дані замовлення в Telegram, налаштовані CRM та електронною поштою.


## Установка і запуск проекту.

```
git clone https://github.com/wpdew-com/order_landing/ .; rm .gitignore; rm readme.md; rm -r -fo .git
```

## Опис команд та полів

Детальніше про команди та поля можна дізнатися в розділах документації.

* `Звичайний лендінг` - [Дивитися опис команд та полів](/command/).
* `Upsell система` - [Дивитися опис команд та полів](/command/#upsell-crm).
* `Upsell система` - [Дивитися опис самої системи](/upsell/).


## Макет проекту


    index.php    # Головна сторінка лендінгу (приклад).
    order.php  # Скрипт обробки замовлення.
    policy.html  # Сторінка політики конфіденційності.
-->