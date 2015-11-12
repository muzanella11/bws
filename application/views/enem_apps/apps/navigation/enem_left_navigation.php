<?php

/**
 * @author F1108K
 * @copyright 2015
 */



?>
<style>
body {
  left: 0;
  margin: 0;
  overflow-x: hidden;
  position: relative;
}
.enem_menu_list li{
    padding: 11px;
}
.enem_menu_list li:hover{
    background: rgba(0,0,0,0.1);
}
.enem_menu_left{
    position: fixed;
    left: -285px;
    width: 285px;
    height: 100%;
    background: #4CCA51;
    z-index: 1;
}
.enem_nav_side{
    position: relative;
    width: 100%;
    height: 100%;
}
</style>
<aside class="enem_menu_left enem_menu_left_close">
    <nav class="enem_nav_side" id="main_nav">
        <div style="position: relative; width: 100%; padding: 11px; text-align: center;">
            <div style="position: relative; width: 150px; height: 150px; font-size: 7.5em; font-family: sans-serif; border-radius: 50%; background: url('<?php echo $no_avatar;?>'); background-size: cover; margin: auto; left: 0; right: 0;"></div>
            <div style="position: relative; padding-top: 8px; font-size: 1.2em; border-radius: 4px; color:white; background: rgba(0,0,0,0.1); margin-top: 8px;">
                <div style="position: relative; width: 100%; padding-bottom: 8px;">hahahihihuhu</div>
                <div style="position: relative; width: 100%; padding-bottom: 8px;">abc@gmail.com</div>
                <div style="position: relative; width: 100%; padding-bottom: 8px;">Nama depan nama belakang</div>
            </div>
        </div>
        <div style="position: relative; width: 100%;">
            <ul class="enem_menu_list">
                <a href=""><li>pisang</li></a>
                <a href=""><li>jambu</li></a>
                <a href=""><li>jeruk</li></a>
            </ul>
        </div>
    </nav>
</aside>