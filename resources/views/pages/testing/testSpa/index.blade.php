 @extends('layouts.main')

 @section('title', 'Home')

 @section('content')

 <body onload="NextQuestion(0)">
     <main>
         <!-- creating a modal for when quiz ends -->
         <div class="modal-container" id="score-modal">

             <div class="modal-content-container">

                 <h1>Поздравляю, тест завершен.</h1>

                 <div class="grade-details">
                     <p>Неправильные ответы : <span id="wrong-answers"></span></p>
                     <p>Правильные ответы : <span id="right-answers"></span></p>
                     <p>Класс : <span id="grade-percentage"></span>%</p>
                     <p><span id="remarks"></span></p>
                 </div>

                 <div class="modal-button-container">
                     <button onclick="closeScoreModal()">Продолжать</button>
                 </div>

             </div>
         </div>

         <div class="game-quiz-container">

             <div class="game-details-container">
                 <h1>Счет : <span id="player-score"></span> / 15</h1>
                 <h1>Вопрос : <span id="question-number"></span> / 15</h1>
             </div>

             <div class="game-question-container">
                 <h1 id="display-question"></h1>
             </div>

             <div class="game-options-container">

                 <div class="modal-container" id="option-modal">

                     <div class="modal-content-container">
                         <h1>Пожалуйста, Выберите Вариант</h1>

                         <div class="modal-button-container">
                             <button onclick="closeOptionModal()">Продолжать</button>
                         </div>

                     </div>

                 </div>

                 <span>
                     <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                     <label for="option-one" class="option" id="option-one-label"></label>
                 </span>


                 <span>
                     <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                     <label for="option-two" class="option" id="option-two-label"></label>
                 </span>


                 <span>
                     <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                     <label for="option-three" class="option" id="option-three-label"></label>
                 </span>


                 <span>
                     <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                     <label for="option-four" class="option" id="option-four-label"></label>
                 </span>


             </div>

             <div class="next-button-container">
                 <button onclick="handleNextQuestion()" style="width: 200px;">Следующий вопрос</button>
             </div>

         </div>
     </main>
     <style>
         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }

         html,
         body {
             height: 100%;
         }


         body {
             font-family: 'Montserrat', serif;

         }

         main {
             width: 100%;
             min-height: 100vh;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-repeat: no-repeat;
             background-size: cover;
             background-position: center;
         }

         .game-quiz-container {
             width: 40rem;
             height: 30rem;
             background-color: lightgray;
             display: flex;
             flex-direction: column;
             align-items: center;
             justify-content: space-around;
             border-radius: 30px;
         }

         .game-details-container {
             width: 80%;
             height: 4rem;
             display: flex;
             justify-content: space-around;
             align-items: center;
         }

         .game-details-container h1 {
             font-size: 1.2rem;
         }

         .game-question-container {
             width: 80%;
             height: 8rem;
             display: flex;
             align-items: center;
             justify-content: center;
             border: 2px solid darkgray;
             border-radius: 25px;
         }

         .game-question-container h1 {
             font-size: 1.1rem;
             text-align: center;
             padding: 3px;
         }

         .game-options-container {
             width: 80%;
             height: 12rem;
             display: flex;
             flex-wrap: wrap;
             align-items: center;
             justify-content: space-around;
         }

         .game-options-container span {
             width: 45%;
             height: 3rem;
             border: 2px solid darkgray;
             border-radius: 20px;
             overflow: hidden;
         }

         span label {
             width: 100%;
             height: 100%;
             display: flex;
             align-items: center;
             justify-content: center;
             cursor: pointer;
             transition: transform 0.3s;
             font-weight: 600;
             color: rgb(22, 22, 22);
         }

         span label:hover {
             -ms-transform: scale(1.12);
             -webkit-transform: scale(1.12);
             transform: scale(1.12);
             color: white;
         }

         input[type="radio"] {
             position: relative;
             display: none;
         }


         input[type=radio]:checked~.option {
             background: paleturquoise;
         }

         .next-button-container {
             width: 50%;
             height: 3rem;
             display: flex;
             justify-content: center;
         }

         .next-button-container button {
             width: 8rem;
             height: 2rem;
             border-radius: 10px;
             background: none;
             color: rgb(25, 25, 25);
             font-weight: 600;
             border: 2px solid gray;
             cursor: pointer;
             outline: none;
         }

         .next-button-container button:hover {
             background-color: rgb(143, 93, 93);
         }

         .modal-container {
             display: none;
             position: fixed;
             z-index: 1;
             left: 0;
             top: 0;
             width: 100%;
             height: 100%;
             overflow: auto;
             background-color: rgb(0, 0, 0);
             background-color: rgba(0, 0, 0, 0.4);
             flex-direction: column;
             align-items: center;
             justify-content: center;
             -webkit-animation: fadeIn 1.2s ease-in-out;
             animation: fadeIn 1.2s ease-in-out;
         }

         .modal-content-container {
             height: 20rem;
             width: 25rem;
             background-color: rgb(43, 42, 42);
             display: flex;
             flex-direction: column;
             align-items: center;
             justify-content: space-around;
             border-radius: 25px;
         }

         .modal-content-container h1 {
             font-size: 1.3rem;
             height: 3rem;
             color: lightgray;
             text-align: center;
         }

         .grade-details {
             width: 15rem;
             height: 10rem;
             display: flex;
             flex-direction: column;
             align-items: center;
             justify-content: space-around;
         }

         .grade-details p {
             color: white;
             text-align: center;
         }

         .modal-button-container {
             height: 2rem;
             width: 100%;
             display: flex;
             align-items: center;
             justify-content: center;
         }

         .modal-button-container button {
             width: 10rem;
             height: 2rem;
             background: none;
             outline: none;
             border: 1px solid rgb(252, 242, 241);
             color: white;
             font-size: 1.1rem;
             cursor: pointer;
             border-radius: 20px;
         }

         .modal-button-container button:hover {
             background-color: rgb(83, 82, 82);
         }

         @media(min-width : 300px) and (max-width : 350px) {
             .game-quiz-container {
                 width: 90%;
                 height: 80vh;
             }

             .game-details-container h1 {
                 font-size: 0.8rem;
             }

             .game-question-container {
                 height: 6rem;
             }

             .game-question-container h1 {
                 font-size: 0.9rem;
             }

             .game-options-container span {
                 width: 90%;
                 height: 2.5rem;
             }

             .game-options-container span label {
                 font-size: 0.8rem;
             }

             .modal-content-container {
                 width: 90%;
                 height: 25rem;
             }

             .modal-content-container h1 {
                 font-size: 1.2rem;
             }
         }

         @media(min-width : 350px) and (max-width : 700px) {
             .game-quiz-container {
                 width: 90%;
                 height: 80vh;
             }

             .game-details-container h1 {
                 font-size: 1rem;
             }

             .game-question-container {
                 height: 8rem;
             }

             .game-question-container h1 {
                 font-size: 0.9rem;
             }

             .game-options-container span {
                 width: 90%;
             }

             .modal-content-container {
                 width: 90%;
                 height: 25rem;
             }

             .modal-content-container h1 {
                 font-size: 1.2rem;
             }
         }



         @keyframes fadeIn {
             from {
                 opacity: 0;
             }

             to {
                 opacity: 1;
             }
         }

         @-webkit-keyframes fadeIn {
             from {
                 opacity: 0;
             }

             to {
                 opacity: 1;
             }
         }
     </style>

     <script>
         const questions = [{
                 question: "React JS – это?",
                 optionA: "MVC-фреймворк",
                 optionB: "JavaScript библиотека",
                 optionC: "Back-end платформа",
                 optionD: "фреймворк",
                 correctOption: "optionD"
             },

             {
                 question: "Где правильно выведен компонент через рендер?",
                 optionA: "'<'Test>",
                 optionB: "'<'Test />",
                 optionC: "'<'/Test>",
                 optionD: "'<'/ Test>",
                 correctOption: "optionB"
             },

             {
                 question: "Как много можно делать запросов к серверу?",
                 optionA: "Не ограниченное колличество",
                 optionB: "Всего 1",
                 optionC: "Всего 5",
                 optionD: "Всего 25",
                 correctOption: "optionA"
             },

             {
                 question: "Какая компания разработала React JS?",
                 optionA: "Amazon",
                 optionB: "GitHub",
                 optionC: "Facebook",
                 optionD: "Google",
                 correctOption: "optionC"
             },

             {
                 question: "Как много компонентов может быть на сайте?",
                 optionA: "Не более 10",
                 optionB: "Не более 50",
                 optionC: "Не более 300",
                 optionD: "Неограниченное количество",
                 correctOption: "optionD"
             },

             {
                 question: "Где правильно создан компонент?",
                 optionA: "class App React.Component {}",
                 optionB: "class App extends Component {}",
                 optionC: "React.Component {}",
                 optionD: "class App {}",
                 correctOption: "optionA"
             },

             {
                 question: "Какой метод отвечает за вывод информации через React JS компонент?",
                 optionA: "ReactDOM",
                 optionB: "react",
                 optionC: "render",
                 optionD: "console",
                 correctOption: "optionC"
             },

             {
                 question: "Куда можно встроить готовый код из метода render()?",
                 optionA: "В любой тег",
                 optionB: "В div или же в span",
                 optionC: "Только в div",
                 optionD: "Только в тег, у которого есть id",
                 correctOption: "optionA"
             },

             {
                 question: "Как обратится к свойству weight?",
                 optionA: "{props.weight}",
                 optionB: "{this.prop.weight}",
                 optionC: "{prop.weight}",
                 optionD: "{this.props.weight}",
                 correctOption: "optionD"
             },

             {
                 question: "Где правильно передена функция в качестве свойства?",
                 optionA: "argument={this.someFunction ()}",
                 optionB: "argument=(this.someFunction {})",
                 optionC: "argument={someFunction}",
                 optionD: "argument={this.someFunction}",
                 correctOption: "optionD"
             },

             {
                 question: "От какого класса идет наследование всех компонентов?",
                 optionA: "Component",
                 optionB: "ReactComponentDom",
                 optionC: "React.Component",
                 optionD: "ReactComponent",
                 correctOption: "optionC"
             },

             {
                 question: "Сколько родительских HTML тегов может быть выведено в React JS компоненте?",
                 optionA: "Всегда 1",
                 optionB: "Не более 5",
                 optionC: "Не более 10",
                 optionD: "Неограниченное количество",
                 correctOption: "optionA"
             },
             {
                 question: "Какой командой установить зависимость 'ReactRouteDom'?",
                 optionA: "npm i react-router-dom -save",
                 optionB: "npm i react-router-home -save",
                 optionC: "npm i react-router",
                 optionD: "npm i react",
                 correctOption: "optionA"
             },
             {
                 question: "Какой командой установить зависимость 'ReactRouteDom'?",
                 optionA: "npm i react-router-dom -save",
                 optionB: "npm i react-router-home -save",
                 optionC: "npm i react-router",
                 optionD: "npm i react",
                 correctOption: "optionA"
             },
             {
                 question: "Какой командой установить composer?",
                 optionA: "composer i",
                 optionB: "com i",
                 optionC: "npm start",
                 optionD: "php artisan serve",
                 correctOption: "optionA"
             },
             {
                 question: "Какой командой накатить миграций в базу данны в Laravel?",
                 optionA: "composer i",
                 optionB: "migrate",
                 optionC: "php artisan",
                 optionD: "php artisan migrate --seed",
                 correctOption: "optionD"
             },
             {
                 question: "Какой командой установить ключи генераций в Laravel?",
                 optionA: "npm i react-router-dom -save",
                 optionB: "php artisan key:generate",
                 optionC: "npm i react",
                 optionD: "php artisan migrate --seed",
                 correctOption: "optionB"
             },
             {
                 question: "Какой командой запустить сервер в Laravel?",
                 optionA: "composer",
                 optionB: "php artisan serve",
                 optionC: "npm start",
                 optionD: "php artisan --seed",
                 correctOption: "optionB"
             },
             {
                 question: "На каком порту по умолчанию запуститься сервер в Laravel?",
                 optionA: "http://127.0.0.1:8000",
                 optionB: "https://localhost/1200",
                 optionC: "local",
                 optionD: "newSite",
                 correctOption: "optionA"
             },
             {
                 question: "На каком порту по умолчанию запуститься сервер в React?",
                 optionA: "http://127.0.0.1:3000",
                 optionB: "https://localhost/2100",
                 optionC: "localNew",
                 optionD: "SiteNew",
                 correctOption: "optionA"
             },
             {
                 question: "Какой командой получить весь список API в Laravel?",
                 optionA: "php artisan serve",
                 optionB: "php artisan route:list",
                 optionC: "composer",
                 optionD: "php artisan",
                 correctOption: "optionB"
             },
             {
                 question: "В каком файле храниться вся информация об API, в папке 'routes'?",
                 optionA: "web.php",
                 optionB: "api.php",
                 optionC: "channels.php",
                 optionD: "console.php",
                 correctOption: "optionB"
             },

             {
                 question: "Какой командой создать проект на React?",
                 optionA: "composer",
                 optionB: "php artisan",
                 optionC: "npx create-react-app my-app",
                 optionD: "npx create-react",
                 correctOption: "optionC"
             },
             {
                 question: "Какой командой перейти в какую-нибудь папку?",
                 optionA: "info",
                 optionB: "del",
                 optionC: "cd",
                 optionD: "console",
                 correctOption: "optionC"
             },
             {
                 question: "В каком файле должены появить упоминания об react-router-dom?",
                 optionA: "react",
                 optionB: "console.php",
                 optionC: "package.json",
                 optionD: "App.jsx",
                 correctOption: "optionC"
             },
         ]


         let shuffledQuestions = [] //empty array to hold shuffled selected questions

         function handleQuestions() {
             //function to shuffle and push 10 questions to shuffledQuestions array
             while (shuffledQuestions.length <= 14) {
                 const random = questions[Math.floor(Math.random() * questions.length)]
                 if (!shuffledQuestions.includes(random)) {
                     shuffledQuestions.push(random)
                 }
             }
         }


         let questionNumber = 1
         let playerScore = 0
         let wrongAttempt = 0
         let indexNumber = 0

         // function for displaying next question in the array to dom
         function NextQuestion(index) {
             handleQuestions()
             const currentQuestion = shuffledQuestions[index]
             document.getElementById("question-number").innerHTML = questionNumber
             document.getElementById("player-score").innerHTML = playerScore
             document.getElementById("display-question").innerHTML = currentQuestion.question;
             document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
             document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
             document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
             document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

         }


         function checkForAnswer() {
             const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
             const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
             const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
             let correctOption = null

             options.forEach((option) => {
                 if (option.value === currentQuestionAnswer) {
                     //get's correct's radio input with correct answer
                     correctOption = option.labels[0].id
                 }
             })

             //checking to make sure a radio input has been checked or an option being chosen
             if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
                 document.getElementById('option-modal').style.display = "flex"
             }

             //checking if checked radio button is same as answer
             options.forEach((option) => {
                 if (option.checked === true && option.value === currentQuestionAnswer) {
                     document.getElementById(correctOption).style.backgroundColor = "green"
                     playerScore++
                     indexNumber++
                     //set to delay question number till when next question loads
                     setTimeout(() => {
                         questionNumber++
                     }, 1000)
                 } else if (option.checked && option.value !== currentQuestionAnswer) {
                     const wrongLabelId = option.labels[0].id
                     document.getElementById(wrongLabelId).style.backgroundColor = "red"
                     document.getElementById(correctOption).style.backgroundColor = "green"
                     wrongAttempt++
                     indexNumber++
                     //set to delay question number till when next question loads
                     setTimeout(() => {
                         questionNumber++
                     }, 1000)
                 }
             })
         }



         //called when the next button is called
         function handleNextQuestion() {
             checkForAnswer()
             unCheckRadioButtons()
             //delays next question displaying for a second
             setTimeout(() => {
                 if (indexNumber <= 14) {
                     NextQuestion(indexNumber)
                 } else {
                     handleEndGame()
                 }
                 resetOptionBackground()
             }, 1000);
         }

         //sets options background back to null after display the right/wrong colors
         function resetOptionBackground() {
             const options = document.getElementsByName("option");
             options.forEach((option) => {
                 document.getElementById(option.labels[0].id).style.backgroundColor = ""
             })
         }

         // unchecking all radio buttons for next question(can be done with map or foreach loop also)
         function unCheckRadioButtons() {
             const options = document.getElementsByName("option");
             for (let i = 0; i < options.length; i++) {
                 options[i].checked = false;
             }
         }

         // function for when all questions being answered
         function handleEndGame() {
             let remark = null
             let remarkColor = null

             // condition check for player remark and remark color
             if (playerScore <= 5) {
                 remark = ""
                 remarkColor = "red"
             } else if (playerScore >= 5 && playerScore < 10) {
                 remark = ""
                 remarkColor = "orange"
             } else if (playerScore >= 10) {
                 remark = ""
                 remarkColor = "green"
             }
             const playerGrade = (playerScore / 15) * 100

             //data to display to score board
             document.getElementById('remarks').innerHTML = remark
             document.getElementById('remarks').style.color = remarkColor
             document.getElementById('grade-percentage').innerHTML = playerGrade
             document.getElementById('wrong-answers').innerHTML = wrongAttempt
             document.getElementById('right-answers').innerHTML = playerScore
             document.getElementById('score-modal').style.display = "flex"

         }

         //closes score modal and resets game
         function closeScoreModal() {
             questionNumber = 1
             playerScore = 0
             wrongAttempt = 0
             indexNumber = 0
             shuffledQuestions = []
             NextQuestion(indexNumber)
             document.getElementById('score-modal').style.display = "none"
         }

         //function to close warning modal
         function closeOptionModal() {
             document.getElementById('option-modal').style.display = "none"
         }
     </script>
     <script src="index.js"></script>
 </body>
 <!--<section class="about_area section_gap" style="padding-top: 150px;">
    <div class="container" style="display: flex; justify-content: center;">
        <div class="quiz-container" id="quiz">
            <div class="quiz-header">
                <h2 id="question">Question Text</h2>
                <ul>
                    <li>
                        <input type="radio" name="answer" id="a" class="answer">
                        <label for="a" id="a_text">Answer</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="b" class="answer">
                        <label for="b" id="b_text">Answer</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="c" class="answer">
                        <label for="c" id="c_text">Answer</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="d" class="answer">
                        <label for="d" id="d_text">Answer</label>
                    </li>
                </ul>
            </div>
            <button id="submit">Дальше</button>
        </div>
    </div>
