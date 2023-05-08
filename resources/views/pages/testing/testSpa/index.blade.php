@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="about_area section_gap" style="padding-top: 150px;">
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
           <a class="primary_btn curses" href="{{ route('courses') }}"><span>К курсам</span></a>
           `
            }
        }
    })
</script>
@endsection