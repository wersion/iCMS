<?php /**
 * @package iCMS
 * @copyright 2007-2010, iDreamSoft
 * @license http://www.idreamsoft.com iDreamSoft
 * @author coolmoo <idreamsoft@qq.com>
 * @$Id: home.php 2393 2014-04-09 13:14:23Z coolmoo $
 */
defined('iPHP') OR exit('What are you doing?');
iACP::head();
?>
<div class="iCMS-container">
  <div class="row-fluid">
    <div class="span12 center" style="text-align: center;">
      <ul class="quick-actions">
        <li><a href="javascript:;" class="tip" title="开发中..."><i class="icon-calendar"></i>日程管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=article"><i class="icon-survey"></i>文章管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=tags"><i class="icon-tag"></i>标签管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=spider&do=project"><i class="icon-download"></i>采集管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=account&do=user"><i class="icon-people"></i>用户管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=database&do=backup"><i class="icon-database"></i>数据库管理</a></li>
      </ul>
    </div>
  </div>
  <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    欢迎使用iCMS内容管理系统！<strong><?php echo iMember::$data->username;?></strong>。您最后一次登陆时间:<strong><?php echo get_date(iMember::$data->lastlogintime,"Y-n-j H:i:s") ; ?></strong>，IP地址为:<strong><?php echo iMember::$data->lastip; ?></strong>。如有异常请及时排查！ </div>
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-signal"></i> </span>
      <h5>站点数据统计</h5>
    </div>
    <div class="widget-content">
      <div class="row-fluid">
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $acc ; ?></strong> <small>文章栏目</small></li>
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $tac ; ?></strong> <small>标签分类</small></li>
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $pac ; ?></strong> <small>推送分类</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-user"></i> <strong><?php echo $uc ; ?></strong> <small>用户</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-file-text"></i> <strong><?php echo $ac ; ?></strong> <small>文章总数</small></li>
            <li><i class="fa fa-file"></i> <strong><?php echo $ac0 ; ?></strong> <small>草稿</small></li>
            <li><i class="fa fa-file-o"></i> <strong><?php echo $ac2 ; ?></strong> <small>回收站</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-tag"></i> <strong><?php echo $tc ; ?></strong> <small>标签</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-comment"></i> <strong><?php echo $ctc ; ?></strong> <small>评论</small></li>
            <li><i class="fa fa-paperclip"></i> <strong><?php echo $kc ; ?></strong> <small>内链</small></li>
            <li><i class="fa fa-thumb-tack"></i> <strong><?php echo $pc ; ?></strong> <small>推送</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-heart"></i> <strong><?php echo $lc ; ?></strong> <small>友链</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-cloud"></i> <strong><?php echo iFS::sizeUnit($datasize+$indexsize) ; ?></strong> <small>数据库</small></li>
            <li><i class="fa fa-puzzle-piece"></i> <strong><?php echo count($iTable) ; ?></strong><small>iCMS表</small></li>
            <li><i class="fa fa-puzzle-piece"></i> <strong><?php echo count($oTable) ; ?></strong> <small>其它表</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-files-o"></i> <strong><?php echo $fdc ; ?></strong> <small>文件</small></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-tachometer"></i> </span>
      <h5>系统信息</h5>
    </div>
    <div class="widget-content">
      <table class="table table-bordered">
        <tr>
          <td>当前程序版本</td>
          <td>iCMS <?php echo iCMS_VER ; ?>[<?php echo iCMS_RELEASE ; ?>]</td>
          <td><a href="<?php echo __ADMINCP__;?>=patch&do=check&frame=iPHP" target="iPHP_FRAME" id="home_patch">最新版本</a></td>
          <td><span id="newversion"><img src="./app/admincp/ui/ajax_loader.gif" width="16" height="16" align="absmiddle"></span></td>
        </tr>
        <tr>
          <td>服务器操作系统</td>
          <td><?php echo PHP_OS ; ?></td>
          <td>服务器端口</td>
          <td><?php echo getenv(SERVER_PORT) ; ?></td>
        </tr>
        <tr>
          <td>服务器剩余空间</td>
          <td><?php echo intval(diskfreespace(".") / (1024 * 1024))."M" ; ?></td>
          <td>服务器时间</td>
          <td><?php echo get_date(0,"Y-n-j H:i:s"); ?></td>
        </tr>
        <tr>
          <td>WEB服务器版本</td>
          <td><?php echo $_SERVER['SERVER_SOFTWARE'] ; ?></td>
          <td>服务器语种</td>
          <td><?php echo getenv("HTTP_ACCEPT_LANGUAGE") ; ?></td>
        </tr>
        <tr>
          <td>PHP版本</td>
          <td><?php echo PHP_VERSION ; ?></td>
          <td>ZEND版本</td>
          <td><?php echo zend_version() ; ?></td>
        </tr>
        <tr>
          <td>MySQL 数据库</td>
          <td><?php echo $this->okorno(function_exists("mysql_close")) ; ?></td>
          <td>MySQL 版本</td>
          <td><?php echo iDB::version() ; ?></td>
        </tr>
        <tr>
          <td>图像函数库</td>
          <td><?php echo function_exists("imageline")==1?$this->okorno(function_exists("imageline")):$this->okorno(function_exists("imageline")) ; ?></td>
          <td>Session支持</td>
          <td><?php echo $this->okorno(function_exists("session_start")) ; ?></td>
        </tr>
        <tr>
          <td>脚本运行可占最大内存</td>
          <td><?php echo get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无" ; ?></td>
          <td>脚本上传文件大小限制</td>
          <td><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件" ; ?></td>
        </tr>
        <tr>
          <td>POST方法提交限制</td>
          <td><?php echo get_cfg_var("post_max_size") ; ?></td>
          <td>脚本超时时间</td>
          <td><?php echo get_cfg_var("max_execution_time") ; ?></td>
        </tr>
        <tr>
          <td>被屏蔽的函数</td>
          <td><?php echo get_cfg_var("disable_functions")?'<a class="tip" href="javascript:;" title="'.get_cfg_var("disable_functions").'">查看</a>':"无" ; ?></td>
          <td>安全模式</td>
          <td><?php echo $this->okorno(ini_get('safe_mode')); ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="iCMS-container">
  <div class="row">
  <div class="span5">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="fa fa-info-circle"></i> </span>
        <h5>iCMS 开发信息</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered">
          <tr>
            <td style="width:60px">版权所有</td>
            <td>
              <a class="btn btn-inverse" href="http://www.idreamsoft.com" target="_blank"><i class="fa fa-copyright"></i> 艾梦软件（iDreamSoft.com）</a>
            </td>
          </tr>
          <tr>
            <td>开 发 者</td>
            <td>
              <a class="btn btn-inverse" href="http://t.qq.com/idreamsoft" target="_blank"><i class="fa fa-at"></i> 枯木(@idreamsoft)</a>
              <a class="btn" href="https://github.com/idreamsoft/iCMS" target="_blank"><i class="fa fa-github"></i> GitHub</a>
            </td>
          </tr>
          <tr>
            <td>帮助</td>
            <td><a class="btn" href="http://www.idreamsoft.com/doc/iCMS/index.html" target="_blank">模版标签说明</a></td>
          </tr>
          <tr>
            <td>许可协议</td>
            <td>
              <a class="btn" href="http://www.idreamsoft.com/doc/iCMS.LGPL.html" target="_blank">LGPL 开源协议</a>
              <a class="btn btn-danger" href="http://www.idreamsoft.com/service.html" target="_blank"><i class="fa fa-ticket"></i> 商业授权</a>
              <a class="btn btn-success" href="http://www.idreamsoft.com/donate.html" target="_blank"><i class="fa fa-jpy"></i> 捐赠</a>
            </td>
          </tr>
          <tr>
            <td>相关链接</td>
            <td><a class="btn btn-small" href="http://www.idreamsoft.com" target="_blank">iDreamSoft</a> <a class="btn btn-small" href="http://www.idreamsoft.com/iCMS/" target="_blank">iCMS</a> <a class="btn btn-small" href="http://www.idreamsoft.com/template/" target="_blank">&#x6A21;&#x677F;</a> <a class="btn btn-small" href="http://www.idreamsoft.com/iCMS/doc" target="_blank">&#x6587;&#x6863;</a> <a class="btn btn-small" href="http://www.idreamsoft.com/feedback/" target="_blank">&#x8BA8;&#x8BBA;&#x533A;</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="span6">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="fa fa-bug"></i> </span>
        <h5>BUG提交</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="http://www.idreamsoft.com/cms/feedback.php" method="post" class="form-inline" id="iCMS-feedback" target="iPHP_FRAME">
          <textarea id="bug_content" name="content" class="tip" title="为了保证效率，请务必描述清楚你的问题，例如包含 iCMS 版本号、服务器操作系统、WEB服务器版本、浏览器版本等必要信息，不合格问题将可能会被无视掉" style="width:95%; height: 160px; margin:4px 0px 4px 10px;padding: 4px;">
  iCMS 版本号:iCMS <?php echo iCMS_VER ; ?>[<?php echo iCMS_RELEASE ; ?>]
  服务器操作系统:<?php echo PHP_OS ; ?>;
  WEB服务器版本:<?php echo $_SERVER['SERVER_SOFTWARE'] ; ?>;
  浏览器版本:<?php echo $_SERVER['HTTP_USER_AGENT'] ; ?>;
  出问题的URL:
  问题:</textarea>
          <div class="clearfix mt10"></div>
          <button id="bug_button" class="btn btn-primary fr mr20" type="submit"><i class="fa fa-check"></i> 提交</button>
          <input id="bug_email" name="email" type="text" class="span4 ml10" placeholder="您的邮箱">
          <div class="clearfix mt10"></div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(function(){
	window.setTimeout(function(){
		$.getJSON("http://www.idreamsoft.com/cms/version.php?callback=?",
		    function(o){
		        $('#newversion').text(o.version);
		    }
		);
	},1000);
	<?php if(iCMS::$config['system']['patch']){?>
    	window.setTimeout(function(){
			$.getJSON('<?php echo __ADMINCP__;?>=patch&do=check&ajax=1&jt=<?php echo time(); ?>',
				function(json){
					if(json.code=="0"){
						return;
					}
					iCMS.dialog({
					    content: json.msg,
					    okValue: '马上更新',
					    ok: function () { window.location.href=json.url;},
					    cancelValue: '以后在说',
					    cancel: function () {return true;}
					});
				}
			);
    	},1000);
	<?php } ?>
});
</script>
<?php iACP::foot();?>
