<?php include("cabecalho.php"); ?>
</div>
<div id="animacao">
  <script language="JavaScript1.2" src="funcoes.js"></script>

  <script>
    window.RufflePlayer = window.RufflePlayer || {};
    window.RufflePlayer.config = {
      wmode: "transparent",
      backgroundColor: null
    };
  </script>

  <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>

  <embed src="img/animacao.swf"
    type="application/x-shockwave-flash"
    wmode="transparent"
    width="100%"
    height="300">

  <noscript>
    <style>
      .aviso-noscript {
        background-color: #FDF5E6;
        border-left: 5px solid #FF6600;
        color: #333333;
        font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
        font-size: 14px;
        padding: 15px 20px;
        margin: 20px auto;
        width: 90%;
        max-width: 450px;
        text-align: center;
        border-radius: 0 4px 4px 0;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      }
    </style>

    <div class="aviso-noscript">
      <b>O JavaScript está desabilitado.</b><br><br>
      Por favor, ative o JavaScript nas configurações do seu navegador para conseguir visualizar a animação.
    </div>
  </noscript>
</div>
<div>
<?php include("rodape.php"); ?>
