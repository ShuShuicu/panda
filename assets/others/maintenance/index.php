<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title><?php echo  get_bloginfo('name').' - '.panda_pz('maintenance_title');?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('url'); echo panda_pz('static_panda');?>/assets/others/maintenance/css/style.css" />
    <script type="text/javascript" src="<?php echo get_bloginfo('url');echo panda_pz('static_panda');?>/assets/others/maintenance/js/script.js"></script>
	<script type="text/javascript">
		var countDownDate = new Date("<?php echo panda_pz('maintenance_time');?>").getTime();
	</script>
</head>

<body class="white-font">
    <div class="hidden_overflow gradient_blue">
	<div class="container">
        <div class="count-block">
            <div class="head-area">
                <a href="<?php echo get_option('home'); ?>" class="logo mob_logo"><img src="<?php echo panda_pz('maintenance_logo');?>" alt=""></a>
                <h2 class="time-left-txt"><?php echo panda_pz('maintenance_title');?></h2>
            </div>
            <div class="middle-area">
                <div class="countdown-row">
                    <a href="<?php echo get_option('home'); ?>" class="logo"><img src="<?php echo panda_pz('maintenance_logo');?>" alt=""></a
                    ><div class="counting-row">
                        <div class="slot-type">
                            <span class="num" id="day">00</span>
                            <span class="param">天</span>
                        </div
                        ><div class="slot-type">
                            <span class="num" id="hour">00</span>
                            <span class="param">小时</span>
                        </div
                        ><div class="slot-type">
                            <span class="num" id="min">00</span>
                            <span class="param">分钟</span>
                        </div
                        ><div class="slot-type">
                            <div class="num _INVISIBLE_" id="second">00</div>
                            <span class="param"></span>
                        </div>
                    </div>
                    <div class="seconds-holder">
                        <div class="circle-holder">
                            <div class="dark_digit IE_HIDE">
                                <img src="<?php echo get_bloginfo('url');echo panda_pz('static_panda');?>/assets/others/maintenance/css/secondwhite.svg" class="round" alt="">
                            </div>
                            <svg class="dark_digit" width="100%" height="100%">
                                <g id="clipPath">
                                    <image xlink:href="<?php echo get_bloginfo('url');echo panda_pz('static_panda');?>/assets/others/maintenance/css/secondwhite.svg" width="100%" height="100%" transform="" class="round" id="digitalsecond" alt="">
                                        <animateTransform attributeName="transform"
                                        attributeType="XML"
                                        type="rotate"
                                        dur="10s"
                                        repeatCount="indefinite"/>
                                    </image>
                                </g>
                                <defs>
                                    <clipPath id="hero-clip">
                                        <rect x="94%" y="47.2%" fill="#ff0000" width="110" height="64"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="down_opacity_circle">
                                <img src="<?php echo get_bloginfo('url'); echo panda_pz('static_panda');?>/assets/others/maintenance/css/secondtrans_.svg" class="round" id="digitalsecond" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="countdown-caption">
                    <?php echo panda_pz('maintenance_desc');?>
                </div>
            </div>
            <footer>
                <p class="copyright-txt">
				    <?php if (panda_pz('maintenance_redirectUrl')):?>
                        <?php if (panda_pz('maintenance_redirectUrlName')):?>
                            <?php echo "本站临时站点: " . "<a href=" . panda_pz('maintenance_redirectUrl').">". "『".panda_pz('maintenance_redirectUrlName' ) ."』". "</a><br><br>";?>
                        <?php else: ?>
                            <?php echo "本站临时站点: " . "<a href=" . panda_pz('maintenance_redirectUrl').">"."点击跳转". "</a><br><br>";?>
                        <?php endif;?>
                    <?php endif;?>
                    <?php if (panda_pz('maintenance_copyright')){echo panda_pz('maintenance_copyright');}?>&nbsp;&nbsp;<?php if (panda_pz('maintenance_beian')){echo '<a class="c-footer-1-nav-link" href="http://beian.miit.gov.cn/" target="_blank" rel="noopener">'. panda_pz('maintenance_beian').'</a>';}?>
                </p>
            </footer>
        </div>
    </div>
</div>
</body>
</html>
