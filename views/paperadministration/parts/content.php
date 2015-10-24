<?php
    echo '<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">';
    foreach($papers as $paper) {
        echo '<h3>';
        echo $paper['title'];
        echo '</h3>
        <li>';
        echo '著者：'.$paper['author'];
        echo '</li>
        <li>';
        echo 'bibtexID：'.$paper['bibtexID'];
        echo '</li>
        <li>';
        echo '学年：'.$paper['degree'];
        echo '</li>
        <li>';
        echo '年：'.$paper['year'];
        echo '</li>
        <li>';
        echo '分野：'.$paper['category'];
        echo '</li>
        <li>';
        echo 'ファイル名：'.$paper['filename'];
        echo '</li>
        <p></p>';
    }
    echo '</div></div></div>';
?>