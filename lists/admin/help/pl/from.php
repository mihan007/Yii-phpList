Mo�na u�y� trzech r�znych metod aby ustawi� lini� "Od":
<ul>
<li>Jeden wyraz: zostanie przekszta�cony w &lt;wyraz&gt;@<?php echo $domain?>
<br>Na przyk�ad: <b>biuro</b> b�dzie wy�wietlony jako <b>biuro@<?php echo $domain?></b>
<br>W wi�kszo�ci program�w pocztowych zostanie to wy�wietlone jako <b>biuro@<?php echo $domain?></b>
<li>Dwa lub wi�cej wyraz�w: zostanie przekszta�cone w <i>wyrazy ktore wpiszesz</i> &lt;biuro@<?php echo $domain?>&gt;
<br>Na przyk�ad: <b>wykaz informacji</b> b�dzie wy�wietlony jako <b>wykaz informacji &lt;biuro@<?php echo $domain?>&gt; </b>
<br>W wiekszo�ci program�w pocztowych zostanie to wy�wietlone jako <b>wykaz informacji</b>
<li>Zero lub wi�cej wyraz�w oraz adres email: zostanie przekszta�cone w <i>Wyrazy</i> &lt;adresemail&gt;
<br>Na przyk�ad: <b>Moje Nazwisko moj@email.pl</b> b�dzie wy�wietlony jako <b>Moje Nazwisko &lt;moj@email.pl&gt;</b>
<br>W wiekszo�ci program�w pocztowych zostanie to wy�wietlone jako <b>Moje Nazwisko</b>
