<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Larche theme.
 */

function larche_menu_link(array $variables) {

    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }


    if ($variables['element']['#original_link']['menu_name'] == 'main-menu' && $variables['element']['#original_link']['depth'] > 1 ) {
        $element['#localized_options']['html'] = TRUE;
        $output = l($element['#title'] . "<div class='description'>" . $variables['element']['#original_link']['options']['attributes']['title'] . "</div>", $element['#href'], $element['#localized_options']);
        return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
    }
    else {
      $output = l($element['#title'], $element['#href'], $element['#localized_options']);
      return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
    }
}
