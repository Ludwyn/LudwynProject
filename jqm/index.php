<?php


?>
<!DOCTYPE html>
<html>
<head>

<title>Aplicacion Jquery Mobile</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet"href="css/jquery.mobile-1.4.5.css" />
<script type="text/javascript"src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"src="js/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<div data-role="page" id="pagina1">
<div data-role="header">Titulo 1 </div>
<div data-role="content">Tabla de Posiciones Rusia 2018<a href="#pagina2" data-transition="pop">Siguiente</a></div>
<div data-role="footer">Pie de pagina 1</div>
<ul data-role="listview">
<li><img src="Imagenes/brazil.png" alt="Brasil" class="ui-li-icon">
Brasil <span class="ui-li-count">38</span>
</li>
<li><img src="Imagenes/uruguay.png" alt="Uruguay" class="ui-li-icon">
Uruguay <span class="ui-li-count">31</span>
</li>
<li><img src="Imagenes/argentina.png" alt="Argentina" class="ui-li-icon">
Argentina <span class="ui-li-count">28</span>
</li>
<li><img src="Imagenes/colombia.png" alt="Colombia" class="ui-li-icon">
Colombia <span class="ui-li-count">27</span>
</li>
<li><img src="Imagenes/Peru.png" alt="Peru" class="ui-li-icon">
Peru <span class="ui-li-count">26</span>
</li>
<li><img src="Imagenes/chile.png" alt="Chile" class="ui-li-icon">
Chile <span class="ui-li-count">26</span>
</li>
</ul>
</div>
<div data-role="page" id="pagina2">
<div data-role="header">Titulo 2</div>
<div data-role="content">Contenido 2 <a href="#pagina1" data-transition="flip">Atras</a></div>
<div data-role="footer">Pie de pagina 2</div>
</div>



</body>
</html>