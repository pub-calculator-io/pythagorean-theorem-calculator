<?php
/*
Plugin Name: CI Pythagorean theorem calculator
Plugin URI: https://www.calculator.io/pythagorean-theorem-calculator/
Description: Pythagorean theorem calculator finds the unknown side length of a right triangle. It also calculates angles, area, perimeter, and altitude to hypotenuse.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_pythagorean_theorem_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Pythagorean Theorem Calculator by Calculator.iO";

function display_ci_pythagorean_theorem_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Pythagorean Theorem Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_pythagorean_theorem_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_pythagorean_theorem_calculator', 'display_ci_pythagorean_theorem_calculator' );