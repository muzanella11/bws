<?php

/**
 * @author F1108K
 * @copyright 2015
 */



?>
<style>
*{
    margin:0;
    padding: 0;
}
.separator{
    height: 50px;
}
ul{
    list-style: none;
}
.trending_list li{
    padding:11px 0;
}
.list_berita{
    position: relative;
    width: 100%;
}
.list_berita li{
    height: 400px;
    width: 350px;
    float:left;
    margin-right: 20px;
    margin-bottom: 40px;
}
.no_padding{
    padding:0;
}
.no_margin{
    margin:0;
}
</style>
<nav class="nav navbar-default navbar-fixed-top">
    <div class="" style="position: relative; width: 100%; min-height:50px; display:inline-flex;">
        <div style="width: 50%; position:relative;">
            <div class="menu_btn" style="position: relative; width:40px; padding:10px; font-size: 1.5em;"><span class="fa fa-bars"></span></div>
        </div>
        <div style="width: 50%; position:relative;">
            <div style="float: right;">zzz</div>
        </div>
    </div>
</nav>
<div class="separator"></div>
<div style="position: relative; width: 100%; background: skyblue; display: inline-flex;">
    <div style="position: relative; width:300px; background:white; min-height: 800px;">
        <div style="position: relative; width:100%; padding:0 20px;">
            <div style="position: relative; width:100%; padding:11px 0; border-bottom:3px solid rgba(0,0,0,0.3); text-transform: uppercase; text-align: center; font-size:1.5em; color:rgba(0,0,0,0.5);">Trending</div>
            <div style="position: relative; width: 100%;">
                <ul class="trending_list">
                    <li>
                        <div style="position: relative; width:100%; display: inline-flex;">
                            <div style="position: relative; font-size: 5em; color:pink;">1</div>
                            <div style="position: relative; width:100%; text-align: right; font-size: 1.2em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </li>
                    <li>
                        <div style="position: relative; width:100%; display: inline-flex;">
                            <div style="position: relative; font-size: 5em; color:pink;">2</div>
                            <div style="position: relative; width:100%; text-align: right; font-size: 1.2em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </li>
                    <li>
                        <div style="position: relative; width:100%; display: inline-flex;">
                            <div style="position: relative; font-size: 5em; color:pink;">3</div>
                            <div style="position: relative; width:100%; text-align: right; font-size: 1.2em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </li>
                    <li>
                        <div style="position: relative; width:100%; display: inline-flex;">
                            <div style="position: relative; font-size: 5em; color:pink;">4</div>
                            <div style="position: relative; width:100%; text-align: right; font-size: 1.2em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </li>
                    <li>
                        <div style="position: relative; width:100%; display: inline-flex;">
                            <div style="position: relative; font-size: 5em; color:pink;">5</div>
                            <div style="position: relative; width:100%; text-align: right; font-size: 1.2em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="position: relative; width:100%; background:white; min-height: 800px;">
        <div style="position: relative; width:100%; padding-right: 50px;">
            <div style="position: relative; width: 100%;">
                <div style="position: relative; width: 100%; height: 300px; margin:11px 0; margin-bottom: 50px;">
                    <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                    <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                        Image
                        <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                            <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                            <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </div>
                </div>
                <div style="position: relative; width: 100%;">
                    <!--<ul class="list_berita">
                        <li>
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>-->
                    <div class="col-lg-12 no_padding">
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="height: 400px; margin-bottom:30px;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <div style="position:relative; width: 100%; background: greenyellow; min-height: 15px;"></div>
                                <div style="position: relative; width: 100%; height: 100%; background: rgba(0,0,0,0.1);">
                                    Image
                                    <div style="position: absolute; bottom:0; padding:11px; width:80%; background: white; font-size: 1.3em;">
                                        <div style="position: relative; width:100%; color:greenyellow;">Berita</div>
                                        <div style="position: relative; width: 100%; color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>