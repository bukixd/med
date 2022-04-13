<?php
/* Smarty version 4.1.0, created on 2022-04-13 10:30:18
  from 'C:\xampp\htdocs\med\templates\newPatientForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62568a1ad209b4_48612367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504976bfb5cb7cb5da778f27b355008f3581eee5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\med\\templates\\newPatientForm.tpl',
      1 => 1649838254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62568a1ad209b4_48612367 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="appointment.php" method="post">
        <label for="firstName">Imię:</label><br>
        <input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Nazwisko:</label><br>
        <input type="text" name="lastName" id="lastName"><br>
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        <input type="submit" value="Zapisz">
</form><?php }
}
