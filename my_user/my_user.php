<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--  device-width        当前设备的宽度 -->
    <!--  initial-scale=1.0   宽度一致比例是1.0 -->
    <!--  user-scalable=no    //  不允许缩放 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <title>校园闲置物品交易网</title>
    <link rel="stylesheet" href="css/my_user.css">
    <link rel="stylesheet" href="css/base.css">
</head>

<body>
    <!-- 版心 -->
    <div class="container">
        <!-- 顶部部分 -->
        <header class="xy_biaoti">
            <div class="xy_biaoti_title">
                <h1>我的</h1>
            </div>
        </header>
        <!-- 用户名 -->
        <div class="xy_login">
            <ul class="clearFix">
                <li class="clearFix">
                    <a href="../info/info.html">
                        <div><i></i></div>
                        <?php  session_start();?>
                            <?php if(!$_SESSION['userinfo']==true) {?>
                            <?php echo '<span>未登录</span>'; ?>
                            <?php }else{?>
                            <?php echo "<span> {$_SESSION['userinfo']['username']}</span>"; ?>
                            <?php }?>
                            <p>&gt;</p>
                    </a>
                </li>

            </ul>
        </div>
        <!-- 关于模块 -->
        <div class="xy_banner">
            <ul class="clearFix">
                <li>
                    <a href="../release/release.html">我的上传商品
                        <p>></p>
                    </a>
                </li>
                <li>
                    <a href="#">关于平台
                        <p>></p>
                    </a>

                </li>
                <li>
                    <a href="#">意见反义
                        <p>></p>
                    </a>

                </li>
            </ul>
        </div>
        <!-- 退出登录 -->
        <div class="tui">
            <a href="../my/my.html">退出登录</a>
        </div>
        <!-- 底部部分 -->
        <footer class="xy_shoye">
            <div>
                <ul class="clearFix">
                    <li>
                        <a href="../index/index.html">
                            <div class="xy_shoye_wode">
                                <i></i>
                                <p>首页</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../add/add.html">
                            <div class="xy_shoye_wode xy_tianjia">
                                <i></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="xy_shoye_wode">
                                <i></i>
                                <p>我的</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>


    </div>