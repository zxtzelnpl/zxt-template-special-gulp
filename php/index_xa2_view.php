<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/assets/t_20180831/css/prtst.css" rel="stylesheet" type="text/css" />
    <title>精准测股系统</title>
    <link rel="stylesheet" href="/assets/t_20180831/css/style.css">
    <link rel="stylesheet" href="/assets/t_20180831/css/prtst.css">
    <link rel="stylesheet" href="/dist/t_20180831/page.css">
    <script type="text/javascript" src="/assets/t_20180831/public/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/assets/t_20180831/public/layer/layer.min.js"></script>
</head>

<body>
<span style="position: absolute;width: 100%;text-align: right;font-size: 9px;color: white;">股市有风险 投资须谨慎</span>
<!-- 二维码 -->
<div class="jmtdjl_boxtwo">
    <div class="jmtdjl_box2two">
        <div class="jmtdjl_login51two">

            <div class="divbigtwo">
                <ul class="bigcontent">
                    <li>诊断结果已出</li>
                    <li> <input type="text" id="tgMobile" name="tgMobile" onBlur='this.value=this.value.replace(/\D/gi,"")' onKeyUp='this.value=this.value.replace(/\D/gi,"")'
                                placeholder="请输入您的手机号码" maxlength="11" /> <img src="/assets/t_20180831/images/phone.png" alt=""> </li>
                    <li>
                        <input type="text" id="tgCode" name="tgCode"
                                placeholder="验证码" maxlength="11" />
                        <button id="getCode">获取验证码</button>
                        <img src="/assets/t_20180831/images/phone.png" alt="">
                    </li>
                    <li> <button id="btnTg"  class="getinfo">立即领取</button> <img src="/assets/t_20180831/images/point.png" alt=""> </li>
                    <li>
                        请填写正确信息 <b> &nbsp;</b>诊断结果稍后将以电话形式发送
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 二维码 -->
<div class="head">
    <div class="logo"></div>
    <div class="top">
    </div>
</div>
<!--main begin-->
<div class="main">
    <div class="mncon">
        <div class="tit">

        </div>
        <div class="mn">
            <div class="lft">
                <!-- <img src="images/img01.jpg" alt=" " /> -->

                <div class="roolBox">
                    <div class="rool">
                        <div class="roolReight">
                            <h3>诊股动态</h3>
                            <ul class="title">
                                <li class="t1">查询日期</li>
                                <li class="t2">股票名称</li>
                                <li class="t3">测评结果</li>
                                <li class="t4">今日波动</li>
                            </ul>
                            <div class="roollBox">
                                <div class="tempWrap" style="overflow:hidden; position:relative; height:1200px">
                                    <div class="tempWrap" style="overflow:hidden; position:relative; height:1200px">
                                        <div id="list" class="rooll" style="height: 4890px; position: relative; padding: 0px; margin: 0px; top: -2414px;">
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新余国科</li>
                                                <li class="t3"> 主力短期强势，买入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">涪陵榨菜</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">名雕股份</li>
                                                <li class="t3">跳空下行，观望</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">苏博特</li>
                                                <li class="t3">横盘震荡，暂时观望</li>
                                                <li class="t4">-7.4%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">英科医疗 </li>
                                                <li class="t3">方向不明，暂时观望</li>
                                                <li class="t4">-7.1%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">新和成</li>
                                                <li class="t3">跳空强势上扬,持有</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">九典制药</li>
                                                <li class="t3">光头大阳线，介入</li>
                                                <li class="t4">8.2%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">阳光电源</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">金盾股份</li>
                                                <li class="t3">表现不佳，逢高减磅</li>
                                                <li class="t4">-10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">*ST吉恩</li>
                                                <li class="t3">高抛低吸，摊低成本</li>
                                                <li class="t4">-9.9%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">迦南科技</li>
                                                <li class="t3">抄底资金进入，关注</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                            <ul class="cont clone" style="height: 30px;">
                                                <li class="t1 con4-time">2018-6-5</li>
                                                <li class="t2">华夏航空</li>
                                                <li class="t3">强势上攻，寻机低吸</li>
                                                <li class="t4">10.0%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 结束 -->
            </div>
            <div class="rgt">
                <ul>
                    <li class="mfzd">
                        免费诊断 个股涨跌
                    </li>
                    <li class="sps">
                        <input type="text" name="stockcode" placeholder="输入需要测评的股票代码" id="stockcode" value="" class="txt" maxlength="6" oninput='if(value.length>6)value=value.slice(0,6)'  />
                    </li>
                    <li>
                        <p class="info">（完全
                            <em>免费服务</em>，每人每天仅限
                            <em>1</em>次）</p>
                    </li>
                </ul>
                <div class="ckBtn">
                    <a id="btnSave" href="javascript:;" class="btn">免费诊断</a>
                </div>
            </div>
        </div>
    </div>
    <!--con begin-->
    <section class="pop" style="position: fixed;top:120px;left:380px;display: none">
        <img class="popt" src="/assets/t_20180831/images/ngtc.png" alt="">
    </section>
    <div class="con">
        <div class="itemlist">
            <ul>
                <li>
                    <img src="/assets/t_20180831/images/item001.jpg" alt="" />
                </li>
                <li>
                    <img src="/assets/t_20180831/images/item002.jpg" alt="" />
                </li>
                <li>
                    <img src="/assets/t_20180831/images/item003.jpg" alt="" />
                </li>
                <li>
                    <img src="/assets/t_20180831/images/item004.jpg" alt="" />
                </li>
            </ul>
        </div>
    </div>
    <!--con end-->
