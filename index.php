<?php
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';

?>
<section style="border:solid black 50%;">
        <h1 class="h1grande"><?php echo "Página de inicio de Juan Álvarez" ?></h1>
        <h2><?php echo date("D/M/Y"); ?></h2>
        <?php echo "<h1> Hola </h1>";
        $juan = "Juan";
    
        echo "<p>Esta es la página de $juan</p>" ;

        $seo = "posicion en Google";
        $sem = "posicion pagada en Google";

        if($seo == $sem){
            echo 'SEO y SEM son iguales';
        }

        elseif($seo === $sem){
            echo 'Son identicos SEO y SEM';
        }

        else{
            echo 'No son iguales SEO y SEM';
        }

    
        ?>

        <h2 class="h2violeta" style="font-size: 20px;color:blueviolet">En esta página podemos ver las prácticas de desarrollo</h2>
        <div>Esto no es un h1 </div>
        <p>Esto es un parrafo</p>

</section>

<div id="imagenjuntotexto">
<img src="/imagenes/estructura-html5.png" alt="estructura html 5" title="estructura HTML 5"/>

<div>
    <!-- Aquí el border=1 que has puesto no está bien, tendrías que meterlo dentro de la hoja de estilo -->
<table border=1 id="tabla-elementos-html">
    <tr>
        <th>Elementos HTML</th>
        <th>Función</th>
        <th>Ejemplo</th>

    </tr>

    <tr>
       <td>p</td>
       <td>parrafo</td>
       <td><code>&ltp&gt Es un parrafo &lt/p&gt </code></td>
    </tr>

    <tr>
        <td>h1</td>
        <td>encabezado principal</td>
        <td><code>&lth1&gt Encabezado pricipal &lt/h1&gt </code></td>

    </tr>

</table>
</div>
</div>

<p id="parrafo-principal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in eleifend est, at vestibulum lorem. Aenean consectetur, velit sed consectetur scelerisque, libero ante fermentum massa, a vestibulum quam dolor id neque. Maecenas turpis est, placerat at elit eget, rutrum dictum elit. Cras rhoncus metus ut turpis ornare scelerisque. Duis tincidunt massa vitae purus pellentesque consectetur. Proin hendrerit, ante sit amet posuere sollicitudin, leo ante ultrices ligula, sollicitudin vulputate augue augue quis turpis. Nulla finibus varius nulla efficitur mollis.

    Praesent dapibus ornare justo sit amet aliquam. Proin eget faucibus massa. Aenean hendrerit maximus risus ac sodales. Vivamus eget tristique augue. Proin elementum tellus ac aliquam mattis. Ut faucibus viverra diam eu cursus. Maecenas ultrices finibus enim, a iaculis leo elementum condimentum. Aenean pulvinar a lorem ut pellentesque. Nunc sit amet enim id mauris interdum auctor. Quisque lacinia lobortis tincidunt. Etiam ipsum mauris, viverra ac dictum a, bibendum eget sapien.
<blockquote cite="https://www.linkedin.com/in/juan-alvarez-gayoso/">Lorem ipsum otra vez.Juan Alvarez</blockquote>
</p>

<h2>Elementos de HTML más usados</h2>
<picture>
    <source type="image/avif" srcset="/imagenes/etiquetas-mas-usadas-html.avif">
    <img src="/imagenes/etiquetas-mas-usadas-html.png" width="400" height="450" title="etiquetas html más usadas" alt="etiquetas html más usadas" loading="lazy">

</picture>

<h2>Video de <span style="color:aqua; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 80px;">OSO POLAR</span></h2>

<video width="500" height="300" controls muted>
    <source src="/videos/video-oso.mp4" type="video/mp4">
</video>

<div class="cajacssabajo">
<h2>Seguimos practicando</h2>
<p>Estamos aprendiendo CSS <br>
Cada dia sabemos un poco más<br></p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim velit, laoreet eget nulla et, fermentum bibendum nibh. Donec sed efficitur nibh. Donec condimentum dictum urna, commodo consequat risus euismod vitae. Maecenas efficitur elementum massa. Maecenas ac imperdiet nisl. Fusce suscipit metus eu nulla congue tristique. Suspendisse lectus urna, fermentum non euismod in, eleifend tincidunt quam. Integer nec augue elementum, feugiat dolor quis, tempus felis. Cras posuere semper mi, vitae scelerisque dolor varius at. Quisque rutrum laoreet erat. Aliquam venenatis egestas scelerisque. Nullam sed felis ut metus lobortis tempus. Aliquam at fringilla enim. Suspendisse vitae magna velit. Nulla gravida ut sapien id finibus. Nunc feugiat mauris turpis, ac commodo purus mattis ut.</p>
</div>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
?>

