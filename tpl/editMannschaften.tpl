<form action="" method="post">
<input type="textbox" value="Mannschaft">
<input type="submit" name="btAnlegen" value="Mannschaft anlegen">


<select name="mannschaft1">

{foreach from=$mannschaften item=mannschaft}
{
	<option> $mannschaft->getMannschaft() </option>
}
{/foreach}

</select>

<input type="submit" value="speichern">

</form>