</div>
<!--main end-->
<input class="tgName" name="tgName"  />
<input type="hidden" id="company_id" name="company_id" value="<?php echo $company_id; ?>">
<!-- 脚部 start -->
<div class="footer_wrap">
    <div class="footer w1000">
        <p>
            投资有风险 入市需谨慎  <br>
            湖南巨景证券投资顾问有限公司安徽分公司 皖ICP备17010396号 <br>
            从事证券投资，请通过合法证券经营机构进行。  <br>合法机构名单可到中国证监会网站(www.csrc.gov.cn)查询
        </p>
    </div>
</div>
<script src="/assets/t_20180831/js/jquery-3.2.1.min.js"></script>
<script src="/assets/t_20180831/js/jquery.min.js"></script>
<script src="/assets/t_20180831/js/auto.js"></script>
<script type="text/javascript" src="/assets/t_20180831/js/data-a.js"></script>
<script type="text/javascript" src="/assets/t_20180831/js/jquery.js"></script>

<!-- 脚部 end -->
<script type="text/javascript">
/*判断股票代码是否正确*/
  $("#btnSave").click(function () {
    var gpze=/^(((002|000|300|600)[\d]{3})|60[\d]{4})/;
    var gpinput=$('#stockcode').val();
    $('.tgName').val(gpinput);
    if(gpinput==""){
      alert("请输入正确的股票代码")
      return false;
    }else if(!gpze.test(gpinput)){
      alert("股票代码不正确，无法诊断\n请输入6位数的股票代码，以000|002|300|600开头");
      return false;
    }else{
      $('.jmtdjl_box2two').show();//股票正确弹出手机框
    }
  })

  $(".roollBox").slide({
    mainCell: ".rooll",
    autoPlay: true,
    effect: "topMarquee",
    vis: 40,
    interTime: 20
  });
  $(".wt_list ul li").click(function () {
    $(".wt_list ul li").removeClass("cur");
    $(this).addClass("cur");
    var index = $(".wt_list ul li").index($(this));
    $(".cont2 .Img").hide();
    $(".cont2 .Img").eq(index).show();
  });
  $('.popt').click(function(){
    $('.pop').hide()
  })
</script>
<script>
  var d = new Date();
  var day = d.getDate()-1;
  var month = d.getMonth() + 1;
  var year = d.getFullYear();
  $('#list .con4-time').html(year + "-" + month + "-" + day);
  console.log($('#list .con4-time'))
