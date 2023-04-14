<!-- resources/views/images/index.blade.php -->
<html>
    <head>
        <title>My Image App</title>
    </head>
    <body>
        <div>
            <img id="image" src="{{ $images[0] }}" alt="Image">
            <button id="prevButton">Previous Image</button>
            <button id="nextButton">Next Image</button>
        </div>
        
        <script>
            var images = JSON.parse('{!! addslashes(json_encode($images)) !!}');
            var currentIndex = 0;
            var image = document.getElementById('image');
            var prevButton = document.getElementById('prevButton');
            var nextButton = document.getElementById('nextButton');
            
            prevButton.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                image.src = images[currentIndex];
            });
            
            nextButton.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                image.src = images[currentIndex];
            });
        </script>
    </body>
</html>
