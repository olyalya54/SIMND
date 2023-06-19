<!DOCTYPE html>
<html lang="ru">
<head>
    {{> head }}
</head>
<body>

    <div class="page" id="page">
        <!-- Header -->
        {{> header }}

        <!-- Sidebar -->
        {{> sidebar }}

        <!-- Main -->
        <main class="main">
            <div class="container">
                {{> body }}
            </div>
        </main>
    </div>


    {{> story-modal }}
    {{> contact-modal }}
    {{> share-modal }}
    
    

    <!-- JS -->
    <script src="assets/js/app.js"></script>
</body>
</html>
