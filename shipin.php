<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta  charset=utf-8 />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=8,9,10">
<title>shearphoto1.3 头像截取工具,JS截图 切图插件，在线拍照截图</title>
<link href="css/ShearPhoto.css" rel="stylesheet" type="text/css" media="all">
<script  type="text/javascript" src="js/ShearPhoto.js" ></script><!--拉伸，截图的核心文件-->
<script  type="text/javascript"  src="js/move.js" ></script><!--拖拽DIV JS文件 -->
<script  type="text/javascript"  src="js/processdata.js" ></script><!--与服务器交互数据JS文件 -->
<script  type="text/javascript"  src="js/UpImg.js" ></script>     <!--上传截图的JS文件 -->
<script  type="text/javascript"  src="js/webcam_ShearPhoto.js" ></script>   <!--在线拍照 -->
<script  type="text/javascript"  src="js/handle.js" ></script>    <!--设置和处理对象方法的文件，要修改设置，请进入这个文件 -->
</head>
<body>

<!--主功能部份-->

        <div id="main">
           <div class="point">
                </div>
                <!--没加载方法前-->
                <div id="SelectBox">
                
                <a href="javascript:;" id="camerasImage"></a>
                <form    name="FORM" enctype="multipart/form-data" method="post"  target="POSTiframe"> 
                <input name="shearphoto" type="hidden" value="我要在这里传参数"> <!--示例传参数到服务端，后端文件用UPLOAD.php用$_POST['shearphoto']接收-->
                        <div style="display:none;"><a href="javascript:;" id="selectImage"><input type="file"  name="UpFile" /></a></div>
                 </form>           
                        <div style="display:none;"><a href="javascript:;" id="PhotoLoading"></a></div>
                        
                </div>
                <!--没加载方法前结束-->
                <div id="relat">
                        <div id="black">
                        </div>
                        <div id="movebox">
                                <div id="smallbox">
                                        <img src="images/default.png" class="MoveImg" />
                                </div>
                                <i id="BottomRight">
                                </i>
                                <i id="TopRight">
                                </i>
                                <i id="Bottomleft">
                                </i>
                                <i id="Topleft">
                                </i>
                                <i id="Topmiddle">
                                </i>
                                <i id="leftmiddle">
                                </i>
                                <i id="Rightmiddle">
                                </i>
                                <i id="Bottommiddle">
                                </i>
                        </div>
                        <img src="images/default.png" class="BigImg" />
                </div>
        </div>
        <div id="Shearbar">
                <a id="LeftRotate" href="javascript:;">
                        <em>
                        </em>
                        向左旋转
                </a>
                <em class="hint L">
                </em>
                <div class="ZoomDist" id="ZoomDist">
                        <div id="ZoomBar">
                        </div>
                        <span class="progress">
                        </span>
                </div>
                <em class="hint R">
                </em>
                <a id="RightRotate" href="javascript:;">
                        向右旋转
                        <em>
                        </em>
                </a>
                <p class="Psava">
                        <a id="againIMG"  href="javascript:;">重新选择</a>
                        <a id="saveShear" href="javascript:;">保存截图</a>
                </p>
        </div>

<!--主功能部份-->
 <!--相册-->
<div id="photoalbum">
<h1>假如：这是一个相册--------试试点击图片</h1>
<i id="close"></i>
<ul>
<li><img src="file/photo/1.jpg" serveUrl="file/photo/1.jpg" /></li>
<li><img src="file/photo/2.jpg" serveUrl="file/photo/2.jpg" /></li>
<li><img src="file/photo/3.jpg" serveUrl="file/photo/3.jpg" /></li>
<li><img src="file/photo/4.jpg" serveUrl="file/photo/4.jpg" /></li>
<li><img src="file/photo/5.jpg" serveUrl="file/photo/5.jpg" /></li>
<li><img src="file/photo/6.jpg" serveUrl="file/photo/6.jpg" /></li>
<li><img src="file/photo/7.jpg"  serveUrl="file/photo/7.jpg"/></li>
<li><img src="file/photo/8.jpg" serveUrl="file/photo/8.jpg" /></li>
</ul>
</div>
<!--相册-->
<!--拍照-->
<div id="CamBox">
<p class="lens"></p>
<div id="CamFlash"></div>
<p class="cambar">
<a href="javascript:;" id="CamOk"  >拍照</a>
<a href="javascript:;" id="setCam">设置</a>
<a href="javascript:;" id="camClose">关闭</a>
<div style="clear:both;"></div>
</p>
<div id="timing">3</div>
</div>
<!--拍照-->

</body>
</html>
