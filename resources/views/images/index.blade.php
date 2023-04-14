<!-- resources/views/images/index.blade.php -->
<html>
    <head>
        <title>My Image App</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="contentContainer">
            <div class= "imgContainer headContainer">   
            <button id="prevHeadButton">Previous Head</button> 
            <figure class="itemContainer">
            <img id="head" src="{{ asset($images['head'][0]) }}" alt="Head">
            </figure>
            <button id="nextHeadButton">Next Head</button>
            </div>
            <div class=" imgContainer  shirtContainer">
            <button id="prevShirtButton">Previous Shirt</button>
            <figure class="itemContainer">
            <img id="shirt" src="{{ asset($images['shirt'][0]) }}" alt="Shirt">
            </figure>
            <button id="nextShirtButton">Next Shirt</button>
            </div>
            <div class=" imgContainer  pantsContainer">
            <button id="prevPantsButton">Previous Pants</button>
            <figure class="itemContainer">
            <img id="pants" src="{{ asset($images['pants'][0]) }}" alt="Pants">
            </figure>
            <button id="nextPantsButton">Next Pants</button>   
            </div>
            </div>
        </div>
       
       
        
        
        <script>
            var images = JSON.parse('{!! addslashes(json_encode($images)) !!}');
            var currentIndexes = {
                head: 0,
                shirt: 0,
                pants: 0
            };
            var head = document.getElementById('head');
            var shirt = document.getElementById('shirt');
            var pants = document.getElementById('pants');
            
            var prevHeadButton = document.getElementById('prevHeadButton');
            var prevShirtButton = document.getElementById('prevShirtButton');
            var nextShirtButton = document.getElementById('nextShirtButton');
            var prevPantsButton = document.getElementById('prevPantsButton');
            var nextPantsButton = document.getElementById('nextPantsButton');

            prevHeadButton.addEventListener('click', function() {
                currentIndexes.head = (currentIndexes.shirt - 1 + images.head.length) % images.head.length;
                head.src = "{{ asset('') }}" + images.head[currentIndexes.head];
            });
            
            prevShirtButton.addEventListener('click', function() {
                currentIndexes.shirt = (currentIndexes.shirt - 1 + images.shirt.length) % images.shirt.length;
                shirt.src = "{{ asset('') }}" + images.shirt[currentIndexes.shirt];
            });

            nextHeadButton.addEventListener('click', function() {
                console.log("works")
                currentIndexes.shirt = (currentIndexes.head + 1) % images.head.length;
                head.src = "{{ asset('') }}" + images.head[currentIndexes.head];
            });
            
            nextShirtButton.addEventListener('click', function() {
                currentIndexes.shirt = (currentIndexes.shirt + 1) % images.shirt.length;
                shirt.src = "{{ asset('') }}" + images.shirt[currentIndexes.shirt];
            });
            
            prevPantsButton.addEventListener('click', function() {
                currentIndexes.pants = (currentIndexes.pants - 1 + images.pants.length) % images.pants.length;
                pants.src = "{{ asset('') }}" + images.pants[currentIndexes.pants];
            });
            
            nextPantsButton.addEventListener('click', function() {
                currentIndexes.pants = (currentIndexes.pants + 1) % images.pants.length;
                pants.src = "{{ asset('') }}" + images.pants[currentIndexes.pants];
            });
        </script>
    </body>
</html>
