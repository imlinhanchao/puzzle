<?php
  session_start();
  header("Content-Type:text/css;");
?>
@charset "utf-8";
body {color:#000;width:100%;margin:0 auto;font: 12px Verdana, 'Segoe UI', 'Segoe UI Web Regular', 'Segoe UI Symbol', 'Helvetica Neue', 'BBAlpha Sans', '微软雅黑', 'Helvetica Neue',sans-serif,SimHei;}
input{font: 100% Verdana, 'Segoe UI', 'Segoe UI Web Regular', 'Segoe UI Symbol', 'Helvetica Neue', 'BBAlpha Sans', '微软雅黑', 'Helvetica Neue',sans-serif,SimHei;}
h1,h2,h3,h4,h5,h6{font-weight:normal;font-size: 100%;}
h1.title{font-size: 350%;}
a img{border:none;}
a{text-decoration:none;color:#000;}
a:hover{text-decoration:underline;}
a, area{blr:expression(this.onFocus=this.blur());}
:focus{-moz-outline-style:none;hidefocus:hidefocus;outline:none;}
.hide{display:none;}
.title{text-align: center;font-weight:bold;}
.puzzle, .passwd{text-align: center;margin: 5px auto;}
.rule{width:667px;text-align:left;font-size:150%;margin:auto;line-height:1.5;}
.rule p{text-indent: 2em;}
 #cnzz{display: none;}
<?php
  $stage = -1;
  if(isset($_SESSION["stage"])) $stage = $_SESSION["stage"];
  switch ($stage) {
    default:
      break;
  }

  if(isset($_SESSION["cssCode"]))
  {
    echo $_SESSION['cssCode'];
  }
