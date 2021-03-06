<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title><?php echo ($row['movie_name']); ?> <?php echo ($row['movie_ename']); ?>(<?php echo (date("Y",$row['movie_start'])); ?>)</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/movieindex.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/moviexscroll.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/examples.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/jdt.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		<script src="/mtime/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
		<script src="/mtime/Public/Home/js/jquery.barrating.js"></script>
		<script src="/mtime/Public/Home/js/examples.js"></script>
		<script src="/mtime/Public/Home/js/jquery.raty.js"></script>
		<script src="/mtime/Public/Home/js/movieindex.js"></script>
		<script src="/mtime/Public/Home/js/autosize.min.js"></script>
		
	</head>
	<body>
		<div class="container">
			<!--头部-->
			<div id="topbar">
				<div class="topline"></div>
				<div class="menubar">
					<div class="menubg">
						<div class="menuid">
							<h1 class="mtimelogo">
								<a href="/mtime/index.php/Home/Index/index" title="Mtime时光网">Mtime时光网</a>
							</h1>
							<div class="navsearch">
								<div class="menuicon" title="导航" id="dh">
									<div class="menupop navpop" style="display:none;" id="navlist">
										<ul>
											<li>
												<a href="#">
													<span class="ico_n_index"></span>
													首页
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_news"></span>
													新闻
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Index/index">
													<span class="ico_n_ticket"></span>
													影院
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_mall"></span>
													商城
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_bbs"></span>
													社区
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_find"></span>
													发现
												</a>
											</li>
										</ul>
									</div>
								</div>
			
								<div class="topsearch">
									<div class="selctsearch">
										<strong>全部</strong>
										<i></i>
										<span>|</span>
									</div>
									<div class="selectshow">
										<ul>
											<li>全部</li>
											<li>电影</li>
											<li>影人</li>
											<li><a href="/mtime/index.php/Home/Index/index">影院</a></li>
											<li>商品</li>
										</ul>
									</div>
									<input type="text" class="text" value="" placeholder="搜索电影、影人、影院、商品">
									<input type="button" class="button">
								</div>
							</div>
							<div class="userbar">
								<div class="gwc">
									<span class="ico_shop"></span>
									<div class="m_shopcart">
										<p class="tips">您的购物车还是空的，赶快选购哦。</p>
									</div>
								</div>
								<div class="loginbox">
									
									<span class="logintxt">
										<?php if($_SESSION['member_login'] == 1): echo ($_SESSION['member_nickname']); ?>
										<?php else: ?>
											请登录<?php endif; ?>
									</span>
									<span class="loginpic">
										<?php if($_SESSION['member_login'] == 1): ?><img src="/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>" width='27' height='27'>										
										<?php else: ?>
											<span class="ico_user"></span><?php endif; ?>
										
									</span>
									
								</div>
								<div class="citybox">
									<span class="currcity">我在：长治</span>
									<span class="ico_city"></span>
								</div>
								
								<div class="loginpop">
								<?php if($_SESSION['member_login'] == 1): ?><div class="my_name">
										<a href="" class="my_pic">
											<img src="/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>" width="96" height="96">
										</a>
										<dl>
											<dt>
												<a href="#"><?php echo ($_SESSION['member_nickname']); ?></a>
											</dt>
											<dd>
												我的经验值:
												<a href="" id="topMenuXpContainer">50</a>
											</dd>
										</dl>
										<div class="my_btns">
											<a class="btn_login" href="#">我的时光</a>
											<a class="btn_login" href="#">会员俱乐部</a>
										</div>
									</div>
									<ul class="loginexit">
										<li>
											订单：
											<a href="#">电影票订单</a>
											<em>|</em>
											<a href="#" class="p_r">
												商品订单
												<i class="i_new"></i>
											</a>
										</li>
										
										<li>我的：
											<a href="#">博客</a>
											<em>|</em>
											<a href="#">群组</a>
											<em>|</em>
											<a href="#">电影</a>
											<em>|</em>
											<a href="#">收藏</a>
										</li>
										
										<li>游戏：
											<a href="#">卡片大富翁</a>
											<em>|</em>
											<a href="#">猜电影</a>
										</li>
										
										<li>
											<a href="/mtime/index.php/Home/User/do_layout" class="btn_exit">退出</a>
											<a href="/mtime/index.php/Home/Profile/basic">修改资料</a>
											<em>|</em>
											<a href="/mtime/index.php/Home/Profile/password">密码</a></li>
									</ul>
								<?php else: ?>
									<form action="/mtime/index.php/Home/User/do_login" method="post">
										<dl class="logintool">
											<dt>为爱电影的人</dt>
											<dd class="userlogin">
												<ul>
													<li>
														<label class="name">用户名：</label>
														<input type="text" value="" placeholder="输入电子邮箱地址" name="email" class="tip">
														<span class="ico_false"></span>
													</li>
													<li>
														<label class="password">输入密码：</label>
														<input type="password" value="" placeholder="输入密码" name="pass" class="tip">
														<span class="ico_false"></span>
													</li>
												</ul>
												<p class="usertip">
													<a href="#" target="_blank" style="float:right;">忘记密码</a>
													<span class="ico_m_check" id="zddl"></span>
													下次自动登录
												</p>
												<div class="btn">
													<input type="submit" value="登录" class="btn_login">
													<input type="button" value="成为会员" class="btn_regist">
												</div>
												<script>
													$(".btn_regist").click(function(){
														window.location.href="<?php echo U('User/register');?>";
													});
												</script>
											</dd>
										</dl>
										<dl class="otherlogin">
											<dt>使用第三方登录</dt>
											<dd style="margin-left:42px;">
												<a href="http://passport.mtime.com/unitelogin/dispatch/weibo/web/" title="新浪" class="o_sina"></a>
												<a href="http://passport.mtime.com/unitelogin/dispatch/qq/web/" title="QQ" class="o_qq"></a>
											</dd>
										</dl>
									</form><?php endif; ?>
								
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--头部 end-->
			
			<div id="movie_warp">
				<div class="db_bodyout">
					<div class="db_bodybg"></div>
					<div class="db_shadow">
						<div class="db_topcont">
							<div id="db_head">
								<div class="db_coverout">
									<div class="db_coverinner">
										<div class="db_coverpicbox">
											<div class="db_cover">
												<a href="#" title="<?php echo ($row['movie_name']); ?>( <?php echo (date('Y',$row['movie_start'])); ?> )">
													<img src="/mtime/Public/<?php echo ($row['movie_pic']); ?>" width="270" height="405" alt="<?php echo ($row['movie_name']); ?>( <?php echo (date('Y',$row['movie_start'])); ?> )">
												</a>
												<?php if($row['movie_start'] < $nowtime): ?><span id="angleImage" class="sharp_showtime"></span><?php endif; ?>
												<?php if($row['movie_start'] > $nowtime): ?><span id="angleImage" class="sharp_jjsy"></span><?php endif; ?>
												<span class="icon_type">
													<?php if($row['movie_imax'] == 1): ?><span class="ico_imax"></span><?php endif; ?>
													<?php if($row['movie_screen'] == 1): ?><span class="ico_dmax"></span><?php endif; ?>
													<?php if($row['movie_3d'] == 1): ?><span class="ico_3d"></span><?php endif; ?>
													<?php if($row['movie_imax3d'] == 1): ?><span class="ico_3dimax"></span><?php endif; ?>
												</span>
												<?php if($row['movie_start'] > $nowtime): ?><span class="bg">
														<div class="db_wsnormal">
															<div class="will_day">
																距离上映还有 
																<span><?php echo (date("d",$row['movie_start']-$nowtime-86400)); ?></span>
																天
															</div>
															<div class="will_date"><?php echo (date("m",$row['movie_start'])); ?>月<?php echo (date("d",$row['movie_start'])); ?>日 全国上映</div>
														</div>
													</span><?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								
								<div class="db_ihead">
									<div class="db_head">
										<div class="tit">
											<h1 style="font-size:35px;display:inline;"><?php echo ($row['movie_name']); ?></h1>
											<p class="db_year" style="font-size:30px;display:inline;">
												(<a style="font-size:30px;color:#333;" href="#"><?php echo (date("Y",$row['movie_start'])); ?></a>)
											</p>
											<p class="db_enname" style="font-size:25px;padding:20px 0;">
												<?php echo ($row['movie_ename']); ?>
											</p>
										</div>
										<div class="otherbox">
											<span><?php echo ($row['movie_time']); ?>分钟 -</span>
											<span class="fl">
											<?php if(is_array($trows)): foreach($trows as $key=>$trow): ?><a href="#" target="_blank"><?php echo ($trow['type_name']); ?></a>
												<span>/</span><?php endforeach; endif; ?>
											</span>
											<span>-</span>
											<a href="#" target="_blank"><?php echo (date("Y",$row['movie_start'])); ?>年<?php echo (date("m",$row['movie_start'])); ?>月<?php echo (date("d",$row['movie_start'])); ?>日</a>
											<span>中国上映</span>
											<span>-</span>
											<?php if($row['movie_imax'] == 1): ?><span>IMAX</span><?php endif; ?>
											<?php if($row['movie_3d'] == 1): ?><span>3D</span><?php endif; ?>
											<?php if($row['movie_imax3d'] == 1): ?><span>3DIMAX</span><?php endif; ?>
											<?php if($row['movie_screen'] == 1): ?><span>中国巨屏</span><?php endif; ?>
										</div>
									</div>
									<div class="db_nav">
										<ul>
											<li>
												<a href="#" target="_blank">
													<span><?php echo ($vnum); ?></span>个视频
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Moviedetial/movieposter/id/<?php echo ($row['movie_id']); ?>" target="_blank">
													<span><?php echo ($pnum); ?></span>张图片
												</a>
											</li>
											<li>
												<a href="#" target="_blank">
													<span><?php echo ($num); ?></span>位演职员
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Moviedetial/movielongcomment/id/<?php echo ($row['movie_id']); ?>" target="_blank">
													<span><?php echo ($cnum); ?></span>条评论
												</a>
											</li>
											<li>
												<a href="#" target="_blank">
													<span>95</span>条新闻
												</a>
											</li>
											<dt class="more" id="detailMenuRegion">
												<a href="javascript:;">
													更多
													<em id="detailMenuRegionLabel">&nbsp;</em>
												</a>
												<dl class="db_nav_sel" id="detailSubMenuRegion">
													<dd>
														<a href="/mtime/index.php/Home/Moviedetial/movieabstract/id/<?php echo ($row['movie_id']); ?>">剧情</a>
													</dd>
													<dd>
														<a href="#">角色介绍</a>
													</dd>
													<dd>
														<a href="/mtime/index.php/Home/Moviedetial/moviesecret/id/<?php echo ($row['movie_id']); ?>">幕后揭秘</a>
													</dd>
													<dd>
														<a href="#">获奖记录</a>
													</dd>
													<dd>
														<a href="#">更多资料</a>
													</dd>
												</dl>
											</dt>
										</dl>
									</div>
									
									<div style="clear:both;"></div>
									
									<div class="grade_area news_area">
										<div class="grade_areaer">
											<div class="grade_tool" id="ratingRegion">
												<div class="t">
													<div class="gradebox">
													<?php if(empty($row['movie_graded'])): ?><p style="padding-top:30px;">暂无评分</p>
													<?php else: ?>
													
														<b><?php echo ($row['movie_graded']); ?></b>
														<p>总分：10</p><?php endif; ?>
													</div>
													<div class="rig">
														<dl>
															<dt>
																<span>6245</span>人评分 
																&nbsp;
																<span>9948</span>人想看 
															</dt>
															<dd class="yy">
																<div style="display:inline-block">音乐</div>
																<div class="progressbar" data-perc="<?php echo ($row['movie_music']); ?>">
																	<div class="bar color4"></div>
																</div>
															</dd>
															<dd class="yy">
																<div style="display:inline-block">画面</div>
																<div class="progressbar" data-perc="<?php echo ($row['movie_hm']); ?>">
																	<div class="bar color2"></div>
																</div>
															</dd>
															<dd class="yy">
																<div style="display:inline-block">导演</div>
																<div class="progressbar" data-perc="<?php echo ($row['movie_dy']); ?>">
																	<div class="bar color3"></div>
																</div>
															</dd>
															<dd class="yy">
																<div style="display:inline-block">故事</div>
																<div class="progressbar" data-perc="<?php echo ($row['movie_gsqj']); ?>">
																	<div class="bar"></div>
																</div>
															</dd>
														</dl>
													</div>
												</div>
												
												<div class="d">
													<div class="fr grad_ellip">...</div>
													<span style="border:0">时光网：No.3</span>
													<span>票房：<?php echo ($row['movie_office']); ?>元</span>
												</div>
											</div>
											<div class="db_gtopout">
												<div class="mdr">
													<div class="looktool">
														<span>我要评分：</span>
													</div>
													<div class="per_totalarea01">
														<div class="want">想看</div>
														<div class="box-body" style="height:25px;display:inline;">
															<select id="example-a" name="rating">
																<option></option>
																<option value="1.0" <?php echo $comnum['comgrade_grade']==1?'selected':'' ?> >1.0</option>
																<option value="2.0"	<?php echo $comnum['comgrade_grade']==2?'selected':'' ?> >2.0</option>
																<option value="3.0" <?php echo $comnum['comgrade_grade']==3?'selected':'' ?> >3.0</option>
																<option value="4.0" <?php echo $comnum['comgrade_grade']==4?'selected':'' ?> >4.0</option>
																<option value="5.0" <?php echo $comnum['comgrade_grade']==5?'selected':'' ?> >5.0</option>
																<option value="6.0" <?php echo $comnum['comgrade_grade']==6?'selected':'' ?> >6.0</option>
																<option value="7.0" <?php echo $comnum['comgrade_grade']==7?'selected':'' ?> >7.0</option>
																<option value="8.0" <?php echo $comnum['comgrade_grade']==8?'selected':'' ?> >8.0</option>
																<option value="9.0" <?php echo $comnum['comgrade_grade']==9?'selected':'' ?> >9.0</option>
																<option value="10" <?php echo $comnum['comgrade_grade']==10?'selected':'' ?> >10</option>
															</select>
														</div>
													</div>
												</div>
												
												<div class="per_message">
													<textarea id="tweetBoxUp" placeholder="输入影评"></textarea>
												</div>
												<div class="per_btn">
													<a href="javascript:;" class="memberlogin">
														<span class="ico_white"></span>
														<span class="cyp">写长影评</span>
													</a>
													<span class="shu">|</span>
													<a href="#">
														<span class="ico_add"></span>
														<span class="cyp">添加观影方式</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								
								<div class="db_contout">
									<div class="sharp"></div>
									<div class="db_cont">
										<div class="zoom">
											<div class="base_l" id="divRelatedGoods"></div>
											<div class="clear:both;"></div>
											<div class="base_r">
												
												<div class="pt15">
													
													<dl class="info_l">
														<dd>
															<strong>导演：</strong>
															<?php if(is_array($director)): $i = 0; $__LIST__ = $director;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dirtor): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($dirtor['actor_name']); ?></a>
																&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>													
														</dd>
														<?php if(empty($editors)): else: ?>
														<dd>
															<strong>编剧：</strong>
															<?php if(is_array($editors)): $i = 0; $__LIST__ = $editors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$editor): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($editor['actor_name']); ?></a>
																&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
														</dd><?php endif; ?>
														<dd>
															<strong>国家地区：</strong>
															<a href="#" target="_blank"><?php echo ($row['movie_country']); ?></a>
														</dd>
														<?php if(empty($row['movie_company'])): else: ?>
														<dd>
															<strong>发行公司：</strong>
															<a href="#" target="_blank"><?php echo ($row['movie_company']); ?></a>
														</dd><?php endif; ?>
													
														<?php if(empty($row['movie_othername'])): else: ?>
															<dd>
															<strong>更多片名：</strong>
															<?php echo ($row['movie_othername']); ?>
															</dd><?php endif; ?>
														
														<dt>
															<h4 class="mt12 px14">
																剧情
															</h4>
															<p class="mt6 ln18 jq"><?php echo (msubstr(strip_tags(htmlspecialchars_decode($arow['abstract_text'])),0,117)); ?></p>
															<p class="tr mt9">
																<a href="/mtime/index.php/Home/Moviedetial/movieabstract/id/<?php echo ($row['movie_id']); ?>">
																	<span>更多剧情 </span>
																	<span class="gt"></span>
																</a>
															</p>
														</dt>
													</dl>
													
													<div class="info_r">
														<h4 class="mt9">
															主演：
														</h4>
														<dl class="main_actor">
															<?php if(is_array($actors)): $i = 0; $__LIST__ = array_slice($actors,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$actor): $mod = ($i % 2 );++$i;?><dd>
																<a href="#" title="<?php echo ($actor['actor_name']); ?> <?php echo ($actor['actor_ename']); ?>">
																	<?php if(empty($actor['actor_pic'])): ?><img src="/mtime/Public/Home/images/1891169_290X440X4.jpg" width="50" height="50" class="per">
																	<?php else: ?>
																		<img src="/mtime/Public/<?php echo ($actor['actor_pic']); ?>" width="50" height="50" alt="<?php echo ($actor['actor_name']); ?> <?php echo ($actor['actor_ename']); ?>" class="per"><?php endif; ?>
																</a>
																<p><a href="#" target="_blank"><?php echo ($actor['actor_name']); ?></a></p>
																<p><a href="#" target="_blank"><?php echo ($actor['actor_ename']); ?></a></p>
																<?php if(empty($actor['filma_name'])): else: ?>
																	<p>饰&nbsp;<?php echo ($actor['filma_name']); ?></p><?php endif; ?>
																
																<?php if(empty($actor['filma_pic'])): else: ?>
																	<img src="/mtime/Public/<?php echo ($actor['filma_pic']); ?>" width="50" height="50" alt="<?php echo ($actor['filma_name']); ?>" class="cha"><?php endif; ?>
															</dd><?php endforeach; endif; else: echo "" ;endif; ?>
															<p class="tr mt15 px12">
																<a href="#" target="_blank">
																	<span>更多 </span>
																	<span class="gt"></span>
																</a>
															</p>
														</dl>
													</div>

												</div>
												
												
												<p class="line_dot pt25 mb25"></p>
												
												<div class="db_ivm">
													<?php if(empty($vrows)): else: ?>
													<div class="sp" style="float:left;">
														<div class="db_ivideos" id="videoRegion">
															<div class="px12">
																<a href="#" target="_blank">
																	<span id="videoCountRegion" class="px20"><?php echo ($vnum); ?></span>
																	<span>个视频 </span>
																	<span class="gt"></span>
																</a>
															</div>
															<div class="db_ipicbox">
																<div class="db_ipiclist">
																	<dl>
																		<?php if(is_array($vrows)): $i = 0; $__LIST__ = $vrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vrow): $mod = ($i % 2 );++$i;?><dd>
																			<a href="/mtime/index.php/Home/Movie/movievideo/vid/<?php echo ($vrow['video_id']); ?>" target="_blank" class="db_avideo">
																				<img src="/mtime/Public/<?php echo ($vrow['video_pic']); ?>" width="213" height="120" alt="<?php echo ($vrow['video_name']); ?>">
																				<em></em>
																				<b></b>
																				<i><?php echo ($vrow['video_time']); ?></i>
																				<span><?php echo ($vrow['video_name']); ?></span>
																			</a>
																		</dd><?php endforeach; endif; else: echo "" ;endif; ?>																		
																	</dl>
																</div>
															</div>
														</div>
													</div><?php endif; ?>
													<div class="clear:both;"></div>
													<?php if(empty($prows)): else: ?>
													<div class="tupian">
														<div class="db_ipics">
															<div class="px12">
																<a href="/mtime/index.php/Home/Moviedetial/movieposter/id/<?php echo ($row['movie_id']); ?>" class="fr" target="_blank">更多图片</a>
																<a href="/mtime/index.php/Home/Moviedetial/movieposter/id/<?php echo ($row['movie_id']); ?>" target="_blank">
																	<span class="px20"><?php echo ($pnum); ?></span>
																	<span>张图片 </span>
																	<span class="gt"></span>
																</a>
															</div>
															<div class="db_ipicbox">
																<div class="friend">
																	<div class="mr_frbox">
																		<img class="mr_frBtnL prev" src="/mtime/Public/Home/images/mfrl.gif" />
																		<div class="mr_frUl">
																			<ul id="mr_fu">
																				<?php if(is_array($prows)): $i = 0; $__LIST__ = $prows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prow): $mod = ($i % 2 );++$i;?><li>
																						<img src="/mtime/Public/<?php echo ($prow['pic_address']); ?>">
																					</li><?php endforeach; endif; else: echo "" ;endif; ?>
																			</ul>
																		</div>
																		<img class="mr_frBtnR next" src="/mtime/Public/Home/images/mfrr.gif" />
																	</div>
																</div>
															</div>
														</div>
													</div><?php endif; ?>
													
													
												</div>
												
												
											</div>
										</div>
										
										<div style="clear:both;"></div>
										
										<p class="line_dot mt30 mb25"></p>
										
										<?php if(empty($srow['secret_text'])): else: ?>
										<div class="mb30 db_mhcont">
											<div class="db_mhleft">
												<h4 class="px18">
													<span>关于《<?php echo ($row['movie_name']); ?>》你应该知道的</span>
													<b><?php echo ($snum); ?></b>
													<span>件事</span>
												</h4>
												<dl class="revealed_list">
													<dd>
														<span class="num">1</span>
														<span>
														<?php echo ($srow['secret_text']); ?>
														</span>
													</dd>
												</dl>
												<p class="tr mt9 px12">
													<a href="/mtime/index.php/Home/Moviedetial/moviesecret/id/<?php echo ($row['movie_id']); ?>">
														<span>更多拍摄花絮 </span>
														<span class="gt"></span>
													</a>
												</p>
											</div>
											
										</div><?php endif; ?>
										
									</div>
								</div>
								
								
								
								
							</div>
						</div>
						
					</div>
				</div>
				<div style="clear:both;"></div>
				
				<div class="db_i_comcont">
					<div class="db_i_comment">
						<div class="editmpscore" id="ratingDownRegion">
							<div class="db_gradetool">
								<em class="db_radius"></em>
								<div class="per_userbox new_userbox">
									<div class="per_usergrade">
										<div class="per_userimg" id="userHeadRegion">
											<a href="#" target="_blank" style="color:#fff;">
												<?php if($_SESSION['member_login'] == 1): ?><img src="/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>" width="58" height="58">
												<?php else: ?>
													<img src="/mtime/Public/Home/images/nm.gif" width="58" height="58"><?php endif; ?>
												<p class="mt6">
													<?php if($_SESSION['member_login'] == 1): ?><span><?php echo ($_SESSION['member_nickname']); ?></span>
													<?php else: ?>
														<span>匿名</span><?php endif; ?>
												</p>
											</a>
										</div>
										<div class="mpscore">
											<div class="mdlr">
												<div class="mdr">
													<div class="looktool">
														<span>我要评分</span>
													</div>
													<div class="per_totalarea01">
														<div class="want">想看</div>
														<div class="demo">
															<div id="function-demo1" class="target-demo"></div>
															<div id="function-hint1" class="hint"></div>
														</div>
														<span style="color:#fff;padding-left:10px;">分项</span>
													</div>
												</div>
											</div>
											
											<div class="p_message">
												<textarea id="tweetBox" placeholder="对影片的简短评论"></textarea>
											</div>
											
											<div class="p_btn">
												<div class="fr">
													<span class="c_fff px14" id="textCountDown">
														<span id="sortCommentlength">0</span>
														<span>/</span>
														<strong>210</strong>
														<span>字</span>
													</span>
													<a href="javascript:;" class="btn_dblue" id="tweetButtonDown">发表</a>
												</div>
												
												<a href="javascript:;" class="memberlogin">
													<b class="ico_white"></b>
													<span>写长影评</span>
												</a>
												<span>|</span>
												<a href="#">
													<b class="ico_add"></b>
													<span>添加观影方式</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="db_comcont new_comcont">
							<div class="main">
								<?php if(empty($mrows)): else: ?>
								<div class="db_mediacom" id="mediaReviewRegion">
									<h4>媒体评论</h4>
									<div class="db_mediatab" id="mediaReviewSlide">
										<div class="db_show">
											<ul id="mediaReviewMenu">
												<?php if(is_array($mrows)): $i = 0; $__LIST__ = $mrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mrow): $mod = ($i % 2 );++$i;?><li><?php echo ($mrow['media_name']); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>
										</div>
									</div>
									<div class="db_mediatxt" id="mediaReviewContent">
										<?php if(is_array($mrows)): $i = 0; $__LIST__ = $mrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mrow): $mod = ($i % 2 );++$i;?><ul class="none">
												<li>
													<p>
														<?php echo ($mrow['media_content']); ?>
													</p>
												</li>
											</ul><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div><?php endif; ?>
								
								<div class="db_longcom" id="reviewRegion">
									<h4>长影评</h4>
									<div class="longcombox">
									<?php if(is_array($lrows)): $i = 0; $__LIST__ = array_slice($lrows,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lrow): $mod = ($i % 2 );++$i;?><dl>
											<dt>
												<span>Top</span>
												<strong><?php echo ($i); ?></strong>
											</dt>
											<dd>
												<h3>
													<a href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>" target="_blank"><?php echo ($lrow['comment_title']); ?></a>
												</h3>
											</dd>
											<dd class="mt20">
												<div class="comboxcont">
													<?php
 echo msubstr(preg_replace('/\s+(\&nbsp\;)*/','',strip_tags(htmlspecialchars_decode($lrow['comment_text']))),0,137,'utf-8'); ?>
													<a href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>" class="px12 ml6" target="_blank">
														<span>全文 </span>
														<span class="gt"></span>
													</a>
												</div>
											</dd>
											
											<dd class="comboxuser">
											
												<div class="db_comtool fr">
													<a class="com_good" title="赞" href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>#reviewRegion">
														<i title="赞"></i>
														<span><?php echo ($lrow['comment_zs']); ?></span>
													</a>
													<a class="com_share" title="转发" href="javascript:;">
														<i title="转发"></i>
														<span>0</span>
													</a>
													<a class="com_bbs" title="评论" href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>#commentRegion">
														<i title="评论"></i>
														<span><?php echo ($lrow['replaynum']); ?></span>
													</a>
												</div>
												
												<div class="pic_58">
													<a href="javascript:;" target="_blank">
														<img src="/mtime/Public/<?php echo ($lrow['member_pic']); ?>" width="48" height="48">
													</a>
													<p class="px14 pt6">
														<a href="javascript:;" target="_blank"><?php echo ($lrow['member_nickname']); ?></a>
													</p>
													<p class="mt6">
														<a href="javascript:;"><?php echo (date("Y-m-d H:i",$lrow['comment_time'])); ?></a>
														 看过 - 评分
														 <span class="db_point ml6"><?php echo ($lrow['comgrade_grade']); ?>.0<span>
													</p>
												</div>
											</dd>
										</dl><?php endforeach; endif; else: echo "" ;endif; ?>
										<p class="tc">
											<a href="javascript:;" id="moreReviewsLink" class="btn_plots">
												<span>显示更多 </span>
												<i class="down"></i>
											</a>
										</p>
										<div id="moreReviewsDiv" style="display:none;">
											<?php if(is_array($lrows)): $i = 0; $__LIST__ = array_slice($lrows,2,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lrow): $mod = ($i % 2 );++$i;?><dl>
													<dd>
														<h3>
															<a href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>" target="_blank"><?php echo ($lrow['comment_title']); ?></a>
														</h3>
													</dd>
													<dd class="mt20">
														<div class="comboxcont">
															<?php
 echo msubstr(preg_replace('/\s+(\&nbsp\;)*/','',strip_tags(htmlspecialchars_decode($lrow['comment_text']))),0,137,'utf-8'); ?>
															<!-- 		preg_replace('/\s+(\&nbsp\;)*/','',msubstr(strip_tags(htmlspecialchars_decode($lrow['comment_text'])),0,137,'utf-8'));
															-->
															<!--<?php echo (msubstr(strip_tags(htmlspecialchars_decode($lrow['comment_text'])),0,137)); ?>-->
															<a href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>" class="px12 ml6" target="_blank">
																<span>全文 </span>
																<span class="gt"></span>
															</a>
														</div>
													</dd>
													
													<dd class="comboxuser">
													
														<div class="db_comtool fr">
															<a class="com_good" title="赞" href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>#reviewRegion">
																<i title="赞"></i>
																<span><?php echo ($lrow['comment_zs']); ?></span>
															</a>
															<a class="com_share" title="转发" href="javascript:;">
																<i title="转发"></i>
																<span>0</span>
															</a>
															<a class="com_bbs" title="评论" href="/mtime/index.php/Home/Comment/longcommentdetail/comid/<?php echo ($lrow['comment_id']); ?>#commentRegion">
																<i title="评论"></i>
																<span><?php echo ($lrow['replaynum']); ?></span>
															</a>
														</div>
														
														<div class="pic_58">
															<a href="javascript:;" target="_blank">
																<img src="/mtime/Public/<?php echo ($lrow['member_pic']); ?>" width="48" height="48">
															</a>
															<p class="px14 pt6">
																<a href="javascript:;" target="_blank"><?php echo ($lrow['member_nickname']); ?></a>
															</p>
															<p class="mt6">
																<a href="javascript:;"><?php echo (date("Y-m-d H:i",$lrow['comment_time'])); ?></a>
																 看过 - 评分
																 <span class="db_point ml6"><?php echo ($lrow['comgrade_grade']); ?>.0<span>
															</p>
														</div>
													</dd>
												</dl><?php endforeach; endif; else: echo "" ;endif; ?>
											<p class="tr px12 mt15 mr20">
												<a href="/mtime/index.php/Home/Moviedetial/movielongcomment/id/<?php echo ($row['movie_id']); ?>">
													<span class="px20"><?php echo ($lnum); ?></span>
													篇影评 
													<i class="gt"></i>
												</a>
											</p>
										</div>
									</div>
								</div>
								
								<div class="db_shortcomment">
									<h4>短影评</h4>
									
									<dl id="tweetRegion">
									<?php if(is_array($srows)): $i = 0; $__LIST__ = array_slice($srows,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$srow): $mod = ($i % 2 );++$i;?><dd>
											<div class="mod_short">
												<h3><?php echo ($srow['comment_text']); ?></h3>
												<div class="comboxuser">
													<div class="pic_58">
														<a href="#" title="<?php echo ($srow['member_nickname']); ?>" target="_blank">
															<img src="/mtime/Public/<?php echo ($srow['member_pic']); ?>" width="48" height="48" alt="<?php echo ($srow['member_nickname']); ?>">
														</a>
														<p class="px14">
															<a href="#" target="_blank"><?php echo ($srow['member_nickname']); ?></a>
														</p>
														<p class="mt6 px12">
															<span>看过 </span>
															<span class="db_point ml6"><?php echo ($srow['grade']['comgrade_grade']); ?>.0</span>
														</p>
													</div>
													<div class="mt10 pr5">
														<a href="javascript:;"><?php echo (date("Y-n-d",$srow['comment_time'])); ?></a>
													</div>
												</div>
												<div class="mt18">
													<div class="ele_replay">
														<div class="textarea">
															<textarea placeholder="发表评论" class="tex"></textarea>
															<span style="display:none;" class="commentid"><?php echo ($srow['comment_id']); ?></span>
														</div>
														<div class="db_comtool tr mt20">
															<a class="com_good reviewRegion" title="赞" href="javascript:;">
																<i title="赞"></i>
																<span><?php echo ($srow['comment_zs']); ?></span>
															</a>
															<a class="com_share" title="转发" href="javascript:;">
																<i title="转发"></i>0
															</a>
															<a class="com_bbs" title="评论" href="javascript:;">
																<i title="评论"></i><?php echo ($srow['repnum']); ?>
															</a>
														</div>
														<div class="mt6 tjhf" style="display:none;">
															<span class="kztext">
																还可以输入
																<span id="zs">210</span>
																个字
															</span>
															<span class="hf">回复</span>
														</div>
													</div>
												</div>
												<div class="newcomment">
													
												</div>
											</div>
											
										</dd><?php endforeach; endif; else: echo "" ;endif; ?>
									</dl>
									<div class="p20" id="tweetBottomDiv">
										<p class="line_dot"></p>
										<p class="tr mt9">
											<a href="/mtime/index.php/Home/Moviedetial/moviesortcomment/id/<?php echo ($row['movie_id']); ?>" target="_blank">
												<span>查看更多 </span>
												<span class="gt"></span>
											</a>
										</p>
									</div>
									
								</div>
								
							</div>
							
							
							<div class="aside">
								<div class="db_inewsbox">
									<div class="db_inews">
										<h4>最新资讯</h4>
										<dl>
											<dt>
												<div class="imgbox">
													<a href="#" target="_blank" title="《碟中谍5》内地票房下滑严重 '小黄人'2亿紧随其后 '像素大战'表现不俗">
														<img src="/mtime/Public/Home/images/news/1.jpg" width="261" height="150" alt="《碟中谍5》内地票房下滑严重 '小黄人'2亿紧随其后 '像素大战'表现不俗">
													</a>
													<div class="jies">
														<i class="bg"></i>
														<h3><span style="color:#333;">《碟中谍5》内地票房下滑严重 "小黄人"2亿紧随其..</span></h3>
													</div>
												</div>
												<p class="mt9">
													上周票房，《碟中谍5：神秘国度》相比首周严重失血，但仍以2.16亿惊险卫冕；挑战者《小黄人大眼萌..
												</p>
											</dt>
											<dd>
												<a href="#" target="_blank">
													《碟中谍5》无悬念登顶内地票房 《小黄人..
												</a>
											</dd>
											<dd>
												<a href="#" target="_blank">
													《碟中谍5》无悬念登顶内地票房 《小黄人..
												</a>
											</dd>
										</dl>
										<p class="tr mt6">
											<a href="#" target="_blank">
												<span>更多新闻资讯 </span>
												<span class="gt"></span>
											</a>
										</p>
									</div>
								</div>
								
								<div class="mb12">
									<img src="/mtime/Public/Home/images/shops/1.jpg">
								</div>
								<?php if(empty($grow['guess_id'])): else: ?>
									<form action="#" method="post" id="GuessMovie">
										<div class="guessfilm">
											<h4>猜电影</h4>
											<div class="guessbox">
												<dl>
													<dt>
														<a href="javascript:;" target="_blank">
															<img src="/mtime/Public/<?php echo ($grow['guess_pic']); ?>" width="260">
														</a>
													</dt>
													<dd>
														<p><?php echo ($grow['guess_title']); ?></p>
														<ul>
															<li>
																<input type="radio" name="MtimeGameAPIOptionValue" id="630929">
																<label for="630929"><?php echo ($grow['guess_sel1']); ?></label>
															</li>
															<li>
																<input type="radio" name="MtimeGameAPIOptionValue" id="630930">
																<label for="630930"><?php echo ($grow['guess_sel2']); ?></label>
															</li>
															<li>
																<input type="radio" name="MtimeGameAPIOptionValue" id="630931">
																<label for="630931"><?php echo ($grow['guess_sel3']); ?></label>
															</li>
															<li>
																<input type="radio" name="MtimeGameAPIOptionValue" id="630932">
																<label for="630932"><?php echo ($grow['guess_sel4']); ?></label>
															</li>
														</ul>
														<div class="btns">
															<input type="button" name="MTimeGamePlayButton" value="提交" id="MtimeGameAPIForm" class="btn_dblue">
														</div>
													</dd>
												</dl>
											</div>
										</div>
									</form><?php endif; ?>
								
								
								<div class="db_popmod2"></div>		
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b">
				<a class="a">aaa</a>
			</div>
								
			<!--尾部-->
			<div id="bottom">
				<div class="footout">
					<span class="topline"></span>
					<div class="footinner">
						<div class="fotlogo">
							<dl>
								<dt>
									<a href="#" title="Mtime时光网">Mtime时光网</a>
								</dt>
								<dd>
									<a href="#">加入我们</a>
									<a href="#" class="ml30">联系我们</a>
								</dd>
								<dd>
									<a href="#">站务论坛</a>
									<a href="#" class="ml30">问题反馈</a>
								</dd>
								<dd>
									<a href="#">社区准则</a>
									<a href="#" class="ml30">网站地图</a>
								</dd>
							<dl>
							<i class="line"></i>
						</div>
						
						<div class="fotmap">
							<dl style="width:42px;">
								<dt>栏目</dt>
								<dd>
									<a href="#">首页</a>
								</dd>
								<dd>
									<a href="#">新闻</a>
								</dd>
								<dd>
									<a href="#">影院</a>
								</dd>
								<dd>
									<a href="#">社区</a>
								</dd>
							</dl>
							<dl style="width:185px;" class="tj">
								<dt>推荐</dt>
								<dd>
									<a href="#">电影热榜</a>
									<a href="#">全球新片</a>
								</dd>
								<dd>
									<a href="#">时光对话</a>
									<a href="#">典藏佳片</a>
								</dd>
								<dd>
									<a href="#">新片预告</a>
									<a href="#">电影节</a>
								</dd>
								<dd>
									<a href="#">时光周刊</a>
									<a href="#">卡片大富翁</a>
								</dd>
							</dl>
							<dl>
								<dt>关注我们</dt>
								<dd>
									<a href="http://weibo.com/movietime?topnav=1&wvr=5&topsug=1" target="_blank" class="sina" title="新浪">新浪</a>
								</dd>
								<dd>
									<a href="javascript:;" target="_blank" class="weixin" title="微信">微信</a>
								</dd>
								<dd>
									<a href="http://www.mtime.com/rss/" target="_blank" class="rss" title="RSS">RSS</a>
								</dd>
							</dl>
						</div>
						
						<div class="fotweek">
							<dl>
								<dt>
									<span class="fr">第156期</span>
									<strong>时光周刊</strong>
								</dt>
								<dd>
									<a href="#" target="_blank" title="时光周刊">
										<img src="/mtime/Public/Home/images/gyzn.jpg" width="170px" alt="时光周刊">
									</a>
								</dd>
								<dd class="input">
									<input type="text" id="iptEMail" value="" placeholder="邮箱地址" class="c_a5">
									<a href="javascript:;" id="btnSubscribe">订阅</a>
								</dd>
							</dl>
						</div>
						
						<div class="fothr">
							<dl>
								<dt>
									<strong>手机购票</strong> 方便 实惠
								</dt>
								<dd>
									<a href="http://feature.mtime.com/mobile/" target="_blank">
										<i></i>
									</a>
								</dd>
								<dd>扫描二维码 下载客户端</dd>
							</dl>
						</div>
					</div>
				</div>
				
				<div class="db_foot">
					<p>
						<span style="margin-right:370px;">
							<span class="mr12">北京动艺时光网络科技有限公司</span>
							Copyright 2006-2015 Mtime.com Inc. All rights reserved.
						</span>
						<br/>
						<a href="http://feature.mtime.com/help/icp.htm" target="_blank" class="mr12 ml12">京ICP证050715号</a>
						<a href="http://feature.mtime.com/help/videolicence.htm" target="_blank" class="mr12">网络视听许可证0108265号</a>
						<a href="http://feature.mtime.com/help/network.htm" target="_blank" class="mr12">网络文化经营许可证</a>
						<a href="http://feature.mtime.com/help/tvlicence.htm" target="_blank" class="mr12">广播电视节目制作经营许可证(京)字第1435号</a>
						<span>京公网安备：110105000744号</span>
					</p>
					<div class="credible">  
						<a href="http://feature.mtime.com/help/credible.htm" target="_blank" title="可信网站" class="credibler"></a>
						<a href="http://feature.mtime.com/help/goodfaith.htm" target="_blank" title="诚信网站" class="goodfaith"></a>
					</div>
				</div>
			</div>
			<!--尾部 end-->			
			
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="xzpf">
			<a id="pfcloseButton" class="i_pop_close pfcloseButton" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">请选择评分</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 pfcloseButton">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="tishidl">
			<a id="tiplogin" class="i_pop_close tiplogin" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">请先登录！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 tiplogin">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="texttishi">
			<a id="textnum" class="i_pop_close textnum" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">您输入的字数过长！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 textnum">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="textcom">
			<a  class="i_pop_close textcom" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">评论内容不能为空！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 textcom">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="plsuccess">
			<a id="successclose" class="i_pop_close successclose" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">评论成功！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 successclose">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="guesserror">
			<a id="guesserrorclose" class="i_pop_close guesserrorclose" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">答错了，看电影时打瞌睡啦吧！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 guesserrorclose">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="guesssuccess">
			<a id="guesssuccessclose" class="i_pop_close guesserrorclose" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">电影看的真认真，答案正确！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 guesssuccessclose">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div id="overlay" style="opacity: 0.6; zoom: 1; z-index: 110; position: fixed; margin: 0px; padding: 0px; top: 0px; left: 0px; width: 100%; height: 100%; background: rgb(0, 0, 0);display:none;"></div>
	</body>
	<script>
	//textarea区域自适应高度
	autosize(document.querySelectorAll('.tex'));
	
	$(".mr_frbox").slide({
		titCell: "",
		mainCell: ".mr_frUl ul",
		autoPage: true,
		effect: "leftLoop",
		autoPlay: false,
		vis: 6
	});
	
     
	$('#function-demo1').raty({
	  	number: 10,//多少个星星设置
		score: "<?php echo ($comnum['comgrade_grade']); ?>",//初始值是设置
		targetType: 'number',//类型选择，number是数字值，hint，是设置的数组值
        path      : '/mtime/Public/Home/images/',
        size      : 14,
        starOff   : '1.jpg',
        starOn    : '2.jpg',
        target    : '#function-hint1',
        cancel    : false,
        targetKeep: true,
        precision : false,//是否包含小数  
      });   
	  
	 $("#detailMenuRegion").hover(
		function(){
			$(this).addClass("onmouse");
			$(".db_nav dt.more em").css({"background-position":"-59px -15px"});
			$("#detailSubMenuRegion").show();
		},
		function(){
			$(this).removeClass("onmouse");
			$(".db_nav dt.more em").css({"background-position":"-86px -15px"});
			$("#detailSubMenuRegion").hide();
		}
	);
	

		
	$('.progressbar').each(function(){
		var t = $(this),
		dataperc = t.attr('data-perc'),
		barperc = Math.round(dataperc*1.26);
		t.find('.bar').animate({width:barperc}, dataperc*25);
	});
	

