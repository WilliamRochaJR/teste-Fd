<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="estilofb.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <main class="grid-container">
        <div class="item-f"></div>
        <div class="item-a">

        <div class="topnav">
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button class="btn-s" type="submit"><i class="fa fa-search"></i></button>
                  <button class="btn-drop" type="submit">dropdown<i class="fa fa-caret-up" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        </div>
        <div class="item-b"><button class="pesquisa" type="submit">pesquisa avançada<i class="fa fa-caret-down" aria-hidden="true"></i></button></div>
        <div class="item-e pesquisa">64.576 resultados para “Lula”</div>
        <div class="item-c" id="listagem">
        </div>
        <footer class="item-d">
            <b>Footer Text</b>
        </footer>
    </main>

    <script src="jquery.js"></script>
    <script>

    $.getJSON('dados.json', function(data) {
            var elemento;

           $.each(data, function(i, valor) {

        elemento += "<main class='row' style='border-bottom: 1px solid #d8d8d8;'>";
        elemento += "<div class='pic'><a href='" + valor.url +"'><img src="+ valor.imagem +">" + "</img></a></div>";
        elemento += "<div class='info texto'><a href='" + valor.url +"'>" + "<p class='titulo'>" + valor.titulo + "</p>"+ "<p p class='descricao'>" + valor.descricao + "</a>" + "</p><div>";
        elemento += "<div class='data'><p>" + valor.hora + "&nbsp&nbsp;" + valor.data  + "</p></div>";
        elemento += "</main>";

           });

        $('div#listagem').html(elemento);

    });
    </script>
</body>
</html>
