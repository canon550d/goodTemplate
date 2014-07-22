<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
  <title>模板</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/text.css" />
  <link rel="stylesheet" type="text/css" href="css/960.css" />
  <link rel="stylesheet" type="text/css" href="css/sidebar.css" />
  <link rel="stylesheet" type="text/css" href="css/test.css" />
  <script src="js/jquery-1.9.0.js"></script>
  <script>
    $(document).ready(function(){
        $(".close").click(function(){
            $(".ssss").toggle("normal");
        });
    });
  </script>
</head>
<body>
  <div class="container_12">
    <div class="grid_3">
    <?php include 'sidebar.php';?>
    </div>
    <div class="grid_9">
    <?php include 'main.php';?>
    </div>
    <div class="clear"></div>

    <div class="grid_12">
      <span>页脚</span>
    </div>
    <div class="clear"></div>
  </div>
  <?php include 'toolbar.php';?>
</body>
</html>