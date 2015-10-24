<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1>What's new</h1>
<?php
    foreach($papers as $paper) {
        echo '<li>'.$paper['title'].'：'.$paper['author'].'</li>';
    }
?>
</div></div></div>