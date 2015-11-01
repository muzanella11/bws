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
    <div class="wrapper_enem_user_create animated bounceIn" style="animation-duration: 3000ms;">
        <div style="position: relative; width: 100%; padding: 10px;">
            <div class="enem_box_title_center box_title_custom">Create Enem User</div>
            <div style="padding:11px;position:relative;max-height: 380px;width:100%;">
                <div style="position: relative; width:500px; margin: auto;">
                    <form class="enem_form">
                        <div style="position: relative; width: 100%; ">
                            <input name="email" class="animated enem_input enem_input_email" style="padding: 11px; width: 100%;" placeholder="Enter email" />
                            <div class="enem_error_email enem_error" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                        <div style="position: relative; width: 100%; ">
                            <input name="username" class="animated enem_input enem_input_username" style="padding: 11px; width: 100%;" placeholder="Enter username" />
                            <div class="enem_error_username enem_error" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                        <div style="position: relative; width: 100%; ">
                            <input type="password" name="password" class="animated enem_input enem_input_password" style="padding: 11px; width: 100%;" placeholder="Enter password" />
                            <div class="enem_error_password enem_error" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                        <div style="position: relative; width: 100%; ">
                            <select name="status" class="animated enem_input enem_input_status" style="padding: 11px; width: 100%;">
                                <option value="">Select Status Enem User</option>
                                <option value="1">Superadmin</option>
                                <option value="2">Admin</option>
                                <option value="3">Author</option>
                            </select>
                            <div class="enem_error_status enem_error" style="position: relative; width: 100%; padding: 8px 0; color:red; font-size: 17px;"></div>
                        </div>
                    </form>
                    <div style="position: relative; width: 100%; margin-bottom:16px; ">
                        <button style="padding: 11px; width: 100%;" class="btn btn-info enem_create">Create</button>
                    </div>
                    <div style="position: relative; width: 100%; ">
                        <button onclick="window.location='<?php echo site_url('apps/enem_user_signout');?>'" style="padding: 11px; width: 100%;" class="btn btn-danger">Logout</button>
                    </div>
                    <?php
                        echo $this->session->userdata('enem_token');
                    ?>
                </div>
            </div>
            <div id="timer" style="position: absolute; right:0; bottom:0; background: skyblue; padding:8px; color: white; text-align: center;"></div>
<script type="text/javascript">
var enem_status_online = 600;
setInterval(function(){
   enem_status_online--;
   $("#timer").html(enem_status_online);
   if(enem_status_online < 0){
        window.location = '<?php echo site_url('apps/enem_user_signout');?>';
   }
},1000);
$('input').keyup(function(){
   enem_status_online = 600; 
   $(".enem_error").html('');
});
$('.enem_create').click(function() {
        $(".shake").removeClass("shake");
        $.ajaxSettings.cache=false;
		$.ajax({
				url			: site_url + '/ajax/create_enem_user',
				type		: 'post',
				dataType	: "JSON",
				data		: $('.enem_form').serialize(),
				success		: function(data){
				//	alert();
				//	$("#modal_content").html(data);
				//	$("#modal").hide();
				if(data.f == 0){
				    en = $(".enem_input");
                    em = $(".enem_error_" + data.id);
                    ka = $(".enem_input_" + data.id);
                    er = $(".enem_error");
                    if(data.id == 'email'){
                        er.html('');
                        ka.addClass("shake");
                        em.html(data.message);
                    }
					if(data.id == 'username'){
						er.html('');
                        ka.addClass("shake");
                        em.html(data.message);
					}
                    if(data.id == 'password'){
						er.html('');
                        ka.addClass("shake");
                        em.html(data.message);
					}
                    if(data.id == 'status'){
                        er.html('');
                        ka.addClass("shake");
                        em.html(data.message);
                    }
				}
				else if(data.f == 1){
					//alert('berhasil');
                    enem_btn_ok = $(".enem_create");
                    enem_btn_ok.html('Processing...');
                    setTimeout(function(){
                      enem_btn_ok.removeClass("btn-info");  
                      enem_btn_ok.addClass("enem_success_btn");
                      enem_btn_ok.html('success');
                      $('.wrapper_enem_user_create').addClass("bounceOut");
                    },3000);
					/*$('.wrapper_enem_user_create').animate({
						"top": "-=850px"
					},1111);*/
                    setTimeout(function(){window.location='<?php echo site_url('apps/enem_user_signout');?>';},6000);
				}
		
	
			}
		});
		return false;
});
</script>
        </div>
    </div>
</div>