$(".fl").children("span:last").hide();

$("#mediaReviewMenu").children("li:first").addClass("on");
$("#mediaReviewContent").children("ul:first").removeClass("none");
$("#mediaReviewMenu li").mouseenter(function(){
	$("#mediaReviewMenu li").removeClass("on");
	$(this).addClass("on");
	index = $(this).index("#mediaReviewMenu li");
	$("#mediaReviewContent ul").addClass("none");
	$("#mediaReviewContent ul").eq(index).removeClass("none");
});

//进行长影评发表前判断用户是否登录
$(".memberlogin").click(function(){
	var mid = <?php echo ($row['movie_id']); ?>;
	var pf = $("#example-a").val();
	var dl=<?php echo ($_SESSION['member_login']?"1":"0"); ?>;
	if(dl==1){
		if(!!pf){
			$(this).attr({"href":"/mtime/index.php/Home/Comment/longcomment/mid/"+mid+"/pf/"+pf});
		}else{
			$("#xzpf").show();
			$("#overlay").show();
		}
	}else{
		$("#tishidl").show();
		$("#overlay").show();
	}
	
});


$(".pfcloseButton").click(function(){
	$("#xzpf").hide();
	$("#overlay").hide();
});

$(".tiplogin").click(function(){
	$("#tishidl").hide();
	$("#overlay").hide();
});

