<h3>As dimensões da metrópole</h3>

<div id="catalogo">


    <div id="pagina">
        <a href="img/paginas/grande/pag07.jpg" rel="lytebox[paginas]"
            title="&lt;a href=&quot;pdf/pag07.pdf&quot; target=&quot;_blank&quot; title=&quot;Baixar em PDF&quot;&gt;Baixar em PDF&lt;/a&gt; &ndash; P&aacute;gina 07"><img
                title="Clique para ampliar" src="img/paginas/pag07.jpg" width="170" height="229" /></a><br />
        <a href="pdf/pag07.pdf" target="_blank" title="Baixar em PDF">Baixar em PDF</a> &ndash; P&aacute;gina 07
    </div>
    <div id="pagina">
        <a href="img/paginas/grande/pag08.jpg" rel="lytebox[paginas]"
            title="&lt;a href=&quot;pdf/pag08.pdf&quot; target=&quot;_blank&quot; title=&quot;Baixar em PDF&quot;&gt;Baixar em PDF&lt;/a&gt; &ndash; P&aacute;gina 08"><img
                title="Clique para ampliar" src="img/paginas/pag08.jpg" width="170" height="229" /></a><br />
        <a href="pdf/pag08.pdf" target="_blank" title="Baixar em PDF">Baixar em PDF</a> &ndash; P&aacute;gina 08
    </div>

</div>

<!-- <div id="pagina" class="pagina">
        <a rel="lytebox[paginas]"><img title="Clique para ampliar" src="img/paginas/pag07.jpg" width="170"
                height="229" /></a><br />
        <a href="pdf/pag07.pdf" target="_blank" title="Baixar em PDF">Baixar em PDF</a> &ndash; P&aacute;gina 07
    </div>
    <div id="pagina" class="pagina">
        <a rel="lytebox[paginas]"><img title="Clique para ampliar" src="img/paginas/pag08.jpg" width="170"
                height="229" /></a><br />
        <a href="pdf/pag08.pdf" target="_blank" title="Baixar em PDF">Baixar em PDF</a> &ndash; P&aacute;gina 08
    </div>
</div> -->

<script>
    var pagina = document.querySelectorAll('.pagina');
    for (let i = 0; i < pagina.length; i++) {
        console.log("tetse");
        pagina[i].addEventListener('click', () => {
            pagina[i].classList.toggle('ampliarr');
        });
    }



</script>