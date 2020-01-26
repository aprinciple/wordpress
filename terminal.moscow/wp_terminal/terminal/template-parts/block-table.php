<section class="cost">
  <div class="wrapper">
    <section class="post-table">
      <div class="post-table__container container">
        <?php 
          $table = get_field( 'table-page' );
          if ( ! empty ( $table ) ) {
            echo '<div class="table">';
              if ( ! empty( $table['caption'] ) ) {
                echo '<span class="table__caption">' . $table['caption'] . '</span>';
              }
              echo '<div class="table__wrapper">';
                if ( ! empty( $table['header'] ) ) {
                  echo '<div class="table__row table__head">';
                    foreach ( $table['header'] as $th ) {
                      echo '<span class="table__header">';
                        echo $th['c'];
                      echo '</span>';
                    }
                  echo '</div>';
                }
                foreach ( $table['body'] as $tr ) {
                  echo '<div class="table__row">';
                    foreach ( $tr as $td ) {
                      echo '<span class="table__cell">';
                        echo $td['c'];
                      echo '</span>';
                    }
                  echo '</div>';
                }
              echo '</div>';
            echo '</div>';
          }
        ?>
      </div>
    </section>
  </div>
</section>