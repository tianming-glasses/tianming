<?php

// 计算获取PHP_SELF常量
function getPhpSelf(){
	$script_name = false;
	if( isset($_SERVER['SCRIPT_NAME']) ){
		$script_name = $_SERVER['SCRIPT_NAME'] ;
	} elseif( isset( $_SERVER['PHP_SELF'] ) && false !== ( $pos = strpos( $_SERVER['PHP_SELF'] , '.php' ) ) ){// 截取从0到.php的位置
		$script_name = substr( $_SERVER['PHP_SELF'] , 0 , $pos + 4 );
	}
	return $script_name;
}

// 定义常用url网址相关
define( 'SCHEME',	    $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://' );
define( 'HOST',			$_SERVER['HTTP_HOST']);
define( 'SCRIPT_NAME',	getPhpSelf() );
define( 'SITE_URL',		rtrim( SCHEME.HOST.strtr( dirname( SCRIPT_NAME ), '\\', '/' ) , ' \\/' ).'/' );

$goods_id = (int)$_GET['goods_id'];


// ajax获取图片
if( isset($_GET['ajax']) ){

	define('IN_ECS', true);
	require('api/init.php');

	$img = SITE_URL."images/meitu_img/upload/".$_GET['imgs'];
	$row  = $GLOBALS['db']->getRow("SELECT * FROM " . $GLOBALS['ecs']->table('goods') ." where goods_id=".$goods_id);
	$row1 = $GLOBALS['db']->getAll("SELECT * FROM " . $GLOBALS['ecs']->table('goods_diy_canshu') ." where goods_id=".$goods_id);


	$i = 0;

	// 一张图片，下面附带3个按钮
	$outPut = '';
	$res = array();
	foreach( $row1 as $key=>$val) {
		$jp_width	= $val['jingpian_width'];
		$jp_height	= $val['jingpian_height'];

		$jj_width	= $val['jingjia_width'];
		$bt_width	= $val['bituo_width'];

		$res['data'][] = array(
			'jp_width'	=> (int)$val['jingpian_width'],
			'jp_height'	=> (int)$val['jingpian_height'],

			'jj_width'	=> (int)$val['jingjia_width'],
			'bt_width'	=> (int)$val['bituo_width'],
		);

		// 3个按钮
	}

	$res['classPic'] = 'images/upload/'.trim($row['goods_pic']);

	

	exit( json_encode($res) );
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>天明眼镜 - 试戴</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<script src="http://open.web.meitu.com/sources/xiuxiu.js " type="text/javascript"></script>-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.rotate.min.js"></script>

<script type="text/javascript">

// 站点基地址
var site_url = "<?php echo SITE_URL;?>";

// flash回调js的函数
function flashUploadCall( res ) {
	
	var picUrl = site_url +'images/meitu_img/upload/'+ res ;

	// 隐藏flash
	document.getElementById( "flashContent" ).style.display = "none";

	//document.getElementById( "flash_camera" ).style.display = "none";
	//document.getElementById( "altContent" ).style.display   = "block";

	// 插入图片选择器，显示图片选择器

	// 填充眼镜内容图片
	$.get( site_url+'meibai2.php?ajax=1&goods_id=<?php echo $goods_id;?>',function( data ){

		 data = $.parseJSON(data);

		var res = data['data'];
		var classPic = data['classPic'];

		var html = "";
		for ( var i=0; i < res.length; ++i ){
			html += '<input onClick="classGet( \''+picUrl+'\' , ' + res[i].jp_width + ',' + res[i].jj_width + ',' + res[i].bt_width + ',' + res[i].jp_height + ' );" type="button" value="'+ res[i].jp_height +'">';
		}

		html = '<div  style="position: relative; "><!--<div class="layer"></div>--><img class="img1" id="faceimg" src="' + picUrl + '" alt="请选择本图片" onclick="loadPicToXiuxiu( \''+picUrl+'\' );" ><img id="yanjing" src="' + site_url + classPic+'" style="position:absolute;display:none;"><br />' + html + '</div>';

		document.getElementById( "facediv" ).innerHTML = html;
		document.getElementById( "facediv" ).style.display  = "block";

		// 对内容图片 进行定位
		api.request( 'detection/detect',
			{
				url: picUrl,
				mode: 'oneface',
				attribute: 'gender,age,race,smiling,glass,pose'
			},
			function (err, result) {
				if (err) {
					// TODO handle error
					return;
				}

				//alert($("#faceimg").width());
				glassPopPosition( "yanjing", $("#yanjing").width(), res[0].jp_width, res[0].jj_width, res[0].bt_width, res[0].jp_height, result);

				//document.getElementById( "facediv" ).style.display   = "block";
				//document.getElementById( "layerWrap" ).style.display = "block";

			}
		);

	});

}

/*

window.onload=function(){
	
	// 使用自定义菜单
	xiuxiu.setLaunchVars("customMenu", ["facialMenu"]); // "decorate",
	
	// 设置导航到哪一个菜单下面。
	xiuxiu.setLaunchVars ("nav", "facialMenu");
	
	// 组织打开图片时，用于配合 xiuxiu.onBrowse  使用。
	xiuxiu.setLaunchVars("preventBrowseDefault", 1);
	// xiuxiu.setLaunchVars("preventUploadDefault", 1);

    /!*第1个参数是加载编辑器div容器，第2个参数是编辑器类型，第3个参数是div容器宽，第4个参数是div容器高*!/
	xiuxiu.embedSWF("altContent",3,"100%","100%");
    
	//修改为您自己的图片上传接口
	xiuxiu.setUploadURL( site_url + "images/meitu_img/image_upload.php");
	xiuxiu.setUploadType(2);
	xiuxiu.setUploadDataFieldName("upload_file");
	
	// 编辑器flash加载完成之后
	xiuxiu.onInit = function ()
	{
		//xiuxiu.loadPhoto("http://open.web.meitu.com/sources/images/1.jpg");

		// alert(" onInit");
	}	


	
	xiuxiu.onUploadResponse = function (data){
		// alert(data);
		window.location.href= site_url+"demo.php?imgs="+data+"&goods_id=<?php echo $goods_id?>";
	}

	xiuxiu.onUpload = function(id) 
	{
        // alert("onUpload");
        
	}

	// 打开自定义图片选择器
	xiuxiu.onBrowse = function (channel, multipleSelection, canClose, id){
        // alert("打开自定义照片选择器");
		//document.getElementById('layerWrap').style.display = 'block';

		document.getElementById( "flashContent" ).style.display = "block";

	}

}
*/

</script>

<style type="text/css">
	html, body { height:100%; overflow:hidden; }
	body { margin:0; }


		.layerWrap{position: absolute; left: 0; top: 0; width: 700px; height: 500px; display: none;}
		.layerWrap img{ position: absolute; width: 300px; cursor: pointer;}
		.layerWrap span{position: absolute; top: 50%; cursor: pointer; margin-top: -50px; width: 100px; height: 100px; background: #ccc; color: #666; text-align: center; line-height: 100px;}

		.img1{ left: 200px; top: 95px;}
		.img2{ right: 25px; top: 25px;}
		
		.span1{ left: 100px;}
		.span2{ right: 100px;}
		
		.layer{ position: absolute; width: 700px; height: 500px; background: #000; opacity: 0.8; filter:alpha(opacity=80);}

</style>
</head>
<body>
	<div style="margin:0 auto;width:700px;">
		<!-- 图像识别结果 层 -->
		<div id="facediv" style="margin:0 auto; width:500px; margin-top:50px; display: none;">

		</div>

		<!-- flash 摄像头层 -->
		<div id="flashContent"  >
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="755" height="550" id="flash_camera" align="middle">
				<param name="movie" value="flash_camera.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="flash_camera.swf" width="755" height="550">
					<param name="movie" value="flash_camera.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获得 Adobe Flash Player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

		<!-- 美图秀秀 层
		<div id="altContent" style="display:none;">
			<h1>天明眼镜 - 试戴</h1>
		</div>
		-->

		<!-- 图片选择器 层
		<div id="layerWrap" class="layerWrap">
			<div class="layer"></div>
			<div id="layerWrap_img" ><img class="img1" /></div>
		</div>-->

	</div>
</body>
</html>




<script type="text/javascript" src="js/facepp-sdk.min.js"></script>
<script type="text/javascript">

	function loadPicToXiuxiu( picUrl ){
		//xiuxiu.loadPhoto( picUrl, false);
		//document.getElementById( "facediv" ).style.display  = "none";
	}


	/**
	 * 自动定位眼睛的位置和缩放大小
	 * @param imgUrl  图片url
	 * @param yanjing_tupian_id //要缩放的眼睛图片的选择器id
	 * @param yanjing_tu_pian_kuan_param //眼睛图片的图片宽度（单位像素）
	 * @param glass_width_param //眼睛镜片的宽度（单位毫米）
	 * @param jing_kuan_param //眼睛框架的总宽度（单位毫米）
	 * @param bi_tuo_kuan_param //眼睛鼻托处的宽度（单位毫米）
	 * @param jingpian_height_param //眼睛镜片的高度（单位毫米）
	 * @param result_param //人脸识别得到的数据结果集
	 */
	var api = new FacePP('0ef14fa726ce34d820c5a44e57fef470', '4Y9YXOMSDvqu1Ompn9NSpNwWQFHs1hYD');

	function classGet(imgUrl, v,w,x,y){

		api.request( 'detection/detect',
			{
				url: imgUrl,
				mode: 'oneface',
				attribute: 'gender,age,race,smiling,glass,pose'
			}, function (err, result) {
				if (err) {
					// TODO handle error
					return;
				}

				// 回调函数
				glassPopPosition("yanjing", $("#yanjing").width(), v, w, x,y, result);

			}

		);

	}


	// 眼镜定位
	function glassPopPosition(yanjing_tupian_id, yanjing_tu_pian_kuan_param, glass_width_param, jing_kuan_param, bi_tuo_kuan_param, jingpian_height_param, result_param) {
		var bilichi = yanjing_tu_pian_kuan_param / jing_kuan_param; //眼睛的真实宽度（毫米）在图片上显示的（像素）比例，转换为像素

		jing_kuan = jing_kuan_param * bilichi;//得到像素宽的值
		glass_width = glass_width_param * bilichi;//得到像素宽的值
		bi_tuo_kuan = bi_tuo_kuan_param * bilichi;//得到像素宽的值
		jingpian_height = jingpian_height_param * bilichi;//得到像素宽的值

		var center_point_temp = glass_width / 2 + bi_tuo_kuan / 2;
		var glass_left_center = jing_kuan / 2 - center_point_temp;

		var ren_yan_kuan = Math.sqrt(Math.pow((result_param.face[0].position.eye_right.x - result_param.face[0].position.eye_left.x) / 100 * result_param.img_width, 2) + Math.pow((result_param.face[0].position.eye_right.y - result_param.face[0].position.eye_left.y) / 100 * result_param.img_height, 2));

		var suo_fang_bi = ren_yan_kuan / (2 * center_point_temp);
		jing_kuan = jing_kuan * suo_fang_bi;//得缩放后的像素宽的值
		glass_left_center = glass_left_center * suo_fang_bi;//得缩放后的像素宽的值
		jingpian_height = jingpian_height * suo_fang_bi;//得缩放后的像素宽的值

		var rotate_oragin = glass_left_center / jing_kuan * 100;
		rotate_oragin = rotate_oragin + "%";

		var yanjing_pos_left = result_param.face[0].position.eye_left.x / 100 * result_param.img_width - glass_left_center;
		var yanjing_pos_top  = result_param.face[0].position.eye_left.y / 100 * result_param.img_height - jingpian_height / 2;

		$("#" + yanjing_tupian_id).css({
			"left": yanjing_pos_left + "px",
			"top": yanjing_pos_top + "px",
			"width": jing_kuan + "px"
		});

		$("#" + yanjing_tupian_id).rotate({
			angle: result_param.face[0].attribute.pose.roll_angle.value,
			center: [rotate_oragin, "50%"]
		});

		$("#" + yanjing_tupian_id).show();
	}

</script>




