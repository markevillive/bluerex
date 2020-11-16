# bluerex
Creating a WordPress theme based on the "Creative Agency" HTML template
## Lesson 1
- Произведена установка Wordpress и создана папка для темы bluerex
- Add .gitignore

## Lesson 2

- На сайте [underscores.me](https://underscores.me/) созданна базовая тема Wordpress под назанием  bluerex
- Файлы темы перемещены в папку bluerex
- Добавлен файл скриншота
- Изменен корневой style.css
- Тема активирована
- установлен плагин advanced custom fields
- установлен плагин Cyr-To-Lat
- установлен плагин Show Current Template
- установлен плагин Duplicate PP

## Lesson 3
- В консоли созданы страницы Home и Blog
- В консоли назначена главная страница (Home) и страница записей (Blog)
- Добавлен файл front-page.php , в который скопирован код из page.php.
### Editing pages
- В файл front-page.php скопирован код из index.html нашего шаблона
- Закомментирован preloader
#### Подключение стилей и скриптов
 - Добавлена папка assets, в нее скопированны папки css, js, img из шаблона.
 - Таблицы стилей подключены в файле functions.php, при помощи функции `bluerex_scripts`:
 
 ```php
    function bluerex_scripts(){
          wp_enqueue_style( 'bluerex-style', get_stylesheet_uri(), array(), _S_VERSION );
          wp_enqueue_style( 'bluerex-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
          wp_enqueue_style( 'bluerex-fontawesome-css', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
          wp_enqueue_style( 'bluerex-googlefonts-css', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap' );
          wp_enqueue_style( 'bluerex-baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.css' );
          wp_enqueue_style( 'bluerex-style-css', get_template_directory_uri() . '/assets/css/style.css' );
}
 
 ```
- затем подключены скрипты:
```php
function bluerex_scripts() {
    wp_enqueue_style( 'bluerex-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bluerex-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bluerex-fontawesome-css', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
    wp_enqueue_style( 'bluerex-googlefonts-css', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap' );
    wp_enqueue_style( 'bluerex-baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.css' );
    wp_enqueue_style( 'bluerex-style-css', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('bluerex-popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '', true);
    wp_enqueue_script('bluerex-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('bluerex-baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.js', array(), '', true);
    wp_enqueue_script('bluerex-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

}
```
- В файл front-page.php, после тега `<title>` добавлена функция `wp_head`
```php
    <?php wp_head() ?>
```
- Перед закрывающим тегом `</body>` добавлена функция `wp_footer`:
```php
    <?php wp_footer() ?>
```
- Удалены подключения в самом файле front-page.php

### Подключение картинок
При помощи автозамены в файле front-page.php изменен доступ к картинкам - строка `<img src="` заменена на `<img src="<?php bloginfo( 'template_url') ?>/assets/`

Раскомментирован preloader

## Lesson 4


> Для создания дополнительных полей использовался плагин Advanced custom fields. Документацию к нему можно найти на сайте [advancedcustomfields.com](https://www.advancedcustomfields.com/)

## Работа в консоли Wordpress.
### Создание полей для хедера.
- В разделе **Группы полей** в консоли Wordpress созданна группа - **Homepage Header**.
- Условия отображения - Страница = Home.
- Добавлено поле **Заголовок 1**, id = `header1`, тип поля - текст.
- Добавлено поле **Заголовок 2**, id = `header2`, тип поля - текст.
- Добавлено поле **Текст**, id = `header_text`, тип поля - текстовая область.
- Добавлено поле **Кнопка 1** id = `header_btn1` тип поля - Отношение - ссылка.
- Добавлено поле **Кнопка 2** id = `header_btn2` тип поля - Отношение - ссылка.
- Добавлено поле **Фоновое изображение** id = `header_bg` тип поля - Отношение - изображение, возвращаемый формат - ссылка, размер - миниатюра (150*150).
- Группа была опубликована.

# Lesson 5 Создание логотипа
>В админпанели созданы страницы **Our Story** и **About Us**.
## Заполнение произвольных полей
- Поле **Заголовок 1** - ***"We are best and creative agency"***.
- Поле **Заголовок 2** - ***"We turn creative ideas into your business"***.
- Поле **Текст** - 1 абзац *Lorem ipsum*.
- Поле **Кнопка 1** - ссылка на страницу **Our Story**.
- Поле **Кнопка 2** - ссылка на страницу **About Us** (Текст ссылки "Read More" ).
- Поле **Фоновое изображение** - *header.jpg*.
- Обновление страницы.

## Динамический логотип

В файле *functions.php* заданы размеры логотипа в функции `add_theme_support('custom-logo', array())`:

```php
add_theme_support(
			'custom-logo',
			array(
				'height'      => 69,
				'width'       => 62,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
```

Изображение *logo.png* добавленно в качестве логотипа через консоль **Wordpress**

Логотип подключен в файле *front-page.php**
```php
        <a class="navbar-brand" href="<?php echo home_url('/')?>">
            <?php
            $custom_logo = wp_get_attachment_image_src( get_theme_mod('custom_logo'));
            if ($custom_logo):
            ?>
            <img src="<?php echo $custom_logo[0]?>" alt="<?php bloginfo('name') ?>">

            <?php endif; ?>
            <?php bloginfo('name') ?>
        </a>
```
## Lesson 6 Header menu
Стили, добавленные в *style.css* не применились к меню, отступов нет, двойное подчеркивание при наведении сохраняется.
```css
.navbar-expand-lg .navbar-nav a {
    display: block;
    padding: .5rem 1rem;
    text-decoration: none;
}
```
> UPDATE
>После замены файла *style.css* на оригинальный из урока (с добавлением стилей пропущенных секций) все работает!

## Lesson 7 Displaying custom header fields

### Header 1 & Header 2

Динамический вывод заголовков осуществлен при помощи функции `get_field()`.

```php
<?php if (get_field('header1')):?>
        <h3><?php the_field('header1') ?></h3>
<?php endif; ?>
```
### Header text
Точно таким же образом с заменой параметра функциии на `header_text`.


### Header Buttons
#### Вывод кнопок
Так же при помощи функции `get_field()`.
```php
<?php if (get_field('header_btn1')): 
    $link = get_field('header_btn1');
?>
<a href="<?php echo esc_url($link['url']); ?>" class="btn btn-pink rounded-pill">
    <?php echo esc_html($link['title']); ?>
</a>
<?php endif; ?>
```
#### Исправление стилей
```css
.main-header-buttons .btn{
    padding: 20px 40px;
    margin-right: 20px;
    margin-top: 30px;
    opacity: 80%;
    box-shadow: 0 4px 16px rgba(0,0,0, .35);
    transition: all .5s;
}
```
### Header Background
#### Functions.php
Добавлена кастомная функция `bluerex_get_background`
```php
function bluerex_get_background($field, $cat = null, $cover = true){
    if( get_field($field, $cat) ){
        $add_style = $cover ? 'background-size: cover;' : '';
        return ' style="background: url(' . get_field($field, $cat) . ') center no-repeat; ' . $add_style . '"';
    }
    return null;
}
```
#### Page code
```php
<header class="main-header" <?php echo bluerex_get_background('header_bg') ?> >
```

## Lesson 8 Header & footer templates
### Get header
- Код главной страницы от *DOCTYPE* до конца хедера перенесен в файл *header.php*. 
- Создан файл *header-main.php* куда так же добавлен этот код.
- Файл *header-main.php* подключен к главной странице функцией *get_header* с параметром *main*.
```php
<?php get_header('main') ?>
```
### Get footer.
- Код главной страницы от начала футера и до конца страницы перенесен в файл *footer.php*.
- Файл *footer.php* подключен к главной странице функцией *get_footer*.
```php
<?php get_footer() ?>
```
- Из файлов *header.php* и *header-main.php* удален тег title.

## Lesson 9 Section Watch.
>Данная секция предназначена для вывода рубрики

### Действия в консоли
- Добавлена группа полей Категории (Условия "Таксономия = Рубрики).
 - Добавлено поле "Заголовок", id="section_header", тип поля - текст.
 - Добавлено поле "Фоновое изображение" id="section_img", тип поля - изображение, возвращаемый формат - ссылка на изображение.
 - Добавлено поле "Дополнительное изображение" id="section_add_img", тип поля - изображение, возвращаемый формат - ссылка на изображение.
 - Добавлено поле "Видео" id="section_video", тип поля - текст.
- В консоли в разделе записи - рубрики создана рубрика Web Design. Заголовок "Dream Big Inspire the World", Описание "We turns creative ideas into your business", добавлены фоновое и дополнительное изображение.
- Созданы три статьи в рубрике  Web Design содержащие несколько абзацев Lorem Ipsum.
### PHP
На страницу добавлена возможность динамического отображения всех элементов секции Watch.

## Lesson 11 Section Progress.
### Действия в консоли
- Создана рубрика **Progress**, и в нее добавлены 3 записи.
### PHP
Данные записи были выведены в секции **Progress** при помощи функции `get_category()` с параметром 4 (id рубрики Progress) и цикла foreach.

## Lesson 12 Section Lets

# lesson 13 Section Design

# lesson 14 Gallery 

# Lesson 15 Custom post types
Добавлена кастомная функция `bluerex_reviews`, добавляющая тип записи "Отзывы"

```php
<?php
add_action('init', 'bluerex_reviews');
function bluerex_reviews(){
    register_post_type('revievs', array( 'labels' => array(
        'name' => 'Отзывы',
        'singular_name' => 'Отзыв',
        'add_new'=> __('Добавить новый отзыв', 'bluerex'),
        'add_new_item' => __('Новый отзыв', 'bluerex'),
        'edit_item' => __('Редактировать', 'bluerex'),
        'new_item' => __('Новый отзыв', 'bluerex'),
        'view_item' => __('Просмотр', 'bluerex'),
        'menu_name' => 'Отзывы клиентов',
        'all_items' => 'Все отзывы',

        ),
     'public' => true,
     'supports' => array('title', 'editor','thumbnail'),
     'menu_icon' => 'dashicons-universal-access',
      //'show_in_rest' => true,

    ));
}
?>
```
# Section Reviews





