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

    <title><?php echo 'PaperAdministration ver.FuelPHP'; ?></title>
</head>
<body>
	<div id="wrapper">
        <!-- Sidebar menubar メニューバーを表示 -->
        <div id="sidebar-wrapper">
            <?php echo View::forge('paperadministration/parts/menu') ?>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content 検索した論文を表示 -->
        <div id="page-content-wrapper">
            <?php echo $content; ?>
        </div>
            <p id="space"></p>
            <ul>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </ul>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

	<?php echo Asset::js('jquery-2.1.1.min.js','bootstrap.min.js');?>
    <?php echo Asset::js('main.js');?>

	<!-- Menu Toggle Script -->
    <script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });
    </script>
</body>
</html>