<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" /> 

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
</style>
# Путівник по Markdown

<blockquote>
<p><i class="fas fa-user-edit"></i> Автор ідеї та втілення: <strong>Олександр Мороз (WpDew)</strong><br>
<i class="fas fa-envelope"></i> E-mail: <a href="mailto:aleksmorro@gmail.com">aleksmorro@gmail.com</a></p>
</blockquote>

<p>У даному керівництві ви познайомитесь з <a class="admonitionblock-link" href="https://uk.wikipedia.org/wiki/Markdown" target="_blank" title="Markdown">Markdown</a> - легкою мовою розмітки даних, яку створено з нахилом на читабельність та зручність редагування тексту з подальшим перетворенням його на <abbr title="HyperText Markup Language">HTML</abbr>.</p>


## MD Знайомство з Markdown 

<a id="totop"></a>

## Заголовки

    # Заголовок 1 рівня
    ## Заголовок 2 рівня
    ### Заголовок 3 рівня
    #### Заголовок 4 рівня
    ##### Заголовок 5 рівня
    ###### Заголовок 6 рівня

## Абзаци

Cтворюються за допомогою порожнього рядка. Якщо навколо тексту зверху і знизу є порожні рядки, то текст перетворюється в абзац.

    Перший абзац
    Другий абзац

## Форматування тексту
  
      *Курсив* (Ctrl+I)
      **Жирний** (Ctrl+B)
      ***Жирний курсив*** (Ctrl+B+I)
      ~~Закреслений~~ (Alt+Shift+5)
      ==Виділений текст== (Alt+Shift+H)
      > Текст цитати. Використовується для відображення цитати. (Ctrl+Q)
      `Код` (Ctrl+`)
      [Посилання](https://www.google.com) (Ctrl+K)
      [Посилання з title](https://www.google.com "Google's Homepage") (Ctrl+K)
      ![alt text](images/logo.svg) (Ctrl+G)
      ![alt text](images/logo.svg "Google's Homepage") (Ctrl+G)
      H~2~O це формула води.
      1 MiB = 2^20^ байт = 1024 KiB.

Результат:

*Курсив* 

**Жирний** 

***Жирний курсив*** 

~~Закреслений~~ 

==Виділений текст== 

> Текст цитати. Використовується для відображення цитати. 

`Код` (Ctrl+`)

