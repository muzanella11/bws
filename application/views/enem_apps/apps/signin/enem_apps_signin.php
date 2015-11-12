<style>
body{
    background: #f1f1f1;
}
</style>
<div class="enem_box_login animated bounceIn" style="animation-duration: 3000ms;">
	<div class="col-lg-12 normal_padding">
		<div style="position:relative; width:50%; height:auto; font-size:100px; font-family:sans-serif; top:30px; background:#0CEA5C; color:#4CAF50; margin:auto; left:0; right:0; border-radius:50%; text-align:center;">E</div>
	</div>
	<div class="col-lg-12 normal_padding" style="margin-top: 15%;">
		<form id="enem_login_form">
			<div class="normal_padding col-lg-12" style="margin-bottom: 5px">
				<input name="var" type="text" class="enem_input enem_input_login_var animated" placeholder="Username or email" />
				<div class="col-lg-12 normal_padding error_var" style="color:red;"></div>
			</div>
			<div class="col-lg-12 normal_padding" style="margin-bottom: 5px">
				<input name="pass" type="Password" class="enem_input enem_input_login_pass animated" placeholder="Password" />
				<div class="col-lg-12 normal_padding error_pass" style="color:red;"></div>
			</div>
			<div class="col-lg-12 normal_padding" style="margin-bottom: 5px">
				<button class="btn btn-primary enem" style="width: 100%; padding: 10px 5px;">Signin</button>
			</div>
		</form>
	</div>	
</div>
<script type="text/javascript">
	//alert("hello");
	$(".enem").click(function(){
	//alert("vroh");
        $(".shake").removeClass("shake");
		$.ajax({
				url			: site_url + 'ajax/signin_apps',
				type		: 'post',
				dataType	: "JSON",
				data		: $("#enem_login_form").serialize(),
				success		: function(data){
				if(data.t == 0){
					if(data.id == 'variabel'){
						$('.error_pass').html('');
                        $(".enem_input_login_var").addClass("shake");
						$('.error_var').html(data.message);
					}
                    if(data.id == 'password'){
						$('.error_var').html('');
                        $(".enem_input_login_pass").addClass("shake");
                        $('.error_pass').html(data.message);
					}
				}
				else if(data.t == 1){
					//alert('berhasil');
					$('.enem_box_login').animate({
						"top": "-=850px"
					},1234);
                    setTimeout(function(){window.location='<?php echo site_url('apps');?>';},2500);
				}
		
	
			}
		});
		return false;
		/*$(".enem_box_login").animate({
			top: "-=600px",
		},1500);*/
	});
</script>