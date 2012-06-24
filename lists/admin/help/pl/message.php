W polu wiadomo�ci mo�na u�ywa� "zmiennych", kt�re zostan� zast�pione przez warto�� odpowiedni� dla u�ytkownika:
<br />Zmienne musz� by� w formacie <b>[NAZWA]</b> gdzie NAZWA mo�e by� zast�piona przez nzaw� jednego z atrybut�w.
<br />Na przyk�ad gdy masz atrybut "Imie uzytkownika" wpisz [IMIE UZYTKOWNIKA] gdzie� w wiadomo�ci aby oznaczy� miejsce, w kt�rym ma zosta� wstawiona warto�� "Imie uzytkownika".
</p><p>Aktualnie zdefiniowa�es nast�puj�ce atrybuty:
<table border=1><tr><td><b>Atrybut</b></td><td><b>Symbol</b></td></tr>
<?php
$req = Sql_query("select name from {$tables["attribute"]} order by listorder");
while ($row = Sql_Fetch_Row($req))
  if (strlen($row[0]) < 20)
    printf ('<tr><td>%s</td><td>[%s]</td></tr>',$row[0],strtoupper($row[0]));
print '</table>';
if (ENABLE_RSS) {
?>
  <p>Mo�esz ustawi� szablony wiadomo�ci, kt�re bed� wysy�ane z elementami RSS. Aby to zrobi� klliknij zak�adk� Harmonogram i wka�
  cz�stotliwo� wysy�ania wiadomo�ci. Wtedy wiadomo�c zostanie u�yta aby wys�� list� element�w do u�ytkownik�w
  na listach, kt�rzy maj� ustawion� cz�stotliwo��. Musisz u�y� symbolu [RSS] w wiadomo�ci
  w celu okreslenia gdzie lista ma zosta� rozes�ana.</p>
<?php }
?>

<p>Aby wys�a� zawarto�� strony internetowej, nale�y doda� nast�puj�c� tre�� w wiadomo�ci:<br/>
<b>[URL:</b>http://www.przyklad.pl/sciezka/do/pliku.html<b>]</b></p>
<p>W tym adresie mo�esz do��czy� podstawowe informacje o u�ytkowniku, nie atrybut informacja:</br>
<b>[URL:</b>http://www.przyklad.pl/userprofile.php?email=<b>[</b>email<b>]]</b><br/>
</p>