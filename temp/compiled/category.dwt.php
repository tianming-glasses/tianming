<?php if ($this->_var['p_id'] > 0): ?>

<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css" />
<link href="themes/meilele/css/category_wide.min.css?1128" rel="stylesheet" type="text/css"/>
<script src="themes/meilele/js/jq.js?1119"></script>
<script src="themes/meilele/js/jquery.json.min.js"></script>
</head>
<body>
<script type="text/javascript">(function(){var screenWidth=window.screen.width;if(screenWidth>=1280){document.body.className='root_body';window.isWideScreen = true;window.LOAD = true;}else{window.LOAD = false;}})()</script>

<?php echo $this->fetch('library/page_header.lbi'); ?> 

<div class="w clearfix mt10">
  <div class="cat_r">
    <div class="position">
      <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
      <?php echo $this->fetch('library/goods_hot.lbi'); ?>
	<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <div class="filter">
      <script type="text/javascript">
				var _fliterShowNum = 3;
				var _fliterShowCount = 4;
			</script>
      <table class="filter_table" id="JS_fliterTable">
	  <?php if ($this->_var['brands']['1']): ?>
        <tr class="list">
          <td class="lable"><?php echo $this->_var['lang']['brand']; ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
		  <a href='<?php echo $this->_var['brand']['url']; ?>' class="<?php if ($this->_var['brand']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['brand']['brand_name']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endif; ?>  
	  <?php if ($this->_var['price_grade']['1']): ?>
        <tr class="list">
          <td class="lable"><?php echo $this->_var['lang']['price']; ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
		  <a href='<?php echo $this->_var['grade']['url']; ?>' class="<?php if ($this->_var['grade']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['grade']['price_range']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endif; ?>
	  <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_29958400_1477373394');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_29958400_1477373394']):
?>
        <tr class="list">
          <td class="lable"><?php echo htmlspecialchars($this->_var['filter_attr_0_29958400_1477373394']['filter_attr_name']); ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['filter_attr_0_29958400_1477373394']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
		  <a href='<?php echo $this->_var['attr']['url']; ?>' class="<?php if ($this->_var['attr']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['attr']['attr_value']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </table>
    </div>
	<?php endif; ?>
	<?php if ($this->_var['goods_list']): ?>
    <div class="toggle">
      <div class="bar"></div>
      <div class="c">
        <div id="JS_exp_fliter" class="nav_box clearfix">
          <div class="nav nav_left Left"></div>
          <div class="nav nav_content Left" id="JS_exp_fliter_text" data-show-text="更多选项<span class='nav_more_opt'></span>">更多选项<span class="nav_more_opt"></span></div>
          <div class="nav nav_right Left"></div>
        </div>
      </div>
    </div>
	<?php endif; ?>
    <?php echo $this->fetch('library/goods_list.lbi'); ?>
    <?php echo $this->fetch('library/pages2.lbi'); ?>
  </div>
  <div class="cat_l">
    <script type="text/javascript">
			var _currentCat = '0';
		</script>
    <div class="category">
      <div class="cate_title">所有分类</div>
	  <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_tree']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat_tree']['iteration']++;
?>
      <div class="category_title" onclick="toggleCatgory1(<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>);return false;"><a class="" href="<?php echo $this->_var['cat']['url']; ?>" id="JS_category_title_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>" onclick="return false;"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a><span class="icon2" id="JS_category_icon2_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>"><?php if ($this->_var['cat']['id'] == $this->_var['top_id']): ?>-<?php else: ?>+<?php endif; ?></span></div>
      <div id="JS_category_body_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>" class="category_body <?php if ($this->_var['cat']['id'] != $this->_var['top_id']): ?>none<?php endif; ?>">
	  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>	
        <dl class="wofang <?php if ($this->_foreach['cat_cat_id']['iteration'] == 1): ?>first<?php endif; ?>">
          <dt><b class="<?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?>current<?php endif; ?>" onclick="toggleCatgory2(this);return false;"><?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?>−<?php else: ?>+<?php endif; ?></b><a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
          <dd class="<?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?><?php else: ?>none<?php endif; ?>"> <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?><span><a <?php if ($this->_var['childer']['id'] == $this->_var['category']): ?>class="current"<?php endif; ?> href="<?php if ($this->_var['childer']['id'] == $this->_var['category']): ?><?php echo $this->_var['child']['url']; ?><?php else: ?><?php echo $this->_var['childer']['url']; ?><?php endif; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </dd>
        </dl>
	   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
        
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </div>
    
    
	<div class="ranking mt10">
  <div class="title_1"><span class="icon"></span><span class="zh">本月热卖排行榜</span></div>
  <div class="rankbody">
  <?php $_from = get_cat_hot_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['best_goods']['iteration']++;
