<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />

        <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap"
        rel="stylesheet"
        />
        <link
        href="https://fonts.googleapis.com/css?family=Raleway&display=swap"
        rel="stylesheet"
        />
        <link
        href="https://fonts.googleapis.com/css?family=Caveat&display=swap"
        rel="stylesheet"
        />

        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.0/gsap.min.js"
        integrity="sha256-nf7u3H2uLh7tvCASjLqQ5K2sDRmvvooLxoEvZt7ti2U="
        crossorigin="anonymous"
        ></script>
        <?php wp_head();?>
    </head>

<body <?php body_class();?> >

<?php 
    $menu = 'Menu 1';
    $args = array(
        'order' => 'ASC',
        'orderby' => 'menu_order'
    );

    $items = wp_get_nav_menu_items( $menu, $args ); 
?> 

<div class="menu-button-section">
    <div class="menu-button">
    <i class="material-icons menu-icon">
        menu
    </i>
    </div>
</div>

<div class="menu-overlay" id="menu-container">
    <div class="menu-overlay-wrapper">
        <div class="menu-navlinks">
        <?php foreach((array)$items as $item){?> 
            <a class="nav-link-item" href=<?php echo $item->url; ?>><span><?php echo $item->title; ?></span></a>
        <?php } ?>
        </div>  
    </div>
</div>