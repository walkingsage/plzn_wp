<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pilizin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">



	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>
<body <?php body_class(); ?>>

	<div class="header__nav">
        <div class="container">
            <div class="nav__content">
                <a href="#main"><img class="logo" src="<?php echo $redux_demo['pilizin_logo']['url']; ?>" alt="PILIZIN LOGO"></a>
                <i style="display: none;" class="fa fa-bars burgerOff" aria-hidden="false"></i>
                <i style="display: none;" class="fa fa-times close__nav" aria-hidden="false"></i>
                    <!-- <ul>
                        <a class="active" href="#main"><li>главная</li></a>
                        <a href="#aboutme"><li>обо мне</li></a>
                        <a href="#gallery"><li class="bold">портфолио</li></a>
                        <a href="#contact"><li>контакты</li></a>
					</ul> -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container_class' => 'menu',
							)
						);
					?>
            </div>
        </div>
    </div>
    <section style="background: url(<?php echo $redux_demo['pilizin_background_main']['url']; ?>)" id="main" class="header">
        <a style="background: url(<?php echo $redux_demo['pilizin_background_fitnes_mobile_main']['url']; ?>)" id="fitness__choise" href="#photos">
            <div class="fitness__choise__content">
                <div class="fitnes__to">
                    <?php echo $redux_demo['main_to_fitness']; ?>
                </div>
                <!-- <img style="display: none;" class="opac" src="img/test.jpg" alt="Фитнес-фотосессия" class="fitnes">     -->
            </div>
            <!-- <div style="display: none;" class="fitness__go">
                <div class="title">
                    фитнес-фотосессия
                </div>
                <img style="display: none;" class="opac" src="img/fitnesch.jpg" alt="Фуд-фотосессия" class="food">    
            </div> -->
        </a>
        <a style="background: url(<?php echo $redux_demo['pilizin_background_food_mobile_main']['url']; ?>)" id="food__choise" href="#photos">
            <div class="food__choise__content">
                <div class="food__to">
					<?php echo $redux_demo['main_to_food']; ?>
                </div>
                <img style="display: none;" class="opac" src="img/foodch.jpg" alt="Фуд-фотосессия" class="food">    
            </div>
            <!-- <div style="display: none;" class="food__go">
                <div class="title">
                    фуд-фотосессия
                </div>
            </div> -->
        </a>
    </section>