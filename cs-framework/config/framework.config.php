<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Zyme',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Wordpress Theme Zyme <small>by <a href="http://zyme.live">Zyme</a></small> V'.wp_get_theme()->get('Version'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();
// Just get the display name of users (e.g John Smith)

$user_names = array();
$all_users = get_users( array( 'fields' => array( 'user_login' ) ) );
foreach ( $all_users as $user ):
  $user =  esc_html( $user->user_login );
  $user_names[ $user ] = $user; 
endforeach;

$options[] = array(
  // 'name'   => 'zyme_seperator_1',
  'title'  => '主题设置',
  'icon'   => 'fa fa-cog'
);


// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'zyme_base_config',
  'title'       => '基础设置',
  'icon'        => 'fa fa-institution',
  'fields'      => array(
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => '这部分内容为博主的相关信息。',
    ),
	array(
      'id'      => 'zyme_bloger_user',
      'type'    => 'select',
      'title'   => '博主',
      'options' => $user_names,
	 ),
    array( 
      'id'      => 'zyme_start_time', 
      'type'    => 'text', 
      'title'   => '博客建立日期', 
      'attributes' => array( 'type' => 'date', ), 
      'default' =>  date('Y-m-d',time()),
    ),
    array(
      'id'      => 'zyme_description',
      'type'    => 'text',
      'title'   => '博客的描述',
    ),
    array(
      'id'      => 'zyme_keywords',
      'type'    => 'text',
      'title'   => '关键词',
      'desc'    => '博客的关键词，用英文逗号分割。',
    ),
    array(
      'id'      => 'zyme_record',
      'type'    => 'text',
      'title'   => '备案号',
      'desc'    => '展现在主题页脚的备案号。',
      'default' => '未备案',
    ),
    array(
      'id'      => 'zyme_copyright',
      'type'    => 'text',
      'title'   => 'Copyright',
      'desc'    => '展现在主题页脚的©符号后面的内容。',
      'default' =>  date('Y',time()),
    ),
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => '这部分内容为博客部分功能的设置。',
    ),    
    array(
      'id'        => 'zyme_post_image',
      'type'      => 'image',
      'title'     => '文章默认配图',
      'default'   => get_template_directory_uri() .'/img/default_bg.jpg',
      'validate'  => 'required',
      'desc'      => '首页的文章配图，必填项。',
    ),
    array(
      'id'        => 'zyme_alipay_image',
      'type'      => 'image',
      'title'     => '支付宝打赏二维码',
    ),
    array(
      'id'        => 'zyme_wechat_image',
      'type'      => 'image',
      'title'     => '微信打赏二维码',
    ),

  ), // end: fields
);

$options[]   = array(
  'name'     => 'zyme-social-info',
  'title'    => '社交信息',
  'icon'     => 'fa fa-address-book',
  'fields'   => array(
    array(
      'id'      => 'zyme_qq',
      'type'    => 'text',
      'title'   => 'QQ号',
      'desc'    => '您的QQ号，默认会自动为您生成添加链接，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_email',
      'type'    => 'text',
      'title'   => '邮箱地址',
      'desc'    => '您的邮箱地址，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_qqqun',
      'type'    => 'text',
      'title'   => 'QQ群加群链接',
      'desc'    => 'QQ群加群链接，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_weibo',
      'type'    => 'text',
      'title'   => '微博链接',
      'desc'    => '微博链接，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_github',
      'type'    => 'text',
      'title'   => 'Github地址',
      'desc'    => 'Github地址，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_zhihu',
      'type'    => 'text',
      'title'   => '知乎地址，',
      'desc'    => '知乎地址，如不填写则不显示该项。',
    ),
    array(
      'id'      => 'zyme_bilibili',
      'type'    => 'text',
      'title'   => '哔哩哔哩个人空间链接地址',
      'desc'    => '哔哩哔哩个人空间链接地址，如不填写则不显示该项。',
    ),
  )
);

