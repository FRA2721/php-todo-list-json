<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap -->
    
    <!-- css -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- /css -->
    
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /axios -->
  
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vue -->


    <!-- title -->
    <title>PHP ToDo List JSON</title>
    <!-- /title -->

</head>

<body>

    <!-- app -->
    <div id="app">
        <!-- container -->
        <div class="container mt-5">
            <h1 class="text-center">To do list</h1>

            <!-- list items -->
            <ul class="list-group mt-5">
                <li class="list-group-item" v-for="task in todoList">{{ task.text }}</li>
            </ul>
            <!-- /list items -->

        </div>
        <!-- /container -->
    </div>
    <!-- /app -->

    <!-- js -->
    <script src="js/script.js"></script>
    <!-- /js -->

</body>

</html>