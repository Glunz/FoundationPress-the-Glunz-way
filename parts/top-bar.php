<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

$cur_lang = pll_current_language();
switch ($cur_lang) {
    case "de":
        $active_lang = "1";
        break;
    case "fr":
        $active_lang = "2";
        break;
    case "it":
        $active_lang = "3";
        break;
    case "sl":
        $active_lang = "4";
        break;
    case "en":
        $active_lang = "5";
        break;
    default:
        $active_lang = "5";
        break;
}
?>

<div class="row topbar-logo-alpweek">
    <div class="small-12 columns">
        <svg class="sprite-item sprite-AlpWeek_Logo_blue_<?php echo $active_lang; ?>">
          <use class="sprite-item-obj" xlink:href="#sprite-AlpWeek_Logo_blue_<?php echo $active_lang; ?>"></use>
        </svg>
    </div>
</div>


<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>

            <ul class="language-switch top-bar-menu right">
                <?php pll_the_languages(array('hide_if_no_translation'=>1));?>
            </ul>

            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>
