<?php
include "../include/init.php"; 
$pagename = "discover" ;$headname = "discover";
include '../view/base/header.php';
$page_size = 24;
$page = isset($_GET['p']) ? intval($_GET['p']) : 1;
?>

    <div class="container" style="margin:0 auto">

    <?php include HTDOCS_DIR . "/view/base/headerbar.php"; ?>
      <div class="row">
            
              <div class="span12" style="margin:0"> 

			<?
			$video = new Video();
			$videos = $video->find(array('order' => 'RAND( )', 'limit' =>($page-1)* $page_size . ', ' . $page_size));
					foreach ($videos as $video) {
						$user = new User($video->userid);
			?>
        <!-- 作品-->
                <? require '../view/base/post.php';?>
        <!-- /作品--> 
			<? } ?>
              

			  </div>
      </div>
        
		<div class="row">
            <div style="text-align:center">
            <a href="/discover/">再换一批</a> </div>
 		</div>
        
    </div> <!-- /上方 -->
    
<?php
require_once '../view/base/footer.php';
?>
