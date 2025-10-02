<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <p>
        <?php //php variable
            $religion = "Islam";
            echo "I love Bangladesh " . "My religion is " . $religion  
        ?>
    </p>

    <p> 
        <?php //php object
            class phone {
                function phoneModel($phone){
                    echo "I love ".$phone . " phone. <br>";
                }
            }
            $samsung = new phone;
            $samsung-> phoneModel('Galaxy S25 Ultra');
            $vivo = new phone;
            $vivo-> phoneModel('Vivo Y18');
        ?>
    </p>

    <p>
        <?php //string word count 
            echo str_word_count('I love Bangladesh');
        ?>
    </p>
</body>
</html>