<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Munic&iacute;pio em Mapas &ndash; S&eacute;rie Tem&aacute;tica: Panorama</title>
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
      <h1>Município em Mapas</h1>
      <p>S&eacute;rie tem&aacute;tica</p>
      <div id="linha_topo">&nbsp;</div>
      <div id="serie">
        <h2>Panorama</h2>
      </div>
    </div>
    <div id="menu">
      <ul>
        <li><a href="" class="menu_e" data-url="inicial.php">Apresenta&ccedil;&atilde;o</a></li>
        <li><a href="" class="menu_e" data-url="equipe.php">Equipe t&eacute;cnica</a></li>
        <li><a href="" class="menu_e" data-url="politica.php">Pol&iacute;tico Administrativo</a></li>
        <li><a href="" class="menu_e" data-url="solo.php">Maciços de Solo e Rocha</a></li>
        <li><a href="" class="menu_e" data-url="urbana.php">Expansão Urbana</a></li>
        <li><a href="" class="menu_e" data-url="transporte.php">Sistemas de Transportes</a></li>
        <li><a href="" class="menu_e" data-url="social.php">Equipamentos Sociais</a></li>
        <li><a href="" class="menu_e" data-url="solo_predominante.php">Uso do Solo Predominante</a></li>
        <li><a href="" class="menu_e" data-url="solo_urbano.php">Valor do Solo Urbano</a></li>
        <li><a href="" class="menu_e" data-url="economia.php">Economia Urbana</a></li>
        <li><a href="" class="menu_e" data-url="download.php">Download</a></li>
      </ul>

      <p style="margin-left:16px;"><img src="img/logo_prefeitura.jpg" width="120" height="71" /></p>
    </div>
    <div id="conteudo">
      <?php include_once 'inicial.php'; ?>
    </div>
  </div>
</body>
<script>
  $(".menu_e").click(function (e) {
    e.preventDefault();
    var url = $(this).data('url');
    $.ajax({
      url: url,
      type: 'GET',
      success: function (response) {
        $('#conteudo').html(response);

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