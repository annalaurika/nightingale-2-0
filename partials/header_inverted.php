<?php
/**
 * The alternative header for our theme
 *
 * This is the template that displays the alternative header region
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nightingale_2.0
 */

?>
<div class="nhsuk-header nhsuk-inverted-header">
        <div class="nhsuk-width-container nhsuk-header__container">
            <div class="nhsuk-header__logo">
                    <a class="nhsuk-header__link" href="/" aria-label="NHS homepage">
                        <?php
                        the_custom_logo();
                        ?>
                    </a>
            </div>

            <div class="nhsuk-header__content" id="content-header">

                <div class="nhsuk-header__menu">
                    <button class="nhsuk-header__menu-toggle" id="toggle-menu" aria-controls="header-navigation"
                            aria-label="Open menu">Menu
                    </button>
                </div>

                <div class="nhsuk-header__search">
                    <?php get_search_form(); ?>
                </div>

            </div>

        </div>
</div>
