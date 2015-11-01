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
<style>
html,body{
    min-height: 100%;
}
.main_header{
    background: linear-gradient(#3F94BF, #246485);
    padding: 5px;
    text-align: center;
    position: fixed;
    width: 100%;
    left: 0;
    transition: all 0.3 ease;
}
.page_wrap{
    float: right;
    width: 100%;
    transition: width 500ms ease;
}
.main_nav{
    position: fixed;
    top:0;
    width: 0;
    height: 100%;
    background: skyblue;
    overflow-y: auto;
    transition: width 500ms ease;
    a{
        display:block;
        background: linear-gradient(#3F94BF, #246485);
        border-top:1px solid #484848;
        border-bottom:1px solid #282828;
        color:white;
        padding:15px;
        &:hover, &:focus{
            background: linear-gradient(#484848, #383838);
        }
    }
    &:after{
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 34px;
        background: linear-gradient(left, rgba(black,0), rgba(black, 0.4));
    }
}
#main_nav:target{
    width: 80%;
}
#main_nav:target + .page_wrap{
    width: 20%;
    .open_menu{
        display:none;
    }
    .close_menu{
        display: block;
    }
    .main_header{
        width: 80%;
        left: 20%;
    }
}
</style>
<link href="<?php echo site_url();?>stylesheet/font/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<nav class="main_nav" id="main_nav">
    <a>ssss</a>
    <a>ssdsss</a>
    <a>sssssdsww</a>
</nav>
<div class="page_wrap">
    <header>
        <a href="#main_nav" class="open_menu">buka</a>
        <a href="#" class="close_menu">tutup</a>
    </header>
    <?php //$this->load->view('enem_apps/apps/header/enem_header');?>
    <div style="position: relative;padding: 15px; background: grey; color: white;">sdsdsdsd adasd asdasd asdasd asdsa dasd asda sdasd asdadasddasd</div>
</div>
<?php
	if($content_header){
		$this->load->view($content_header);	
	}
?>


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
</body>
</html>