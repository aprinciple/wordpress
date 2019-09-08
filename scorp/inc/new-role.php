<?php 

  /**
   * Added new role "Inventor"
   */

  add_role( 'inventor', 'Изобретатель',
    array(
      'read'         => true,
    )
  );

  /**
   * Get name of user role
   */

  function get_current_user_role () {
    if( is_user_logged_in() ) {
      $user = wp_get_current_user();
      $roles = ( array ) $user->roles;
      if ($roles[0] == 'administrator') {
        echo 'Администратор';
        } elseif ($roles[0] == 'editor') {
        echo 'Редактор';
        } elseif ($roles[0] == 'author') {
        echo 'Автор';
        } elseif ($roles[0] == 'contributor') {
        echo 'Участник';
        } elseif ($roles[0] == 'subscriber') {
        echo 'Подписчик';
        } elseif ($roles[0] == 'inventor') {
        echo 'Изобретатель';
        } else {
        echo '<strong>' . $roles[0] . '</strong>';
        }
    } else {
        return array();
      }
  }

?>