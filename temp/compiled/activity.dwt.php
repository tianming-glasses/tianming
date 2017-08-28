<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css?1122" />
<link href="themes/meilele/css/favorable.min.css?0803" rel="stylesheet" type="text/css" />
<script src="themes/meilele/js/jq.js?1119"></script>

<script src="themes/meilele/js/common.min.js?0905"></script>

<script src="themes/meilele/js/jq.js"></script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="mt10" style="background: #f4f1f2 url(images/act_bg.jpg) no-repeat top center;padding:0 0 40px 0;">

  <div class="w">
 <!-- <?php $_from = get_advlist_by_id(12); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
    <div class="banner" style="height:125px"> <img src="<?php echo $this->_var['ad']['image']; ?>" width="1190" height="125" /> </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->	
  <?php $_from = get_advlist_by_id(13); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
    <div class="specials_ad mt10" style="height:60px;"> <a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['name']; ?>" target="_blank"> <img src="<?php echo $this->_var['ad']['image']; ?>" width="1190" height="60" /> </a> </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
   <!-- <div id="JS_filter" class="spc_filter mt10 clearfix">
      <div class="Left left_menu"> <b>分类：</b><a href="#JS_floor_1" class="current item_height">全部特惠(<font class='pack_num'>0</font>)</a><a  class="item_height" href="#JS_floor_1">套餐(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_2">男款(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_3">女款(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_4">镜框(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_5">镜片(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_6">太阳镜(<font class='pack_count'>0</font>)</a><a  class="item_height" href="#JS_floor_7">老花镜(<font class='pack_count'>0</font>)</a> </div>
    </div>-->

    <script type="text/javascript" src="themes/meilele/js/jquery.json.js"></script>
    <script>
    var diy_config = {
        "jingkuang_id": 0,
        "jingkuang_colorid": 0,
        "jingtui_id": 0,
        "jingtui_colorid": 0,
        "jingpian_id": 0,
        "jingpian_colorid": 0,
        "goods_id": 0
    };

    function select_color($element,type) {
        var img_src = $element.attr("data-img");
        var col_id = $element.attr("data-col_id");
        $element.parent().parent().parent().children(".taocan_box_imgs").find("img").attr("src", img_src);
        if(type==1){
	        diy_config.jingkuang_colorid = col_id;
	    }else if(type==2){
	        diy_config.jingtui_colorid = col_id;
	    }else if(type==3){
	        diy_config.jingpian_colorid = col_id;
	    }


    }

    function spectacles($element,type)
	{
	    var diy_goods_id= $element.val();
	    var data_price= $element.attr("data-price");
	    var default_color_img= $element.attr("data-thumb");
	    var data_name= $element.html();
	    var colors= $.evalJSON($element.attr("data-colors"));
	    if(type==1){
	        diy_config.jingkuang_id = diy_goods_id;
	    }else if(type==2){
	        diy_config.jingtui_id = diy_goods_id;
	    }else if(type==3){
	        diy_config.jingpian_id = diy_goods_id;
	    }

	    var colorli='';
	    if(colors&&colors.length>0){
            for (var i = 0; i < colors.length; i++) {
                if(i==0){
                    colorli+='<li onclick="select_color($(this),'+type+')" class="select_color taocan_box_yanse_li" data-col_id="'+colors[i].col_id+'" data-img="'+colors[i].img+'" style="background:'+colors[i].color+';"></li>';
                }else{
                    colorli+='<li onclick="select_color($(this),'+type+')" class="taocan_box_yanse_li" data-col_id="'+colors[i].col_id+'" data-img="'+colors[i].img+'" style="background:'+colors[i].color+';"></li>';
                }
            }

            default_color_img=colors[0].img;

            if(type==1){
                diy_config.jingkuang_colorid = colors[0].col_id;
            }else if(type==2){
                diy_config.jingtui_colorid = colors[0].col_id;
            }else if(type==3){
                diy_config.jingpian_colorid = colors[0].col_id;
            }
	    }

        var $info_html=$('<div class="taocan_box_imgs"><a href="goods-'+diy_goods_id+'.html"><span id="col_'+diy_goods_id+'" data="'+diy_goods_id+'"><img src="'+default_color_img+'" height="100%" width="100%"></span></a></div><div class="taocan_box_yanse"><ul class="taocan_box_yanse_ul">'+colorli+'</ul></div><p class="taocan_box_pp"><a href="goods-'+diy_goods_id+'.html">'+data_name+'</a><br><span class="taocan_box_sppn">本站价：<span style="color:#d70000;">￥'+data_price+'</span></span></p>');
        $("#jiangkuang"+type).html("");
        $info_html.appendTo($("#jiangkuang"+type));

        if(type<=2){

		$.ajax({
				    type:"POST",                         
				    url:"getdiy.php",
				    data:{act:"getdiys",diy_config:$.toJSON(diy_config),type:type+1},
				    dataType:"text",
					success:function(data)
					{
					    if(data!=""){
                            var jsonObj = $.evalJSON(data);
                            if (jsonObj) {
                                var option_html = '';
                                for (var i = 0; i < jsonObj.length; i++) {
                                    option_html += '<option data-thumb="' + jsonObj[i].goods_thumb + '" data-colors=\'' + jsonObj[i].colors_json + '\' data-price="' + jsonObj[i].price + '" value="' + jsonObj[i].diy_goods_id + '">' + jsonObj[i].goods_name + '</option>';
                                }
                                $("#"+(type+1)).html(option_html);
                                spectacles($("#"+(type+1)).children("option").eq(0),type+1)
                            }
					    }
					}
			  });
	    }else{

            $.ajax({
				    type:"POST",
				    url:"getdiy.php",
				    data:{act:"getgoods",diy_config:$.toJSON(diy_config),type:type+1},
				    dataType:"text",
					success:function(data)
					{
					    if(data!=""){
                            var jsonObj = $.evalJSON(data);
							
							//var result  = $.evalJSON(diy_cofing);
							
							
							
                            if (jsonObj) {
                               diy_config.goods_id = jsonObj.goods_id;   
                               $("#goods_name").html(jsonObj.goods_name);
                               $("#goods_pic").attr("src",jsonObj.goods_thumb);
                               $("#goods_price").html("￥"+jsonObj.market_price);

							   $("#diy_jiesuan").attr("href","javascript:addDiyToCart("+jsonObj.goods_id+",diy_config)");
							   $("#diy_shidai").attr("href","meibai.php?goods_id="+jsonObj.goods_id);

                            }
					    }
					}
			  });
	    }
    }

    </script>
    
    <style>
    	.taocan_box{width:1190px; height:auto; margin:auto; border:1px solid red;}
		.taocan_box_top{width:1170px; margin-left:20px; height:32px; font-size:22px; line-height:32px; font-weight:bold; vertical-align:top; font-family:"微软雅黑"; display:inline-block; color:#d60742;}
		.taocan_box_center{width:1188px; height:auto; border:1px solid #ddd; border-top:0px; padding-top:20px; padding-bottom:10px;}
		.taocan_box_center_cent{width:1050px; height:260px; margin:auto; padding-top:10px;}
		.taocan_box_li{width:190px; height:230px; float:left;}
		.taocan_box_li1{width:50px; height:180px; float:left; font-size:30px; text-align:center; padding-top:50px; font-weight:700; color:#999;}
		.taocan_box_li3{width:100px; height:180px; float:left; font-size:30px; text-align:right; padding-top:50px; font-weight:700; color:#999;}
		.taocan_box_li2{width:160px; height:180px; float:left; margin-left:30px;}
		.taocan_box_li4{width:250px; height:230px; float:left; margin-left:30px;}
		.taocan_box_imgs{width:190px; height:130px;}
		.taocan_box_imgs1{width:160px; height:130px;}
		.taocan_box_pp{width:190px; padding-top:10px; height:60px; text-align:center; clear:both;}
		.taocan_box_pp1{width:160px; padding-top:10px; height:60px; text-align:center;}
		.taocan_box_sppn{text-align:center; font-size:12px; color:#666;}
		.taocan_box_yanse{width:190px; margin-top:10px; height:20px; text-align:center;}
		.taocan_box_yanse_ul{/*width:150px;*/ height:20px; margin:auto;}
		.taocan_box_yanse_li{width:20px; height:20px; margin-right:10px; background:#F00; float:left; cursor:pointer;}
		/*.taocan_box_yanse_li1{width:20px; height:20px; background:#F60; margin-left:10px; float:left; cursor:pointer;}
		.taocan_box_yanse_li2{width:20px; height:20px; background:#36F; margin-left:10px; float:left; cursor:pointer;}*/
		.taocan_box_div_p{width:190px; text-align:center; margin-bottom:15px;}
    </style>
    
    <div class="">
         <div class="spc_main mt20" id="JS_main">
            <div class="floor" id="JS_floor_1" name="JS_floor_1">
                <div class="title"><strong><i style="width:5px; height:32px; background:#d60742; position:absolute; margin-left:-10px;"></i><span class="floor_name">DIY搭配</span> </strong> </div>
                <div class="body">
                  <div class="header">
                    <div class="h_l"></div>
                    <div class="h_r"></div>
                  </div>
                </div>
                <div class="taocan_box_center">
                    <div class="taocan_box_center_cent">
                    	<ul>
                        	<li class="taocan_box_li">
                            	 <div class="taocan_box_div_p">
                                	<select id="1" autocomplete="off"  onChange="spectacles($(this).children('option:selected'),1)" style="width:190px;" >
                                     <?php $_from = $this->_var['diys_kuang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'kuang');$this->_foreach['kuang'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kuang']['total'] > 0):
    foreach ($_from AS $this->_var['kuang']):
        $this->_foreach['kuang']['iteration']++;
?>
                                    	 <option data-thumb='<?php echo $this->_var['kuang']['goods_thumb']; ?>' data-colors='<?php echo $this->_var['kuang']['colors_json']; ?>' data-price="<?php echo $this->_var['kuang']['price']; ?>" value="<?php echo $this->_var['kuang']['diy_goods_id']; ?>"><?php echo $this->_var['kuang']['goods_name']; ?></option>
                                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </select>
                                </div>
                                <span id="jiangkuang1">
                            	<div class="taocan_box_imgs">
                                <a href="goods-<?php echo $this->_var['diys_kuang']['0']['goods_id']; ?>.html">
                                <span id="col_<?php echo $this->_var['diys_kuang']['0']['goods_id']; ?>" data="<?php echo $this->_var['diys_kuang']['0']['goods_id']; ?>">
                                <?php if ($this->_var['diys_kuang'] [ 0 ] [ 'colors' ] | @ count != 0): ?>
                                <img  src="<?php echo $this->_var['diys_kuang']['0']['colors']['0']['img']; ?>" width="100%" height="100%">
                                <?php else: ?>
                                <img  src="<?php echo $this->_var['diys_kuang']['0']['goods_thumb']; ?>" width="100%" height="100%">
                                <?php endif; ?>
                                </span>
                                </a>
                                </div>
                                <div class="taocan_box_yanse">
                                	<ul class="taocan_box_yanse_ul">
                                	    <?php if ($this->_var['diys_kuang'] [ 0 ] [ 'colors' ] | @ count != 0): ?>
                                        <?php $_from = $this->_var['diys_kuang']['0']['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'color');$this->_foreach['color'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['color']['total'] > 0):
    foreach ($_from AS $this->_var['color']):
        $this->_foreach['color']['iteration']++;
?>
                                    	<li class="taocan_box_yanse_li" onClick="select_color($(this),1)"  style="background:<?php echo $this->_var['color']['color']; ?>"></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <p class="taocan_box_pp"><a href="goods-<?php echo $this->_var['diys_kuang']['0']['goods_id']; ?>.html"><?php echo $this->_var['diys_kuang']['0']['goods_name']; ?></a><br />
                                	<span class="taocan_box_sppn">本站价：<span style="color:#d70000;">￥<?php echo $this->_var['diys_kuang']['0']['price']; ?></span></span>
                                </p>
                                 </span>
                            </li>
                            <li class="taocan_box_li1">+</li>
                            
                            
                            <li class="taocan_box_li">
                            	<div class="taocan_box_div_p">
                                	<select id="2" autocomplete="off" onChange="spectacles($(this).children('option:selected'),2)" style="width:190px;">
                                    	
                                        <?php $_from = $this->_var['diys_kuang1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'kuang');$this->_foreach['kuang'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kuang']['total'] > 0):
    foreach ($_from AS $this->_var['kuang']):
        $this->_foreach['kuang']['iteration']++;
?>
                                    	 <option value="<?php echo $this->_var['kuang']['goods_id']; ?>"><?php echo $this->_var['kuang']['goods_name']; ?></option>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </select>
                                </div>
                               <span id="jiangkuang2">
                            	<div class="taocan_box_imgs">
                               
                                <a href="goods-<?php echo $this->_var['jk1']['0']['goods_id']; ?>.html">
                                <span id="col_<?php echo $this->_var['jk1']['0']['goods_id']; ?>" data="<?php echo $this->_var['jk1']['0']['goods_id']; ?>">
                                <img src="<?php echo $this->_var['jk1']['0']['goods_thumb']; ?>" width="100%" height="100%">
                                </span>
                                </a>
                                
                                </div>
                                <div class="taocan_box_yanse">
                                	<ul class="taocan_box_yanse_ul">
                                    	 <?php $_from = $this->_var['jk1']['0']['color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'color');$this->_foreach['color'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['color']['total'] > 0):
    foreach ($_from AS $this->_var['color']):
        $this->_foreach['color']['iteration']++;
?>
                                    	 <li class="taocan_box_yanse_li" onClick="jk_color1('<?php echo $this->_var['jk']['0']['goods_id']; ?>','<?php echo $this->_var['color']['col_id']; ?>')" style="background:<?php echo $this->_var['color']['color']; ?>"></li>
                                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                </div>
                                <p class="taocan_box_pp"><a href="goods-<?php echo $this->_var['jk1']['0']['goods_id']; ?>.html"><?php echo $this->_var['jk1']['0']['goods_name']; ?></a><br />
                                	<span class="taocan_box_sppn">本站价：<span style="color:#d70000;">￥<?php echo $this->_var['jk1']['0']['shop_price']; ?></span></span>
                                </p>
                                </span>               
                            </li>
                            <li class="taocan_box_li1">+</li>

                            <li class="taocan_box_li">
                            	 <div class="taocan_box_div_p">
                                	<select id="3" autocomplete="off" onChange="spectacles($(this).children('option:selected'),3)" style="width:190px;">
                                        <?php $_from = $this->_var['diys_kuang2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'kuang');$this->_foreach['kuang'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kuang']['total'] > 0):
    foreach ($_from AS $this->_var['kuang']):
        $this->_foreach['kuang']['iteration']++;
?>
                                    	 <option value="<?php echo $this->_var['kuang']['goods_id']; ?>"><?php echo $this->_var['kuang']['goods_name']; ?></option>
                                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </select>
                                </div>
                                <span id="jiangkuang3">
                            	<div class="taocan_box_imgs">
                               
                                <a href="goods-<?php echo $this->_var['jk2']['goods_id']; ?>.html"> <span id="col1_<?php echo $this->_var['jk2']['goods_id']; ?>" data="<?php echo $this->_var['jk2']['goods_id']; ?>"><img src="<?php echo $this->_var['jk2']['goods_thumb']; ?>" width="100%" height="100%"></span></a>
                                
                                </div>
                                <div class="taocan_box_yanse"></div>
                                <p class="taocan_box_pp"><a href="goods-<?php echo $this->_var['jk2']['goods_id']; ?>.html"><?php echo $this->_var['jk2']['goods_name']; ?></a><br />
                                	<span class="taocan_box_sppn">本站价：<span style="color:#d70000;">￥<?php echo $this->_var['jk2']['shop_price']; ?></span></span>
                                </p>
                                </span>
                            </li>
                            <li class="taocan_box_li3">=</li>
                            <li class="taocan_box_li4">
                            	<div style="width:250px;">
                                    <div style="width:250px; line-height:24px; font-size:12px; color:#000;">
                                        <a id="goods_name" href="#"></a>
                                        <img id="goods_pic" width="190" src="">
                                    </div>
                                </div>
                                <div style="width:250px; height:24px; margin-top:30px; font-size:12px; color:#000;">搭配价：
                                	<span style="color:#d70000; font-size:14px; font-weight:700;">
                                     <span id="goods_price"></span>
                                     </span>
                                </div>
                                <div style="width:400px; margin-top:10px;">
                                <span id="ljjs" style=" float:left; margin-right:10px;">
                                	 <a id="diy_jiesuan" href="" class="tz_button">
       									 <img src="/themes/meilele/imgs/box_g.jpg" />
       								 </a>
                                     
                                    
                                 </span>
                                <span id="ljjs" style=" float:left; height:35px;">
                                  <a id="diy_shidai" href="" class="tz_button">
       									 <img src="/themes/meilele/images/goods2/posxx.png"  height="100%"/>
       								 </a>
                                  </span>
                                 
                                </div>
                            </li>
                            
                           <!-- <li class="taocan_box_li">
                            	<div class="taocan_box_imgs"><a href=""><img src="/themes/meilele/imgs/4.jpg" width="100%" height="100%"></a></div>
                                <div class="taocan_box_yanse"></div>
                                <p class="taocan_box_pp"><a href="">眼镜</a><br />
                                	 <span class="taocan_box_sppn">本站价：<span style="color:#d70000; font-size:14px; font-weight:700;">
                                     <span id="my_all_price">
                                     ￥<?php echo $this->_var['jk_jt_jp']; ?>
                                     </span>
                                     </span></span>
                                </p>
                            </li>
                            
                            <li class="taocan_box_li2">
                            	<div class="taocan_box_imgs1"><img src="/themes/meilele/imgs/ssbb.jpg" width="100%" height="100%"></div>
                                <p class="taocan_box_pp1">
                                   
                                    <a href="javascript:;" onclick="addFittingsToCart()">
                                    <img src="themes/meilele/imgs/sobu.png">
                                    </a>
                                </p>
                            </li>-->
                        </ul>
                    </div>       
                </div>
            </div>
         </div>
     
     
    </div>
    
    
    <style>
    	.taocan_box{width:1190px; height:auto/*350px*/; margin:auto; border:1px solid red;}
		.taocan_box_top{width:1170px; margin-left:20px; height:32px; font-size:22px; line-height:32px; font-weight:bold; vertical-align:top; font-family:"微软雅黑"; display:inline-block; color:#d60742;}
		.taocan_box_center{width:1188px; height:/*240px*/auto; border:1px solid #ddd; border-top:0px; padding-top:20px; padding-bottom:10px;}
		.taocan_box_center_cent1{width:1100px;  margin:auto; padding-top:10px;}
		.zuhe_box_li{width:232px; height:200px; float:left;}
		.zuhe_box_li1{width:54px; height:150px; float:left; font-size:30px; text-align:center; padding-top:50px; font-weight:700; color:#999;}
		.zuhe_box_xia_li{width:232px; /*height:30px;*/ float:left; /*text-align:center;*/}
		.zuhe_box_xia_li1{width:54px; /*height:30px;*/ float:left;}
		.zuhe_box_imgs{width:232px; height:130px;}
		.zuhe_box_ppss{width:232px; height:50px; padding-top:10px; text-align:center;}
		.zuhe_box_sppn{text-align:center; font-size:12px; color:#666;}
    </style> 
    <div class="">
         <div class="spc_main mt20" id="JS_main">
            <div class="floor" id="JS_floor_1" name="JS_floor_1">
                <div class="title"><strong><i style="width:5px; height:32px; background:#d60742; position:absolute; margin-left:-10px;"></i><span class="floor_name">套餐组合</span> </strong> </div>
                <div class="body">
                  <div class="header">
                    <div class="h_l"></div>
                    <div class="h_r"></div>
                  </div>
                </div>
             
              	<div class="taocan_box_center">
                    <div class="taocan_box_center_cent1"> 

<style>
	.taba_box_box{width:1100px; height:220px; margin-bottom:20px;}
	.taba_box_l{width:840px; height:220px; float:left; overflow-x:scroll; overflow-y:hidden;}
	.taba_box_r{width:210px; height:220px; float:right;}
	.taba_box_tabb{/* width:1000px;*/ height:200px;}
	.taba_box_tda{width:230px; height:200px;}
	.taba_box_pic{width:230px; height:150px; margin-bottom:8px;}
	.taba_box_n{width:230px; height:20px; text-align:center; display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis; font-size:12px; color:#000; line-height:20px;}
	.taba_box_ben{width:230px; height:20px; text-align:center; font-size:12px; color:#666; line-height:20px;}
	.taba_box_tdb{width:50px; float:left; height:115px; text-align:center; color:#999; margin-top:85px; font-size:30px; font-weight:700; white-space:nowrap;}
	
		.taba_box_l::-webkit-scrollbar{height:5px;}
		.taba_box_l::-moz-scrollbar{height:5px;}
		.taba_box_l::-o-scrollbar{height:5px;}
		.taba_box_l::-ms-scrollbar{height:5px;}
		
		.taba_box_l::-webkit-scrollbar-track-piece{border-radius:10px; background:#ccc;}
		.taba_box_l::-moz-scrollbar-track-piece{border-radius:10px; background:#ccc;}
		.taba_box_l::-o-scrollbar-track-piece{border-radius:10px; background:#ccc;}
		.taba_box_l::-ms-scrollbar-track-piece{border-radius:10px; background:#ccc;}
		
		.taba_box_l::-webkit-scrollbar-thumb{background:#999; border-radius:10px;}
		.taba_box_l::-moz-scrollbar-thumb{background:#999; border-radius:10px;}
		.taba_box_l::-o-scrollbar-thumb{background:#999; border-radius:10px;}
		.taba_box_l::-ms-scrollbar-thumb{background:#999; border-radius:10px;}
</style>

<?php $_from = $this->_var['zuhe_allprice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'zuhe');$this->_foreach['zuhe'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['zuhe']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['zuhe']):
        $this->_foreach['zuhe']['iteration']++;
?>
<div class="taba_box_box">
	<div class="taba_box_l">
    	<table class="taba_box_tabb" width="100" border="0" cellspacing="0" cellpadding="0">
          <tr>
         
            <?php $_from = $this->_var['zuhe_t'][$this->_var['key']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'zuhe1');$this->_foreach['zuhe1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['zuhe1']['total'] > 0):
    foreach ($_from AS $this->_var['zuhe1']):
        $this->_foreach['zuhe1']['iteration']++;
?>
            <td class="taba_box_tda">
            	<div class="taba_box_pic"><a href="goods-<?php echo $this->_var['zuhe1']['goods_id']; ?>.html"><img src="<?php echo $this->_var['zuhe1']['goods_thumb']; ?>" width="100%" height="100%"></a></div>
                <div class="taba_box_n"><a href="goods-<?php echo $this->_var['zuhe1']['goods_id']; ?>.html"><?php echo $this->_var['zuhe1']['goods_name']; ?></a></div>
                <div class="taba_box_ben">本站价：<span style="color:#F00; font-size:14px; font-weight:700;">￥<?php echo $this->_var['zuhe1']['shop_price']; ?></span></div>
            </td>
            <td class="taba_box_tdb">
            	+
            </td>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </tr>
        </table>

    </div>
    <div class="taba_box_r">
    	<div style="width:20px; height:115px; float:left; font-weight:700; text-align:center; margin-top:85px; color:#666; font-size:30px;">=</div>
 	    <div style="width:168px; height:200px; float:left; padding-left:20px;">
    	<div style="width:168px; height:auto; line-height:20px; overflow:hidden; font-size:12px; color:#000;"><?php echo $this->_var['zuhe']['act_name']; ?></div>
        <div style="width:168px; height:24px; margin-top:15px; font-size:12px; color:#000; line-height:24px;">套餐价：
        	<span style="color:#F00; font-size:14px; font-weight:700;"><?php echo $this->_var['zuhe']['package_price']; ?></span>
        </div>
        <div style="width:168px; height:24px; color:#666; text-decoration:line-through; font-size:12px; line-height:24px;">总价：<?php echo $this->_var['zuhe']['subtotal']; ?></div>
        <div style="width:168px; height:auto; margin-top:20px;">
        <a href="javascript:addPackageToCart(<?php echo $this->_var['zuhe']['act_id']; ?>)" class="tz_button">
        <img src="/themes/meilele/imgs/box_g.jpg" />
        </a></div>
    </div>
</div>



                    </div> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>               
                
            </div>
         </div>
     
     
    </div>
    
    
  <script language="javascript">
    spectacles($("#1").children('option:selected'),1);
	var fittingsArr = new Array(); 
	var fittingsArrLen = 0;
	var addCartCount = 0;
	function sum_price(){
	    fittingsArr.length=0; 
		var sum_price1 = 0.00;
		var sum_price2 = 0.00;
		$('.chk_fit').each(
			function(){
			    var chk = this.checked;
				if (chk){
					var price1 = $(this).attr('price1');
					var price2 = $(this).attr('price2');
					sum_price1 += price1*1;
					sum_price2 += price2*1;
					
					fittingsArr.push($(this).attr('goods_id'));
				}
			}
		);
		$('#fit_price1').html(parseInt(sum_price1));
		$('#fit_price2').html(parseInt(sum_price2));
		$('#fit_price3').html(parseInt(sum_price2 - sum_price1));
	}
	sum_price();
	function addFittingsToCart(){
		
	      fittingsArrLen = "3";
		  
	
		  if (fittingsArrLen == 1){
		  	alert('请选择套餐组合产品!');
			return;
		  }
		 
		  for (var i = 0; i < 3; i ++){

			  var spec_arr     = new Array();
			  var number       = 1;
			  var quick		   = 0;
  
			  var goods        = new Object();
			  var formBuy      = document.forms['ECS_FORMBUY'];
			
	
			  goods.goods_id = fittingsArr[i];
			  goods.number   = 1;
			  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
			  
			  // 检查是否有商品规格 
			  if (i == 0 && formBuy)
			  {
				spec_arr = getSelectedAttributes(formBuy);
			
				if (formBuy.elements['number'])
				{
				  number = formBuy.elements['number'].value;
				}
			
				quick = 1;
			  }
			  
			  goods.spec     = spec_arr;
			  goods.number   = number;
			  goods.quick    = quick;
			  
			  $.ajax({
					type:"POST",
					url:"flow.php?step=add_to_cart",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'goods=' + $.toJSON(goods),
					success:addFittingsToCartResponse
				});
			  
			  
		  }
		  
	}
	function addFittingsToCartResponse(result)
	{
	  if (result.error > 0)
	  {
		
	  }
	  else
	  {
			addCartCount = addCartCount + 1;
			if (fittingsArrLen == addCartCount){
				$.addToCart(result.goods_number, result.goods_price);
				$('#cartInfo_number').html(result.goods_number);
				
				$.ajax({
							type:"POST",
							url:"flow.php?step=get_cart_list",
							cache:false,
							dataType:'json',     //接受数据格式
							data:'',
							success:function(result){
								$('#JS_header_cart_list').html(result.message);
							}
						});
			}
	  }
	}
	</script>  
    
    
    
    
    
    
    
    
<script src="themes/meilele/js/common.js"></script>
   

<script language="javascript">
    var pack_sum = 0;
	$('.floor .content').each(
		function(i){
			var l = $(this).children().length;
			pack_sum += l;
			set_pack_count(i, l);
		}
	);
	$('.pack_num').html(pack_sum);
	function set_pack_count(index, count){
		$('.pack_count').each(
			function(i){
				if (i == index){
					this.innerHTML = count;
				}
			}
		);
		$('.pack_count1').each(
			function(i){
				if (i == index){
					this.innerHTML = count;
				}
			}
		);
	}
</script>
	
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script>window.M = window.M || {};if($.addToCart)M.addToCart = $.addToCart</script>
<script type="text/javascript">
var tz = function( setting ){
	this.setting = setting;
	this.data = false;
	this.isShow = false;
}

tz.prototype = {
	constructor:tz,
	isNeedShow:function(h_s){
		//if( !this.data )return false;
		var h_v,imgTop;
		h_v=document.documentElement.clientHeight;
		imgTop = this.setting._offsetTop;
		if( h_v+h_s>imgTop && imgTop+this.setting._height>h_s )
		{
			return true;
		}
		return false;
	},
	show:function(){
		var tpl=[];
		var gl = this.data;
		tpl.push('<div class="goods_count icon">此组合：'+gl.all_number+'件</div><div></div> <div class="item_l Left"> <div class="stage"> ');
		if(gl.classe_number > 3)
			tpl.push('<a class="left icon"id="JS_move_left_'+gl.id+'" style="display:none" onclick="tz_move('+gl.id+','+gl.classe_number+',1)" ></a> <a class="right icon"  id="JS_move_right_'+gl.id+'" onclick="tz_move('+gl.id+','+gl.classe_number+',-1)"></a> ');
		tpl.push(' <table id="JS_table_'+gl.id+'"><tr>');
		
		tpl.push('</tr></table></div></div>');


		tpl.push('<div class="item_r Right');
		if(gl.favorable_postfree)
		{
		 tpl.push(' bg_wl');
		}
		tpl.push(' clearfix">');
		tpl.push('<div class="Left"><span class="equal icon"></span></div>');
		tpl.push('<div class="Right"><h4><a href="'+gl.url+'" title="'+gl.goods_name+'" target="_blank">'+gl.goods_name+'</a></h4><p><span class="price_tip">组合价：</span><br/><span class="red yen">&yen;<span class="price">'+gl.favorable_show_price.show_price+'.00</span>');
		if(gl.favorable_show_price.nature_favorable_price > 0)
		{
			tpl.push('<br/><del class="yen gray">¥'+gl.favorable_show_price.nature_total_price+'</del><br/> <span class="save_icon icon"></span><span class="yen red">'+gl.favorable_show_price.nature_favorable_price+'</span>');
		}
		if(gl.favorable_show_price.discount_type == 1 && gl.favorable_show_price.discount_price > 0)
		{
			tpl.push('<br/><span class="back_icon save_icon icon"></span><span class="yen red">&yen;'+gl.favorable_show_price.discount_price+'</span>');
		}
		tpl.push('</p><a href="'+gl.url+'" title="'+gl.goods_name+'" data-id="');
		if(gl.goods_id)
		{
		tpl.push(''+gl.goods_id+'');
		}
		else{
		tpl.push(''+gl.id+'');
		}
		tpl.push(' target="_blank" class="buy_icon icon"></a></div></div>');
		var htmlStr=tpl.join('');
		this.setting.dom.innerHTML = htmlStr;
		delete TZ.waitToShow[this.setting.id];
		if( TZ.isEmptyObj( TZ.waitToShow ) ){
			TZ.scrollresponse = function(){}
		}else{
			setTimeout( function(){ 
				for(var k in TZ.waitToShow){
					if( TZ.waitToShow[k] && TZ.waitToShow[k].data ){
						TZ.waitToShow[k].show();
						break;
					}
				}
			} , TZ.backShowTimer );
			
		}
	}
}

;(function(M){
	var TZ = window.TZ = {
		backShowTimer : 4000,
		all:{},
		waitToShow:{},
		waitToData:{},
		scrollresponse:function(w_scrolltop){
			if(window.TZ_timer) clearTimeout(window.TZ_timer);
			window.TZ_timer=setTimeout(function(){
				var tmpConut = 0;
				var list = [];
				var listToload = [];
				var timer;
				for(var i in TZ.waitToShow)
				{   
					if( TZ.waitToShow[i] && TZ.waitToShow[i].isNeedShow( w_scrolltop ) ){
						list.push(i);
					}
					if( list.length > 4 )break;
				}
				if( list.length ){
					for(var i = 0 ,ii = list.length ; i < ii ;i ++){
						var id = list[i];
						if( TZ.waitToShow[id] && TZ.waitToShow[id].data && !TZ.waitToShow[id].isShow ){
							TZ.waitToShow[id].show();
							timer = 4000;
						}else if( TZ.waitToShow[id] && !TZ.waitToShow[id].data ){
							listToload.push( list[i] );
							timer = 8000;
						}
					}
				}
				if( listToload.length ){
					TZ.loadData( listToload , function( listBack , json ){
						for(var k = 0, kk = listBack.length ;  k<kk ; k++){
							var id = listBack[k];
							if( TZ.waitToShow && TZ.waitToShow[id] && !TZ.waitToShow[id].isShow ){
								TZ.waitToShow[id].show();
							}
						}
					} , true );
				}
				if( timer ){
					TZ.backShowTimer = timer;
					setTimeout(function(){
						TZ.backShowTimer = 1000;
					},timer)
				}
			},300);
		},
		loadData:function( list , callback , must ){
			must && window._tzAjaxHolder && window._tzAjaxHolder.request && window._tzAjaxHolder.request.abort();
			window._tzAjaxHolder = M.ajax({
				url:'/mem_favorable/?act=ajax_load',
				data:'offset='+list.join(','),
				dataType:'json',
				success:function(json){
					for(var i = 0, ii = list.length ; i<ii;i++){
						var id = list[i];
						if( json[id] && TZ.waitToData[id] && !TZ.waitToData[id].data ){
							TZ.waitToData[id].data = json[ id ];
							delete TZ.waitToData[id];
						}
					}
					window._tzAjaxHolder = null;
					if( callback )callback( list , json );
					setTimeout( TZ.backLoadData , 500 );
				},error:function(){
					window._tzAjaxHolder = null;
				}
			});
		},
		backLoadData:function(){//空闲时背景加载
			var list = [];
			for( var k in TZ.waitToData ){
				list.push( k );
				if( list.length >= 30 )break;
			}
			if( list.length ){
				TZ.loadData( list );
			}else{
				for(var k in TZ.waitToShow){
					TZ.backShowTimer = 500;
					TZ.waitToShow[k].show();
					break;
				}
			}
		},
		isEmptyObj:function(obj){
			for(var k in obj){
				return false;
			}
			return true;
		}
	}
	var items=M.$('.js_item');
	for(var i=0,len=items.length;i<len;i++)
	{
		var item=items[i];
		if(!item.getAttribute('data-load'))
		{
			TZ.all[item.id] = TZ.waitToShow[item.id] = TZ.waitToData[item.id] = new tz( {
				target:item,
				data:false,
				id:item.id,
				dom : item,
				_offsetTop:M.offsetTop(item),
				_height:parseInt(item.style.height )
			} );
		}
	};
	var floatDom=M.$('#JS_th_float_link');
	var f_offsetTop=M.offsetTop(M.$('#JS_main'));
	var timer=null;

	//获取楼层高度
	var _floorTop={};
	var floors=floatDom.getElementsByTagName('a');
	for(var i=0,len=floors.length;i<len;i++)
	{
		var dom=M.$('#'+'JS_floor_'+(i+1)),_offsetTop;
		if(dom)
		{
			var minHeight=M.offsetTop(dom)-225;
			var maxHeight=minHeight+parseInt(dom.offsetHeight);
			_floorTop['floor_'+i]={
				min_H:minHeight,
				max_H:maxHeight
			}
		}
	}
	M.addHandler(window,'scroll',scrollfunction);
	M.addHandler(window,'resize',scrollfunction);
	function scrollfunction(){
		w_scrolltop= window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
		if(w_scrolltop>f_offsetTop)
			floatDom.style.display="block";
		else
			floatDom.style.display="none";
		for(var i=0,len=floors.length;i<len;i++)
		{
			var item=_floorTop['floor_'+i];
			if(w_scrolltop>item.min_H&&w_scrolltop<item.max_H)
				M.addClass(floors[i],'show');
			else
				M.removeClass(floors[i],'show');
		}
		TZ.scrollresponse( w_scrolltop );
	}
	scrollfunction();
	M.lazyImg.start('lazy',{callback:TZ.backLoadData});
})(M);
function tz_move( id , maxStep , to ){
	var table = M.$('#JS_table_'+id);
	var left  = M.$('#JS_move_left_'+id);
	var right = M.$('#JS_move_right_'+id);
	maxStep = maxStep - 3;
	if(table && left && right){
		var now = table._tzNow || 0;
		to = now + to ;
		if( to > 0 )to = 0;
		if( to < 0 - maxStep ) to = 0 - maxStep;
		M.Animate( table , {'marginLeft':to*238+'px'} );
		if( to == 0 ){
			left.style.display = 'none'
		}else{
			left.style.display = ''
		}
		if( to == 0 - maxStep ){
			right.style.display = 'none'
		}else{
			right.style.display = ''
		}
		table._tzNow = to;
	}
}
</script>
</body>
</html>
<!--
LDZ:2013-10-18 16:29:23
-->
