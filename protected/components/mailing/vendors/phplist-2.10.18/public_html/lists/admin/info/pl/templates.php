<p>Tutaj mo�esz zdefiniowa� szablony, kt�rych b�dzie mo�na u�y� podczas wysy�ania wiadomo�ci do list wysy�kowych. Szablon jest 
stron� HTML z umieszczonym <i>Symbolem</i> <b>[CONTENT]</b>. To b�dzie miejsce gdzie
zostanie wstawiona tre�� wiadomo�ci. </P>
<p>Dodatkowo opr�cz [CONTENT], mo�esz doda� [FOOTER] oraz [SIGNATURE] aby wstawi� stopk� oraz podpis wiadomo�ci, ale nie jest to konieczne.</p>
<p>Obrazy z szblon�w zostan� umieszczone w wiadomo�ci. Je�li dodasz obrazy w tre�ci wiadomo�ci (podczas redagowania), b�d� one musia�y zawiera� kopletny URL i nie b�d� do��czone do wiadomo�ci.</p>
<p><b>�ledzenie u�ytkownik�w</b></p>
<p>Aby u�atwi� �ledzenie u�ytkownik�w, mo�esz doda� [USERID] do szablonu, co zostanie zast�pione identyfikatorem u�ytkownika. To zadzia�a tylo przy wysy�aniu wiadomo�ci email w formacie HTML. Musisz skonfigurowa� adres URL, do otrzymywania ID. Ewentualnie mo�esz uzy� wbudowanego w <?php echo NAME?> �ledzenia u�ytkownik�w. Aby to zrobi�, dodaj [USERTRACK] do szablonu co spowoduje dodanie niewidocznego linku do wiadomo�ci w celu �ledzenia wy�wietle� wiadomo�ci.</p>
<p><b>Obrazy</b></p>
<p>Ka�de odniesienie do obrazu, kt�re nie zaczyna sie od "http://" mo�e (i powinno) zosta� do��czone do wiadomo�ci. Zaleca si� korzysta� z kilku bardzo ma�ych obraz�w. Je�li prze�lesz szablon, b�dziesz m�g� doda� zdj�cia. Odniesienia do pbraz�w, kt�re maj� by� do��czone powinny by� z tego samego katalogu, tj. &lt;img&nbsp;src=&quot;image.jpg&quot;&nbsp;......&nbsp;&gt; a nie &lt;img&nbsp;src=&quot;/lokalizacja/jakiego�/katalogu/obraz.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
