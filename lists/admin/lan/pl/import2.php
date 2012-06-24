<?php

$lan = array(

'The temporary directory for uploading (%s) is not writable, so import will fail' => 'Tymczasowy katalog do przesy�ania plik�w (%s) jest niezapisywalny, wi�c import zako�czy si� niepowodzeniem',
'Invalid Email' => 'Nieprawid�owy email',
'Import cleared' => 'Import wyczyszczony',
'Continue' => 'Kontynuuj',
'Reset Import session' => 'Resetuj sesj� importu',
'File is either too large or does not exist.' => 'Plik jest za du�y lub nie istnieje.',
'No file was specified. Maybe the file is too big? ' => 'Nie podano pliku. By� mo�e plik jest zbyt du�y? ',
'File too big, please split it up into smaller ones' => 'Plik jest zbyt du�y. Podziel go na mniejsze cz�ci',
'Use of wrong characters in filename: ' => 'U�yto niew�a�ciwych znak�w w nazwie pliku: ',
'Please choose whether to sign up immediately or to send a notification' => 'Wybierz: czy potwierdzi� u�ytkownik�w od razu, czy rozes�a� pro�b� o potwierdzenie',
'Cannot read %s. file is not readable !' => 'Nie mozna odczyta� %s. Plik jest nieodczytywalny !',
'Something went wrong while uploading the file. Empty file received. Maybe the file is too big, or you have no permissions to read it.' => 'Co� posz�o nie tak podczas przesy�ania pliku. Otrzymano pusty plik. Mo�e plik jest zbyt du�y, albo nie masz prawa do odczytu pliku.',
'Reading emails from file ... ' => 'Odczytuj� adresy z pliku ... ',
'Error was around here &quot;%s&quot;' => 'Tu jest b��d &quot;%s&quot;',
'Illegal character was %s' => 'Znaleziono nieprawid�owy znak %s',
'A character has been found in the import which is not the delimiter indicated, but is likely to be confused for one. Please clean up your import file and try again' => 'W imporcie znaleziono znak, kt�ry nie jest wskazanym separatorem, prawdopodobnie zosta� pomylony. Wyczy�� plik importu i spr�buj ponownie',
'ok, %d lines' => 'ok, %d wierszy',
'Cannot find column with email, please make sure the column is called &quot;email&quot; and not eg e-mail' => 'Nie znaleziono komlumny z adresami email, upewnij si�, �e istnieje kolumna &quot;email&quot; a nie na przyk�ad e-mail',
'Create new one' => 'Utw�rz nowy',
'Skip Column' => 'Pomi� kolumn�',
'Import Attributes' => 'importuj atrybuty',
'Continue' => 'Kontynuuj',
'Please identify the target of the following unknown columns' => 'Wska� cel nast�puj�cych nieznanych kolumn',
'Summary' => 'Podsumowanie',
'maps to' => 'zamapowane do',
'Create new Attribute' => 'Utw�rz nowy atrybut',
'maps to' => 'zamapowane do',
'Skip Column' => 'Pomi� kolumn�',
'maps to' => 'zamapowane do',
'%d lines will be imported' => '%d wierszy zostanie zaimportowanych',
'Confirm Import' => 'Potwierd� import',
'Test Output' => 'Wyj�cie na ekran',
'Record has no email' => 'Rekord nie zawiera adresu email',
'Invalid Email' => 'Nieprawid�owy email',
'clear value' => 'wyczy�c warto��',
'New Attribute' => 'nowy atrybut',
'Skip value' => 'Pomi� warto��',
'duplicate' => 'duplikat',
'Duplicate Email' => 'Powielony email',
' user imported as ' => ' u�ytkownik zaimportowany jako ',
'duplicate' => 'duplikat',
'duplicate' => 'duplikat',
'Duplicate Email' => 'Powielony email',
'All the emails already exist in the database and are member of the lists' => 'Wszystkie adresy ju� istniej� w bazie i s� cz�onkami list',
'%s emails succesfully imported to the database and added to %d lists.' => '%s adres�w zamiportowanych z sukcesem do bazy i dodanych do %d list.',
'%d emails subscribed to the lists' => '%d adres�w dodanych do list',
'%s emails already existed in the database' => '%s adres�w ju� istnieje w bazie',
'%d Invalid Emails found.' => '%d b�ednych adres�w.',
'These records were added, but the email has been made up from ' => 'Rekordy zosta�y dodane ale adresy email zosta�y wygenerowane z ',
'These records were deleted. Check your source and reimport the data. Duplicates will be identified.' => 'Rekordy zosta�y usuni�te. Sprawd� �r�d�o i zaimportuj dane ponownie. Duplikaty zostan� wykryte.',
'User data was updated for %d users' => 'Dane u�ytkownika zosta�y zaktualizowane dla %d u�ytkownik�w',
'%d users were matched by foreign key, %d by email' => '%d u�ytkownik�w dopasowano po kluczu obcym, %d po adresie email',
'phplist Import Results' => 'Wyniki importu phplist',
'Test output<br/>If the output looks ok, click %s to submit for real' => 'Wyj�cie na ekran<br/>Je�li wyniki s� ok, kliknij %s aby zaimportowa� na prawd�',
'Confirm Import' => 'Potwierd� import',
'Import some more emails' => 'Zaimportuj wi�cej adres�w email',
'Adding users to list' => 'Dodaj� u�ytkownik�w do listy',
'Select the lists to add the emails to' => 'Wybierz listy, do kt�rych doda� adresy email',
'No lists available' => 'Brak dost�pnych list',
'Add a list' => 'Dodaj list�',
'Select the groups to add the users to' => 'Wybierz grupy, do kt�rych doda� u�ytkownik�w',
'automatically added' => 'dodano automatycznie',
 'importintro' => '<p>Plik, kt�ry przesy�asz b�dzie musia� mie� atrybuty rekord�w w pierwszym wierszu.
    Upewnij si�, �e kolumna z adresami email jest nazwana "email" a nie na przyk�ad "e-mail" albo
    "Email Address".
    Wielko�� liter nie ma znaczenia.
    </p>
    Je�li w pliku jest kolumna klucza obcego o nazwie "Foreign Key", zostanie ona u�yta do synchronizacji mi�dzy
    zewn�trzn� baz� danych i baz� danych PHPlist. Klucz obcy jest priorytetem podczas dopasowywania
    do istniej�cego u�ytkownika. To spowolni proces importu. Przy u�yciu tej opcji dopuszczalne s�
    rekordy bez adresu email, ale zamiast tego zostanie utworzony wpis "Invalid Email" (Nieprawid�owy email). P�niej
    mo�esz poszuka� "invalid email" aby znale�� te rekordy. Maksymalna wielko�c klucza obcego to 100.
    <br/><br/>
    <b>Uwaga</b>: plik musi by� zwyk�ym tekstem. Nie przekazuj plik�w binarnych jak dokumenty Worda.
    <br/>',
'uploadlimits' => 'Nast�puj�ce limity zosta�y ustawione na Twoim serwerze:<br/>
Maksymalna ilo�� ��cznie wys�anych danych na serwer: <b>%s</b><br/>
Maksymalna wielko�c pojedynczego pliku: <b>%s</b>
<br/>PHPlist nie przetworzy plik�w wi�kszych ni� %dMb',
'testoutput_blurb' => 'Je�li zaznaczysz "Wyj�cie na ekran", odczytane adresy email wy�wietl� si� na ekranie ale nie zostan� wpisane do bazy danych. Jest to przydatne aby dowiedzie� si� czy format pliku jest poprawny. Wy�wietlone zostanie tylko pierwsze 50 rekord�w.',
'warnings_blurb' => 'Je�li zaznaczysz "Poka� ostrze�enia", wy�wietlone zostan� ostrze�enia dla pojedynczych rekord�w. Ostrze�enia zostan� wy�wietlone tylko w�wczas, gdy zaznaczysz opcj� "Wyj�cie na ekran". Opcja "Poka� ostrze�enia" b�dzie zignorowana podczas w�a�ciwego importu. ',
'omitinvalid_blurb' => 'Je�li zaznaczysz "Pomi� nieprawid�owe", nieprawid�owe rekordy nie zostan� dodane. Nieprawid�owe rekordy to rekordy bez adres�w email. Wszelkie inne atrybuty zostan� dodane automatycznie, tzn. je�eli rekord kraju nie zostanie odnaleziony, zostanie on dodany do listy kraj�w.',
'assigninvalid_blurb' => 'Opcja "Przypisz nieprawid�owe" zostanie u�yta aby utworzy� ares email dla u�ytkownik�w z nieprawid�owym adresem. 
Mo�esz u�y� warto�ci pomi�dzy [ oraz ] w celu uzupe�nienia warto�ci email. Na przyk�ad je�li Tw�j plik importu zawiera kolumn� "First Name" oraz "Last Name", mo�esz u�y� 
"[first name] [last name]" aby zbudowa� now� warto�� dla adresu email tego u�ytkownika zawieraj�c� jego imi� i nazwisko. 
Warto�� [number] mo�e zosta� u�yta aby wstawia� kolejny numer importu.',
'overwriteexisting_blurb' => 'Je�li zaznaczysz "Nadpisz istniej�ce", informacje na temat u�ytkownika w bazie danych zostan� zamienione na te importowane. U�ytkownicy s� dopasowywani po adresie email lub po kluczu obcym.',
'retainold_blurb' => 'Je�li zaznaczysz "Zachowaj stary email", podczas wyst�pienia konfliktu zostanie zachowany stary adres email oraz dodany wpis "duplikat" do nowego. Je�li tego nie zaznaczysz, stary otrzyma wpis "duplikat" a nowy b�dzie mia� piersze�stwo.',
'sendnotification_blurb' => 'Je�li wybierzesz "Wy�lij potwierdzenie" u�ytkownicy, kt�rych dodajesz otrzymaj� pro�b� o potwierdzenie rejestracji, na kt�re b�d� musieli odpowiedzie�. Jest to zalecane, bo dzi�ki temu b�dzie mo�na zidentyfikowa� nieprawid�owe adresy email.',
'phplist Import  Results' => 'Wyniki importu phplist',
'File containing emails' => 'Plik z adresami email',
'Field Delimiter' => 'Separator p�l',
'(default is TAB)' => '(domyslnie TAB)',
'Record Delimiter' => 'Separator rekord�w',
'(default is line break)' => '(domy�lnie prze�amanie linii)',
'Test output' => 'Wyj�cie na ekran',
'Show Warnings' => 'Poka� ostrze�enia',
'Omit Invalid' => 'Pomi� nieprawid�owe',
'Assign Invalid' => 'Przypisz do nieprawid�owych',
'Overwrite Existing' => 'Nadpisz istniej�ce',
'Retain Old User Email' => 'Zachowaj stary email',
'Send&nbsp;Notification&nbsp;email' => 'Wy�lij potwierdzenie',
'Make confirmed immediately' => 'Oznacz u�ytkownik�w jako potwierdzonych',
'Import' => 'Importuj',


);
?>