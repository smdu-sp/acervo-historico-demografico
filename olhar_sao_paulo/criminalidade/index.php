<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Olhar S&atilde;o Paulo &ndash; Viol&ecirc;ncia e Criminalidade</title>
  <link rel="stylesheet" type="text/css" href="estilo_padrao.css" media="screen">

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="resource-type" content="document" />
  <meta name="classification" content="Internet" />
  <meta name="description"
    content="Um enfoque nas desigualdades de g&ecirc;nero, cor e gera&ccedil;&atilde;o &eacute; o tema que inaugura o segundo ano da publica&ccedil;&atilde;o Munic&iacute;pio em Mapas" />
  <meta name="keywords"
    content="mapas, tabelas, são paulo, município, georreferenciamento, geo, infolocal, educação, cultura, saúde, habitação, esportes, transportes, abastecimento, economia, meio ambiente, planejamento, inundação, mananciais, enchentes, alagamento, endereços, indicadores, estatística, informação, geografia, dados, subprefeitura, prefeitura, hidrografia, censo, ibge, orçamento, plano diretor, pde, revisão, licitações, urbanismo, mulheres, mulher, negro, negros, crianças, criança, idoso, idosos" />
  <meta name="robots" content="ALL" />
  <meta name="distribution" content="Global" />
  <meta name="rating" content="General" />
  <meta name="author" content="Gabriel de Vasconcelos Pessoa, Guilherme Passotti, Thiago Ramon" />
  <meta name="language" content="pt-br" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <div id="geral">
    <div id="topo">
      <h1>Olhar S&atilde;o Paulo</h1>
      <h3>Constrastes Urbanos</h3>
    </div>
    <div id="menu">
      <ul>
        <li><a href="" class="menu_e" data-url="inicial.php">Apresenta&ccedil;&atilde;o</a></li>
        <li><a href="" class="menu_e" data-url="equipe.php">Equipe t&eacute;cnica</a></li>
        <li><a href="" class="menu_e" data-url="introducao.php">Introdução</a></li>
        <li><a href="" class="menu_e" data-url="riscos.php">Risco de Ocorrências Criminais</a></li>
        <li><a href="" class="menu_e" data-url="ocorrencias.php">Densidade de Ocorrências de Mortes
            Violentas</a></li>
        <li><a href="" class="menu_e" data-url="mortalidade.php">Taxas de Mortalidade por Violência</a></li>
        <li><a href="" class="menu_e" data-url="obitos.php">Dinâmica Espacial dos Óbitos por Causas
            Violentas</a></li>
        <li><a href="" class="menu_e" data-url="referencias.php">Referências Bibliográficas</a></li>
        <li><a href="" class="menu_e" data-url="download.php">Download</a></li>
      </ul>



      <p style="margin: 25px 0 0 15px;"><a href="http://smdu.prefeitura.sp.gov.br" target="_top"><img
            src="img/logo_prefeitura.jpg" width="120" height="71" border="0" /></a></p>
    </div>
    <div id="conteudo">
      <?php include ('inicial.php'); ?>
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


  </script>