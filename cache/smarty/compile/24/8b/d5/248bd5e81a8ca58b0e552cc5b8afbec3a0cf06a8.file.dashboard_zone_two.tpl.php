<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 12:05:09
         compiled from "/home/annepeliculas/www/site/modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145287828546a0095651a54-72202154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248bd5e81a8ca58b0e552cc5b8afbec3a0cf06a8' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl',
      1 => 1415282022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145287828546a0095651a54-72202154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_push' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a00956ba463_30287987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a00956ba463_30287987')) {function content_546a00956ba463_30287987($_smarty_tpl) {?>
<div class="clearfix"></div>
<section id="dashtrends" class="panel widget<?php if ($_smarty_tpl->tpl_vars['allow_push']->value) {?> allow_push<?php }?>">
	<header class="panel-heading">
		<i class="icon-bar-chart"></i> <?php echo smartyTranslate(array('s'=>'Dashboard','mod'=>'dashtrends'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard'), ENT_QUOTES, 'UTF-8', true);?>
&amp;profitability_conf=1" title="<?php echo smartyTranslate(array('s'=>'Configure','mod'=>'dashtrends'),$_smarty_tpl);?>
">
				<i class="process-icon-configure"></i>
			</a>
			<a class="list-toolbar-btn" href="#" onclick="refreshDashboard('dashtrends'); return false;" title="<?php echo smartyTranslate(array('s'=>'Refresh','mod'=>'dashtrends'),$_smarty_tpl);?>
">
				<i class="process-icon-refresh"></i>
			</a>
		</span>
	</header>
	<div id="dashtrends_toolbar" class="row">
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'sales');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Sum of revenue (excl. tax) generated within the date range by orders considered validated.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
				<dt><?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
				<dd class="data_value size_l"><span id="sales_score"></span></dd>
				<dd class="dash_trend"><span id="sales_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'orders');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Total number of orders received within the date range that are considered validated.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
				<dt><?php echo smartyTranslate(array('s'=>'Orders','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
				<dd class="data_value size_l"><span id="orders_score"></span></dd>
				<dd class="dash_trend"><span id="orders_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'average_cart_value');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Average Cart Value is a metric representing the value of an average order within the date range. It is calculated by dividing Sales by Orders.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
				<dt><?php echo smartyTranslate(array('s'=>'Cart Value','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
				<dd class="data_value size_l"><span id="cart_value_score"></span></dd>
				<dd class="dash_trend"><span id="cart_value_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'visits');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Total number of visits within the date range. A visit is the period of time a user is actively engaged with your website.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
				<dt><?php echo smartyTranslate(array('s'=>'Visits','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
				<dd class="data_value size_l"><span id="visits_score"></span></dd>
				<dd class="dash_trend"><span id="visits_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'conversion_rate');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Ecommerce Conversion Rate is the percentage of visits that resulted in an validated order.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
			<dt><?php echo smartyTranslate(array('s'=>'Conversion Rate','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="conversion_rate_score"></span></dd>
			<dd class="dash_trend"><span id="conversion_rate_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2 label-tooltip" onclick="selectDashtrendsChart(this, 'net_profits');" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Net profit is a measure of the profitability of a venture after accounting for all Ecommerce costs. You can provide these costs by clicking on the configuration icon right above here.','mod'=>'dashtrends'),$_smarty_tpl);?>
" data-placement="bottom">
				<dt><?php echo smartyTranslate(array('s'=>'Net Profit','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
				<dd class="data_value size_l"><span id="net_profits_score"></span></dd>
				<dd class="dash_trend"><span id="net_profits_score_trends"></span></dd>
		</dl>
	</div>
	<div id="dash_trends_chart1" class="chart with-transitions">
		<svg></svg>
	</div>
</section>
<?php }} ?>
