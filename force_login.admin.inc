<?php
/**
 * @file force_login.admin.inc
 * Settings for the force_login module.
 */

/**
 * Settings form.
 */
function force_login_admin_settings() {
  $form = [];
  $node_type_options = [];
  $node_types = node_type_get_types();

  $form['force_login_exceptions'] = [
    '#type' => 'textarea',
    '#rows' => 10,
    '#title' => t('Page urls which will shown also for anonymous users'),
    '#default_value' => variable_get('force_login_exceptions', ''),
    '#description' => t("A list of urls which are visible for anonymous users, e.g. <pre>user/*</pre>."),
    '#required' => TRUE,
  ];

  foreach($node_types as $node_type) {
    $node_type_options[$node_type->type] = $node_type->name;
  }

  $form['force_login_node_type_exceptions'] = [
    '#type' => 'checkboxes',
    '#title' => t('Node types which nodes will be shown for anonymous users'),
    '#options' => $node_type_options,
    '#default_value' => variable_get('force_login_node_type_exceptions', []),
    '#description' => t("This setting will override per-node display for anonymous."),
  ];

  return system_settings_form($form);
}