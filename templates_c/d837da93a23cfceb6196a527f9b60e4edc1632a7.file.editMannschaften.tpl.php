<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 22:30:58
         compiled from "tpl\editMannschaften.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248914fb019504eac14-64526583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd837da93a23cfceb6196a527f9b60e4edc1632a7' => 
    array (
      0 => 'tpl\\editMannschaften.tpl',
      1 => 1336941054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248914fb019504eac14-64526583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb019505a1750_64698803',
  'variables' => 
  array (
    'mannschaften' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb019505a1750_64698803')) {function content_4fb019505a1750_64698803($_smarty_tpl) {?><form action="" method="post">
<input type="textbox" value="Mannschaft">
<input type="submit" name="btAnlegen" value="Mannschaft anlegen">


<select name="mannschaft1">

<?php  $_smarty_tpl->tpl_vars['mannschaft'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mannschaft']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mannschaften']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mannschaft']->key => $_smarty_tpl->tpl_vars['mannschaft']->value){
$_smarty_tpl->tpl_vars['mannschaft']->_loop = true;
?>
{
	<option> $mannschaft->getMannschaft() </option>
}
<?php } ?>

</select>

<input type="submit" value="speichern">

</form><?php }} ?>