</section>

<style>
    .quiz-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
        width: 600px;
        overflow: hidden;
    }

    .quiz-header {
        padding: 4rem;
    }

    h2 {
        padding: 1rem;
        text-align: center;
        margin: 0;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        font-size: 1.2rem;
        margin: 1rem 0;
    }

    ul li label {
        cursor: pointer;
    }

    button {
        background-color: #03cae4;
        color: #fff;
        border: none;
        display: block;
        width: 100%;
        cursor: pointer;
        font-size: 1.1rem;
        font-family: inherit;
        padding: 1.3rem;
    }

    button:hover {
        background-color: #04adc4;
    }

    button:focus {
        outline: none;
        background-color: #44b927;
    }

    .curses {
        display: flex;
        justify-content: center;
    }
</style>

<script>
    const quizData = [{
            question: "React JS – это?",
            a: "MVC-фреймворк",
            b: "фреймворк",
            c: "Back-end платформа",
            d: "JavaScript библиотека",
            correct: "d",
        },
        {
            question: "Где правильно выведен компонент через рендер?",
            a: "<Test>",
            b: "<Test />",
            c: "</Test>",
            d: "</ Test>",
            correct: "b",
        },
        {
            question: "Чем свойства отличаются от состояний?",
            a: "Свойства для работы со значениями",
            b: "Состояния можно изменять, свойства нельзя",
            c: "Состояния для работы со значениями",
            d: "Свойства можно изменять, состояния нельзя",
            correct: "b",
        },
        {
            question: "Какая компания разработала React JS?",
            a: "Amazon",
            b: "Facebook",
            c: "GitHub",
            d: "Google",
            correct: "b",
        },
        {
            question: "Как много компонентов может быть на сайте?",
            a: "Не более 10",
            b: "Не более 50",
            c: "Не более 300",
            d: "Неограниченное количество",
            correct: "d",
        },
    ];
    const quiz = document.getElementById('quiz')
    const answerEls = document.querySelectorAll('.answer')
    const questionEl = document.getElementById('question')
    const a_text = document.getElementById('a_text')
    const b_text = document.getElementById('b_text')
    const c_text = document.getElementById('c_text')
    const d_text = document.getElementById('d_text')
    const submitBtn = document.getElementById('submit')
    let currentQuiz = 0
    let score = 0
    loadQuiz()

    function loadQuiz() {
        deselectAnswers()
        const currentQuizData = quizData[currentQuiz]
        questionEl.innerText = currentQuizData.question
        a_text.innerText = currentQuizData.a
        b_text.innerText = currentQuizData.b
        c_text.innerText = currentQuizData.c
        d_text.innerText = currentQuizData.d
    }

    function deselectAnswers() {
        answerEls.forEach(answerEl => answerEl.checked = false)
    }

    function getSelected() {
        let answer
        answerEls.forEach(answerEl => {
            if (answerEl.checked) {
                answer = answerEl.id
            }
        })
        return answer
    }
    submitBtn.addEventListener('click', () => {
        const answer = getSelected()
        if (answer) {
            if (answer === quizData[currentQuiz].correct) {
                score++
            }
            currentQuiz++
            if (currentQuiz < quizData.length) {
                loadQuiz()
            } else {
                quiz.innerHTML = `
           <h2>Вы ответили на ${score}/${quizData.length} вопросов правильно</h2>
           <a class="primary_btn curses" href="{{ route('coursesSpa') }}"><span>К курсам</span></a>
           `
            }
        }
    })
</script>-->
 @endsection