$options[]      = array(
  'name'        => 'zyme_style_config',
  'title'       => '布局样式',
  'icon'        => 'fa fa-dashboard',
  'fields'      => array(
    array(
      'id'      => 'zyme_breadcrumbs',
      'type'    => 'switcher',
      'title'   => '面包屑导航',
      'desc'    => '开启该功能后会在页面（除首页外）头部出现一个模块用于显示你当前所在位置。有利于归档，请尽量开启。',
    ),
    array(
      'id'      => 'zyme_opacity',
      'type'    => 'text',
      'title'   => '模块透明度',
      'default' => '1',
      'desc'    => '模块透明度，取值0~1，默认不透明，值为1，取0则完全透明。',
    ),
    array(
      'id'    => 'zyme_background',
      'type'  => 'background',
      'title' => '背景图片',
      'desc'  => '可自行调整样式，如不选择图片则使用颜色填充，您可以在颜色选择器内选择背景色，默认#f5f5f5。',
      'help'  => '存在疑问？请查询css背景样式相关知识。',
      'default' => array(
          'image'      => '',
          'repeat'     => 'no-repeat',
          'position'   => 'center center',
          'attachment' => 'scroll',
    	  'size'       => 'cover',
          'color'      => '#f5f5f5',
      ),
    ),
    array(
      'id'      => 'zyme_certify_color',
      'type'    => 'color_picker',
      'title'   => '认证图标颜色',
      'default' => '#ffba50',
      'desc'    => '认证图标颜色，推荐#49c7ff和#ffba50。',
    ),
    array(
      'id'      => 'zyme_footer_color',
      'type'    => 'color_picker',
      'title'   => '页脚字体颜色',
      'default' => '#000',
      'desc'    => '页脚字体颜色，默认黑色。',
    ),
    array(
      'id'    => 'zyme_card_background',
      'type'  => 'background',
      'title' => 'PC端名片背景图',
      'desc'  => '可自行调整样式，如不选择图片则默认用颜色填充。',
      'help'  => '存在疑问？请查询css背景样式相关知识。',
      'default' => array(
          'image'      => get_template_directory_uri() .'/img/default_bg.jpg',
          'repeat'     => 'no-repeat',
          'position'   => 'center center',
          'attachment' => 'scroll',
    	  'size'       => 'cover',
          'color'      => '#f5f5f5',
      ),
    ),
    array(
      'id'    => 'zyme_user_css',
      'type'  => 'textarea',
      'title' => '自定义css',
    ),    
    array(
      'id'    => 'zyme_user_js',
      'type'  => 'textarea',
      'title' => '自定义js',
      'desc'  => '注：本主题使用jQuery版本为3.2.1。',
    ),
  ), // end: fields
);

$options[]      = array(
  'name'        => 'zyme_comment_config',
  'title'       => '评论设置',
  'icon'        => 'fa fa-comments',
  'fields'      => array(
    array(
      'id'      => 'zyme_comment_edit',
      'type'    => 'switcher',
      'default' =>  true,
      'title'   => '评论再编辑功能',
      'label'   => '开启该功能后评论提交10秒内可以再次进行编辑',
    ),
    array(
      'id'        => 'zyme_comment_avatar',
      'type'      => 'image',
      'title'     => '评论默认头像',
      'default'   => get_template_directory_uri() .'/img/comment-avatar.png',
      'desc'      => '评论默认头像，设置完后还需到仪表盘设置->讨论中选择默认头像方可生效。',
    ),
  )
);

