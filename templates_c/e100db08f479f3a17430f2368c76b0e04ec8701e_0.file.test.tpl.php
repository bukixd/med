<?php
/* Smarty version 4.1.0, created on 2022-04-13 10:14:55
  from 'C:\xampp\htdocs\med\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6256867fde14b6_89542224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e100db08f479f3a17430f2368c76b0e04ec8701e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\med\\templates\\test.tpl',
      1 => 1649837693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6256867fde14b6_89542224 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
</head>
<body>
    Dziala
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'staffMember');
$_smarty_tpl->tpl_vars['staffMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staffMember']->value) {
$_smarty_tpl->tpl_vars['staffMember']->do_else = false;
?>
    <h2><?php echo $_smarty_tpl->tpl_vars['staffMember']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['staffMember']->value['lastName'];?>
</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffMember']->value['appointmentList'], 'appointment');
$_smarty_tpl->tpl_vars['appointment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['appointment']->value) {
$_smarty_tpl->tpl_vars['appointment']->do_else = false;
?>
        <a href="patientLogin.php?id=<?php echo $_smarty_tpl->tpl_vars['appointment']->value['id'];?>
" style="margin:10px; display:block"><?php echo $_smarty_tpl->tpl_vars['appointment']->value['date'];?>
</a>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
