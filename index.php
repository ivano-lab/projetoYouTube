<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto YouTube</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        print_r($v);

        $g[0] = new Gafanhoto("Luiz", 20, "M", "luizim");
        $g[1] = new Gafanhoto("Maria", 24, "F", "maria");
        $g[2] = new Gafanhoto("Juliana", 33, "F", "juju");

        print_r($g)
    ?>
    </pre>
</body>
</html>