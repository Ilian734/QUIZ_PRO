
    const popupInfo = document.querySelector('.popup-info');
    const main = document.querySelector('.main');
    const continueBtn = document.querySelector('.btn-continue');
    const quizSection = document.querySelector('.quiz-section');
    const quizBox = document.querySelector('.quiz-box');
    const resultBox = document.querySelector('.result-box');

    const backHome = document.querySelector('.retour-accueil-btn');
    const backHome2 = document.querySelector('.retour-accueil-btn2');

    const nextBtn = document.querySelector('.next-btn');

    const restartBtn = document.querySelector('.restart-btn');
    const restartBtn2 = document.querySelector('.restart-btn2');



    continueBtn.onclick = () => {
        quizSection.classList.add('active');
        quizBox.classList.add('active');
    
        showQuestions(0);
        questionCounter(1);
        headerScore();
    }


let questionCount = 0;
let questionNumb = 1;
let userScore = 0;

restartBtn.onclick = () => {
    questionCount = 0;
    userScore = 0;
    questionNumb = 1;
    
    headerScore();
    showQuestions(questionCount);
    questionCounter(questionNumb);
    startCountdown();

    quizBox.classList.add('active');
    resultBox.classList.remove('active');
    nextBtn.classList.remove('active');

    // alert("Vous êtes prêt ?");
}

restartBtn2.onclick = () => {
    questionCount = 0;
    userScore = 0;
    questionNumb = 1;
    
    headerScore();
    showQuestions(questionCount);
    questionCounter(questionNumb);
    startCountdown();
    closeModal();

    quizBox.classList.add('active');
    resultBox.classList.remove('active');
    nextBtn.classList.remove('active');
}



backHome.onclick = () => {
    questionCount = 0;
    userScore = 0;
    questionNumb = 1;

    showQuestions(questionCount);
    questionCounter(questionNumb);
    clearInterval(countdownInterval);

    quizSection.classList.remove('active');
    resultBox.classList.remove('active');
    nextBtn.classList.remove('active');
}

backHome2.onclick = () => {
    questionCount = 0;
    userScore = 0;
    questionNumb = 1;

    showQuestions(questionCount);
    questionCounter(questionNumb);
    clearInterval(countdownInterval);
    closeModal();

    quizSection.classList.remove('active');
    nextBtn.classList.remove('active');
}


nextBtn.onclick = () => {
    if (questionCount < questions.length - 1) {
        questionCount++;
        showQuestions(questionCount);
        questionNumb++;
        questionCounter(questionNumb);

        nextBtn.classList.remove('active');
    }
    else {
        showResultBox();
    }
};






const optionList = document.querySelector('.option-list');

function showQuestions(index) {
    const questionText = document.querySelector('.question-text');
    questionText.textContent = `${questions[index].numb}. ${questions[index].question}`;


let optionTag = `<div class="option"><span>${questions[index].options[0]}</span></div>
                 <div class="option"><span>${questions[index].options[1]}</span></div>
                 <div class="option"><span>${questions[index].options[2]}</span></div>
                 <div class="option"><span>${questions[index].options[3]}</span></div>`;
    
        optionList.innerHTML = optionTag;

        const option = document.querySelectorAll('.option');
        for (let i = 0; i < option.length; i++) {
            option[i].setAttribute('onclick', 'optionSelected(this)');
        }
}

function optionSelected(answer) {
    let userAnswer = answer.textContent;
    let correctAnswer = questions[questionCount].answer;
    let allOptions = optionList.children.length;

    if (userAnswer == correctAnswer) {
        answer.classList.add('correct');
        userScore += 1;
        headerScore();
        
    } 
    else {
        answer.classList.add('incorrect');
        for (let i = 0; i < allOptions; i++) {
            if(optionList.children[i].textContent == correctAnswer) {
                optionList.children[i].setAttribute('class', 'option correct');
            }
        }
    }
    for (let i = 0; i < allOptions; i++) {
        optionList.children[i].classList.add('disabled');
    }
    nextBtn.classList.add('active');
    clearInterval(countdownInterval);
}

function questionCounter(index) {
    const questionTotal = document.querySelector('.question-total');
    questionTotal.textContent = `${index} / ${questions.length} Questions`;
}

function headerScore() {
    const headerScoreText = document.querySelector('.header-score');
    headerScoreText.textContent = `Score: ${userScore} / ${questions.length}`;
}

function showResultBox(){
    quizBox.classList.remove('active');
    resultBox.classList.add('active');
    
    const scoreText = document.querySelector('.score-text');
    scoreText.textContent = `Votre Score : ${userScore} / ${questions.length}`;
    
    const circularProgress = document.querySelector('.circular-progress');
    const progressValue = document.querySelector('.progress-value');
    let progressStartValue = -1;
    let progressEndValue = (userScore / questions.length) * 100;
    let speed = 20;

    let progress = setInterval(() =>{
        progressStartValue++;
        progressValue.textContent = `${progressStartValue}%`;
        circularProgress.style.background = `conic-gradient(#fff ${progressStartValue * 3.6}deg, rgba(255, 255, 255, .1) 0deg)`;

        if (progressStartValue == progressEndValue) {
            clearInterval(progress);
        }
    }, speed);
    
}



let seconds = 10;
let countdownInterval;

  function updateCountdown() {
    document.getElementById('countdown').innerHTML = 'Temps restant : ' + seconds;
}

function startCountdown() {
    clearInterval(countdownInterval);
    seconds = 10; 

    countdownInterval = setInterval(function() {
      

      if (seconds > 0) {
        seconds--;
      } else {

        clearInterval(countdownInterval); 
        updateCountdown(); 
        openModal();
      } 

        updateCountdown();
    } , 1000); 
  }
    
  
  function resetCountdown() {
    clearInterval(countdownInterval);
    seconds = 10;
    updateCountdown();
  }


  function resetAndStartCountdown() {
    resetCountdown();
    startCountdown();
  }

    

        function openModal() {
            modal.style.display = "flex";
        }

        function closeModal() {
            modal.style.display = "none";
        }

        const startButton = document.getElementById('startButton');
        startButton.addEventListener('click', startCountdown);

        const startButton2 = document.getElementById('startButton2');
        startButton2.addEventListener('click', resetAndStartCountdown);

        const countdownElement = document.getElementById('countdown');
        const messageElement = document.getElementById('message');
        const modal = document.getElementById('myModal');







