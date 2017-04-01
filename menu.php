<?php
$file_path = $_SERVER['PHP_SELF'];
$file_name = basename($file_path, ".php");

switch ($file_name) {
	case 'store_list':
		$page_index = 1;
		break;
	case 'store':
		$page_index = 1;
	break; //以此類推其他menu選單

	case 'food':
		$page_index = 2;
		break;
	case 'contact':
		$page_index = 3;
		break;


	default:
		//預設是首頁,用0代表
		$page_index = 0;
		break;
}

?>

	<nav class="orange darken-4">
	    <div class="nav-wrapper" id="top_info">
	      <a class="brand-logo"><i class="fa fa-cutlery" aria-hidden="true"  href="#top_info"></i>50度美味廚房</a>
	      <a href="javascript:void(0);" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li <?php echo ($page_index == 0)?"class='active'":"";?>><a href="#top_info">首頁</a></li>

	        <li <?php echo ($page_index == 1)?"class='active'":"";?>><a href="#store_info">關於我們</a></li>
	        <li <?php echo ($page_index == 2)?"class='active'":"";?>><a href="#food_info">美食菜單</a></li>
	        <li <?php echo ($page_index == 3)?"class='active'":"";?>><a href="#contact_info">連絡我們</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li class="active"><a href="#top_info">首頁</a></li>
	        <li><a href="#store_info">關於我們</a></li>
	        <li><a href="#food_info">美食菜單</a></li>
	        <li><a href="#contact_info">連絡我們</a></li>
	      </ul>
	    </div>
	</nav>