<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>自选模特试戴</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>


<script>


var liulanqi;



//判断浏览器
var explorer = window.navigator.userAgent ;
//ie浏览器
if (explorer.indexOf("MSIE") >= 0) {
liulanqi='ie';	
//alert("ie浏览器");
}
//firefox 浏览器
else if (explorer.indexOf("Firefox") >= 0) {
liulanqi='Firefox';	
//alert("Firefox浏览器");
}
//Chrome浏览器
else if(explorer.indexOf("Chrome") >= 0){
liulanqi='Chrome';	
//alert("Chrome浏览器");
}
//Opera浏览器
else if(explorer.indexOf("Opera") >= 0){
liulanqi='Opera';	
//alert("Opera浏览器");
}
//Safari浏览器
else if(explorer.indexOf("Safari") >= 0){
liulanqi='Safari';	
//alert("Safari浏览器");
}



   function huanjing(url)
   {

        $.ajax({
			   type:"POST",                         
			   url:"?",
			   data:{url:url},                      
			   dataType:"text",
  
				success:function(data)
				{   
				    document.getElementById('jing').src=url;
				},

		  }); 
   
   }
   function send()
   {    
        var left_x;
		var left_y;
		var right_x;
		var right_y; 
		
		
		
		
		
		
        if(liulanqi=="Firefox")
		{
			left_x='130';
			left_y='170';
			right_x='240';
			right_y='170';
		}
		else
		{
			left_x='130';
			left_y='170';
			right_x='240';
			right_y='170';
		}
		var url=document.getElementById('jing').src;
         //alert(url);
		$.ajax({
				   type:"POST",                         
				   url:"index4.php",
				   data:{left_x:left_x,left_y:left_y,right_x:right_x,right_y:right_y,url1:url},                      
				   dataType:"html",
					success:function(data)
					{  
                     
					 },
					 complete: function(XMLHttpRequest, textStatus){
						var module=XMLHttpRequest.responseText;
						 //alert(module);
						$('.zi_box').css('display','none');
						//$('#yj').css('display','none');
						$('#newdiv').html(module);   
					 },
			  }); 
	}
	
	
	
	
	
	
	
	
	
	
   </script>
</head>

<body>
<div class="zi_box">
	<div class="zi_box_top">
    	<div class="zi_box_left"><img id="jing" src="img/3.jpg" width="100%" height="100%"></div>
        <div class="zi_box_right">
        	<div class="zi_box_tihth_top"><img src="img/mo.png" style=" background-size:100%;"></div>
            <div class="zi_box_right_center">
            	<ul class="zi_ul">
                	<li class="zi_li"><a href="javascript:huanjing('images/20160423110654.png')"><img src="images/20160423110654.png" width="100%" height="100%"></a></li>
                    <li class="zi_li"><a href="javascript:huanjing('images/20160428140203.png')"><img src="images/20160428140203.png" width="100%" height="100%"></a></li>
                    <li class="zi_li"><a href="javascript:huanjing('images/20160428140220.png')"><img src="images/20160428140220.png" width="100%" height="100%"></a></li>
                    <li class="zi_li1"><a href="javascript:huanjing('images/20160428140437.png')"><img src="images/20160428140437.png" width="100%" height="100%"></a></li>
                    <li class="zi_li1"><a href="javascript:huanjing('images/20160428140448.png')"><img src="images/20160428140448.png" width="100%" height="100%"></a></li>
                    <li class="zi_li1"><a href="javascript:huanjing('images/20160428140458.png')"><img src="images/20160428140458.png" width="100%" height="100%"></a></li>
                </ul>
            </div>
        </div>    
    </div>
    <div class="zi_btn">
    	<div class="zi_btn_a">
        	<input name="" type="image" onClick="javascript:send()"  src="img/anniu_2.png">
        	
        </div>
    </div>
</div>


<div id="newdiv"></div>
</body>
</html>
