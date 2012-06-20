<?php
switch ($page) {
  case 'home': $page_title = 'G��wna strona Administratora';break;
  case 'setup': $page_title = 'Opcje konfiguracji';break;
  case 'about': $page_title = 'o '.NAME;break;
  case 'attributes': $page_title = 'Konfiguracja atrybut�w';break;
  case 'stresstest': $page_title = 'Pr�ba wydajno�ci';break;
  case 'list': $page_title = 'wykaz list';break;
  case 'editattributes': $page_title = 'Konfiguracja atrybut�w';break;
  case 'editlist': $page_title = 'Edycja listy';break;
  case 'checki18n': $page_title = 'Sprawd� czy istniej� t�umaczenia';break;
  case 'import4': $page_title = 'Importowanie adres�w email ze zdalnej bazy danych';break;
  case 'import3': $page_title = 'Importowanie adres�w email z IMAP';break;
  case 'import2':
  case 'import1':
  case 'import': $page_title = 'Importowanie adres�w email';break;
  case 'export': $page_title = 'Eksportowanie u�ytkownik�w';break;
  case 'initialise': $page_title = 'Pierwsze uruchomienie bazy danych';break;
  case 'send': $page_title = 'Wysyanie wiadomo�ci';break;
  case 'preparesend': $page_title = 'Przygotowanie wiadomo�ci do wys�ania';break;
  case 'sendprepared': $page_title = 'Wysy�anie przygotowanej wiadomo�ci';break;
  case 'members': $page_title = 'Lista cz�onk�w';break;
  case 'users': $page_title = 'Lista wszystkich u�ytkownik�w';break;
  case 'reconcileusers': $page_title = 'Uzgadnianie u�ytkownik�w';break;
  case 'user': $page_title = 'Szczeg�y u�ytkownik�w';break;
  case 'userhistory': $page_title = 'historia u�ytkownika';break;
  case 'messages': $page_title = 'lista wiadomo�ci';break;
  case 'message': $page_title = 'Podgl�d wiadomo�ci';break;
  case 'processqueue': $page_title = 'Klejka wiadomo�ci';break;
  case 'defaults': $page_title = 'U�yteczne atrybuty';break;
  case 'upgrade': $page_title = 'Aktualizacja '.NAME;break;
  case 'templates': $page_title = 'Szablony w systemie';break;
  case 'template': $page_title = 'Dodawanie i edycja szablon�w';break;
  case 'viewtemplate': $page_title = 'Podgl�d szablonu';break;
  case 'configure': $page_title = 'Konfiguracja '.NAME;break;
  case 'admin': $page_title = 'Edycja Administratora';break;
  case 'admins': $page_title = 'Lista administrator�w';break;
  case 'adminattributes': $page_title = 'Konfiguracja atrybut�w administratora';break;
  case 'processbounces': $page_title = 'Pobieranie zwrot�w z serwera';break;
  case 'bounces': $page_title = 'Lista zwrot�w';break;
  case 'bounce': $page_title = 'Podgl�d zwrotu';break;
  case 'spageedit': $page_title = 'Edycja strony rejestrowania';break;
  case 'spage': $page_title = 'Strony rejestrowania';break;
  case 'eventlog': $page_title = 'Dziennik zdarze�';break;
  case 'getrss': $page_title = 'Pobieranie nag��wk�w RSS';break;
  case 'viewrss': $page_title = 'Wy�wietlanie nag��wk�w RSS';break;
  case 'community': $page_title = 'Witamy w spo�eczno�ci PHPlist';break;
  case 'vote': $page_title = 'G�osuj na PHPlist';break;
  case 'login': $page_title = 'Zaloguj si�';break;
  case 'logout': $page_title = 'Wylogowanie';break;
  case 'mclicks': $page_title = 'Statystyka klikni�� wiadomo�ci'; break;
  case 'uclicks': $page_title = 'Statystyka klikni�� adresu URL'; break;
  case 'massunconfirm': $page_title = 'Zbiorcze anulowanie potwierdzenia wiadomo�ci';break;
}
?>