[Посилання](https://www.google.com) 

[Посилання з title](https://www.google.com "Google's Homepage") 

![alt text](images/logo.svg) 

![alt text](images/logo.svg "Google's Homepage") 

H~2~O це формула води.

1 MiB = 2^20^ байт = 1024 KiB.

## Списки

- елемент 1
- елемент 2
- елемент 3
* елемент 4
    * вкладений елемент 2.1
    * вкладений елемент 2.2
* елемент 5
	+ вкладений елемент 3.1
	+ вкладений елемент 3.2
	    - вкладений елемент 3.2.1
	    - вкладений елемент 3.2.2

## Нумеровані списки

1. елемент 1
2. елемент 2
3. елемент 3
    1. вкладений елемент 3.1
    2. вкладений елемент 3.2
4. елемент 4
    - вкладений елемент 4.1
    - вкладений елемент 4.2

## Списки завдань

- [x] завдання 1
- [x] завдання 2
- [ ] завдання 3

## Таблиці

    | Ім'я           | Прізвище    | Розробка        |
    |:-------------- |:-----------:| ---------------:|
    | за лівим краєм | по центру   | за правим краєм |
    | Лінус          | Торвальдс   | Linux           |
    | Денніс         | Рітчі       | С               |
    | Джек           | Дорсі       | Twitter         |


| Ім'я           | Прізвище    | Розробка        |
|:-------------- |:-----------:| ---------------:|
| за лівим краєм | по центру   | за правим краєм |
| Лінус          | Торвальдс   | Linux           |
| Денніс         | Рітчі       | С               |
| Джек           | Дорсі       | Twitter         |

## Горизонтальна лінія
  
      ---
      ***
      ___
***

## Код

```php
def hello():
print("Hello, World!")
```

    ```python
    def hello():
        print("Hello, World!")
    ```

## Посилання

Це [посилання](https://example.com).

Це [посилання з атрибутом title](https://example.com "Я посилання"). Це - [без title](https://example.com).

Це [приклад][1] [кількох][2] [посилань][id] з розміткою як у виносок в тексті. Можна використовувати [короткий запис][] без `id`.

[1]: https://example.com "Назва посилання 1"
[2]: https://example.com/some
[id]: https://example.com/links (Назва посилання id)
[короткий запис]: https://example.com/short

## Ідентифікатори заголовків
  
      ## Горизонтальна лінія
      [Горизонтальна лінія](#горизонтальна-лінія)

### Горизонтальна лінія
[Горизонтальна лінія](#hor)

## Зображення

### Зображення з атрибутами `alt` і `title`
  
![alt](images/shih_tzu_stdrpg.jpg "shih-tzu")

      ![alt](images/shih_tzu_stdrpg.jpg "shih-tzu")

### Зображення яке є посиланням

[![alt](images/shih_tzu_stdrpg.jpg)](https://google.com/ "Jack Russell Terrier")

      [![alt](images/shih_tzu_stdrpg.jpg)](https://google.com/ "Jack Russell Terrier")

## MD Картинки

![alt text](images/logo.svg)

<p align="center">
  <img src="../images/logo.svg" width="350" title="hover text">
  <img src="../images/logo.svg" width="350" alt="accessibility text">
</p>

    ![alt text](images/logo.svg)
    <p align="center">
    <img src="../images/logo.svg" width="350" title="hover text">
    <img src="../images/logo.svg" width="350" alt="accessibility text">
    </p>

## Назви клавіш

<kbd>Ctrl</kbd>+<kbd>C</kbd>

<kbd>Ctrl</kbd>+<kbd>V</kbd>

## Якір

<a href="#totop" title="внутрішнє посилання">внутрішнє посилання </a> 

## Відео

<div class="responsive-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/B9FzVhw8_bY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

## Підключення font-awesome

<!-- підключення шрифтових іконок Font Awesome 5 --> 
<!-- стилі в шапці -->
<i class="fas fa-laptop-code fontawesome-icon"></i>
<i class="fas fa-puzzle-piece"></i>
<i class="fab fa-github-alt fontawesome-icon"></i>

## Нотації
<!-- стилі в шапці -->
<div class="admonitionblock admonitionblock-note"><i class="fas fa-info-circle"></i> <strong>Інформація:</strong> Використовуйте цю нотацію для повідомлення якої-небудь інформації. В нотації можна використовувати <a class="admonitionblock-link" href="#" target="_blank" title="Інформація">стилізовані посилання</a>.</div>
<div class="admonitionblock admonitionblock-tip"><i class="fas fa-lightbulb"></i> <strong>Порада:</strong> Використовуйте цю нотацію для поради. В нотації можна використовувати <a class="admonitionblock-link" href="#" target="_blank" title="Порада">стилізовані посилання</a>.</div>
<div class="admonitionblock admonitionblock-warning"><i class="fas fa-exclamation-triangle"></i> <strong>Увага:</strong> Використовуйте цю нотацію для привертання уваги. В нотації можна використовувати <a class="admonitionblock-link" href="#" target="_blank" title="Увага">стилізовані посилання</a>.</div>
<div class="admonitionblock admonitionblock-caution"><i class="fas fa-fire"></i> <strong>Небезпека:</strong> Використовуйте цю нотацію, коли певні дії можуть стати причиною небезпеки. В нотації можна використовувати <a class="admonitionblock-link" href="#" target="_blank" title="Небезпека">стилізовані посилання</a>.</div>
<div class="admonitionblock admonitionblock-important"><i class="fas fa-exclamation-circle"></i> <strong>Важливо:</strong> Використовуйте цю нотацію, коли необхідно вказати на важливі моменти. В нотації можна використовувати <a class="admonitionblock-link" href="#" target="_blank" title="Важливо">стилізовані посилання</a>.</div>