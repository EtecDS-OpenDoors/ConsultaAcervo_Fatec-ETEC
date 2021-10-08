
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Biblioteca Fatec - Etec da Zona Leste</title>
        <link rel="icon" type="image/png" href="icon/icon-title.png">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
        <script src="./js/main.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        

        <style>
            td.details-control {
    background: url('https://www.datatables.net/examples/resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('https://www.datatables.net/examples/resources/details_close.png') no-repeat center center;
    cursor: pointer;
}
        </style>
    </head>
    <body>

        <!--Menu superior-->
        <header id="header">
            <a class="logo" href="http://www.fateczl.edu.br/"><img class="logo" src="icon/logo.JPG" title="Logo-Fatec"></a>
            <nav id="nav">
                <ul id="menu" role="menu">
                    <li class="img-cps"><img src="icon/logo-cps.JPG" class="icons" title="Logo-CPS"></li>
                    <li class="img-sp"><img src="icon/logo-sp.JPG" class="icons" title="Logo-SPGOV"></li>
                </ul>
            </nav>
        </header>
        <!--Fim do menu superior-->

        <!--Divisão para mostrar o caminho para consultar o acervo-->
        <div>
            <ul>
                <li class="links"><a href="http://fateczl.edu.br/">Início</a>  /  <a href="http://fateczl.edu.br/#">Biblioteca</a>  /  <a href="index.html">Consultar Acervo</a></li>
            </ul>
        </div>
        <!--fim do caminho para a consulta do acervo-->

        <!--Conteúdo do site-->
        <main> 
            <section class="conteudo">
                <div class="descricao">
                    <h1>CONSULTA AO ACERVO ONLINE</h1>
                    <p>Nesta área você poderá consultar todo o acervo de bibliografia existente na Fatec da Zona Leste.</p>
                    <div class="content">
                        <fieldset>
                            <legend> Pesquisa de bibliografia </legend>
                            <table id="acervo" class="table table-striped table-bordered" style="width: 100% auto ">
                                <thead>
                                    <tr>
                                        <th>+</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                    </tr>
                                </thead>
                            </table> 
                        </fieldset>
                    </div>
                </div>
            </section>
        </main> 
        <!--fim do conteúdo do site-->

        <!--Rodapé-->
        <footer class="footer">
           <div class="iconLink">
                <ul id="rodape">
                    <li><h4 class="rede">Redes Sociais</h4></li>
                    <li><a href="https://www.facebook.com/fateczl.oficial/"><img src="icon/facebook.png" title="facebook"></a>
                        <a href="https://www.linkedin.com/company/faculdade-de-tecnologia-zona-leste-fatec-zl"><img src="icon/linkedin.png" title="linkedin"></a>
                        <a href="https://www.youtube.com/channel/UCe04vfzsQcRrGgfaWyx-GoA"><img src="icon/youtube.png" title="youtube"></a>
                        <a href="https://twitter.com/Fateczl_oficial"><img src="icon/twitter.png" title="twitter"></a>
                        <a href="https://www.instagram.com/fateczl.oficial/"><img src="icon/instagram.png" title="instagram"></a></li>
                    <li>Copyright© 2021</li>
                    <li>Desenvolvido por: Giovanna Rocha, Leonardo Andrade, Mateus Santana e Renan Rocha.</li>
                </ul>
            </div>
            <ul id="rodape">
                <li><h4 class="biblio">Biblioteca</h4></li>
                <li>Horário de funcionamento: Segunda a Sexta-feira 8:00h - 21:45h.</li>
                <li>Telefone da biblioteca: (11) 2045-4022</li>
                <li><a href="http://www.fateczl.edu.br/biblio">Clique aqui para mais informações</a></li>
            </ul>
            <ul id="rodape">
                <li><h4 class="info">Informações</h4></li>
                <li>Avenida Águia de Haia, 2983. Cidade A.E. Carvalho, CEP 03694-000, São Paulo-SP.</li>
                <li>Telefones: (11) 2049-2600 (11) 2026-0378 (11) 2026-1303 (11) 2041-2187</li>
                <li><a href="http://www.fateczl.edu.br/contato">Fale conosco</a></li>
                <li><a href="http://www.fateczl.edu.br/dti">Suporte DTI</a></li>
            </ul>
        </footer>
        <!--Fim do rodapé-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script type="text/javascript">

  function format ( d ) {
    return 'Titulo: '+d.title+ '<br>'+
        'Autor: '+d.author+'<br>'+
        'Topico 1: '+d.topic1+'<br>'+

        'Aqui pode ser adicionada qualquer informação do banco, vamos conversar com a fatec e ver quais os campos são necessarios para eles';
}
 
$(document).ready(function() {

    var dt = $('#acervo').DataTable( {
    responsive: {
    breakpoints: [
      {name: 'bigdesktop', width: Infinity},
      {name: 'meddesktop', width: 1480},
      {name: 'smalldesktop', width: 1280},
      {name: 'medium', width: 1188},
      {name: 'tabletl', width: 1024},
      {name: 'btwtabllandp', width: 848},
      {name: 'tabletp', width: 768},
      {name: 'mobilel', width: 480},
      {name: 'mobilep', width: 320}
    ]
  },
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"
        }, 
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "ids-objects.php",
            "type": "POST"
        },
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "title" },
            { "data": "author" },
        
        ],
        "order": [[0, 'desc']]
    } );
 
    // Array para rastrear os ids dos detalhes exibidos linhas
    var detailRows = [];
 
    $('#acervo tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );
</script>

    </script>
    </body>
</html>