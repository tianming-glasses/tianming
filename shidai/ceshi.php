<video id="myVideo" autoplay="autoplay"></video>
    <br />
    <input type="button" value="拍照" /><br />
    拍照结果：
    <div id="result">
    </div>
    <script type="text/javascript">
        $(document).ready(init);
        function init() {
//为了便于使用这个接口，先做一下兼容性处理
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
            //Google Chrome用webkitGetUserMedia，Firefox用mozGetUserMedia
            navigator.getUserMedia({video:true}, success, error);  //显示影像
            //定义button点击后要做什麼
            $("input[type='button']").click(function () {
                shoot(); //执行拍照
            });
        }
        function success(stream) {
            $("#myVideo").attr("src", window.webkitURL.createObjectURL(stream));
$("#myVideo").play();
        }
function error(error) {
alert(error.name || error);
}
        //拍照
        function shoot() {
            var video = $("#myVideo")[0];
            var canvas = capture(video);
            $("#result").empty();
            $("#result").append(canvas); //呈现图像(拍照结果)
            var imgData = canvas.toDataURL("image/jpg");
            var base64String = imgData.substr(22); //取得base64字串
            //上传，储存图片
            $.ajax({
                url: "vod/avatar.php",
                type: "post",
                data: { data: base64String },
                async: true,
                success: function (htmlVal) {
                    alert("另存图片成功！");
                }, error: function (e) {
                    alert(e.responseText); //alert错误信息
                }
            });
        }
        //从video元素抓取图像到canvas
        function capture(video) {
            var canvas = document.createElement('canvas'); //建立canvas js DOM元素
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0); 
            return canvas;
        }
    </script>

    <?php
function convert_data($data){
$image=base64_decode(str_replace('data:image/jpeg;base64,','',$data));
save_to_file($image);
}
function save_to_file($image){
$filename='avatar/'.time();
$filename.='.jpg';
$fp=fopen($filename,'w');
fwrite($fp,$image);
fclose($fp);
}
convert_data($_REQUEST['data']);