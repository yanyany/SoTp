$("#login").click(function(){
    var name = $("#name").val();
    var pass = $("#pass").val();
    var verify = $("#verify").val();
    $.ajax({
        url:"/Home/Login/login",
        type:"post",
        dataType:"json",
        data:{
            'phone':name,
            'password':pass,
            'verify':verify
        },
        success:function(json){
                if(json.code==0){
                    layer.msg(json.msg);
                    window.location.href = '/Home/Index/index';
                }else{
                    layer.msg(json.msg);
                    return false;
                }
        }
    })
})


// 验证码生成
var captcha_img = $('#captcha-container').find('img')
var verifyimg = captcha_img.attr("src");
captcha_img.attr('title', '点击刷新');
captcha_img.click(function(){
    if( verifyimg.indexOf('?')>0){
        $(this).attr("src", verifyimg+'&random='+Math.random());
    }else{
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
    }
});