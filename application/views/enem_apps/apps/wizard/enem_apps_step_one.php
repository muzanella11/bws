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
<div class="enem_wrapper_wizard">
    <div class="enem_box_content_wizard">
        <div class="enem_wrapper_box_content_wizard">
            <div class="enem_box_title_wizard">Enem Apps Step One</div>
            <div class="enem_avatar_wizard" style="background: url('<?php echo $no_avatar;?>'); background-size: cover;"></div>
            <div class="enem_wrapper_box_name_wizard">
                <div class="enem_box_name_wizard">
                    <input class="enem_input_name animated" type="text" placeholder="Fill with your name. example: Sukonto Legowo" style="width: 100%; padding: 11px;" />
                    <div class="enem_error error_name" style="position: relative; width:100%; color:red;"></div>
                </div>
            </div>
            <div class="enem_wrapper_button_wizard">
                <div class="enem_box_button_wizard">
                    <button class="btn btn-default enem_save" style="width: 100%; padding: 11px; background: skyblue; border:1px solid skyblue;">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    en = $(".enem_save");
    em = $(".enem_input_name");
    en.click(function(){
        $('.shake').removeClass('shake');
        $.ajax({
				url			: site_url + 'ajax/check_step_one',
				type		: 'post',
				dataType	: "JSON",
				data		: {
				    data_enem_ex : em.val(),
				},
				success		: function(data){
				if(data.t == 0){
					if(data.id == 'name'){
                        $('.enem_error').html('');
						$(".enem_input_name").addClass("shake");
						$('.error_name').html(data.message);
					}
				}
				else if(data.t == 1){
					alert('berhasil');
					/*$('.enem_box_login').animate({
						"top": "-=850px"
					},1234);
                    setTimeout(function(){window.location='<?php echo site_url('apps');?>';},2500);*/
				}
		
	
			}
		});
		return false;
    });
</script>