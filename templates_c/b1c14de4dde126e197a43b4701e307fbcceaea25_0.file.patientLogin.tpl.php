<?php
/* Smarty version 4.1.0, created on 2022-04-13 10:50:23
  from 'C:\xampp\htdocs\med\templates\patientLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62568ecf8ecc73_92315179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c14de4dde126e197a43b4701e307fbcceaea25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\med\\templates\\patientLogin.tpl',
      1 => 1649839807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_62568ecf8ecc73_92315179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div style="display:flex; flex-direction: row">
    <div style="flex-grow:1; text-align:center">
    <h1>Zaloguj się</h1>
    <form action="appointment.php" method="post">
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        <input type="hidden" name="appointmentID" 
                value="<?php echo $_smarty_tpl->tpl_vars['appointmentId']->value;?>
">
        <input type="submit" value="Zaloguj się">
    </form>
    </div>
    <div style="flex-grow:1; text-align:center">
    <h1>Zarejestruj się</h1>
    <form action="appointment.php" method="post">
        <label for="firstName">Imię:</label><br>
        <input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Nazwisko:</label><br>
        <input type="text" name="lastName" id="lastName"><br>
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        <input type="hidden" name="appointmentID" 
                value="<?php echo $_smarty_tpl->tpl_vars['appointmentId']->value;?>
">
        <input type="submit" value="Zarejestruj się">
    </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:foot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
