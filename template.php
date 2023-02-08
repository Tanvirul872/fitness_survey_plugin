<?php
wp_head(); 
?>

<?php
session_start();
?>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <form action="#" class="form" id="enquiry">
      <h1 class="text-center">Fitness Survey Form</h1>
      <!-- Progress bar -->
      <!-- <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div class="progress-step progress-step-active" data-title="Intro"></div>
        <div class="progress-step" data-title="Contact"></div>
        <div class="progress-step" data-title="ID"></div>
        <div class="progress-step" data-title="4"></div>
        <div class="progress-step" data-title="5"></div>
        <div class="progress-step" data-title="6"></div>
        <div class="progress-step" data-title="7"></div>
        <div class="progress-step" data-title="8"></div>
        <div class="progress-step" data-title="9"></div>


        <div class="progress-step" data-title="10"></div>
        <div class="progress-step" data-title="11"></div>
        <div class="progress-step" data-title="12"></div>
        <div class="progress-step" data-title="13"></div>
        <div class="progress-step" data-title="14"></div>
        <div class="progress-step" data-title="15"></div>
        

        <div class="progress-step" data-title="16"></div>
        <div class="progress-step" data-title="17"></div>
        <div class="progress-step" data-title="18"></div>
        <div class="progress-step" data-title="19"></div>
        <div class="progress-step" data-title="20"></div>
        <div class="progress-step" data-title="21"></div>


        <div class="progress-step" data-title="22"></div>
        <div class="progress-step" data-title="23"></div>
        <div class="progress-step" data-title="24"></div>
        <div class="progress-step" data-title="25"></div>
        <div class="progress-step" data-title="26"></div>
        <div class="progress-step" data-title="27"></div>


        <div class="progress-step" data-title="28"></div>
        <div class="progress-step" data-title="29"></div>
        <div class="progress-step" data-title="30"></div>
        <div class="progress-step" data-title="31"></div>
        <div class="progress-step" data-title="32"></div>
        <div class="progress-step" data-title="33"></div>


        <div class="progress-step" data-title="34"></div>
        <div class="progress-step" data-title="35"></div>
        <div class="progress-step" data-title="36"></div>
        <div class="progress-step" data-title="37"></div>
        <div class="progress-step" data-title="38"></div>
        <div class="progress-step" data-title="39"></div>

      </div> -->

      <!-- Steps -->



      <div class="form-step form-step-active">


      <?php
       function get_session_in_wordpress() {
        // Start the session if it hasn't already been started
        if ( ! session_id() ) {
            session_start();
        }
      
        // Return the session value
        return $_SESSION;
    }

    // print_r(get_session_in_wordpress()); 
    
    // $bmr_gender = $formdata['p_gender']

    // echo $bmr_men = (($_SESSION['p_weight']*10) + ($_SESSION['p_height']*6.25) - (5*$_SESSION['p_age'])+5 ); 
    // echo $bmr_women = (($_SESSION['p_weight']*10) + ($_SESSION['p_height']*6.25)- (5*$_SESSION['p_height'])-16) ; 

      ?>



 
        <h6> How many kilogrames would you like to lose? </h6>        
        <div class="form-check checkbox_div div_active">
          <input class="form-check-input" type="radio" name="weight_loss" id="exampleRadios1" value="1-3 kg" checked>
          <label >
              1-3 kg
          </label>
        </div>
        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="weight_loss" id="exampleRadios2" value="3-5 kg">
          <label>
            3-5 kg
          </label>
        </div>
        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="weight_loss" id="exampleRadios3" value="5-7 kg" >
          <label>
            5-7kg
          </label>
        </div>

        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="weight_loss" id="exampleRadios3" value="10-20 kg" >
          <label>
            10-20 kg
          </label>
        </div>


        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="weight_loss" id="exampleRadios3" value="20 kg or more" >
          <label>
            20 kg or more
          </label>
        </div>


        <div class="">
          <a href="##" class="btn btn-next buttton-next buttton-next1 width-50 ml-auto">Next</a>
        </div>
      </div>


      <div class="form-step">

        <h6> Choose Gender </h6>
        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="p_gender" id="exampleRadios1" value="man">
          <label>
            Man
          </label>
        </div>
        <div class="form-check checkbox_div">
          <input class="form-check-input" type="radio" name="p_gender" id="exampleRadios2" value="woman">
          <label>
            Woman
          </label>
        </div>

        <div class="btns-group">
          <a href="##" class="btn btn-prev buttton-next">Previous</a>
          <a href="##" class="btn btn-next buttton-next">Next</a>
        </div>


      </div>


      <div class="form-step">



        <h6> Enter Your Weight ,Height, and name </h6>
          <div class="input-group">
            <label for="p_height">Body Height (in cm)</label>
            <input type="text" name="p_height" id="p_height" />
          </div>
          <div class="input-group">
            <label for="p_weight">Body Weight (in kg)</label>
        
            <input type="text" name="p_weight" id="p_weight" />
          </div>

        <div class="input-group">
          <label for="p_age"> Age </label>
          <input type="text" name="p_age" id="p_age" />
        </div>

        <div class="input-group">
          <label for="p_name"> @Name </label>
          <input type="text" name="p_name" id="p_name" />
        </div>

        <div class="btns-group">
          <a href="##" class="btn btn-prev buttton-next">Previous</a>
          <button href="##" class="btn btn-next buttton-next" value="submit">Next</button>
        </div>
      </div>



      <div class="form-step">

    

       <h6> Great, first step done! </h6> 
       <p>Through the questionnaire, we will analyze 
        your answers and present you with the
        correct approach to weight loss. 
        You will find out how quickly you
        can reach your goal and how many kilograms you can 
        lose in 4 months. Weight loss must be individually 
        tailored and based on the answers we will also
        know if our program is even suitable for you, 
        as our approach is specific and may not be for 
        everyone. </p>


        <!-- <div class="input-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" />
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
        </div> -->




        <div class="btns-group">
          <a href="##" class="btn btn-prev buttton-next">Previous</a>
          <a href="##" class="btn btn-next buttton-next" value="submit">Next</a>
        </div>



      </div>




      <div class="form-step">

       <h6>The questionnaire will take about 5 minutes of your time. </h6>

        <div class="input-group">
          <label for="phone">Name</label>
          <input type="text" name="name" id="name"/>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
        </div>


        <div class="btns-group">
          <a href="##" class="btn btn-prev buttton-next">Previous</a>
          <a href="##" class="btn btn-next buttton-next">Next</a>
        </div>
      </div>


      <div class="form-step">

        <!--     -->
        <!--        <div class="input-group">-->
        <!--          <label for="phone">Phone</label>-->
        <!--          <input type="text" name="phone" id="phone" />-->
        <!--        </div>-->
        <!--        <div class="input-group">-->
        <!--          <label for="email">Email</label>-->
        <!--          <input type="text" name="email" id="email" />-->
        <!--        </div>-->
        
        
        
                <h6 class="preg_div"> Are you pregnant? </h6>
        
                <div class="form-check checkbox_div preg_div">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
                  <label>
                    Yes
                  </label>
                </div>
                <div class="form-check preg_div preg_no checkbox_div">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
                  <label>
                    No
                  </label>
                </div>

                <h6 class="preg_msg d-none">
                  Congratulations!👏
                  Unfortunately, Weight Loss program is not suitable for pregnant women. Please consult your doctor about weight loss during pregnancy. 
                </h6>
        
                <div class="btns-group">
                  <a href="##" class="btn btn-prev buttton-next">Previous</a>
                  <a href="##" class="btn btn-next buttton-next">Next</a>
                </div>
        
  
              </div>




        <div class="form-step">

          <h6> Age </h6>
          <div class="form-check checkbox_div">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
            <label>
              30 years or less
            </label>
          </div>
          <div class="form-check checkbox_div">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
            <label>
              30 – 40 years
            </label>
          </div>

          <div class="form-check checkbox_div">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
            <label>
              40 – 50 years
            </label>
          </div>

          <div class="form-check checkbox_div">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
            <label>
              50 – 60 years
            </label>
          </div> 
          
          <div class="form-check checkbox_div">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
            <label>
              60 years or older
            </label>
          </div>

          <div class="btns-group">
            <a href="##" class="btn btn-prev buttton-next">Previous</a>
            <a href="##" class="btn btn-next buttton-next">Next</a>
          </div>
   </div>




   
   <div class="form-step">

    <h6> Was there any particular reason for the weight gain? (multiple answers possible) </h6>
    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
      <label>
         There is no particular reason
      </label>
    </div>
    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
      <label  for="exampleRadios2">
        Pregnancy
      </label>
    </div>
    
    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
      <label  for="exampleRadios2">
        Stress
      </label>
    </div> 
    
    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
      <label  for="exampleRadios2">
        Closure during Covid-19
      </label>
    </div>

    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
      <label  for="exampleRadios2">
         Job and responsibilities
      </label>
    </div>

    <div class="form-check checkbox_div2">
      <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
      <label  for="exampleRadios2">
         Medicines or hormonal imbalance
      </label>
    </div>


    <div class="btns-group">
      <a href="##" class="btn btn-prev buttton-next">Previous</a>
      <a href="##" class="btn btn-next buttton-next">Next</a>
    </div>