$(".textcom").click(function(){
	$("#textcom").hide();
	$("#overlay").hide();
});

$(".textnum").click(function(){
	$("#texttishi").hide();
	$("#overlay").hide();
});

$(".successclose").click(function(){
	$("#plsuccess").hide();
	$("#overlay").hide();
});

$(".guesserrorclose").click(function(){
	$("#guesserror").hide();
	$("#overlay").hide();
});

$(".guesssuccessclose").click(function(){
	$("#guesssuccess").hide();
	$("#overlay").hide();
});



$("#moreReviewsLink").click(function(){
	$(this).hide();
	$("#moreReviewsDiv").show();
});

$("#tweetBox").keyup(function(){
	var len = $(this).val().length;
	$("#sortCommentlength").text(len);
	if(len>210){
		$(this).css({"background":"rgb(253, 153, 153)"});
		$("#sortCommentlength").css({"color":"red"});
	}else{
		$(this).css({"background":"#fff"});
		$("#sortCommentlength").css({"color":"#fff"});
	}
});

$("#tweetButtonDown").click(function(){
	var grade = $("#function-hint1").text();
	var textcont = $("#tweetBox").val();
	var mid = <?php echo ($row['movie_id']); ?>;
	var dl=<?php echo ($_SESSION['member_login']?"1":"0"); ?>;
	var len = $("#tweetBox").val().length;
	if(dl==1){
		if(len<=210){
			if(!!grade){
				if(!!textcont){
					$.ajax({
						'type':'get',
						'url':"/mtime/index.php/Home/Comment/sortcomment",
						'data':{'comment_grade':grade,'comment_text':textcont,'comment_mid':mid},
						'async':false,
						'success':function(d){
							if(!!d){
								var str = "<dd><div class='mod_short'><h3>"+textcont+"</h3><div class='comboxuser'><div class='pic_58'><a href='javascript:;' title='<?php echo ($_SESSION['member_nickname']); ?>' target='_blank'><img src='/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>' width='48' height='48' alt='<?php echo ($_SESSION['member_nickname']); ?>'></a><p class='px14'><a href='javascript:;' target='_blank'><?php echo ($_SESSION['member_nickname']); ?></a></p><p class='mt6 px12'><span>看过 </span><span class='db_point ml6'>"+grade+'.0'+"</span></p></div><div class='mt10 pr5'><a href='javascript:;'>刚刚</a></div></div><div class='mt18'><div class='ele_replay'><div class='textarea'><textarea placeholder='发表评论' class='tex'></textarea><span style='display:none;' class='commentid'>"+d+"</span></div><div class='db_comtool tr mt20'><a class='com_good' title='赞' href='javascript:;'><i title='赞'></i><span style='padding:0 2px;'>0</span></a><a class='com_share' title='转发' href='javascript:;'><i title='转发'></i><span style='padding:0 2px;'>0</span></a><a class='com_bbs' title='评论' href='javascript:;'><i title='评论'></i><span style='padding:0 2px;'>0</span></a></div><div class='mt6 tjhf' style='display:none;'><span class='kztext'>还可以输入<span id='zs'>210</span>个字</span><span class='hf'>回复</span></div></div></div><div class='newcomment'></div></div></dd>";
								
								$("#tweetRegion").prepend(str);
								
								$("#tweetBox").val("");
								$("#plsuccess").show();
								$("#overlay").show();
							}
						}
					});
				}else{
					alert("内容不能为空");
				}
			}else{
				$("#xzpf").show();
				$("#overlay").show();
			}
		}else{
			$("#texttishi").show();
			$("#overlay").show();
		}
	}else{
		$("#tishidl").show();
		$("#overlay").show();
	}
});

