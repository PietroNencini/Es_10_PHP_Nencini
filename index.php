<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
    
    <?php
        const INCREMENT = 2;
        $size = rand(1,10);
        $num = rand(2,10);
        $par_text = "Hello World";

        $final_text = "";

        for($i = 0; $i < $num; $i++) {
            $final_text = $final_text."<p style='font-size: ".$size."px'> $par_text </p>";
            $size += 2;
        }

        echo $final_text;
    ?>

</body>
</html>