</div>




<div class="form-step">

  <h6 class="div_9">  Women [according to #7] need a slightly different approach depending on their current lifestyle. What best describes you? </h6>
  <div class="form-check checkbox_div div_9_a div_9">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
       I have to do a lot on my diet and exercise
    </label>
  </div>
  <div class="form-check checkbox_div div_9_b div_9">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I know and practice a little, but not enough
    </label>
  </div>
  
  <div class="form-check checkbox_div div_9_c div_9">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I eat healthy and exercise most of the time
    </label>
  </div> 
  
   <h6 class="cls_9_a d-none">  Don't worry, you're at the right address! In the following, we will present several smaller, step-by-step goals that will lead you to your desired goal in the long run. </h6>
   <h6 class="cls_9_b d-none">  Don't worry, you're at the right address! In the following, we will present several smaller, step-by-step goals that will lead you to your desired goal in the long run.  </h6>
   <h6 class="cls_9_c d-none">  Don't worry, you're at the right address! Sometimes, even if we think we're doing everything right, we still don't see the results... In the following, we'll present you with several smaller, step-by-step goals that will lead you to your desired goal in the long run.  </h6>


  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next ">Previous</a>
    <a href="##" class="btn btn-next buttton-next next-chart">Next</a>
  </div>
</div>





<div class="form-step">

  <h6> 10. Long-term results can only be achieved by gradually changing your lifestyle and not by aggressive diets or exercises. This is how clients of Športna Klinika also start losing weight, under the supervision of our kinesiologists, nutritionists and physiotherapists. </h6>

  
  <div id="container-chart" style="height: 400px; width: 300px">
    chart title 
 </div>


  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>



<div class="form-step">

  <h6> 
    The problem with most approaches is that the initial motivation goes away quickly and it is difficult to persist. Programs are not flexible, and this is the most common reason for failure.
  </h6>
  <h6> 
Losing weight is a personal thing and everyone is different. You have to adapt the approach to yourself and not trust programs that "throw everything in the same bin".
  </h6>
  <h6> 
    With the Sports Clinic program, it's easier, you can adapt activities and nutrition to yourself.
  </h6>

  <h6> 
    Answer us a few more questions so that we can give you some more concrete advice….
  </h6>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">

  <h6>  How have you approached your diet so far? (multiple answers are possible) </h6>
  <div class="form-check checkbox_div2 ">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
    <label >
       I didn't have a regular diet, I ate everything
    </label>
  </div>
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I was eating fairly healthy, but without results
    </label>
  </div>
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I avoided sugar and carbohydrates
    </label>
  </div>
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
       I avoided fats
    </label>
  </div> 
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
       I am on a diet (Write which one:____)
    </label>
    <input type="text" class="form-control mt-2">
  </div>
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I have already tried several diets
    </label>
  </div> 
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I eat healthy
    </label>
  </div> 

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>







<div class="form-step">

  <h6>  Food always gives us the most headaches. There is so much information and different options that it is difficult to decide on the right one. And even when we decide, we are often run over by a lack of time and organization, because all diets are exhausting and difficult to stick to. Given our schedule and time, they are not flexible enough. </h6>
  <h6> As part of the Home Slimming Program, we do not tackle nutrition aggressively, but try to gradually change eating habits, without strenuous diets.
    All our wards receive:
  </h6>
  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1">
    <label >
      Recipe booklet,
    </label>
  </div>

  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1">
    <label >
      10-day personalized menu (will be prepared according to your answers to this questionnaire)
    </label>
  </div>


  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1">
    <label >
      Diet plan on as many as 30 PDF pages,
    </label>
  </div>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">

  <h6>  Our motto is to teach about nutrition and try to have a long-term impact on body weight and ultimately health by raising awareness and incorporating small changes. With this, we don't just provide short results to the protégés, but the knowledge and results remain with them even after the end of our program.
    In the next step, we will reveal 3 secrets and tricks from the program itself, which you can try to incorporate into your everyday life.
  </h6>
   <h6 class="d-none"> 
    [Great, let's move on!] [I don't care, I'd skip the tips] – (jump to 18.)
  </h6>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>



<div class="form-step">

  <h6 class="div_15">
     What kind of potato do you think is the healthiest?
  </h6>
  <div class="form-check checkbox_div div_15 div_15_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      Hot potatoes baked in the oven
    </label>
  </div>
  <div class="form-check checkbox_div div_15 div_15_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Cold potatoes baked in the oven
    </label>
  </div>

  <div class="form-check checkbox_div div_15 div_15_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Hot, boiled potatoes
    </label>
  </div>
  
  <div class="form-check checkbox_div div_15 div_15_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Cold, boiled potatoes
    </label>
  </div> 
  


  <div class="form-check checkbox_div div_15 div_15_e">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Cold, boiled potatoes with vinegar in a salad
    </label>
  </div>


  <p class="div_15_p d-none"> 

Secret from the program #1
Unfortunately no, the healthiest is a cold, boiled potato with vinegar in a salad!
During weight loss, we want to eat foods that do not raise our blood sugar too quickly. Did you know that the very method of preparing potatoes determines how quickly blood sugar will rise?
Hot, baked potatoes in the oven are the least suitable for weight loss. If we cool it, it's even better... Even better than baked are boiled potatoes. Boiled, hot potatoes are followed by boiled, cooled potatoes, which raise blood sugar the slowest of all the versions so far. Do you know which one is ideal? Boiled, cooled potatoes, in a salad with vinegar! Vinegar additionally lowers the so-called glycemic index, which means that it further slows down the rise in blood sugar.
It is also important not to overcook potatoes and to eat them in pieces rather than pureed.

  </p>

  <p class="div_15_p_e d-none"> 
   Secret from the program #1
    Well done, it's true!
    During weight loss, we want to eat foods that do not raise our blood sugar too quickly. Did you know that the very method of preparing potatoes determines how quickly blood sugar will rise?
    Hot, baked potatoes in the oven are the least suitable for weight loss. If we cool it, it's even better... Even better than baked are boiled potatoes. Boiled, hot potatoes are followed by boiled, cooled potatoes, which raise blood sugar the slowest of all the versions so far. Do you know which one is ideal? Boiled, cooled potatoes, in a salad with vinegar! Vinegar additionally lowers the so-called glycemic index, which means that it further slows down the rise in blood sugar.
    It is also important not to overcook potatoes and to eat them in pieces rather than pureed.
    
  </p>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">

  <h6 class="div_16">
     Are smoothies healthy and always suitable for weight loss?
  </h6>
  <div class="form-check checkbox_div div_16 div_16_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
     Yes
    </label>
  </div>
  <div class="form-check checkbox_div div_16 div_16_b">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      No
    </label>
  </div>

  <p class="cls_16_a d-none"> 
    Program Secret #2
    This is the belief of most people, but it is not so! Let's see why…
    There is a general belief that smoothies are always healthy and suitable during weight loss. This is not true at all. Namely, the fruit juice that we squeeze out does not contain fiber, as the whole fruit does. Fiber increases the time it takes for our body to break down the fruit and get to the sugars. But if the dry matter (fiber) is removed or the fruit is "blended" or squeezed, the body has easier access to sugars and thus blood sugar rises faster. Thus, a smoothie made from ground oat flakes (even with flakes, processing makes it easier for the body to access carbohydrates), banana, apple, milk or yogurt, some chia seeds and, if possible, protein powder, is a real calorie bomb that raises blood sugar very quickly. Such a smoothie is more suitable for gaining weight than losing it.
  </p> 

  <p class="cls_16_b d-none"> 
    Program Secret #2
    It's true! Do you know why?
    There is a general belief that smoothies are always healthy and suitable during weight loss. This is not true at all. Namely, the fruit juice that we squeeze out does not contain fiber, as the whole fruit does. Fiber increases the time it takes for our body to break down the fruit and get to the sugars. But if the dry matter (fiber) is removed or the fruit is "blended" or squeezed, the body has easier access to sugars and thus blood sugar rises faster. Thus, a smoothie made from ground oat flakes (even with flakes, processing makes it easier for the body to access carbohydrates), banana, apple, milk or yogurt, some chia seeds and, if possible, protein powder, is a real calorie bomb that raises blood sugar very quickly. Such a smoothie is more suitable for gaining weight than losing it.
  </p>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">

  <h6 class="div_17">
     Where do you burn more calories?
  </h6>
  <div class="form-check checkbox_div div_17 div_17_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      In a hot environment (e.g. sauna)
    </label>
  </div>
  <div class="form-check checkbox_div div_17 div_17_b">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      In a cold environment (e.g. bathing in cold water)
    </label>
  </div>


  <p class="cls_17_a d-none"> 
Secret from the program #7
Correct answer: In a cold environment
Maintaining an optimal and constant body temperature in a different environment can require a lot of energy or consumes a lot of calories. Did you know that in a cold environment, we use much more energy/calories than in a warm one (e.g. sauna)? It is a mistake to believe that the sauna is an effective tool for fat loss... in the sauna we only lose water through sweating, which the body quickly replaces after the end.
So how can we use our thermoregulatory system to achieve fat loss? Water "dissipates" our body temperature 24x faster than air. Swimming in slightly cooler water is such a great activity for fat loss. Also, taking a cold shower after exercise or activity further increases fat burning.
Of course, there are quite a few approaches that can be used to further lose fat, but we are here for the questionnaire and not for reading articles 😊
Got it, go ahead!
  </p> 

  <p class="cls_17_b d-none"> 
    Secret from the program #7
    That's right, right! Let us explain why…
    Maintaining an optimal and constant body temperature in a different environment can require a lot of energy or consumes a lot of calories. Did you know that in a cold environment, we use much more energy/calories than in a warm one (e.g. sauna)? It is a mistake to believe that the sauna is an effective tool for fat loss... in the sauna we only lose water through sweating, which the body quickly replaces after the end.
    So how can we use our thermoregulatory system to achieve fat loss? Water "dissipates" our body temperature 24x faster than air. Swimming in slightly cooler water is such a great activity for fat loss. Also, taking a cold shower after exercise or activity further increases fat burning.
    Of course, there are quite a few approaches that can be used to further lose fat, but we are here for the questionnaire and not for reading articles 😊
    Got it, go ahead!
  </p>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">

  <h6> 
     Do you allow us to automatically generate your personalized 10-day menu based on the answers in the background, which you can receive as part of the program? 🎉
  </h6>
  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      Yes
    </label>
  </div>
  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
       No
    </label>
  </div>
  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">
  <h6> 
    Let's touch on activity and exercise. How would you rate your activity level?
  </h6>
  <div class="form-check checkbox_div div_19 div_19_a">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      I am very active and master all the exercises,
    </label>
  </div>
  <div class="form-check checkbox_div div_19">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label >
      I am active, but I do not do any exercises,
    </label>
  </div>


  <div class="form-check checkbox_div div_19">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label>
      I am not active and I do not do exercises.
    </label>
  </div>


  <p class="cls_19_a d-none"> 
    <!-- 19a – POP-UP: -->
    Strength training as part of the program is intended for beginners in the first month. If you are already very active and do more advanced exercises, the first month's exercise might be too easy for you.
    [OK]
  </p>
  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>



<div class="form-step">
  <h6> 
    How have you approached exercise so far? (multiple answers are possible)  </h6>
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      I did strength exercises in the gym
    </label>
  </div>
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I went for walks
    </label>
  </div>


  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I rode a bicycle
    </label>
  </div>


  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I participated in group exercises (pilates, yoga, bootcamp,...)
    </label>
  </div>

  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I went swimming
    </label>
  </div>

  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      I didn't exercise much
    </label>
  </div>

  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Other:
    </label>
    <input type="text" class="form-control mt-2">
  </div>



  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>





<div class="form-step">
  <h6> 
 In addition to diet, the cause of failure is also the wrong choice of activities. For women [according to #7], it's very important to do strength training in addition to fat burning. With this type of exercise, you maintain muscle mass and tone, while at the same time maintaining a high basal metabolism. At home, make sure that despite losing weight, your body still uses a lot of energy and does not stop.
It is often a matter of debate what type of exercise is ideal; HIIT, functional training, running, spinning,... The recipe for ideal weight loss is a combination of strength training and low-intensity endurance training (read: bike, walking, hills, running, swimming,...). Doing intense strength training several times a week can quickly become too much, and doing only endurance training is not enough. Many times this is precisely the reason for surrender and failure...
Only a combination of these two exercises, both short and intense for strength, as well as longer, low-intensity, cyclic exercises such as e.g. walking will lead you to success.

Example:
Weekly schedule, 2x high-intensity strength training and 3-4x walking.

<!-- [Got it, go ahead!] -->
  </h6>
  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>





<div class="form-step">
  <h6> 
     As part of the Home Slimming Program, we planned activities for the female residents so that 2-3 times a week video strength training is performed with a kinesiologist, and 2-5 times a week they go walking. Strength training is started very slowly and is suitable even for complete beginners. Exercise from home, without equipment. Pace and length are also extremely important when walking, as the normal pace at which 90% of people walk is not sufficient. This is precisely why we have prepared a detailed walking program for each month.
    <!-- [Go ahead!] -->
  </h6>
  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>



<div class="form-step">
  <h6> 
     Finally, some questions and advice on the psychology of weight loss, motivation and progress. 
  </h6>
  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>


<div class="form-step">
  <h6> 
    Do you agree with the statement: "I know what I should do to lose a few kilos and get in shape, but I lack motivation and time." I need a program that will suit MY pace and life."
  </h6>
  

  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label >
       YES
    </label>
  </div>

  <div class="form-check checkbox_div">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="no">
    <label>
       No
    </label>
  </div>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>




<div class="form-step">
  <h6> 
    What do you think is the reason that you do not manage to lose weight? (multiple answers are possible)
  </h6>
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" checked>
    <label >
      Lack of motivation,
    </label>
  </div>
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Insufficient time and commitments,
    </label>
  </div>


  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Inefficient and inadequate programs
    </label>
  </div>
  
  
  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="no">
    <label  for="exampleRadios2">
      Other restrictions
    </label>
  </div>

  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>






<div class="form-step">
  <h6> 
     Through years and years of experience, we at the Sports Clinic have found that despite the effectiveness of the programs, our wards sometimes failed to achieve the set goals. The lack of motivation, time, obligations and everything that happens to us in life is sometimes too much to be able to include exercise, diet and everything else in our busy schedule...
  </h6>


  <p>
    2 things are so important for achieving your goals:
    #1 – The program must be flexible and adaptable so that we can follow it even in the event of unexpected obstacles and obstacles.
    #2 – Attention should also be paid to the psychology of weight loss, motivation and the right approach. Without it, no diet and no exercise will help.
  </p>
  


  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>





<div class="form-step">
  <h6> 
    Through years and years of experience, we at the Sports Clinic have found that despite the effectiveness of the programs, our wards sometimes failed to achieve the set goals. The lack of motivation, time, obligations and everything that happens to us in life is sometimes too much to be able to include exercise, diet and everything else in our busy schedule...
  </h6>


  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>


 <div class="form-step">
  
    <p>
      At Športna Klinika, we have therefore developed a solution also in this area, which no one is talking about. We made Slimming Mentor. It is a product that does not focus on diets and various trainings, but rather provides tools and advice with which you stay motivated, organized, and persevere despite all obstacles. All participants of the Home Slimming Program receive the Slimming Package for FREE in the third month.
      Everywhere option [back]
    </p>  


  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>


<div class="form-step">
    <p>
       Just a few more questions and we come to the end of the questionnaire!
    </p>  
  <div class="btns-group">
    <a href="##" class="btn btn-prev buttton-next">Previous</a>
    <a href="##" class="btn btn-next buttton-next">Next</a>
  </div>
</div>



<div class="form-step"> 

  <p>
     Do you agree with the statement: "I have been thinking about change and health for quite some time, but I have never found time for myself."
 </p>  

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          It's true
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          Sometimes
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          Not really
        </label>
      </div>


<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>




<div class="form-step"> 

  <p>
     Accomplishing my goals and weight…
  </p>  

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          It would also have a positive effect on other areas in my life
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          It would not affect other areas of my life
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          If you can't decide, choose the statement that is closer to you. 
        </label>
      </div>


<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>






<div class="form-step"> 

  <p>
    What feelings do you hope to achieve on your way to your goal? (multiple answers possible) 
  </p>  

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
        <label >
          Self-confidence
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Peace
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Happiness      
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Strength      
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Gratitude      
        </label>
      </div>
      
      
      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Satisfaction      
        </label>
      </div>
      
      
      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
        <label >
          Vitality      
        </label>
      </div>


<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>




<div class="form-step"> 

  <p>
     I would have my body…
 </p>  

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          She likes it the same, regardless of body weight
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          I prefer to reach my target weight
        </label>
      </div>

      <div class="form-check checkbox_div">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          If you can't decide, choose the statement that is closer to you.      
        </label>
      </div>

<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>





<div class="form-step"> 

   <p>
     When I reach my goal weight I would like to… (multiple answers are possible) 
  </p>  

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
        <label >
          Enjoyed food without a guilty conscience
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
        <label >
          Thought less about food and exercise
        </label>
      </div>

      <div class="form-check checkbox_div2">
        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
        <label >
          Worried less about her body
        </label>
      </div>

<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>




<div class="form-step"> 

   <p class="div_34">
     When it comes to losing weight….
    </p>  

      <div class="form-check checkbox_div div_34 div_34_a">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          I can do it alone, without help
        </label>
      </div>

      <div class="form-check checkbox_div div_34 div_34_b">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
        <label >
          I need a "kick" and a program
        </label>
      </div>

<p class="cls_34_a d-none"> 
   The Home Slimming Program allows you to do just that. Get all the necessary materials, exercises and advice, and you'll lose weight yourself!
</p>
<p class="cls_34_b d-none">
   Don't worry, we are the kick in the ass you need :)
</p>

<div class="btns-group">
  <a href="##" class="btn btn-prev buttton-next">Previous</a>
  <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>



<div class="form-step"> 

    <p>
     How much would you be willing to invest for your health and achieving your goals?
   </p>  

     <div class="form-check checkbox_div">
       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
       <label >
        €1,000 or more
       </label>
     </div>

     <div class="form-check checkbox_div">
       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
       <label >
        €1000 - €500
       </label>
     </div>   
     
     <div class="form-check checkbox_div">
       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
       <label >
        €500 - €300
       </label>
     </div>
     
     <div class="form-check checkbox_div">
       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="yes" checked>
       <label >
        Less than €300
       </label>
     </div>
<div class="btns-group">
 <a href="##" class="btn btn-prev buttton-next">Previous</a>
 <a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>




<div class="form-step"> 

  <p>
    What are your doubts that make you think you can't achieve your goal? (multiple answers possible)
  </p>  

   <div class="form-check checkbox_div2">
     <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
     <label >
        Past, failed attempts
     </label>
   </div>

   <div class="form-check checkbox_div2">
     <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
     <label >
      The programs are too strict
     </label>
   </div>   
   
   <div class="form-check checkbox_div2">
     <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
     <label >
      Diets are not for me
     </label>
   </div>
   
   <div class="form-check checkbox_div2">
     <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
     <label >
      I'm out of shape
     </label>
   </div>


   <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes">
    <label >
      That I will gain the weight back again
    </label>
  </div>


  <div class="form-check checkbox_div2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="yes" >
    <label >
      I am afraid that the program will be ineffective
    </label>
  </div>



<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>




<div class="form-step"> 

  <p>

  @IME, nice that you shared your doubts… :)
  Of course, doubts are completely normal... but the good news is that our Home Slimming Program is suitable for you, it is flexible, there are no strict diets, no strenuous exercises and it helps to maintain the lost body weight long after the end. This can also be confirmed by all our protégés who have successfully lost extra pounds and reached their ideal weight...

  </p>  


<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>



<div class="form-step"> 

  <p>
     BEFORE/AFTER pics
    BENEATH TEXT:
    Are you ready to find out how many kilograms you can lose in the 4 months of the program?
  </p>  


<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next checkbox_div_next">Next</a>
</div>
</div>




<div class="form-step"> 

  <p>
     ANALYZING THE RESULTS AND GENERATION OF A PERSONALIZED MENU….
  </p> 
  
  Analyzing reports ... 


  
  <div class="wrapper mb-4">
        
    <div class="progress-bar">
      <div class="bar" data-size="100">
        <span class="perc"></span>
      </div>
    </div>

  </div>


<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next next-chart2">Next</a>
</div>
</div>


<div class="form-step"> 

  <p>
     THE LAST PROGRAM YOU WILL EVER NEED:
  </p> 

  Final report ... 

   <ul> 

<li> 1.Your Bmr is <span class="bmr_people"></span> </li>
<!-- <li> you have to lost 5kg </li> -->
<li> 2. Continue developing healty habits to keep the weights after reaching you goal </li>
<li> 3. Feel healthier </li>

</ul>

  <div id="container-chart2" style="height: 400px; width: 300px">
    chart title 
 </div>


<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>



<div class="form-step"> 
  <p>
    Checkout Coupon
  </p> 

  <p>
    You are given a code for checkout.
    this is a coupon code.     
  </p> 
  <h6> you coupon code is <span class="random_coupon_code">  </span> </h6> 
    <?php 
     
     function check_cart_for_products() {
      global $woocommerce;
  
      if ( $woocommerce->cart->is_empty() ) {
          wp_redirect( get_permalink( wc_get_page_id( 'shop' ) ) );
          exit;
      }
  }
      echo check_cart_for_products(); 

    ?>
  <h4>
    It will valid for next 15 minutues 
  </h4> 

<div class="btns-group">
<a href="##" class="btn btn-prev buttton-next">Previous</a>
<a href="##" class="btn btn-next buttton-next">Next</a>
</div>
</div>

   <div class="form-step">
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" />
        </div>
        <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
          <input
            type="password"
            name="confirmPassword"
            id="confirmPassword"
          />
        </div>
        <div class="btns-group">
          <a href="##" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
      </div> 

    </form>
  </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.angularjs.org/1.2.21/angular.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
 
</html>



<?php
wp_footer();