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
<section class="enem_container">
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
</section>
<script>
<?php
    if($content_navigation){
?>
$(".enem_menu_nav").click(function(){
    enem_ex = $(this).attr("data-menu");
    //alert(enem_ex);
    if(enem_ex == 'menu_hidden'){
        $(this).attr("data-menu","menu_open");
        $('.enem_menu_left').animate({
          left: "0px"
        }, 300);
        $('body').animate({
          left: "285px"
        }, 300);
    }
    if(enem_ex == 'menu_open'){
        $(this).attr("data-menu","menu_hidden");
        $('.enem_menu_left').animate({
          left: "-285px"
        }, 300);
        $('body').animate({
          left: "0px"
        }, 300);
    }
});
<?php } ?>
</script>
</body>
</html>