</script>
<script>

  function isMobile(phone) {
    var phoneReg = /^1[3,4,5,7,8][0-9]{9}$/;
    if (!phoneReg.test(phone)) {
      return false;
    }
    return true;
  }

  /*做了修改增加了验证码*/
  function userOptgpbysem(nameBox, mobileBox,codeBox,codeBtn,opType,tips) {
    if (typeof(tips) == "undefined") {
      tips = "您已操作成功！客服人员会电话联系您，请稍作等待！";
    }
    var name = $.trim($("[name='" + nameBox + "']").val());
    var mobile = $.trim($("[name='" + mobileBox + "']").val());
    var code = $.trim($("[name='" + codeBox + "']").val());

    if (name == null || name == "") {
      layer.tips("请填写完整信息", $("[name='" + nameBox + "']"), {
        tips: [1, '#fcc000'],
        time: 3000
      });
      return;
    }

    if (mobile == null || mobile == "") {
      layer.tips("请填写手机号码", $("[name='" + mobileBox + "']"), {
        tips: [1, '#fcc000'],
        time: 3000
      });
      return;
    }

    if (code == null || code == "") {
      layer.tips("请填写验证码", $("[name='" + codeBox + "']"), {
        tips: [1, '#fcc000'],
        time: 3000
      });
      return;
    }

    if (!isMobile(mobile)) {
      layer.tips("请输入有效格式的手机号码！", $("[name='" + mobileBox + "']"), {
        tips: [1, '#fcc000'],
        time: 3000
      });
      return;
    }

    var loadi = layer.load(1, {
      shade: [0.4, '#000']
    });

    var params = {
      "company_id": opType,
      "phone_num": mobile,
      "stock_num": name,
      "code":code
    };

    var url = "/index/checkPhone";
    $.ajax({
      url:url,
      type:"get",
      data:params,
      dataType:"json",
      success:function(data){
        layer.close(loadi);
        if(data == 0){
            layer.tips("您已操作成功， 无需再次操作！", $("#" + codeBtn), {
              tips: [1, '#fcc000'],
              time: 3000
            });
        }
        else if(data == 1){
            layer.confirm(tips, {
              btn: ['确定'] //按钮
            }, function() {
              window.location.reload()
            });
        }
        else{
            layer.tips("操作失败！", $("#" + codeBtn), {
               tips: [1, '#fcc000'],
               time: 3000
            });
        }
      },
      error: function(data) {
        layer.alert('操作有误，页面重新加载！',function(){
          window.location.reload();
        })
      }
    })
  }

  $(function() {
    $('#btnTg').click(function() {
      userOptgpbysem('tgName', 'tgMobile', 'btnTg', 4);
    })
  })

    /*做了修改增加了验证码*/
    $(function() {
      $('#btnTg').click(function() {
        userOptgpbysem('tgName', 'tgMobile', 'tgCode','btnTg', 3461);
      });
    });

    /*这里是新加的*/
    var codeControl = {
      index:60,
      string:'',
      control:null,
      dom:$('#getCode'),
      counting:function(){
        var me = this;
        console.log(me.index)
        if(me.index>=0){
          me.dom.html(me.index+'秒');
          me.index--;
        }
        else{
          me.dom.html(me.string);
          clearInterval(me.control);
          me.control = null;
        }
      },
      init:function(){
        var me = this;
        me.dom.on('click',function(){

          console.log('click');
          console.log(me.control);

          var mobile = $.trim($("[name='tgMobile']").val());

          if (mobile == null || mobile == "") {
            layer.tips("请填写手机号码", $("[name='tgMobile']"), {
              tips: [1, '#fcc000'],
              time: 3000
            });
            return;
          }

          if(me.control!==null){
            layer.tips("请求验证码过于频繁", $("[id='getCode']"), {
              tips: [1, '#fcc000'],
              time: 1000
            });
          }

          if(me.control===null){
            console.log('go');
            $.ajax({
              url:'/mock/data.json',
              data:{
                mobile:mobile
              },
              success:function(data){

                console.log(data);
                me.string = me.dom.html();
                me.control = setInterval(function(){
                  me.counting();
                },1000);
              },
              fail:function(){

              }
            });
          }
        })
      }
    }

    codeControl.init()
</script>

</body>

</html>
