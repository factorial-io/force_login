# force_login

A drupal 7 module to force the user to log in. With drupal core you can remove the access to content for anonymous users and set the 403 page to the login-page but this has some disadvantages, e.g. missing SEO tags for the content, all pages result in a http-error, etc.

This module will keep the headers of a page intact and replaces the content with the result of a theming-function or a pagemanager-page with a specific name `force_login_replacement`.

The module will add a checkbox-field to all existing content types when installed. If the editor checks this checkbox, it will be shown also for anonymous users.

