{include file='head.tpl'}
<form action="appointment.php" method="post">
        <label for="firstName">Imię:</label><br>
        <input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Nazwisko:</label><br>
        <input type="text" name="lastName" id="lastName"><br>
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        <input type="submit" value="Zapisz">
</form>
{include file='foot.tpl'}