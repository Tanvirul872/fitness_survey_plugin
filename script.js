
jQuery(document).ready(function($){
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


//progress bar loader js  start 

/*
Inspired by Florin Pop's coding challenges, you can check them here: https://www.florin-pop.com/blog/2019/03/weekly-coding-challenge/
*/

// add and remove active class to radio box
$(".checkbox_div_next").click(function (e) {

  // alert('hello') ; 

function loading() {
  document.querySelectorAll(".bar").forEach(function(current) {
    let startWidth = 0;
    const endWidth = current.dataset.size;
    
    /* 
    setInterval() time sholud be set as trasition time / 100. 
    In our case, 2 seconds / 100 = 20 milliseconds. 
    */
    const interval = setInterval(frame, 20);

    function frame() {
      if (startWidth >= endWidth) {
        clearInterval(interval);
      } else {
          startWidth++;
          current.style.width = `${endWidth}%`;
          current.firstElementChild.innerText = `${startWidth}%`;
        }
     }
  });
}

setTimeout(loading, 1000);



});


//progress bar loader js  end 






$('#enquiry').submit(function (event) {
  event.preventDefault();


  alert('hello') ;

  var field_one = $('#field_one').val(); 
  var field_two = $('#field_two').val(); 
  var field_three = $('#field_three').val(); 
  var field_four = $('#field_four').val(); 
  var field_five = $('#field_five').val(); 
 


  var ajax_url = plugin_ajax_object.ajax_url;
  var form = $('#enquiry').serialize();
  var data = {
      'action': 'send_mail_to_client',
      'formData': form

  };

  $.ajax({
      url: ajax_url,
      type: 'post',
      data: data,
      success: function(response){

        function getRandomCoupon(coupons) {
          return coupons[Math.floor(Math.random() * coupons.length)];
        }



        // const coupons = ['code1', 'code2', 'code3', 'code4', 'code5'];
        const coupons = [field_one, field_two, field_three, field_four, field_five];
        var coupon_code = getRandomCoupon(coupons); 

        $('.bmr_people_time').html(response.data.bmr_time);
        $('.bmr_people').html(response.data.bmr_men);
        $('.bmr_people_weight').html(response.data.lose_weight);
        $('.random_coupon_code').html(coupon_code);

    
      }
  });

})




$('#store_coupon_name').submit(function (event) {
  event.preventDefault();

  var ajax_url = plugin_ajax_object.ajax_url;
  var form1 = $('#store_coupon_name').serialize();
  var form = $('#enquiry').serialize();
  var data = {
      'action': 'store_data_coupon',
      'formData': form1

  };

  $.ajax({
      url: ajax_url,
      type: 'post',
      data: data,
      success: function(response){

        // console.log(coupon_code);
      
          alert('successfully store data') ;
      }
  });

});


$(".checkbox_div").on('click', function(){

  $(this).addClass('div_active').find('input[type=radio]').prop('checked', true);
  $(this).siblings().removeClass("div_active"); 
  
});


$(".checkbox_div2").click(function(){               
  var chk = $(this).find("input[type='checkbox']");
  if(chk.is(":checked") == false)
  {
      chk.prop("checked", true);
      $(this).addClass('div_active');
  }
  else
  {
      chk.prop("checked", false);
      $(this).removeClass('div_active');
  }
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


$(".div_15_a").click(function (e) {
  $('.div_15_p').removeClass("d-none");
  $('.div_15').addClass("d-none");
});

$(".div_15_e").click(function (e) {
  $('.div_15_p_e').removeClass("d-none");
  $('.div_15').addClass("d-none");
});


$(".div_16_a").click(function (e) {
  $('.cls_16_a').removeClass("d-none");
  $('.div_16').addClass("d-none");
});


$(".div_16_b").click(function (e) {
  $('.cls_16_b').removeClass("d-none");
  $('.div_16').addClass("d-none");
});


$(".div_17_a").click(function (e) {
  $('.cls_17_a').removeClass("d-none");
  $('.div_17').addClass("d-none");
});


$(".div_17_b").click(function (e) {
  $('.cls_17_b').removeClass("d-none");
  $('.div_17').addClass("d-none");
});


$(".div_34_a").click(function (e) {
  $('.cls_34_a').removeClass("d-none");
  $('.div_34').addClass("d-none");
});


$(".div_34_b").click(function (e) {
  $('.cls_34_b').removeClass("d-none");
  $('.div_34').addClass("d-none");
});


$(".div_19_a").click(function (e) {
  $('.cls_19_a').removeClass("d-none");
  $('.div_19').addClass("d-none");
});



 

$(".next-chart").click(function (e) {

// alert('hello')  ; 
  let randomArray = [];
  let start = 250;
  let end = 100;
  let range = start - end;
  let step = range / 11;
  
  for (let i = 0; i < 12; i++) {
    let randomNumber = start - (step * i) + Math.random() * step;
    randomArray.push(randomNumber);
  }
  
  // // console.log(randomArray);
  // let randomArray = [];
  // let start = 200;
  // let range = start + 100;
  
  // for (let i = 0; i < 12; i++) {
  //   let randomNumber = start + Math.random() * range;
  //   randomArray.push(randomNumber);
  // }
  
  // console.log(randomArray);

  
  
// console.log(randomArray);
  
var chart = new Highcharts.Chart({
  chart: {
    renderTo: 'container-chart',
    marginBottom: 80
  },
  xAxis: {
    categories: ['Month 1', '', '', '', '', '', '', '', '', '', '', 'Month4'],
    labels: {
      rotation: 90
    }
  },

  series: [{
    // data: [250, 240, 220, 200,180, 160,120 , 100, 80,100 , 110, 120.4],        
    data: randomArray  
     
  }]
});

});



$(".next-chart2").click(function (e) {
  
  var chart = new Highcharts.Chart({
    chart: {
      renderTo: 'container-chart2',
      marginBottom: 80
    },
    xAxis: {
      categories: ['Month 1', '', '', '', '', '', '', '', '', '', '', 'Month6'],
      labels: {
        rotation: 90
      }
    },
  
    series: [{
      data: [250, 200, 180, 160, 140, 120.0, 100.6, 80.5, 60.4, 80.1, 100.6, 120.4]        
    }]
  });
  
  });


  setTimeout(function() {
    var element = document.querySelector('.random_coupon_code');
    if (element) {
      element.style.display = 'none';
    }
  }, 3000);


});




 
