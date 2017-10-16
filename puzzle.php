<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="content">
        <div id="header">
            <a href="index.html">Главная</a> <span>/</span>
            <a href="puzzle.php">Загадки</a> <span>/</span>
            <a href="guess-1.html">Угадайка</a> <span>/</span>
            <a href="guess-2.html">Угадайка мультиплеер</a>
        </div>
    <div id="center">
        <h1>Игра в загадки</h1>
        <div id="box">

            <form action="" method="GET">
                <div id="question1"><p>Висит груша, нельзя скушать</p>
                <input type="text" name= "question1" id="userAnswer1">
                </div>
                <div id="question2"><p>Два конца, два кольца, посредине гвоздик.</p>
                <input type="text" name= "question2" id="userAnswer2">
                </div>
                <div id="question3"><p>Полосат и толстопуз, слаще сахара...</p>
                <input type="text" name= "question3" id="userAnswer3">
                </div>
                <div id="question4"><p>Бел, а не сахар, нет ног, а идет.</p>
                <input type="text" name= "question1" id="userAnswer4">
                </div>
                <input type="submit" id="answerButton" value="Ответить">
            </form>
            <?php
                if (isset($_GET['question1']) && isset($_GET['question2'])) {
                    $quest1 = $_GET["question1"];
                    $score = 0;

                    if ($quest1 == "лампочка") {
                        echo '1 - Правильно';
                        $score++;
                    } else {
                        echo '1 - Не правильно';
                    }

                    echo '<br>';

                    $quest2 = $_GET["question2"];
                    if ($quest2 == "ножницы") {
                        echo '2 - Правильно';
                        $score++;
                    } else {
                        echo '2 - Не правильно';
                    }

                    echo '<br>';

                    $quest3 = $_GET["question3"];
                    if ($quest3 == "арбуз") {
                        echo '3 - Правильно';
                        $score++;
                    } else {
                        echo '3 - Не правильно';
                    }

                    echo '<br>';

                    $quest4 = $_GET["question4"];
                    if ($quest4 == "снег") {
                        echo '4 - Правильно';
                        $score++;
                    } else {
                        echo '4 - Не правильно';
                    }
                    echo '<br><br>';

                    echo 'Вы угадали ' . $score . ' загадок';
                }
            ?>
        </div>
    </div>
</div>
<div id="footer">
    Copyright © 2016 <a href="https://geekbrains.ru/">GeekBrains</a>
</div>
</body>
</html>