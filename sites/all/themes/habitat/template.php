<?php


function habitat_preprocess_html(&$vars) {
    $path = drupal_get_path_alias($_GET['q']);
    $aliases = explode('/', $path);

    foreach($aliases as $alias) {
        $vars['classes_array'][] = "page-".drupal_clean_css_identifier($alias);
    }
}

function habitat_css_alter(&$css) {
    unset($css[drupal_get_path('module', 'webform_steps') . '/webform_steps.css']);
}

?>
