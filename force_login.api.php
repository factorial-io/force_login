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
