<html>

<head>
<title>Shaimaa</title>
</head>
<body>
    <ul>
        <?php
        foreach ($books as $book) {
        ?>
            <li> <?php echo $book["title"] ?> </li>
        <?php
        }
        ?>
    </ul>
</body>
</html>
