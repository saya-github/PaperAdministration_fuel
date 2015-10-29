<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
<?php
    if($pagetitle){
        echo '<h1>'.$pagetitle.'</h1>';
    }
    foreach($papers as $paper) {
        echo '<div class="paper-fluid">
            <p></p>
            <h3>'.$paper['title'].'</h3>
            <p></p>
            <li>著者：'.$paper['author'].'</li>
            <li>bibtexID：'.$paper['bibtexID'].'</li>
            <li>学年：'.$paper['degree'].'</li>
            <li>年：'.$paper['year'].'</li>
            <li>分野：'.$paper['category'].'</li>
            <li>ファイル名：'.$paper['filename'].'</li>
            <p></p>
            </div>';
    }

?>
</div></div></div>