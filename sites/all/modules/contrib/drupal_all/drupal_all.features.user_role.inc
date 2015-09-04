<?php
/**
 * @file
 * drupal_all.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function drupal_all_user_default_roles() {
  $roles = array();

  // Exported role: Contractor.
  $roles['Contractor'] = array(
    'name' => 'Contractor',
    'weight' => 3,
  );

  // Exported role: Employer.
  $roles['Employer'] = array(
    'name' => 'Employer',
    'weight' => 2,
  );

  return $roles;
}
