<?php

/**
 * @file
 * API documentation for the force_login module.
 */

/**
 * Allows to override Force login pages access.
 *
 * Implements hook_force_login_pages_alter().
 *
 * @param $pages
 *   A list of pages user is allowed to view as anonymous.
 */
function hook_force_login_pages_alter(&$pages) {
  $pages .= "\n" . 'my-example-page';
}

/**
 *  Allows modifying the list of content types to ignore
 *  page access restrictions from Force login.
 *
 * Implements hook_force_login_node_type_exceptions_alter().
 *
 * @param $node_types
 *   An array of node types to exclude permissions restrictions from.
 */
function hook_force_login_node_type_exceptions_alter(&$node_types) {
  $node_types = array_merge($node_types, ['my_example_node_type']);
}
