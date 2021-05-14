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
            
            .choice1{
                text-align: center;
                margin-left:41.5%;
            }
            .choice2{
                
                margin-left:42%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
                <h2>Thank You</h2>

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

                    <a href="/bible-study-requests">
                        <button type="submit" class="choice1">LIST OF BIBLE STUDY REQUESTS</button>
                    </a>
                    <a href="/bible-study-request-form">
                        <button type="submit"class="choice2">BIBLE STUDY REQUESTS FORM</button>
                    </a>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>
<?php /**PATH C:\VerasExam\resources\views/thankyou.blade.php ENDPATH**/ ?>