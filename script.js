const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}



// add and remove active class to radio box
$(".checkbox_div").click(function (e) {
  $(this).addClass("div_active").siblings().removeClass("div_active");
});

// add and remove active class to radio box
$(".preg_no").click(function (e) {
  $('.preg_msg').removeClass("d-none");
  $('.preg_div').addClass("d-none");
}); 

// add and remove active class to radio box
$(".div_9_a").click(function (e) {
  $('.cls_9_a').removeClass("d-none");
  $('.div_9').addClass("d-none");
});

$(".div_9_b").click(function (e) {
  $('.cls_9_b').removeClass("d-none");
  $('.div_9').addClass("d-none");
});

$(".div_9_c").click(function (e) {
  $('.cls_9_c').removeClass("d-none");
  $('.div_9').addClass("d-none");
});
