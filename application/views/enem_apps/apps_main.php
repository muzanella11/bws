<?php

/**
 * @author f1108k
 * @copyright 2015
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $title; ?></title>
<link rel="shortcut icon" href="support/sign_in/landing-img/logo.png">
<script type="text/javascript">
	site_url = '<?php echo site_url(); ?>'
</script>

<?php
	echo $css.$js;
?>
<link href="<?php echo site_url();?>stylesheet/font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <?php 
        if($content_navigation){
            $this->load->view($content_navigation);
        }
    ?>
<div class="page_wrap page_slide_normal">
    <?php
        if($content_header){
            $this->load->view($content_header);
        }
    ?>
    <?php //$this->load->view('enem_apps/apps/header/enem_header');?>
    <?php
    	if($content_body){
    		$this->load->view($content_body);	
    	}
    ?>
    
    <?php
    	if($content_footer){
    		$this->load->view($content_footer);	
    	}
    ?>
    <div class="box_ellapsed_time" style="padding: 11px; background: skyblue; position: fixed; bottom: 0; left: 0;">
    {elapsed_time}
    </div>
</div>
<script>
<?php
    if($content_navigation){
?>
$(".menu_nav").click(function(){
    enem_ex = $(this).attr("data-menu");
    //alert(enem_ex);
    if(enem_ex == 'menu_hidden'){
        $(this).attr("data-menu","menu_open");
        $(".main_nav").removeClass("menu_close");
        $(".main_nav").addClass("menu_open");
        $(".page_wrap").removeClass("page_slide_normal");
        $(".page_wrap").addClass("page_slide");
    }
    if(enem_ex == 'menu_open'){
        $(this).attr("data-menu","menu_hidden");
        $(".main_nav").removeClass("menu_open");
        $(".main_nav").addClass("menu_close");
        $(".page_wrap").removeClass("page_slide");
        $(".page_wrap").addClass("page_slide_normal");
    }
});
<?php } ?>
</script>
</body>
</html>