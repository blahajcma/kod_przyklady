<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>

    <?php  
    require_once "sql.php";    
    ?>

</head>

<body>
    <div id="logo">
        <div id="log_content">
            <div id="log_titl">
                Film<font id="title">oteka</font>
            </div>

            <div style="margin-left: 15px;" class="menu" id="activ">
                <a href="#"> Strona Główna</a>
            </div>
            <div class="menu">
                <a>Seriale</a>
            </div>
            <div class="menu">
                <a>Filmy</a>
            </div>
            <div class="menu">
                <a>Książki</a>
            </div>
        </div>
    </div>

    <div id="box">
        <br>
        <div id="ostatnie">
            <font id="Last">Ostatnie</font>
            <div id="gl" >
                
                <?php
                    for($i = 0; $i < 10; $i++) {
                        echo '<div style=" background-image: url('.$highest_ids[$i]['img'].');" class="gall" onclick="innerDescription('.$i.')"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 id="gall_title">'.$highest_ids[$i]['title'].'</h1></div>';                    }
                ?>
            </div>
        </div>
        <div id="content">
            <div id="box_2">
                <h1 id="box_2_title"></h1>
                <h2 id="box_2_description"></h2>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="description.js"></script>
</body>

</html>