<?php $us_name = cs_get_option('zyme_bloger_user');
$user = get_user_by('login', $us_name);
?>
<div id="sidebar">
	<ul>
		<li class="zyme-item">
			<div class="card-bg"></div>
			<div class="card-info">
				<?php if ($user) {
					echo get_avatar($user->ID, '100');
				} ?>
				<span class="card-info-block card-info-name"><?php echo $user->display_name ?></span>
			</div>
			<div class="catch-me">
				<a data-content="Rss" data-balloon-pos="up" target="_blank" href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="zyme zyme-rss"></i></a>
				<?php if (cs_get_option('zyme_qq')) { ?>
					<a data-content="QQ" data-balloon-pos="up" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo cs_get_option('zyme_qq'); ?>&site=qq&menu=yes" rel="nofollow"><i class="zyme zyme-qq"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_qqqun')) { ?>
					<a data-content="QQ群" data-balloon-pos="up" target="_blank" href="<?php echo cs_get_option('zyme_qqqun'); ?>" rel="nofollow"><i class="zyme zyme-qqqun"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_weibo')) { ?>
					<a data-content="微博" data-balloon-pos="up" target="_blank" href="<?php echo cs_get_option('zyme_weibo'); ?>" rel="nofollow"><i class="zyme zyme-weibo"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_github')) { ?>
					<a data-content="GitHub" data-balloon-pos="up" target="_blank" href="<?php echo cs_get_option('zyme_github'); ?>" rel="nofollow"><i class="zyme zyme-github"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_email')) { ?>
					<a data-content="Email" data-balloon-pos="up" target="_blank" href="mailto:<?php echo cs_get_option('zyme_email'); ?>" rel="nofollow"><i class="zyme zyme-email"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_zhihu')) { ?>
					<a data-content="知乎" data-balloon-pos="up" target="_blank" href="<?php echo cs_get_option('zyme_zhihu'); ?>" rel="nofollow"><i class="zyme zyme-zhihu"></i></a>
				<?php } ?>
				<?php if (cs_get_option('zyme_bilibili')) { ?>
					<a data-content="哔哩哔哩" data-balloon-pos="up" target="_blank" href="<?php echo cs_get_option('zyme_bilibili'); ?>" rel="nofollow"><i class="zyme zyme-bilibili"></i></a>
				<?php } ?>
			</div>
		</li>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) : ?>
			<li class="zyme-item">
				<header class="zyme-item-header">
					<h3 class="sidebar-default-icon zyme-item-title">我是萌萌哒的侧边栏！</h3>
				</header>
				<div class="textwidget">
					<p>我是你的第一个侧边栏！快去小工具里面添加组件吧！</p>
				</div>
			</li>
		<?php endif; ?>
	</ul>
	<div id="foot">
		
		<p>版权所有 © <?php if (cs_get_option('zyme_copyright') != null) echo cs_get_option('zyme_copyright'); ?> <a href="<?php echo get_option('siteurl'); ?>"><?php bloginfo('name'); ?></a> <?php if (cs_get_option('zyme_record') != null) { ?> | <a href="http://www.miitbeian.gov.cn"><?php echo cs_get_option('zyme_record'); ?></a> <?php } ?><br />Theme <a class="theme" href="https://shawnzeng.com/wordpress-theme-zyme.html" target="_blank">zyme</a> By <a href="https://shawnzeng.com" target="_blank">Shawn</a> With <i class="zyme zyme-heart throb"></i> | All Rights Reserved<br /><span class="my-face">(●'◡'●)ﾉ</span>本博客已萌萌哒运行了<span id="span_dt_dt"></span></p>
	</div>
</div>