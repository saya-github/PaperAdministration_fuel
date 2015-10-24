<?php
    echo '<div class="container-fluid">
          <div class="row">
          <div class="col-lg-12">
          <h1>What\'s new</h1>';
            foreach($papers as $paper) {
                echo '<li>';
                echo $paper['title'].'：'.$paper['author'];
                echo '</li>';
            }
    echo '</div></div></div>';
?>