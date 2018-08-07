<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" >
<script>
  function adaptFontSize(designWidth, rem2px){
    var d = window.document.createElement('div');
    d.style.width = '1rem';
    d.style.display = "none";
    var head = window.document.getElementsByTagName('head')[0];
    head.appendChild(d);
    var defaultFontSize = parseFloat(window.getComputedStyle(d, null).getPropertyValue('width'));
    d.remove();
    document.documentElement.style.fontSize = window.innerWidth / designWidth * rem2px / defaultFontSize * 100 + '%';
    var st = document.createElement('style');
    var portrait = "@media screen and (min-width: "+window.innerWidth+"px) {html{font-size:"+((window.innerWidth/(designWidth/rem2px)/defaultFontSize)*100) +"%;}}";
    var landscape = "@media screen and (min-width: "+window.innerHeight+"px) {html{font-size:"+((window.innerHeight/(designWidth/rem2px)/defaultFontSize)*100) +"%;}}"
    st.innerHTML = portrait + landscape;
    head.appendChild(st);
    return defaultFontSize
  };
  var defaultFontSize = adaptFontSize(1080, 100);
</script>

    <title>每天盘前送3只牛股</title>
    <link rel="stylesheet" href="/public/lib/normalize-css/normalize.css">
    <link rel="stylesheet" href="/public/lib/jquery-toast-plugin/dist/jquery.toast.min.css">
    <link rel="stylesheet" href="/dist/t_20180807/page.css">
</head>
<body>
<div class="container">
    <div class="container-bg1"></div>
    <div class="container-bg2"></div>
    <div class="container-bg3"></div>
    <div class="container-bg4">
        <div class="container-button" id="popShow">

        </div>
        <div class="container-text">
            <p class="text-one">投资有风险 入市需谨慎</p>
            <p class="text-two">版权所有：深圳君银证券投资顾问有限公司</p>
            <p class="text-three">从事证券投资，请通过合法证券经营机构进行</p>
            <p class="text-three">合法机构名单可到中国证监会网站（www.csrc.gov.cn）查询</p>
        </div>
    </div>
    <div class="container-pop" id="pop">
        <div class="pop-box">
            <div class="pop-box-input">
                <input id="phone" type="number" placeholder="请输入手机号码">
            </div>
            <div class="pop-box-btn" id="addPhone"></div>
            <img src="/assets/t_20180807/pop-box-close.png" class="pop-box-close" id="popClose"/>
        </div>
    </div>
</div>
</body>
<script src="/public/lib/jquery/dist/jquery.min.js"></script>
<script src="/public/lib/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<script>
    $(function(){
      var PHONE_NUMBER_REG = /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/;
      var phoneInput = $('#phone');
      var addPhoneButton = $('#addPhone');

      /*手机验证*/
      function checkPhone(phone){
        return PHONE_NUMBER_REG.test(phone)
      }

      /*点击弹框*/
      $('#popShow').click(function(){$('#pop').addClass('show')});
      $('#popClose').click(function(){$('#pop').removeClass('show')});

      /*留下号码*/
      addPhoneButton.click(function(){
        var phone = $.trim(phoneInput.val());
        if(checkPhone(phone)){
            $.ajax('/index/checkPhone',{
              data:{phone_num:phone},
              success:function(json){
                console.log(json);
                if(json == 1){
                  $.toast({
                    position:'bottom-center',
                    text:'领取成功！',
                    textAlign:'center',
                    allowToastClose : false,
                    loader:false,
                    bgColor:'red'
                  })
                }
                else{
                  $.toast({
                    position:'bottom-center',
                    text:'领取失败，手机号码已存在！',
                    textAlign:'center',
                    allowToastClose : false,
                    loader:false
                  })
                }

              },
              error:function(error){
                console.log(error);
                /*$.toast({
                  position:'bottom-center',
                  text:'手机号码格式不对',
                  textAlign:'center',
                  allowToastClose : false,
                  loader:false
                })*/
              }
            })
        }
        else{
          $.toast({
            position:'bottom-center',
            text:'手机号码格式不对',
            textAlign:'center',
            allowToastClose : false,
            loader:false
          })
        }
      })
    })

</script>
</html>
