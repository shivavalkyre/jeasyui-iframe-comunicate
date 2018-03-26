<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: e-Stock System :.</title>
	 <link rel="shortcut icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="./themes/metro/easyui.css">
	<link rel="stylesheet" type="text/css" href="./themes/icon.css">
	<link rel="stylesheet" type="text/css" href="./demo/demo.css">
	 <link rel="stylesheet" type="text/css" href="./themes/color.css">
	<link rel="stylesheet" type="text/css" href="./css/navpanel.css">
	<link rel="stylesheet" type="text/css" href="./themes/color.css">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.easyui.min.js"></script>
	<link rel="stylesheet" href="./css/w3.css">
</head>
<body>
<div style="padding:10px">
<a href="#" id="btn"  class="easyui-linkbutton" plain="true" iconCls="icon-reload">Refresh</a>
</div>
<script type="text/javascript">

	$(function(){
  $('#btn').bind('click', function(e){
    //alert ('Test');
	parent.postMessage("menu2", "*")
  });
});
</script>
			

</body>
</html>