?>
    <div id="JS_left_rank_<?php echo ($this->_foreach['best_goods']['iteration'] - 1); ?>" class="list <?php if ($this->_foreach['best_goods']['iteration'] == 1): ?>first<?php endif; ?> <?php if (($this->_foreach['best_goods']['iteration'] == $this->_foreach['best_goods']['total'])): ?>current<?php endif; ?>" onmouseover="setRankCurrent(<?php echo ($this->_foreach['best_goods']['iteration'] - 1); ?>);">
      <div class="titles"><span class="icon icon1"><?php echo $this->_foreach['best_goods']['iteration']; ?></span><span style="width: auto;" class="name"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><?php echo sub_str($this->_var['goods_item']['short_name'],8); ?></a></span><span class="price yen red"><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span></div>
      <div class="extra">
        <div class="img c"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><img data-src="<?php echo $this->_var['goods_item']['thumb']; ?>" src="<?php echo $this->_var['goods_item']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" height="106" width="160"></a></div>
        <div class="info c"> 本站价：<span class="red yen"><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span> <span class="gray">销量：</span><span class="orange"><?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods_item][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><?php echo $this->_var['goods_data']['total_sells']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span> </div>
      </div>
    </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<script>
var _currentRankId = 0;
function setRankCurrent(j) {
	if (!j) {
		j = 0;
	}
	if (j == _currentRankId) {
		return;
	}
	var h = $("#JS_left_rank_" + j);
	var i = $("#JS_left_rank_" + _currentRankId);
	if (h && i) {
		var c = h.find("span").eq(1);
		var g = i.find("span").eq(1);
		if (c && g) {
			var b = c.find("a").eq(0);
			var e = g.find("a").eq(0);
			if (b && e) {
				
			}
		}
		h.addClass("current");
		i.removeClass("current");
		_currentRankId = j;
	}
}
</script>

	
    <div class="comment mt10">
      <div class="title_1"><span class="icon"></span><span class="zh">本月新品</span></div>
      <?php $_from = get_cat_new_goods_10(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['best_goods']['iteration']++;
?>
      <div class="list clearfix <?php if ($this->_foreach['best_goods']['iteration'] == 1): ?>first<?php endif; ?><?php if (($this->_foreach['best_goods']['iteration'] == $this->_foreach['best_goods']['total'])): ?>last<?php endif; ?>">
        <div class="Left"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><img width="96" height="64" src="<?php echo $this->_var['goods_item']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" /></a></div>
        <div class="Right"> <a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_item']['short_name']); ?></a>
          <p class="gray">本站价：<span class="red yen"></span><span class="red JS_show_price_ajax" data-goods_id=""><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span></p>
        </div>
      </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
	
	
    <div class="mt10" id="JS_adimg_rand"></div>
  </div>
</div>

<?php echo $this->fetch('library/goods_history.lbi'); ?>
<script type="text/javascript">
var _fixture_url = [];

var _fixture_bbs=[];
</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>




<script src="themes/meilele/js/back_to_top.min.js?1127"></script>
<script src="themes/meilele/js/category_wide_b.min.js?1127"></script>
<script type="text/javascript">

var CG = CG || {};
	CG.priceUrl = '';
	var _basic_url = '';

	CG.cat_id = 268;
	new TabMouseover('JS_fixture_tag','fixture_show',0);

</script>
<script type="text/javascript">
(function(){
	$('#JS_more_link_g_new').click(function(){
		var item =$(this),span=$('#JS_more'),arrow=$('#JS_more_arrow'),show_div=$('#JS_show_more');
		if( item.data('link') == 'more'){
			item.data('link','reduce');
			span.html('收起');
			arrow[0].className="arrow_up";
			show_div.show();
		}else{
			item.data('link','more');
			span.html('更多');
			arrow[0].className="arrow_down";
			show_div.hide();
		}
	});

var select_div=$('#JS_new_pro_select');
	$('#JS_new_select').mouseenter(function(){
		select_div.show();
	}).mouseleave(function(){
		select_div.hide();
	});
})();

</script>
<script type="text/javascript" src="themes/meilele/js/viewHistory.min.js?0917"></script>



</body>
</html>


<?php else: ?>



<!DOCTYPE HTML>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css?1203v" />
<style type="text/css">
.firstScreen{height:420px}.allJJClass{width:205px;height:506px;margin-right:5px}.allJJClass .in{width:203px;height:506px;border:solid 1px #ddd;background:#fff}
.allJJClass .fixedLay{position:fixed;top:0;z-index:10;_position:absolute;_top:expression(offsetParent.scrollTop);_right:expression(this.offsetRight)}.allJJClass .head{height:39px;line-height:39px;text-align:center;border-bottom:solid 1px #ddd;background:#f2f2f2;font-size:18px;font-family:微软雅黑}
.allJJClass .body{height:466px}.allJJClass .catItem{position:relative}.allJJClass .catItem.cat_bg{background:#f7f1f1}.allJJClass .catItem .item_show{position:absolute;z-index:2;padding:8px 10px}
.allJJClass .catItem .item_show .dt{height:24px;line-height:24px}.allJJClass .catItem .item_show .dt .t{display:inline-block;font-weight:bold;font-size:14px;font-family:微软雅黑;float:left}
.allJJClass .catItem .item_show .dt .t img{margin-right:10px;vertical-align:middle;background:0;border:0}.allJJClass .catItem .item_show .dt .arrow{color:#b0b0b0;float:right}
.allJJClass .catItem .item_show .dd{margin-top:4px;overflow:hidden}.allJJClass .catItem.h80{height:80px}.allJJClass .catItem.h80 .item_show{height:64px}
.allJJClass .catItem.h80 .item_show .dd{height:36px;line-height:18px}.allJJClass .catItem.h66{height:66px}.allJJClass .catItem.h66 .item_show{height:50px}
.allJJClass .catItem.h66 .item_show .dd{height:22px;line-height:22px}.allJJClass .catItem .item_hide{width:770px;border:solid 1px #bcbcbc;box-shadow:1px 1px 8px #999;background:#fff;position:absolute;z-index:1;left:203px;top:0;display:none}
.allJJClass .catItem .item_hide .topMap .subCat{width:490px;float:left}.allJJClass .catItem .item_hide .topMap .subCat .col{width:245px;float:left}.allJJClass .catItem .item_hide .topMap .subCat .item{width:220px;padding:20px 0 0 25px;float:left}
.allJJClass .catItem .item_hide .topMap .subCat .item .dt{padding-bottom:3px;border-bottom:solid 2px #333;font-weight:bold;font-size:14px;font-family:微软雅黑}
.allJJClass .catItem .item_hide .topMap .subCat .item .dd{margin-top:10px;line-height:20px;color:#e4e4e4;overflow:hidden}.allJJClass .catItem .item_hide .topMap .subCat .item .dd a{color:#656565}
.allJJClass .catItem .item_hide .topMap .ad{width:250px;height:370px;margin:20px 0;padding-left:10px;border-left:dotted 1px #e3e3e3;overflow:hidden;float:right}
.allJJClass .catItem .item_hide .bottomMap{height:88px;background:#f9f9f9;border-top:solid 1px #f2f2f2}.allJJClass .catItem .item_hide .bottomMap .brand{height:72px;padding:8px 0}
.allJJClass .catItem .item_hide .bottomMap .brand .li{width:85px;height:72px;padding:0 21px;border-left:dashed 1px #e8e8e8;text-align:center;float:left}
.allJJClass .catItem .item_hide .bottomMap .brand .li.first{border-left:none}.allJJClass .catItem .item_hide .bottomMap .brand a{display:block}.allJJClass .catItem .item_hide .bottomMap .brand .img{height:50px;overflow:hidden}
.allJJClass .catItem .item_hide .bottomMap .brand .name{height:22px;line-height:22px;font-size:14px;font-family:微软雅黑;color:#848482;font-weight:bold}.allJJClass .catItem .item_hide.hide1{top:-41px}
.allJJClass .catItem .item_hide.hide2{top:-121px}.allJJClass .catItem .item_hide.hide3{top:-201px}.allJJClass .catItem .item_hide.hide4{top:-281px}.allJJClass .catItem .item_hide.hide5{top:-314px}
.allJJClass .catItem .item_hide.hide6{top:-395px}.allJJClass .catItem.hover .item_show{width:180px;padding:7px 10px;background:#fff;border-left:solid 4px #d52a50;border-top:solid 1px #bcbcbc;border-bottom:solid 1px #bcbcbc;z-index:3}
.allJJClass .catItem.hover .item_show .dt .t2{background-position:0 -57px}.allJJClass .catItem.hover .item_show .dt .t4{background-position:0 -105px}.allJJClass .catItem.hover .item_show .dt .t6{background-position:0 -153px}
.allJJClass .catItem.hover .item_show .t{color:#d52a50}.allJJClass .catItem.hover .item_show .arrow{display:none}.allJJClass .catItem.hover .item_hide{display:block}
.ftsMain{width:980px;height:420px}.ftsMain .slide,.ftsMain .slide .stage{width:980px;height:410px;overflow:hidden}.ftsMain .slide .slideNav{width:770px;height:30px;overflow:hidden;position:absolute;margin-top:-30px}
.ftsMain .slide .slideNav a{display:inline-block;width:153px;height:30px;line-height:30px;overflow:hidden;vertical-align:top;margin-left:1px;background:#071c28;color:#fff;text-decoration:none;text-align:center;opacity:.9;filter:alpha(opacity=90)}
.ftsMain .slide .slideNav a:hover,.ftsMain .slide .slideNav .current{background:#a93a64;color:#fff!important}.ftsMain .slide .slideNav a.first{margin-left:0;width:154px}
.ftsMain .brand{height:81px;border:solid 1px #e7e7e7;margin-top:15px}.ftsMain .brand .list{width:127px;height:76px;padding-top:5px;overflow:hidden;float:left;text-align:center;border-left:solid 1px #e7e7e7}
.ftsMain .brand .list.first{border-left:none}.ftsMain .brand .list .blogo{height:50px;overflow:hidden}.ftsMain .brand .list .blogo a{display:block;width:100%;height:100%;background-position:0 0}
.ftsMain .brand .list .blogo a:hover{background-position:0 -50px}.ftsMain .brand .list .desc{margin-top:5px}.ftsMain .brand .list .desc a{color:#666}.ftsMain .brand .list.hover .desc a{color:#343434}
.ftsMain .brand .more{width:75px;height:45px;padding:18px 26px 18px;border-left:solid 1px #e7e7e7;float:right}.ftSlde{width:205px;height:420px;overflow:hidden;float:right;display:none}
.ftSlde .ttPrice{height:200px;border:solid 1px #ddd}.ftSlde .ttPrice .head{height:20px;padding:5px 17px 0}.ftSlde .ttPrice .head .name{display:inline-block;line-height:20px;font-size:16px;font-family:微软雅黑;color:#da2b52;float:left}
.ftSlde .ttPrice .head .slideNav{height:8px;margin-top:10px;float:right}.ftSlde .ttPrice .head .slideNav a{display:inline-block;width:8px;height:8px;overflow:hidden;border-radius:8px;background:#afafaf;vertical-align:top;margin-left:5px}
.ftSlde .ttPrice .head .slideNav .current{background:#da2b52}.ftSlde .ttPrice .slide{height:160px;margin-top:5px}.ftSlde .ttPrice .slide .stage{width:171px;height:180px;overflow:hidden}
.ftSlde .ttPrice .slide .stage .list{height:269px}.ftSlde .ttPrice .slide .stage .list .img{height:114px;overflow:hidden}.ftSlde .ttPrice .slide .stage .list p{overflow:hidden}
.ftSlde .ttPrice .slide .stage .list .price{padding-top:5px;padding-bottom:0px;color:#999}.ftSlde .ttPrice .slide .stage .list .price .b{font-size:18px;color:#c90d11;font-family:Arial}
.ftSlde .ttPrice .slide .arrow{display:inline-block;width:16px;height:24px;overflow:hidden;background:url(themes/meilele/images/bg.png) no-repeat;margin-top:48px}
.ftSlde .ttPrice .slide .arrowPrev{background-position:0 -176px;float:left}.ftSlde .ttPrice .slide .arrowPrev:hover{background-position:-16px -176px}.ftSlde .ttPrice .slide .arrowNext{background-position:-32px -176px;float:right}
.ftSlde .ttPrice .slide .arrowNext:hover{background-position:-48px -176px}.ftSlde .groupBuy{width:180px;height:198px;padding:0 11px 0 12px;border:solid 1px #ddd;overflow:hidden;margin-top:10px}
.ftSlde .groupBuy .head{height:22px;line-height:22px;padding:2px 0}.ftSlde .groupBuy .head .name{font-size:16px;font-family:微软雅黑;float:left}.ftSlde .groupBuy .head .more{color:#666;float:right}
.ftSlde .groupBuy .img{height:100px;overflow:hidden}.ftSlde .groupBuy .tit{height:10px;line-height:20px;/*margin-top:5px*/}.ftSlde .groupBuy .gbg{height:23px;line-height:23px;padding:5px 7px 5px 10px;overflow:hidden;background:url(themes/meilele/images/bg.png) 0 0 no-repeat;/*margin-top:5px*/}
.ftSlde .groupBuy .gbg .pr{font-size:18px;color:#fff;font-family:Arial;float:left}.ftSlde .groupBuy .gbg .go{display:inline-block;width:57px;height:23px;text-align:center;color:#000;float:right;font-size:14px;line-height:23px}
.ftSlde .groupBuy .price{margin-top:5px;color:#787878}.ftSlde .groupBuy .price .num{font-size:18px;color:#c90d11;font-family:Arial}.sameMoudle{margin-top:30px}
.sameMoudle .sHead{height:24px}.sameMoudle .sHead .cn,.sameMoudle .sHead .en{display:inline-block;float:left}.sameMoudle .sHead .cn{line-height:24px;font-size:20px;color:#333;font-family:微软雅黑}
.sameMoudle .sHead .en{font-family:Arial;color:#c90d11;padding-left:5px;margin-top:8px}.sameMoudle .sHead .key{height:18px;line-height:18px;float:left;padding-left:35px;margin-top:6px;color:#999}
.sameMoudle .sHead .key a{color:#545454}.sameMoudle .sHead .more{display:inline-block;line-height:24px;padding-right:20px;background:url(themes/meilele/images/bg.png) right -177px no-repeat;color:#666;float:right}
.sameMoudle .sLine{height:2px;background:#333;margin-top:5px;overflow:hidden}.sameMoudle .sBody{margin-top:5px}.goodsOffer .sBody{height:360px;overflow:hidden}
.goodsOffer .cell1{width:280px;height:360px;overflow:hidden}.goodsOffer .cell1 .td{height:180px;overflow:hidden}.goodsOffer .cell2{width:620px;height:360px;overflow:hidden}
.hotSaleRank .sBody{height:340px;border:solid 1px #ddd;overflow:hidden}.hotSaleRank .stage{width:690px;height:332px;padding:4px;float:left}.hotSaleRank .stage .in{height:332px;overflow:hidden}
.hotSaleRank .stage .t{display:inline-block;height:40px;line-height:40px;padding:0 15px;border-bottom-right-radius:6px;background:#c90d11;color:#fff;font-size:20px;font-family:Arial;position:absolute;margin:-5px 0 0 -5px}
.hotSaleRank .stage .list{height:332px;overflow:hidden}.hotSaleRank .thumbMap{width:480px;height:340px;float:right}.hotSaleRank .thumbMap .list{width:200px;height:138px;padding:20px 15px 12px 14px;border-left:solid 1px #ddd;float:left}
.hotSaleRank .thumbMap .list .t{display:inline-block;height:16px;line-height:16px;padding:0 8px;border-bottom-right-radius:4px;background:#c90d11;color:#fff;font-size:10px;position:absolute;margin-top:-21px;margin-left:-14px;font-family:微软雅黑}
.hotSaleRank .thumbMap .list .img{height:73px;overflow:hidden}.hotSaleRank .thumbMap .list .price{color:#c90d11;font-size:14px;margin-top:8px}.hotSaleRank .thumbMap .list .yen{font-family:微软雅黑}
.hotSaleRank .thumbMap .list .num{font-family:Arial}.hotSaleRank .thumbMap .list .desc{height:36px;line-height:18px;margin-top:2px;overflow:hidden}.hotSaleRank .thumbMap .list .desc a{color:#545454}
.hotSaleRank .thumbMap .list.bt{height:137px;border-top:solid 1px #ddd}.styleRepeat .sBody{height:594px;overflow:hidden}.styleRepeat .sLine{border-left:solid 170px #c90d11}
.styleRepeat .map1{height:342px;overflow:hidden}.styleRepeat .map1 .slide,.styleRepeat .map1 .slide .stage{width:700px;height:342px;overflow:hidden}.styleRepeat .map1 .slide .nav{width:680px;height:16px;text-align:right;position:absolute;margin-top:-30px;overflow:hidden}
.styleRepeat .map1 .slide .nav a{display:inline-block;width:16px;height:16px;line-height:16px;border-radius:16px;text-align:center;background:#fff;text-decoration:none;margin-left:5px}
.styleRepeat .map1 .slide .nav .current{background:#c90d11;color:#fff!important}.styleRepeat .map1 .sideAd{width:279px;height:342px;overflow:hidden}.styleRepeat .map2{height:240px;margin-top:12px}
.styleRepeat .map2 .list{width:230px;height:240px;padding-left:20px;float:left}.styleRepeat .map2 .list.first{padding-left:0}.styleRepeat .map2 .list .img{height:153px;overflow:hidden}
.styleRepeat .map2 .list .pr{font-size:16px;color:#c90d11;font-family:Arial;margin-top:10px;font-weight:bold}.styleRepeat .map2 .list .tt{height:20px;line-height:20px;margin-top:8px;overflow:hidden}
.styleRepeat .map2 .list .tj{color:#999;margin-top:5px}.screen-root .ftSlde{display:block}.screen-root .sameMoudle{width:980px;float:right}
/*czc:2013-09-24 15:12:45*/
</style>
<style type="text/css">
/*v0410-leihao*/.comMap{width:978px;border:solid 1px #ddd}.comMap .mapItem{border-left:solid 1px #ddd;overflow:hidden}.comMap .mapItem .title{height:34px;padding:0 15px;border-bottom:solid 1px #ddd;background:#f9f9f9}.comMap .mapItem .title strong,.comMap .mapItem .title span,.comMap .mapItem .title a{display:inline-block;line-height:34px}.comMap .mapItem .title strong{font-size:15px;font-family:"微软雅黑";color:#333}.comMap .mapItem .title span{padding-left:5px;color:#787878}.comMap .mapItem .title a{color:#999;cursor:pointer}.comMap .mapItem .body{padding:20px 18px}.comMap .first{border-left:none}.comMap .cuxiao{width:324px;height:344px}.comMap .cuxiao .ad{height:132px;padding-bottom:15px;border-bottom:dashed 1px #dadada;overflow:hidden}.comMap .cuxiao ul{height:auto;margin-top:6px}.comMap .cuxiao ul li{width:288px;height:23px;line-height:23px;color:#999;overflow:hidden;white-space:nowrap;-o-text-overflow:ellipsis;text-overflow:ellipsis}.comMap .cuxiao ul li a{color:#666}.comMap .moveLay{height:344px}.comMap .moveLay .body{padding:12px 18px}.comMap .moveLay .outBox{height:285px;overflow:hidden}.comMap .moveLay .list{height:79px;padding:8px 0;overflow:hidden}.comMap .moveLay .list .img{width:119px;overflow:hidden;float:left;margin-right:12px}.comMap .reping{width:332px}.comMap .reping .list p{height:54px;line-height:18px;overflow:hidden;color:#666}.comMap .reping .list p a{color:#666}.comMap .reping .list .star{height:9px}.comMap .reping .list .star .bg{width:55px;height:9px;overflow:hidden;background:url(themes/meilele/images/weibo_bg.png) -124px 0 no-repeat}.comMap .reping .list .star span{display:inline-block;height:9px;overflow:hidden;vertical-align:top;background:url(themes/meilele/images/weibo_bg.png) -124px -9px no-repeat}.comMap .reping .list .star .w1{width:11px}.comMap .reping .list .star .w2{width:22px}.comMap .reping .list .star .w3{width:33px}.comMap .reping .list .star .w4{width:44px}.comMap .reping .list .star .w5{width:55px}.comMap .reping .list .uname{height:16px;line-height:16px;color:#f0670d}.comMap .chengjiao{width:320px}.comMap .chengjiao .list p{height:18px;line-height:18px;overflow:hidden}.comMap .chengjiao .list .name a{color:#666}.comMap .chengjiao .list .price{color:#c20000}.comMap .chengjiao .list .uname{color:#f0670d;margin-top:6px}.comMap .chengjiao .list .time{color:#999}.comMap .loading{height:16px;text-align:center;margin-top:100px}.comMap .mapLeft{width:324px}.comMap .chuangyi{overflow:hidden}.comMap .chuangyi .body{padding:20px 18px 18px}.comMap .chuangyi .notes{height:83px;overflow:hidden}.comMap .chuangyi .notes .img{width:124px;height:83px;overflow:hidden;float:left;margin-right:15px}.comMap .chuangyi .notes h4{height:20px;line-height:20px;font-size:12px;color:#666;overflow:hidden}.comMap .chuangyi .notes h4 a{color:#666}.comMap .chuangyi .notes p{height:54px;line-height:18px;color:#787878;text-indent:2em;margin-top:5px;overflow:hidden}.comMap .chuangyi ul{padding-top:6px}.comMap .chuangyi ul li{width:288px;height:18px;line-height:18px;margin-top:8px;color:#666;overflow:hidden;overflow:hidden;white-space:nowrap;-o-text-overflow:ellipsis;text-overflow:ellipsis}.comMap .chuangyi ul li a{color:#666}.comMap .xiujia{width:653px}.comMap .xiujia .tNav{height:12px;margin-top:11px;float:right}.comMap .xiujia .tNav a{display:inline-block;width:10px;height:10px;overflow:hidden;background:#d9d9d9;border-radius:10px;vertical-align:top;margin-right:5px}.comMap .xiujia .tNav a:hover,.comMap .xiujia .tNav .current{background:#ea7070}.comMap .xiujia .body{height:270px;padding:20px 19px}.comMap .xiujia .stage{width:615px;height:272px;overflow:hidden}.comMap .xiujia .list{width:167px;height:256px;padding:8px;background:url(themes/meilele/images/xspace_bg.jpg) top center no-repeat;margin-left:33px}.comMap .xiujia .list.first{margin-left:0}.comMap .xiujia .list .img{height:200px;overflow:hidden}.comMap .xiujia .list .txt{height:36px;line-height:18px;padding-top:10px;overflow:hidden;color:#666}.comMap .xiujia .list .txt a{color:#666}.screen-root .comMap{float:right}
</style>
<script src="themes/meilele/js/jq.js"></script>
<script src="themes/meilele/js/common.min.js?0905"></script>

<script type="text/javascript">var show_type=0</script>
</head>
<body id="root_body">
<script type="text/javascript">(function(){var screenWidth=window.screen.width;if(screenWidth>=1280){document.body.className="screen-root root_body";window.ISFIXED=true;}})()</script>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="w firstScreen clearfix">






<div class="ftsMain Left">
  <div class="slide" id="JS_focus_locker">
    <div class="stage">
      <table id="JS_focus_table">
        <tr>
		<?php $_from = get_top_cat_flash_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
          <td><a title="<?php echo $this->_var['ad']['name']; ?>" href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="first current"><img src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" width="980" height="410" /></a></td>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </tr>
      </table>
    </div>
    <div class="slideNav" id="JS_focus_nav"><?php $_from = get_top_cat_flash_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['name']; ?>" target="_blank" class="<?php if ($this->_foreach['index_image']['iteration'] == 1): ?>first current<?php endif; ?>"><?php echo $this->_var['ad']['name']; ?><br />
      <strong>&emsp;</strong></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
  </div>
<!--  <ul id="JS_brand_exchange" class="brand">
  <?php $_from = get_top_cat_brand_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
    <li class="list <?php if ($this->_foreach['index_image']['iteration'] == 1): ?>first<?php endif; ?>">
      <div class="blogo"><a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['title']; ?>" target="_blank" style="background-image:url(<?php echo $this->_var['ad']['image']; ?>)"></a></div>
      <p class="desc"><a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['title']; ?>" target="_blank" class="first"><?php echo $this->_var['ad']['title']; ?></a></p>
    </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
    
    <li class="more"><a href="brand.html" target="_blank" title="更多品牌"><img src="themes/meilele/images/more.gif" width="75" height="45" alt="更多品牌" /></a></li>
  </ul>-->
</div>


<div class="ftSlde">
  <div class="ttPrice">
    <div class="head"><span class="name">今日特价</span>
      <div id="JS_side_tejia_nav" class="slideNav"><?php $_from = get_cat_promote_goods_2($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['get_cat_promote_goods_2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_promote_goods_2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['get_cat_promote_goods_2']['iteration']++;
?><a href="javascript:;" <?php if ($this->_foreach['get_cat_promote_goods_2']['iteration'] == 1): ?>class="current"<?php endif; ?>></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
    </div>
    <div class="slide"> <a id="JS_slide_prev" href="javascript:void(0);" class="arrow arrowPrev"></a>
      <div class="stage Left">
        <table id="JS_side_tejia_stage">
          <tr>
		  <?php $_from = get_cat_promote_goods_2($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['get_cat_promote_goods_2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_promote_goods_2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['get_cat_promote_goods_2']['iteration']++;
?>
            <td><div class="list">
                <div class="img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="171" height="114" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
                <p class="price">特价：<strong class="b"><?php echo $this->_var['goods']['promote_price']; ?></strong></p>
                <p><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo sub_str($this->_var['goods']['short_name'],12); ?></a></p>
              </div></td>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
          </tr>
        </table>
      </div>
      <a id="JS_slide_next" href="javascript:void(0);" class="arrow arrowNext"></a> </div>
  </div>
  <div class="groupBuy clearfix">
  
    <div class="head"><span class="name">团购</span><a href="group_buy.html" target="_blank" title="更多" class="more">更多>></a></div>
	<?php $_from = group_buy_list_ex(1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['gb_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gb_list']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy']):
        $this->_foreach['gb_list']['iteration']++;
?>
    <div class="img"><a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" title="<?php echo $this->_var['group_buy']['goods_name']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" width="180" height="120" alt="<?php echo $this->_var['group_buy']['goods_name']; ?>" /></a></div>
    <p class="tit"><a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" title="<?php echo $this->_var['group_buy']['goods_name']; ?>"><?php echo $this->_var['group_buy']['short_name']; ?></a></p>
    <p class="gbg"><strong class="pr"><?php echo $this->_var['group_buy']['cur_price']; ?></strong><a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" title="去看看" class="go">去看看</a></p>
    <p class="price">原价：<del class="yen"><?php echo $this->_var['group_buy']['market_price']; ?></del>&emsp;折扣：<strong class="num"><?php echo $this->_var['group_buy']['save_rate']; ?></strong>折</p>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
  </div>
</div>
</div>


<div class="w clearfix" style="display:none">
  <div class="sameMoudle goodsOffer">
    <div class="sHead"> <strong class="cn">新品推荐</strong> <strong class="en">NEW</strong> <a href="search_list_new.html" target="_blank" title="更多新品" class="more">更多新品</a> </div>
    <div class="sLine"></div>
    <div class="sBody">
      <div class="cell1 Left">
	  <?php $_from = get_top_cat_new_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	  <?php if ($this->_foreach['index_image']['iteration'] < 3): ?>
        <div class="td"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['ad']['image']; ?>" width="280" height="180" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
	  <?php endif; ?>		
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
        
      </div>
	  <?php $_from = get_top_cat_new_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	  <?php if ($this->_foreach['index_image']['iteration'] == 3): ?>
      <div class="cell2 Left"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['ad']['image']; ?>" width="620" height="360" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
	  <?php endif; ?>		
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <div class="cell1 Right">
        <?php $_from = get_top_cat_new_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	  <?php if ($this->_foreach['index_image']['iteration'] > 3): ?>
        <div class="td"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['ad']['image']; ?>" width="280" height="180" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
	  <?php endif; ?>		
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
</div>



<div class="w clearfix" style="display:none">
  <div class="sameMoudle hotSaleRank">
    <div class="sHead"> <strong class="cn">热卖排行</strong> <strong class="en">HOT</strong> <a href="search_list_hot.html" target="_blank" title="分类热卖排行榜" class="more">分类热卖排行榜</a> </div>
    <div class="sLine"></div>
    <div class="sBody">
      <div class="stage">
        <div class="in"> <strong id="JS_slide_hot_sale_num" class="t">TOP1</strong>
          <table id="JS_slide_hot_sale_stage">
		  <?php $_from = get_top_cat_hot_advlist_by_cat_id($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
            <tr>
              <td><div class="list"><a title="<?php echo $this->_var['ad']['name']; ?>" target="_blank" href="<?php echo $this->_var['ad']['url']; ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" width="700" height="332" /></a></div></td>
            </tr>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
           
          </table>
        </div>
      </div>
      <ul id="JS_slide_hot_sale_thumb" class="thumbMap">
	  <?php $_from = get_cat_hot_goods_4($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
        <li class="list <?php if ($this->_foreach['hot_goods']['iteration'] > 2): ?>bt<?php endif; ?>"> <span class="t">TOP<?php echo $this->_foreach['hot_goods']['iteration']; ?></span>
          <div class="img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['goods']['thumb']; ?>" width="110" height="73" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
          <p class="price"><strong class="yen"></strong><span class="num"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></p>
          <p class="desc"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo sub_str($this->_var['goods']['short_name'],12); ?></a></p>
        </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 		
       
      </ul>
    </div>
  </div>
</div>





<style>

	.screen-root .sameMoudle {width: auto; float: none;} /* 改版后清掉原来的 .sameMoudle 的样式作用 */
	.sameMoudle {margin-top: 10px;}

	.m-navton{margin:10px auto;overflow:hidden;background:#FFF;border:1px solid #eaeceb;}

	.m-navton-l{float:left;width:577px;}
	/*.w .m-navton{width:950px;}
	.w .m-navton-l{width:474px;}*/
	.w .m-navton-l{width:580px;}
	.w .m-navton-r{width:580px;}
	.cl {clear: both;}

	#m-navton-c{float:left;width:1px;background-color:#eaeceb;}
	.m-navton-r{float:right;width:595px;}

	.m-navton-l dl,.m-navton-l dl,.m-navton-r dl,.m-navton-r dl{margin:8px 0 8px 0;}
	.m-navton-l dt,.m-navton-r dt{float:left;width:60px;font-weight:600;padding-left:10px;}
	.m-navton-l dd,.m-navton-r dd{float:left;width:505px;}
	.w .m-navton-l dd,.w .m-navton-r dd{float:left;width:394px;}
	.m-navton-l dd a,.m-navton-r dd a{display:inline-block;/*margin:0 25px 0 0;*/width: 60px;overflow:hidden;padding-bottom:5px;}
	.m-navton-l .curr,.m-navton-r .curr{color:#E0061E;font-weight:bold;}
</style>


<div class="w clearfix  m-navton">


	
	<div class="m-navton-l  ">

		<?php $_from = get_child_cat($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['child_cat']['iteration']++;
?>
		<?php if ($this->_foreach['child_cat']['iteration'] <= 4): ?>
		<dl class="cl">

			<dt><?php echo $this->_var['cat']['name']; ?>:</dt>
			<dd>
				<?php $_from = get_child_cat($GLOBALS[smarty]->_var[cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat2');$this->_foreach['child_cat2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat2']['total'] > 0):
    foreach ($_from AS $this->_var['cat2']):
        $this->_foreach['child_cat2']['iteration']++;
?>
				<a href="category.php?id=<?php echo $this->_var['cat2']['id']; ?>" title="<?php echo $this->_var['cat2']['name']; ?>"><?php echo $this->_var['cat2']['name']; ?></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</dd>

		</dl>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</div>


	<div style="height: 155px;" id="m-navton-c"></div>


	
	<div class="m-navton-r">

		<?php $_from = get_child_cat($GLOBALS[smarty]->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['child_cat']['iteration']++;
?>

		<?php if ($this->_foreach['child_cat']['iteration'] > 4): ?>
		<dl class="cl">

			<dt><?php echo $this->_var['cat']['name']; ?>:</dt>
			<dd>
				<?php $_from = get_child_cat($GLOBALS[smarty]->_var[cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat2');$this->_foreach['child_cat2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat2']['total'] > 0):
    foreach ($_from AS $this->_var['cat2']):
        $this->_foreach['child_cat2']['iteration']++;
?>
				<a href="category.php?id=<?php echo $this->_var['cat2']['id']; ?>" title="<?php echo $this->_var['cat2']['name']; ?>"><?php echo $this->_var['cat2']['name']; ?></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</dd>

		</dl>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</div>


</div>





<style>
	.g-box{width:1190px;margin:0 auto;position:relative;}

	.g-goods{padding:0 70px;background:#FFF;overflow:hidden;display:block;position:relative;border-bottom:1px solid #eee;}
	.m-goods,.m-goods-eyeglass{position:relative;margin: 40px 35px 75px 25px;width: 235px;/*margin:40px 46px 25px 46px;padding:10px 0;width:300px;*/ float:left;text-align:center;border:1px solid #fff;}
	.m-goods.on,.m-goods-eyeglass.on{border-color:#ddd;z-index:2;box-shadow:1px 2px 2px rgba(0,0,0,.1);}
	.w .m-goods,.w .m-goods-eyeglass{margin:10px 6px;}
	.m-goods em,.m-goods-eyeglass em{color:#E0061E;}
	.u-goods-color{height:20px;}
	.u-goods-color li{display:inline-block;*display:inline;*zoom:1;width:13px;height:13px;padding:0;cursor:pointer;border:1px #EEE solid;margin-left:5px;}
	.m-goods-img{width:300px;height:119px;overflow:hidden;display:table-cell;vertical-align:middle;*display:block;*font-size:105px;font-family:Arial;}
	.m-goods-eyeglass .m-goods-img{height:152px;*font-size:133px;}
	.m-search-lst .m-goods-img{height:152px;*font-size:133px;}
	.m-goods-img img{width:100%;*vertical-align:top;}
	.m-goods-eyeglass .m-goods-img img{height:auto;}
	.m-goods-img:hover img{opacity:.8;filter:alpha(opacity=80);}

	.g-goods-hd{border-bottom:2px solid #000;}
	.g-goods-hd li{float:left;width:75px;height:27px;line-height:27px;text-align:center;border-left:1px solid #ddd;border-top:1px solid #ddd;position:relative;z-index:9;}
	.g-goods-hd li a.on{background-color:#e0061e;color:#fff;width:75px;height:27px;display:block;}
	.g-goods-hd .btn-down{border:1px solid #ddd;background-color:#fff;width:10px;height:15px;position:absolute;top:6px;}
	.g-goods-hd .borderR{border-right:1px solid #ddd;}
	.g-goods-hd .tips{position:relative;left:0;top:0;zoom:1;margin-left:-1px;background-color:#fff;border:1px solid #ddd;z-index:999;width:75px;height:54px;display:none;}
	.g-goods-hd .tips-item{display:block;height:27px;border:none;zoom:1;}
	.g-goods-hd .tips-item:hover{background-color:#eee;cursor:pointer;}

	.ico-up{width:6px;height:4px;background-position:-63px -26px;position:absolute;left:2px;top:5px;}
	.ico-down{width:6px;height:4px;background-position:-70px -26px;position:absolute;left:2px;top:5px;}

	.list-goods-box{position:absolute;top:100%;left:-1px;padding:15px 0;width:100%;border:1px solid #ddd;background:#eee;z-index:2;display:none;box-shadow:1px 2px 2px rgba(0,0,0,.1);}
	.list-goods-button{margin-top:5px;}
	.list-goods-button a{display:inline-block;*display:inline;*zoom:1;margin:1px;*margin-top:0;width:80px;padding:2px;border:1px solid #ccc;background:#fff;line-height:20px;color:#333;cursor:pointer;}
	.list-goods-button a.btn-buy{background-color:red;color:#fff;}
	.list-goods-button i{display:inline-block;*display:inline;*zoom:1;margin-top:2px;width:15px;height:15px;background:url(../../../images/spirit.png) -210px -85px;vertical-align:text-bottom;}

	.g-pagebar{background:#FFF;padding:30px 0;text-align:center;}
	.pagebar,.pagebar_last{display:inline-block;*display:inline;*zoom:1;height:25px;line-height:25px;vertical-align:middle;}
	.pagebar{text-align:center;}
	.pagebar_last{*margin-top:10px;}
	.pagebar_last .pagebar_last_text{height:15px;width:20px;border:1px solid #C8C8C8;margin:0;}
	.pagebar_last .pagebar_last_button{height:20px;width:43px;border:1px solid #000;margin:0 5px;background-color:#000;color:#fff;}
	.pagebar img{position:relative;top:2px;}
	.pagebar .next_bg{position:absolute;top:-11px;right:18px;background:url(../../../images/spirit.png) -180px -60px;height:10px;width:60px;overflow:hidden;}
	.pagebar a{display:block;float:left;color:#7d8488;text-decoration:none;}
	.pagebar a:hover{color:#0091db;text-decoration:none;}
	.pagebar .page_now{display:block;float:left;color:#fff;width:25px;height:25px;line-height:25px;font-weight:bold;background:#000;border-left:0;margin:0 2px;}
	#pager a{color:#6e6e6e;text-decoration:none;height:25px;width:25px;text-align:center;line-height:25px;border-left:0;margin:0 5px;border:none;font-size:14px;}
	#pager a.prev,#pager a.next{width:10px;height:10px;border:1px solid #ddd;padding:0 2px 2px 0;margin-top:7px;}
	#pager a.next{width:10px;position:relative;}
	#pager a.last{width:100px;background:#eee;}
	#pager .arrow{display:block;float:right;width:23px;height:23px;}
	.g-pagebar form{float:right;}
	.list-goods-io{color:red;font-size:20px;padding-left:5px;cursor:pointer;}
	.goods-state{position:absolute;top:0;right:22px;z-index:1;padding:2px 6px;color:#fff;font-family:"Microsoft YaHei"!important;font-size:12px;}
	.goods-state-new{background:#c29961;}
	.goods-state-hot{background:#f00;}

</style>



<div class="g-box g-goods">
	<ul class="g-goods-hd clearfix">
		<li><a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['page']; ?>" class="">综合排序</a></li>
		<!-- <li><a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['page']; ?>">销量</a></li> -->
		<li><a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['page']; ?>&sort=last_update" class="on">新品</a></li>
		<li class="borderR goods-prices">价格&nbsp;
			<ul style="display: none;" class="tips">
				<li class="tips-item"><a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['page']; ?>&sort=shop_price&order=desc">从高到低</a></li>
				<li class="tips-item"><a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['page']; ?>&sort=shop_price&order=asc">从低到高</a></li>
			</ul>
		</li>
	</ul>



	<?php $_from = $this->_var['goods_list1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_new'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_new']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_new']['iteration']++;
?>
	<div class="m-goods">

		<!--<div class="goods-state goods-state-new"><?php echo $this->_var['goods']['goods_status']; ?></div>-->

		<a class="m-goods-img" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">

			
			

			<img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="237" height="180" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
		</a>





		<ul class="u-goods-color cl">
            <?php if ($this->_var['goods']['goods_color']): ?>
			<?php $_from = $this->_var['goods']['goods_color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'color');if (count($_from)):
    foreach ($_from AS $this->_var['color']):
?>
				<li title="<?php echo $this->_var['color']['goods_name']; ?>" style="background:<?php echo $this->_var['color']['color']; ?>" data-img="<?php echo $this->_var['color']['img']; ?>"></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php else: ?>
                <li title="白色" style="background:white" ></li>
            <?php endif; ?>
		</ul>
		<p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></p>
		<p>TianMing价：<?php echo $this->_var['goods']['shop_price']; ?> &nbsp;&nbsp;<strike style="color:grey;">市场价：<?php echo $this->_var['goods']['market_price']; ?></strike></p>

		<div class="list-goods-box">
			
			<p>已售：<?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods][goods_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><?php echo $this->_var['goods_data']['total_sells']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&nbsp;副<a href="javascript:collect( <?php echo $this->_var['goods']['goods_id']; ?> );" class="list-goods-io" title="点击收藏" data-goodsid="<?php echo $this->_var['goods']['goods_id']; ?>">♥</a></p>
			<div class="list-goods-button">
				<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="btn-buy">立即购买</a>
				<a class="new_appoint" data-lim="0">预约到店</a>
				<!-- <a class="baidu_qiao"><i class="fix_png"></i>客服咨询</a> -->
			</div>
		</div>

	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>



<script type="text/javascript">	
	$(".goods-prices").each(function(){  
		$(this).mouseover(function(){
			$(this).find(".tips").show();
		});		
		$(this).mouseout(function(){
			$(this).find(".tips").hide();
		});

	});


	$(".m-goods").each(function(){
		$(this).mouseover(function(){
			$(this).find(".list-goods-box").show();
			$(this).addClass("on");
		});
		$(this).mouseout(function(){
			$(this).find(".list-goods-box").hide();
			$(this).removeClass("on");
		});
	});
</script>



<div class="g-pagebar cl">
	<!--<form name="selectPageForm" action="" method="get"></form>-->

		<div id="pager" class="pagebar">
			<a class="prev" href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['num-1']; ?>"><i class="ico ico-left"></i></a>
			

			<?php $_from = $this->_var['page_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'num');$this->_foreach['count'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['count']['total'] > 0):
    foreach ($_from AS $this->_var['num']):
        $this->_foreach['count']['iteration']++;
?>

				<?php if ($this->_var['num'] == $this->_var['page']): ?>

				<span class="page_now"><?php echo $this->_var['num']; ?></span>
				
				<?php else: ?>
				
				<a href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['num']; ?>"><?php echo $this->_var['num']; ?></a>
				<?php endif; ?>

			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>



			<a class="next" href="<?php echo $this->_var['SITE_URL']; ?>category.php?id=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['num + 1']; ?>"><i class="ico ico-right"></i></a>

			
		</div>

		<div class="pagebar_last">
			共 <?php echo $this->_var['max_page']; ?>&nbsp;页,到第<input name="page" id="page" onchange="selectPage(this)" class="pagebar_last_text" value="" type="text"> 页
			<input name="button" value="确定" class="pagebar_last_button" type="button">
		</div>



</div>



<div class="w mt15 clearfix" style="width: 1190px;">
  <div class="comMap clearfix" style="width: 1190px;float:none;">

    <div class="mapItem cuxiao first Left" style="width:396px; " >
      <div class="title"><strong class="Left">最新促销活动</strong></div>
      <div class="body">
		<?php $_from = get_top_cat_new_img_advlist_by_cat_id($this->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
          <div class="ad"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['ad']['image']; ?>" width="292" height="132" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
          <ul>
		  <?php $_from = get_top_cat_new_txt_advlist_by_cat_id($this->_var[category]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
            <li>&bull;&ensp;<a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><?php echo $this->_var['ad']['name']; ?></a></li>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
          
          </ul>
        </div>
    </div>
    <div class="mapItem moveLay reping Left"  style="width:396px; ">
      <div class="title"><strong class="Left">最新热评</strong></div>
      <div class="body">
        <div class="outBox">
          <div id="JS_comment_list_stage">
			<?php $_from = get_rand_comment_9(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
              <div class="list">
                <div class="img"><a href="goods-<?php echo $this->_var['msg']['goods_id']; ?>.html" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><img src="<?php echo $this->_var['msg']['goods_thumb']; ?>" width="119" height="79" alt="<?php echo $this->_var['msg']['goods_name']; ?>" /></a></div>
                <p><a href="goods-<?php echo $this->_var['msg']['goods_id']; ?>.html" target="_blank" title="<?php echo $this->_var['msg']['content']; ?>"><?php echo sub_str($this->_var['msg']['content'],30); ?></a></p>
                <div class="star">
                  <div class="bg"><span class="w5" data-rank="5"></span></div>
                </div>
                <div class="uname"><a class="orange"><?php echo $this->_var['msg']['user_name']; ?></a></div>
              </div>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			  
            </div>
        </div>
      </div>
    </div>
    <div id="JS_newdeal" class="mapItem moveLay chengjiao Left"  style="width:396px; ">
      <div class="title"><strong class="Left">最新成交</strong></div>
      <div class="body">
        <div class="outBox">
          <div id="INDEX_LeiHao_XXXXX">
	  
	  <?php $_from = get_bought_notes(30); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
        <div class="list">
          <div class="img"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><img src="<?php echo $this->_var['msg']['goods_thumb']; ?>" alt="<?php echo $this->_var['msg']['goods_name']; ?>" height="79" width="119"></a></div>
          <p class="name"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a></p>
          <p class="price yen">¥<?php echo $this->_var['msg']['shop_price']; ?></p>
          <p class="uname"><a><?php echo $this->_var['msg']['user_name']; ?></a></p>
          <p class="time"><?php echo $this->_var['msg']['add_time']; ?>&nbsp;购买了此商品</p>
        </div>
	   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
function getNewDealRecord() {
	
}
function setTimer() {
	var b = new Scroll(M.$("#INDEX_LeiHao_XXXXX"));
	var a = new Scroll(M.$("#JS_comment_list_stage"));
	b.cloneDom();
	a.cloneDom();
	setInterval(function() {
		b.autoRun();
		a.autoRun()
	},
	5000)
}
setTimeout(function() {
				setTimer()
			},
			2000);
function Scroll(a) {
	this.dom = a;
	if (!this.dom) {
		return
	}
	this.size = M.$(".list", this.dom).length;
	this.index = 0;
	this.lock = false
}
Scroll.prototype.cloneDom = function() {
	var b = this;
	if (b.size > 3) {
		b.dom.onmouseover = function() {
			b.dom.lock = true
		};
		b.dom.onmouseout = function() {
			b.dom.lock = false
		};
		var a = b.dom.innerHTML;
		b.dom.innerHTML += a
	}
};
Scroll.prototype.autoRun = function() {
	var a = this;
	var b = a.index * 95;
	if (a.index >= a.size) {
		a.dom.style.marginTop = "0px";
		b = 0;
		a.index = 0
	}
	M.Animate(a.dom, {
		marginTop: (0 - b) + "px"
	},
	200, "linear");
	a.index++
};
function formatTime(i) {
	if (!i) {
		return "刚刚"
	}
	var b = parseInt((new Date()).getTime() / 1000);
	var f = b - i;
	if (f < 0) {
		f = 0
	}
	var e = f % 60;
	var a = parseInt(f % 3600 / 60);
	var c = parseInt(f % (3600 * 24) / 3600);
	var g = parseInt(f / (3600 * 24));
	if (g) {
		return g + "天前"
	} else {
		if (c) {
			return c + "小时前"
		} else {
			if (a) {
				return a + "分钟前"
			} else {
				if (e) {
					return e + "秒前"
				} else {
					return "刚刚"
				}
			}
		}
	}
}
function slideOfShowMyHome() {
	var g = M.$("#JS_focus_xspace_body"),
	d = M.$("img", g),
	k = M.$("#JS_focus_xspace_nav"),
	b = M.$("a", k),
	f = b[0],
	l = b.length,
	e = 0,
	h = 615;
	for (var c = 0; c < l; c++) {
		b[c]._key = c;
		b[c].onmouseover = function() {
			e = this._key;
			clearInterval(j);
			a()
		};
		b[c].onmouseout = function() {
			j = setInterval(function() {
				a()
			},
			5000)
		}
	}
	var a = function() {
		M.removeClass(f, "current");
		M.addClass(b[e], "current");
		M.Animate(g, {
			marginLeft: (0 - h * e) + "px"
		},
		200);
		f = b[e];
		e = (e >= l - 1) ? 0 : parseInt(e) + 1
	};
	var j = setInterval(function() {
		a()
	},
	5000)
}

M.addHandler(window, "load",
function() {
	getNewDealRecord();
	slideOfShowMyHome()
});
var help = {
	author: "leihao",
	createTime: "2013-04-01",
	description: "家具城、建材城、家饰城底部公用js"
};
</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>


<script src="themes/meilele/js/back_to_top.min.js?1127"></script>
<script type="text/javascript">
M.lazyImg.start("both", {});
function Slide(b) {
	if (!b.stage) {
		return;
	}
	this.stage = b.stage;
	this.imgs = this.stage.getElementsByTagName("img");
	this.indexDom = b.indexDom;
	this.indexList = b.indexList;
	if (b.prevBtn) {
		this.prevBtn = b.prevBtn;
	}
	if (b.nextBtn) {
		this.nextBtn = b.nextBtn;
	}
	this.step = b.step;
	this.delay = b.delay;
	this.count = this.indexList.length || 0;
	this.lock = false;
	for (var a = 0; a < this.count; a++) {
		this.indexList[a].key = a;
	}
	this.current = this.indexList[0];
	this.start();
	var c = this;
	if (b.prevBtn) {
		this.prevBtn.onclick = function(d) {
			c.prev(d);
		};
	}
	if (b.nextBtn) {
		this.nextBtn.onclick = function(d) {
			c.next(d);
		};
	}
	this.stage.onmouseover = this.stage.onmousemove = function() {
		c.lock = true;
	};
	this.stage.onmouseout = function() {
		c.lock = false;
		c.start();
	};
	this.indexDom.onmouseover = this.indexDom.onclick = function(d) {
		c.indexToMove(d);
	};
}
Slide.prototype = {
	start: function() {
		var b = this,
		a = new Date();
		b.stage.timeStamp = a.valueOf();
		window.setTimeout(function() {
			b.move(null, a.valueOf());
		},
		b.delay);
	},
	move: function(b, a) {
		var c = this;
		if (a && (c.lock || a != c.stage.timeStamp)) {
			return;
		}
		if (typeof(b) != "number") {
			b = c.current.key - ( - 1);
			if (b >= c.count || b < 0) {
				b = 0;
			}
		}
		M.removeClass(c.current, "current");
		c.current = c.indexList[b];
		c.lazyImg(b);
		M.Animate(c.stage, {
			marginLeft: c.step * (0 - b) + "px"
		},
		200);
		M.addClass(c.current, "current");
		if (c.lock) {
			return;
		}
		c.start();
	},
	lazyImg: function(b) {
		var c = this,
		a = c.imgs[b];
		if (a && a.getAttribute("lazy-src")) {
			a.src = a.getAttribute("lazy-src");
			a.removeAttribute("lazy-src");
		}
	},
	prev: function(c) {
		var d = this;
		c = c || window.event;
		var b = c.target || c.srcElement;
		var a = d.current.key;
		a--;
		if (a >= d.count || a < 0) {
			a = d.count - 1;
		}
		b.blur();
		d.move(a);
		return false;
	},
	next: function(c) {
		var d = this;
		c = c || window.event;
		var b = c.target || c.srcElement;
		var a = d.current.key;
		a++;
		if (a >= d.count || a < 0) {
			a = 0;
		}
		b.blur();
		d.move(a);
		return false;
	},
	indexToMove: function(b) {
		var c = this;
		b = b || window.event;
		var a = b.target || b.srcElement;
		while (a && a != c.indexDom) {
			if (a.tagName.toLowerCase() == "a") {
				a.blur();
				c.move(a.key);
			}
			a = a.parentNode;
		}
	}
};
function hotSale() {
	var f = M.$("#JS_slide_hot_sale_stage"),
	c = M.$("img", f),
	h = M.$("#JS_slide_hot_sale_thumb"),
	a = M.$("li", h),
	d = M.$("#JS_slide_hot_sale_num"),
	e = a[0],
	j = a.length,
	g = 332;
	for (var b = 0; b < j; b++) {
		a[b]._key = b;
		a[b].onmouseover = function() {
			var i = this._key;
			M.removeClass(e, "current");
			M.addClass(this, "current");
			d.innerHTML = "TOP" + (i + 1);
			if (c[i] && c[i].getAttribute("lazy-src")) {
				c[i].src = c[i].getAttribute("lazy-src");
				c[i].removeAttribute("lazy-src");
			}
			M.Animate(f, {
				marginTop: (0 - g) * i + "px"
			},
			200);
			e = this;
		};
		a[b].onmouseout = function() {
			var i = this._key;
			M.removeClass(this, "current");
			e = this;
		};
	}
}
function GetPageScroll() {
	var b, a;
	if (window.pageYOffset) {
		a = window.pageYOffset;
		b = window.pageXOffset;
	} else {
		if (document.documentElement && document.documentElement.scrollTop) {
			a = document.documentElement.scrollTop;
			b = document.documentElement.scrollLeft;
		} else {
			if (document.body) {
				a = document.body.scrollTop;
				b = document.body.scrollLeft;
			}
		}
	}
	return {
		x: b,
		y: a
	};
}
function pageScroll() {
	var a = M.$("#JS_fixed_goods_cat");
	if (GetPageScroll().y > 181) {
		M.addClass(a, "fixedLay");
	} else {
		M.removeClass(a, "fixedLay");
	}
}
M.addHandler(window, "load",
function() {
	new Slide({
		stage: M.$("#JS_focus_table"),
		indexDom: M.$("#JS_focus_nav"),
		indexList: M.$("a", "#JS_focus_nav"),
		step: 980,
		delay: 5000
	});
	new Slide({
		stage: M.$("#JS_side_tejia_stage"),
		indexDom: M.$("#JS_side_tejia_nav"),
		indexList: M.$("a", "#JS_side_tejia_nav"),
		prevBtn: M.$("#JS_slide_prev"),
		nextBtn: M.$("#JS_slide_next"),
		step: 171,
		delay: 4000
	});
	for (var a = 1; a < 7; a++) {
		new Slide({
			stage: M.$("#JS_side_style_stage_" + a),
			indexDom: M.$("#JS_side_style_nav_" + a),
			indexList: M.$("a", "#JS_side_style_nav_" + a),
			step: 700,
			delay: 5000
		});
	}
	hotSale();
	if (window.ISFIXED) {
		window.onscroll = function() {
			pageScroll();
		};
	}
});
var help = {
	author: "leihao",
	createTime: "2013/04/03",
	description: "家具城js"
};
</script>

</body>
</html>




<?php endif; ?>
