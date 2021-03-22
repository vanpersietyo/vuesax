<?php class Update_db {

	public function update_database(){

		if(strpos(getcwd(),'prototype/pos')){
			$server = "https://prototype.nuhapos.com/pos/";
		}elseif(strpos(getcwd(),'nuhaposv2')){
			$path 	= str_replace('/home/u6127064/public_html/nuhaposv2/','',getcwd());
			$server = "https://{$path}.nuhapos.com/";
		}else{
			$server = 'http://localhost/project/github/pos/';
		}
		echo file_get_contents($server.'generate/update_database/cli');
	}
}
$update = new Update_db();
$update->update_database();
?>
