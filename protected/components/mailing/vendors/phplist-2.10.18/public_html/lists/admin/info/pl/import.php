
<p>

<h1>Importowanie adres�w email do istniej�cych list</h1>

Istniej� cztery sposoby aby zaimportowa� istniej�ce informacje:

<ul>
<li><?php echo PageLink2("import2","Import adres�w z r�nymi warto�ciami dla atrybut�w");?>. Lista adres�w email mo�e mie� niezdefiniowane atrybuty. Zostan� one utworzone automatycznie jako "pole tekstowe". Powieniene� u�y� tego sposobu, je�li importujesz plik arkusza kalkulacyjnego / CSV, kt�ry ma atrybuty dla u�ytkownik�w w kolumnach oraz jednego u�ytkownika na wiersz. <br/><br/>
<li><?php echo PageLink2("import1","Import adres�w z tymi samymi warto�ciami dla atrybut�w");?>. Lista adres�w email b�dzie musia�a odpowiada� strukturze, kt�r� ju� ustawi�e� w <?php echo NAME?>. Powieniene� u�y� tego sposobu, je�li importujesz prost� list� adres�w email. Mo�esz potem spracyzowa� warto�ci atrybut�w dla ka�dego wpisu. B�d� one takie same dla wszystkich importowanych adres�w.<br/><br/>
<li><?php echo PageLink2("import3","Import adres�w z konta IMAP");?>. Ten spos�b umo�liwia odszukanie adres�w email w Twoich folderach IMAP i dodanie ich. Tylko Nazwa osoby mo�e by� podana jako atrybut.<br/><br/>
<li><?php echo PageLink2("import4","Import adres�w z innej bazy danych");?>.
</ul>

</p>
