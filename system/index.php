
	<h1>

		<?php 
			include_once('../system/libs/Main.php');
			include_once('../system/libs/DController.php');	
			include_once('../system/libs/Load.php');
			include_once('../system/libs/DModel.php');
			include_once('../system/libs/Database.php');
			$url = isset($_GET['url']) ? $_GET['url'] : NULL;
			if($url != null)
			{
				$url = rtrim($url,'/');
				$url = explode('/',filter_var($url,FILTER_SANITIZE_URL));
			}
			else
			{
				unset($url);
			}
			print_r($url); 
			if(isset($url[0]))
			{
				include_once('../app/controllers/'.$url[0].'.php');
				$product = new $url[0]();
			}
			else
			{
				include_once('../app/controllers/index.php');
				$index = new index();
				$index->homepage();
 			}
		?>
	</h1>

