<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Music</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <h1>Albums PHP</h1>
        </header>
        <main>
            <div class="container d-flex flex-wrap album-container justify-content-between">
                <div v-for="album in albums" v-cloak class="card album-card" @click="selectedAlbum = album">
                    <img :src="album.cover" alt="album.title">
                    <h2 class="mt-2">{{album.title}}</h2>
                    <h4>{{album.artist}}</h4>
                    <p>{{album.year}}</p>
                </div>
            </div>
            <div v-if="selectedAlbum" class="overlay" @click="selectedAlbum = null">
                <div class="album-card">
                    <img :src="selectedAlbum.cover" alt="selectedAlbum.title">
                    <h2 class="mt-2">{{selectedAlbum.title}}</h2>
                    <h4>{{selectedAlbum.artist}}</h4>
                    <p>{{selectedAlbum.year}}</p>
                </div>
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