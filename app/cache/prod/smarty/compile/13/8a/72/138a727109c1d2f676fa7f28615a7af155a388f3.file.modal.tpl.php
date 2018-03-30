<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 05:39:57
         compiled from "D:\xampp\htdocs\jms_royal\admin217tuwokq\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145795abe05ed0ee115-78851053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138a727109c1d2f676fa7f28615a7af155a388f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\admin217tuwokq\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145795abe05ed0ee115-78851053',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abe05ed0f7d56_39457394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe05ed0f7d56_39457394')) {function content_5abe05ed0f7d56_39457394($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
