


<div id="tablle" >
<table>
<tr><td>Platz</td><td>Name</td><td>Punkte</td></tr>
{foreach from=$mannschaften item=mannschaft}
<tr>
	<td>{$mannschaft['name']}</td><td>{$mannschaft->getName()}</td><td>{$mannschaft->getPunkte()}</td>

{/foreach}
</table>

</div>

