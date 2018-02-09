<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    @include('common.meta')
    <title>
        {{$title}}-{{$drama}}
    </title>
    <link href="css/mdui.css" rel="stylesheet" type="text/css">
</head>
<body class="mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink mdui-loaded mdui-drawer-body-left ">
@include('common.header')
@include('common.navbar')
<div class="mdui-col-lg-1 mdui-col-md-1 mdui-col-sm-1"></div>
<div class="mdui-col-lg-8 mdui-col-md-8 mdui-col-sm-8">
    <iframe id="frame" width="100%" height="400px"  allowTransparency="true" frameborder="0" scrolling="no" src="http://jx.vgoodapi.com/jx.php?url={{$play_link}}"></iframe>

    <div class="mdui-text-center">
        <select id="select" class="mdui-select">
            <option value="http://jx.vgoodapi.com/jx.php?url=">线路1</option>
            <option value="http://j.zz22x.com/jx/?url=">线路2</option>
            <option value="http://jiexi.92fz.cn/player/vip.php?url=">线路3</option>
        </select>
    </div>


</div>


    <div class="mdui-col-xs-1 mdui-col-sm-2 mdui-col-md-2 mdui-col-lg-2"></div>
    <div class="mdui-col-xs-10  mdui-col-sm-10 mdui-col-md-10 mdui-col-lg-10">
        <div class="mdui-text-center">
            <p>2018©.<a href="https://vip.o11o.cc" class="mdui-text-color-pink">嗖嗖</a></p>
            <a href="feedback" class="mdui-text-color-pink">意见反馈</a> |

            <a href="about" class="mdui-text-color-pink">关于本站</a>
        </div>
    </div>


<script src="js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>

    $("#select").change(function () {
        var Link=$("#select").val();
        $("#frame").attr('src',Link+video_url);
    });



    function GetQueryString(name)
    {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }

    var myurl=GetQueryString("url");
    if(myurl !=null && myurl.toString().length>1)
    {
        var video_url=GetQueryString("url");


    }




</script>
</body>
</html>
