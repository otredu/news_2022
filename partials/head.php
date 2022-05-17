<!DOCTYPE html>
<html lang="fi">
<head>
    <title>PHP</title>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="apple-touch-icon" href="/logo192.png" />
    <link rel="manifest" href="/manifest.json" />
    <title>React App</title>
    <script defer="defer" src="/static/js/main.c3121faa.js"></script>
    <link href="/static/css/main.073c9b0a.css" rel="stylesheet">
</head>
<body>
<script>
    function confirmDelete(id) {
        const answer = confirm("Poistetaanko uutinen?");
        if(!answer){
            document.getElementById('deleteNews' + id).href = '/';
        }
        return answer;
    }
</script>
    <header>
        <h1>Tiinan uutispalvelu</h1>
    </header>
<nav>
    <ul class="navbar">
        <li class="navbutton"><a href="/">Lue uutiset</a></li>
        <?php if(!isLoggedIn()): ?>
           <li class="navbutton"><a href="/login">Login</a></li> 
           <li class="navbutton"><a href="/register">Rekisteröidy</a></li>
        <?php else: ?>
           <li class="navbutton"><a href="/add_article">Uusi uutinen</a></li>
           <li class="navbutton"><a href="/logout">Logout</a></li>
        <?php endif ?>

    </ul>
</nav>
<div id="root"></div>