$options[]   = array(
  'name'     => 'iconchosen',
  'title'    => '自选图标',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '自选图标'
    ),
    array(
      'type'    => 'content',
      'content' => '<ul class="icon_lists clear"><li><i class="zyme zyme-baidu"></i> .zyme-baidu</li><li><i class="zyme zyme-coffee"></i> .zyme-coffee</li><li><i class="zyme zyme-Facebook"></i> .zyme-Facebook</li><li><i class="zyme zyme-404"></i> .zyme-404</li><li><i class="zyme zyme-ipad"></i> .zyme-ipad</li><li><i class="zyme zyme-sun"></i> .zyme-sun</li><li><i class="zyme zyme-android"></i> .zyme-android</li><li><i class="zyme zyme-fire"></i> .zyme-fire</li><li><i class="zyme zyme-download"></i> .zyme-download</li><li><i class="zyme zyme-search"></i> .zyme-search</li><li><i class="zyme zyme-man"></i> .zyme-man</li><li><i class="zyme zyme-woman"></i> .zyme-woman</li><li><i class="zyme zyme-linkedin"></i> .zyme-linkedin</li><li><i class="zyme zyme-rss"></i> .zyme-rss</li><li><i class="zyme zyme-tencentweibo"></i> .zyme-tencentweibo</li><li><i class="zyme zyme-google"></i> .zyme-google</li><li><i class="zyme zyme-touxian"></i> .zyme-touxian</li><li><i class="zyme zyme-qqzone"></i> .zyme-qqzone</li><li><i class="zyme zyme-novel"></i> .zyme-novel</li><li><i class="zyme zyme-bck"></i> .zyme-bck</li><li><i class="zyme zyme-douban"></i> .zyme-douban</li><li><i class="zyme zyme-iphone"></i> .zyme-iphone</li><li><i class="zyme zyme-throwout"></i> .zyme-throwout</li><li><i class="zyme zyme-tag"></i> .zyme-tag</li><li><i class="zyme zyme-twitter"></i> .zyme-twitter</li><li><i class="zyme zyme-github"></i> .zyme-github</li><li><i class="zyme zyme-ie"></i> .zyme-ie</li><li><i class="zyme zyme-expand"></i> .zyme-expand</li><li><i class="zyme zyme-link"></i> .zyme-link</li><li><i class="zyme zyme-more-o"></i> .zyme-more-o</li><li><i class="zyme zyme-location"></i> .zyme-location</li><li><i class="zyme zyme-tags"></i> .zyme-tags</li><li><i class="zyme zyme-heart"></i> .zyme-heart</li><li><i class="zyme zyme-math"></i> .zyme-math</li><li><i class="zyme zyme-rocket"></i> .zyme-rocket</li><li><i class="zyme zyme-nickname"></i> .zyme-nickname</li><li><i class="zyme zyme-about"></i> .zyme-about</li><li><i class="zyme zyme-comment"></i> .zyme-comment</li><li><i class="zyme zyme-edit"></i> .zyme-edit</li><li><i class="zyme zyme-menu"></i> .zyme-menu</li><li><i class="zyme zyme-logout"></i> .zyme-logout</li><li><i class="zyme zyme-trash"></i> .zyme-trash</li><li><i class="zyme zyme-settings"></i> .zyme-settings</li><li><i class="zyme zyme-diandian"></i> .zyme-diandian</li><li><i class="zyme zyme-view"></i> .zyme-view</li><li><i class="zyme zyme-fish"></i> .zyme-fish</li><li><i class="zyme zyme-reply"></i> .zyme-reply</li><li><i class="zyme zyme-mac"></i> .zyme-mac</li><li><i class="zyme zyme-weihu"></i> .zyme-weihu</li><li><i class="zyme zyme-zhifubao"></i> .zyme-zhifubao</li><li><i class="zyme zyme-firefox"></i> .zyme-firefox</li><li><i class="zyme zyme-blacklist"></i> .zyme-blacklist</li><li><i class="zyme zyme-keyword"></i> .zyme-keyword</li><li><i class="zyme zyme-wechat"></i> .zyme-wechat</li><li><i class="zyme zyme-weibo"></i> .zyme-weibo</li><li><i class="zyme zyme-steam"></i> .zyme-steam</li><li><i class="zyme zyme-qq"></i> .zyme-qq</li><li><i class="zyme zyme-kindle"></i> .zyme-kindle</li><li><i class="zyme zyme-heart-o"></i> .zyme-heart-o</li><li><i class="zyme zyme-time"></i> .zyme-time</li><li><i class="zyme zyme-comments"></i> .zyme-comments</li><li><i class="zyme zyme-dot"></i> .zyme-dot</li><li><i class="zyme zyme-maxthon"></i> .zyme-maxthon</li><li><i class="zyme zyme-copyright"></i> .zyme-copyright</li><li><i class="zyme zyme-calendar"></i> .zyme-calendar</li><li><i class="zyme zyme-uc"></i> .zyme-uc</li><li><i class="zyme zyme-hitokoto"></i> .zyme-hitokoto</li><li><i class="zyme zyme-moon"></i> .zyme-moon</li><li><i class="zyme zyme-chrome"></i> .zyme-chrome</li><li><i class="zyme zyme-login"></i> .zyme-login</li><li><i class="zyme zyme-email"></i> .zyme-email</li><li><i class="zyme zyme-dashboard"></i> .zyme-dashboard</li><li><i class="zyme zyme-email-o"></i> .zyme-email-o</li><li><i class="zyme zyme-at"></i> .zyme-at</li><li><i class="zyme zyme-birthday"></i> .zyme-birthday</li><li><i class="zyme zyme-safari"></i> .zyme-safari</li><li><i class="zyme zyme-wordpress"></i> .zyme-wordpress</li><li><i class="zyme zyme-360"></i> .zyme-360</li><li><i class="zyme zyme-QQbrowser"></i> .zyme-QQbrowser</li><li><i class="zyme zyme-sougou"></i> .zyme-sougou</li><li><i class="zyme zyme-qqqun"></i> .zyme-qqqun</li><li><i class="zyme zyme-copy"></i> .zyme-copy</li><li><i class="zyme zyme-certify"></i> .zyme-certify</li><li><i class="zyme zyme-default"></i> .zyme-default</li><li><i class="zyme zyme-classify_icon"></i> .zyme-classify_icon</li><li><i class="zyme zyme-postlist"></i> .zyme-postlist</li><li><i class="zyme zyme-close"></i> .zyme-close</li><li><i class="zyme zyme-bilibili"></i> .zyme-bilibili</li><li><i class="zyme zyme-windows"></i> .zyme-windows</li><li><i class="zyme zyme-opera"></i> .zyme-opera</li><li><i class="zyme zyme-linux"></i> .zyme-linux</li><li><i class="zyme zyme-code"></i> .zyme-code</li><li><i class="zyme zyme-home"></i> .zyme-home</li><li><i class="zyme zyme-category"></i> .zyme-category</li><li><i class="zyme zyme-timeline"></i> .zyme-timeline</li><li><i class="zyme zyme-article"></i> .zyme-article</li><li><i class="zyme zyme-leaf"></i> .zyme-leaf</li><li><i class="zyme zyme-font"></i> .zyme-font</li><li><i class="zyme zyme-dashang"></i> .zyme-dashang</li><li><i class="zyme zyme-zhihu"></i> .zyme-zhihu</li><li><i class="zyme zyme-photo"></i> .zyme-photo</li><li><i class="zyme zyme-top"></i> .zyme-top</li><li><i class="zyme zyme-statistics"></i> .zyme-statistics</li><li><i class="zyme zyme-browser"></i> .zyme-browser</li><li><i class="zyme zyme-share"></i> .zyme-share</li><li><i class="zyme zyme-shangyinhao"></i> .zyme-shangyinhao</li><li><i class="zyme zyme-xiayinhao"></i> .zyme-xiayinhao</li><li><i class="zyme zyme-visitors-o"></i> .zyme-visitors-o</li><li><i class="zyme zyme-yibiaopan"></i> .zyme-yibiaopan</li><li><i class="zyme zyme-visitors"></i> .zyme-visitors</li><li><i class="zyme zyme-emoji"></i> .zyme-emoji</li><li><i class="zyme zyme-site"></i> .zyme-site</li></ul>
',
    ),

  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => '备份还原',
  'icon'     => 'fa fa-shield',
  'fields'   => array(
    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => '您可以在此备份/还原您在本主题的配置信息。',
    ),
    array(
      'type'    => 'backup',
    ),
  )
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'zyme_seperator_2',
  'title'  => '其他信息',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'zyme_author',
  'title'    => '关于作者',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'Shawn'
    ),
    array(
      'type'    => 'content',
      'content' => '关于作者的介绍，目前还没想好要写些啥……',
    ),

  )
);

$options[]   = array(
  'name'     => 'zyme_help',
  'title'    => '使用教程',
  'icon'     => 'fa fa-book',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'zyme主题使用教程'
    ),
    array(
      'type'    => 'content',
      'content' => '<p>请前往<a href="https://shawnzeng.com">作者博客</a>查看，另外请加入zyme主题售后服务群，方便沟通反馈，谢谢！另外，请务必看完教程后再向我咨询，如果教程上已介绍了的问题，我有权拒绝回答。。。</p>',
    ),

  )
);

CSFramework::instance( $settings, $options );
