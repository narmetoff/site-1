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
        <h1>Личный сайт студента GeekBrains</h1>
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
                <input type="text" name= "question4" id="userAnswer4">
                </div>
                <input type="submit" id="answerButton" value="Ответить">
            </form>
            <?php
		if (isset($_GET['question1']) && isset($_GET['question2'])) {
		    function checkAnswer($answer, $rightAnswer, $questionNumber)
		    {
		        echo '<br>';
		        if ($answer !== $rightAnswer) {
		            echo "$questionNumber - Не правильно";
		
		            return 0;
		        }
		        echo "$questionNumber - Правильно";
		
		        return 1;
		    }
		
		    $score = checkAnswer($_GET["question1"], "лампочка", 1)
		        + checkAnswer($_GET["question2"], "ножницы", 2)
		        + checkAnswer($_GET["question3"], "арбуз", 3)
		        + checkAnswer($_GET["question4"], "снег", 4);
		
		    echo "<br><br>Вы угадали $score загадок";
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