<p>Na tej stronie mo�esz przygotowa� wiadomo��, kt�ra b�dzie wys�ana z p�niejsz� dat�.
 M�esz okre�li� wszystkie informacje wymagane w wiadomo�ci opr�cz
list, do kt�rych ma zosta� wys�ana. Nast�pnie, w momencie wysy�ania (przygotowanej wiadomo�ci) mo�esz
okre�li� listy i przygotowana wiadomo�� zoastanie wys�ana.</p>
<p>
 Przygotowana wiadomo�� jest trwa�a, wi�c nie zniknie gdy zostanie
wys�ana, lecz mo�e by� wybrana wiele razy. Uwa�aj poniewa� przez to
mo�esz wys�a� t� sam� wiadomo�� so u�ytkownik�w kilka razy.
</p>
<p>
Ta funkcjonalno�� jest zaprojektowana szczeg�lnie dla wielu administrator�w.
Jesli g��wny administrator przygoruje wiadomo�ci, inny administrator mo�e wys�a� je do w�asnych list. W tym przypadku 
mo�esz doda� symbole do wiadomo�ci: adtybuty administrator�w.
</p>
<p>Na przyk�ad je�li masz atrybud <b>Imie</b> dla administrator�w, mo�esz doda� symbol [LISTOWNER.IMIE],
kt�ry zostanie zamieniony z <b>Imie</b> w�a�ciciela listy, do kt�rej wiadomo�� jest wysy�anathe message is sent to.
Jest to niezale�ne od tego kto wy�le wiadomo��. Wi�c je�li g��wny administratod wysy�a wiadomo�� do listy, kt�rej
w�a�cicielem jest kto� inny, symbole [LISTOWNER] zostana zamienione z warto�ciami w�a�ciciela listy a nie z warto�ci�
g��wnego administratora.
</P>
<p>Tylko dla zapami�tania:
<br/>
Format symboli [LISTOWNER] to <b>[LISTOWNER.ATRYBUT]</b><br/>
<p>Aktualnie zdefiniowano nast�puj�ce atrybuty administratora:
<table border=1><tr><td><b>Atrybut</b></td><td><b>Symbol</b></td></tr>
<?php
$req = Sql_query("select name from {$tables["adminattribute"]} order by listorder");
if (!Sql_Affected_Rows())
  print '<tr><td colspan=2>None</td></tr>';

while ($row = Sql_Fetch_Row($req))
  if (strlen($row[0]) < 20)
    printf ('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>',$row[0],strtoupper($row[0]));

?>
