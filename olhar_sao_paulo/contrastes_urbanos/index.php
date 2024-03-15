<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Olhar São Paulo - Contrastes Urbanos</title>
  <link rel="stylesheet" type="text/css" href="estilo_padrao.css" media="screen">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="resource-type" content="document" />
  <meta name="classification" content="Internet" />
  <meta name="description"
    content="Um enfoque nas desigualdades de gênero, cor e geração é o tema que inaugura o segundo ano da publicação Município em Mapas." />
  <meta name="keywords"
    content="mapas, tabelas, são paulo, município, georreferenciamento, geo, infolocal, educação, cultura, saúde, habitação, esportes, transportes, abastecimento, economia, meio ambiente, planejamento, inundação, mananciais, enchentes, alagamento, endereços, indicadores, estatística, informação, geografia, dados, subprefeitura, prefeitura, hidrografia, censo, ibge, orçamento, plano diretor, pde, revisão, licitações, urbanismo, mulheres, mulher, negro, negros, crianças, criança, idoso, idosos" />
  <meta name="robots" content="ALL" />
  <meta name="distribution" content="Global" />
  <meta name="rating" content="General" />
  <meta name="author" content="Guilherme Passotti, Thiago Ramon" />
  <meta name="language" content="pt-br" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script type="text/javascript" language="javascript" src="lytebox.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <div id="geral">
    <div id="topo">
      <h1>Olhar São Paulo</h1>
      <h3>Constrastes Urbanos</h3>
    </div>

    <div id="menu">
      <ul>
        <li><a href="" class="menu_e" data-url="inicial.php">Apresentação</a></li>
        <li><a href="" class="menu_e" data-url="equipe.php">Equipe técnica</a></li>
        <li><a href="" class="menu_e" data-url="pagina.php">As dimensões da metrópole</a></li>
        <li><a href="" class="menu_e" data-url="demografico.php">Quadro Demográfico</a></li>
        <li><a href="" class="menu_e" data-url="economico.php">Quadro Econômico</a></li>
        <li><a href="" class="menu_e" data-url="social.php">Quadro Social</a></li>
        <li><a href="" class="menu_e" data-url="territorio.php">Territ&oacute;rio e Desigualdades Sociais</a>
        </li>
        <li><a href="" class="menu_e" data-url="consultadas.php">Fontes Consultadas</a></li>
        <li><a href="" class="menu_e" data-url="download.php">Download</a></li>
      </ul>

      <p style="margin: 25px 0 0 15px;"><a href="http://sempla.prefeitura.sp.gov.br" target="_top"><img
            src="img/logo_prefeitura.jpg" width="120" height="71" border="0" /></a></p>
    </div>
    <div id="conteudo">
      <?php
      include_once "inicial.php";
      ?>
    </div>
  </div>

  <script>
    $(".menu_e").click(function (e) {
      e.preventDefault();
      var url = $(this).data('url');
      $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
          $('#conteudo').html(response);
          initLytebox();
        },
        error: function (xhr, status, error) {
          console.error('Erro ao carregar conteúdo:', error);
        }
      });
    });

    $("select").change(function () {
      var value = $("select").val();
      window.location.href = value;
    })


    var pagina = document.querySelectorAll('.pagina');

    for (let i = 0; i < pagina.length; i++) {
        console.log("tetse");
        pagina[i].addEventListener('click', () => {
            pagina[i].classList.toggle('ampliarr');
        });
    }


  </script>

  <style>
    .ampliarr {
      transition: all 1s ease !important;
      position: fixed !important;
      top: calc(50% - 10px);
      left: calc(50% - 50px);
    }
  </style>