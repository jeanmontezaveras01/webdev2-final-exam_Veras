<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: rgb(16,140,171);
                background: radial-gradient(circle, rgba(16,140,171,1) 3%, rgba(91,115,145,1) 96%);
                font: white;
                }
                .bg-image {
                    /* The image used */
                    
                    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9ps692IWip4KGX7DB0_SIR1EuYUPnuZ5ZKZmnS9RhIyy5d-6IZZ6Yvm2_mKL6wa79oeg&usqp=CAU");
                    /* Add the blur effect */
                    filter: blur(10px);
                    -webkit-filter: blur(0px);

                    /* Full height */
                    height: 100%;

                    /* Center and scale the image nicely */
                    background-position: center;
                    background-repeat: repeat;
                    background-size: cover;
    
                    }

            h2 {
                text-align:center;
                margin-top: 2%;
                margin-bottom: 2%;
               color: white; 
        
            }
            h3 {
                text-align:center;
                margin-bottom: 5%;
                margin-top: 5%;
               color: white; 
            }

            #ourmanna-verse {
                text-align:center;
                margin-bottom: 5%;
                color:white;
                position: absolute;
                top: 15%;
                left:20%;
            }
            
            a {
                Margin-right:50%;
                margin-left: 50%;
            }
            form{
                border: 5px;
                border-style: solid;
               Margin-left: 35%;
               Margin-right: 35%;
               padding: 2px;
               padding-bottom:2px;
               text-align:center;               
            }

            .typefield-label{
                text: white;
            }
                

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-left min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-left py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-image">
            <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9ps692IWip4KGX7DB0_SIR1EuYUPnuZ5ZKZmnS9RhIyy5d-6IZZ6Yvm2_mKL6wa79oeg&usqp=CAU">
            </div>
                <h2>Bible Study Request Form</h2>
                
                <div id="ourmanna-verse">
                        <div id="mannaverse-container">
                            <p id="mannaverse">
                                For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                            </p>
                            <p id="mannaverse-reference">
                                John 3:16
                                <small id="mannaverse-version"><i>(KJV)</i></small>
                            </p>
                        </div>
                    </div><br>

                <form action="/bible-study-request-createform" method="POST" class="">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($biblestudy->id); ?>" name="id" >
                            <br>
                            <label for="complete_name" class="typefield-label" style="text-align: left;">Complete Name</label>
                            <input type="text" value="<?php echo e($biblestudy->complete_name); ?>"  name="complete_name" class="formtext" placeholder="&nbsp;&nbsp;Surname, Fristname, MI."><br>
                            <br>
                            <label for="email_address" class="typefield-label" style="text-align: left;">Email Address</label>
                            <input type="email" value="<?php echo e($biblestudy->email_address); ?>"  name="email_address" class="formtext" placeholder="&nbsp;&nbsp;Email Address"><br>
                            <br>
                            <label for="contact_number" class="typefield-label" style="text-align: left;">Contact Number</label>
                            <input type="number" value="<?php echo e($biblestudy->contact_number); ?>"  name="contact_number" class="formtext" placeholder="&nbsp;&nbsp;Contact Number"><br>
                            <br>
                            <label for="birthdate" class="typefield-label" style="text-align: left;">Birthdate</label>
                            <input type="date" value="<?php echo e($biblestudy->birthdate); ?>"  name="birthdate" class="formtext" placeholder="&nbsp;&nbsp;Birthdate"><br>
                            <br>
                            <label for="religious_affiliation" class="typefield-label" style="text-align: left;">Religious Affiliation</label>
                            <input type="text" value="<?php echo e($biblestudy->religious_affiliation); ?>"  name="religious_affiliation" class="formtext" placeholder="&nbsp;&nbsp;Religious Affiliation"><br>
                            <br>
                            <label for="bible_study_date" class="typefield-label" style="text-align: left;">Bible Study Date</label>
                            <input type="date" value="<?php echo e($biblestudy->bible_study_date); ?>"  name="bible_study_date" class="formtext" placeholder="&nbsp;&nbsp;Bible Study Date"><br>
                            <br>
                            <label for="bible_study_time" class="typefield-label" style="text-align: left;">Bible Study Time</label>
                            <input type="time" value="<?php echo e($biblestudy->bible_study_time); ?>"  name="bible_study_time" class="formtext" placeholder="&nbsp;&nbsp;Bible Study Time"><br>
                            <br>
                            <label for="bible_study_location" class="typefield-label" style="text-align: left;">Bible Study Location</label>
                            <input type="text" value="<?php echo e($biblestudy->bible_study_location); ?>"  name="bible_study_location" class="formtext" placeholder="&nbsp;&nbsp;Bible Study Location/"><br>
                            <br>
                            <button type="submit" >Submit</button>
                    </form>        
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>
<?php /**PATH C:\VerasExam\resources\views/form.blade.php ENDPATH**/ ?>