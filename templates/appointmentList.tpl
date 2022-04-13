{include file='head.tpl'}
<h1>Umowione wizyty:</h1>
<ul>
{foreach $appointmentList as $appointment}
    <li>{$appointment['firstName']} {$appointment['lastName']} {$appointment['date']}</li>
</ul>
{include file='foot.tpl'}