<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo Asset::css('bootstrap.min.css');?>
    <?php echo Asset::css('simple-sidebar.css');?>

    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar menubar-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        論文検索システム
                    </a>
                </li>
                <li>
                    <a href="#">すべて</a>
                </li>
                <li>
                    <a href="#">国内発表</a>
                </li>
                <li>
                    <a href="#">国際会議</a>
                </li>
                <li>
                    <a href="#">論文誌</a>
                </li>
                <li>
                    <a href="#">学位論文</a>
                </li>
                <li>
                    <a href="#">受賞</a>
                </li>
                <li>
                    <a href="#">報道</a>
                </li>
                <form name="search">
                    <li>
                        <font color="white">絞り込み検索</font>
                    </li>
                    <input type="text" name="query" size="20">
                    <li>
                        <input type="radio" name="refine" value="s_author" checked>
                        <font color="white">著者</font>
                    </li>
<!--
                    <li>
                        <input type="radio" name="refine" value="s_keyword">
                        <font color="white">キーワード</font>
                    </li>
                    <li>
                        <input type="radio" name="refine" value="s_all">
                        <font color="white">すべて</font>
                    </li>
-->
                    <li>
                        <font color="white">分野の選択</font>
                    </li>
                    <select name="category">
                        <option value="all">すべて</option>
                        <option value="Real">実世界</option>
                        <option value="Communication">コミュニケーション</option>
                        <option value="Gimmick">仕掛け学</option>
                        <option value="InformationCompiled">情報編纂</option>
                        <option value="Comic">コミック工学</option>
                        <option value="Onomatopoeia">オノマトペ</option>
                    </select>
                    <input onClick="Ajax('search');" type="button" name="r_submit" value="検索">
                </form>
                <div class="space"></div>
                <li>
                    <a href="password.html">論文のアップロード</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $content;?>
                        <!--
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    	-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <?php echo Asset::js('jquery-2.1.1.min.js');?>
    <?php echo Asset::js('bootstrap.min.js');?>

    <!-- Menu Toggle Script 
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    -->
</body>
</html>