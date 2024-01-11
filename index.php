<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Music</title>
    <!-- my css -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <h1>Albums</h1>
        </header>
        <main>
            <div v-for="album in albums" v-cloak>
                <h2>{{album.title}}</h2>
            </div>
        </main>
    </div>

    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- my JS script -->
    <script src="./src/js/index.js"></script>
</body>

</html>