$(".tex").live("keyup",function(){
	var len = $(this).val().length;
	if(len>210){
		var l = len-210;
		str = "字数超出"+l+"字";
		$(this).parent().next().next().children(".kztext").text(str).css({"color":"#ca4004"});
	}else{
		var leng = 210-len;
		var s = "还可以输入 "+leng+" 个字";
		$(this).parent().next().next().children(".kztext").text(s).css({"color":"#333"});
	}
});

$(".hf").live("click",function(){
	obj = $(this);
	var dl=<?php echo ($_SESSION['member_login']?"1":"0"); ?>;
	var len = $(this).parent().prev().prev().children().eq(0).val().length;
	var cid = $(this).parent().prev().prev().children().eq(1).text();
	var textcont = $(this).parent().prev().prev().children().eq(0).val();
	if(dl==1){
		if(len<=210){
			$.ajax({
				'type':'get',
				'url':"/mtime/index.php/Home/Comment/recomment",
				'data':{'recomment_text':textcont,'recomment_cid':cid},
				'async':false,
				'success':function(a){		
					if(a==1){
						var str = "<div class='pic_32 mt20'><a href='javascript:;'><img width='32' height='32' src='/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>' alt='<?php echo ($_SESSION['member_nickname']); ?>'></a><p class='px14'><a href='javascript:;' target='_blank'><?php echo ($_SESSION['member_nickname']); ?></a><span class='pl25' style='font-size:12px;'>刚刚</span></p><p class='mt5'>"+textcont+"</p></div>";

						
						obj.parent().parent().parent().next().append(str);
						
						obj.parent().prev().prev().children().eq(0).val("");
						
						obj.prev().text("还可以输入 210 个字");
						$("#plsuccess").show();
						$("#overlay").show();
					}
				}
			});
		}else{
			$("#texttishi").show();
			$("#overlay").show();
		}
	}else{
		$("#tishidl").show();
		$("#overlay").show();
	}
});


