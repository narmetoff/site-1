function playGuess1() {
    var answer = parseInt(Math.random() * 100);
    var userName = prompt("Напишите свое имя")
    alert("Привет, " + userName + "!")

    while (true) {
    	var userAnswer = prompt(userName + ', Введите число от 0 до 100. Для выхода нажмите q');
        if (userAnswer == 'q') {
            break;
        }
        userAnswer = parseInt(userAnswer);

        if (userAnswer > answer) {
            alert('Ваш ответ слишком большой');
        } else if (userAnswer < answer) {
            alert('Ваш ответ слишком маленький');
        } else if (userAnswer == answer) {
            alert('Вы угадали! Поздравляю, ' + userName);
            break;
        } else {
            alert('Необходимо ввести число!');
        }
    }
}
