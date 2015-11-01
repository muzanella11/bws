<?php

/**
 * @author F1108K
 * @copyright 2015
 */



?>
<style>
body{
    background: #f1f1f1;
}
</style>

<div class="container_enem_user_create">
    <div class="wrapper_enem_user_create animated bounceIn" style="width:400px; animation-duration: 3000ms;">
        <div style="position: relative; width: 100%; padding: 90px 25px;">
            <div class="enem_box_title_center box_title_custom">Signin Enem</div>
            <div class="enem_container_box_login" style="padding:11px;position:relative;max-height: 380px;width:100%;">
                <div class="enem_box_form" style="position: relative; width:300px; margin: auto;">
                    <form class="enem_form">
                        <div style="position: relative; width: 100%; ">
                            <input class="animated enem_input_username" type="text" name="username" style="padding: 11px; width: 100%; animation-duration: 1111ms;" placeholder="Enter username" />
                            <div class="enem_username" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                        <div style="position: relative; width: 100%; ">
                            <input class="animated enem_input_password" type="password" name="password" style="padding: 11px; width: 100%; animation-duration: 1111ms;" placeholder="Enter password" />
                            <div class="enem_password" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                    <div style="position: relative; width: 100%; ">
                        <input type="submit" name="signin" value="Sigin" style="padding: 11px; width: 100%;" class="btn btn-info" />
                    </div>
                    </form>
                </div>
                <?php //die(var_dump($this->session->userdata('enem_token')));?>
            </div>
        </div>
    </div>
</div>
<script>
$('.enem_form').submit(function(e) {
        $(".shake").removeClass("shake");
		$.ajaxSettings.cache=false;
		$.ajax({
				url			: site_url + '/ajax/create_enem_user_check',
				type		: 'post',
				dataType	: "JSON",
				data		: $(this).serialize(),
				success		: function(data){
				//	alert();
				//	$("#modal_content").html(data);
				//	$("#modal").hide();
				if(data.t == 0){
					if(data.id == 'username'){
						$('.enem_password').html('');
                        $('.enem_input_password').removeClass("shake");
                        $('.enem_input_username').addClass("shake");
					    $('.enem_username').html(data.message);
					}
                    if(data.id == 'password'){
						$('.enem_username').html('');
                        $('.enem_input_username').removeClass("shake");
                        $('.enem_input_password').addClass("shake");
                        $('.enem_password').html(data.message);
					}
				}
				else if(data.t == 1){
					//alert('berhasil');
					$('.wrapper_enem_user_create').animate({
						"top": "-=850px"
					},1111);
                    setTimeout(function(){window.location='<?php echo site_url('apps/create_enem_user');?>';},2000);
				}
		
	
			}
		});
		return false;
});
$("input[type=text],input[type=password]").focus(function(){
    //alert();
    $(this).removeClass("shake");
});
</script>