$(".reviewRegion").click(function(){
	obj = $(this);
	var val = parseInt($(this).children().eq(1).html())+1;
	id = $(this).parent().prev().children().eq(1).html();;
	
	$.ajax({
		'type':'get',
		'url':"/mtime/index.php/Home/Comment/updatedz",
		'data':{'comment_zs':val,'comment_id':id},
		'async':false,
		'success':function(d){
			if(d=='1'){
				obj.children().eq(1).html(val);
			}
		}
	});
});


$("#MtimeGameAPIForm").click(function(){
	var dl = <?php echo ($_SESSION['member_login']?'1':'0'); ?>;
	var gid = <?php echo ($grow['guess_id']? $grow['guess_id']:"0"); ?>;
	if(!!gid){
		var guessid = gid;
	};
	if(dl==1){
		t = $("#GuessMovie input:checked").next().text();
		$.ajax({
			'type':'get',
			'url':'/mtime/index.php/Home/Movie/guessmovie',
			'data':{'result':t,'guessid':guessid},
			'async':false,
			'success':function(d){
				if(d==1){
					$("#guesssuccess").show();
					$("#overlay").show();
				}else{
					$("#guesserror").show();
					$("#overlay").show();
				}
			}
		});
	}else{
		$("#tishidl").show();
		$("#overlay").show();
	}
});		
	
	
	

	

	</script>
</html>