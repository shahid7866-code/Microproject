<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cultural Heritage</title>

    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg,#0f2027,#203a43,#2c5364);
            color:white;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            align-items:center;
        }

        h2{
            margin-top:40px;
            letter-spacing:1px;
        }

        .cards{
            display:flex;
            gap:30px;
            margin-top:50px;
            flex-wrap:wrap;
            justify-content:center;
        }

        .card{
            width:260px;
            padding:25px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(12px);
            border-radius:18px;
            text-align:center;
            box-shadow:0 0 25px rgba(0,0,0,0.6);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 40px rgba(0,0,0,0.9);
        }

        .card h3{
            margin-bottom:10px;
        }

        .card p{
            font-size:14px;
            color:#ddd;
            margin-bottom:20px;
        }

        .card a{
            display:inline-block;
            padding:10px 20px;
            border-radius:20px;
            background:#4da6ff;
            color:black;
            text-decoration:none;
            font-weight:bold;
        }

        footer{
            margin-top:auto;
            width:100%;
            padding:15px;
            text-align:center;
            background:rgba(0,0,0,0.35);
            font-size:13px;
            color:#ccc;
        }
    </style>
</head>

<body>

<h2>Select a Cultural Heritage Site</h2>

<div class="cards">

    <div class="card">
        <h3>Taj Mahal</h3>
        <p>Symbol of love and Indian heritage.</p>
        <a href="ar_view.html">view</a>
    </div>

    <div class="card">
        <h3>Ajanta Caves</h3>
        <p>Ancient rock-cut Buddhist caves.</p>
        <a href="ar_view.html">view</a>
    </div>

    <div class="card">
        <h3>Qutub Minar</h3>
        <p>Historic victory tower of Delhi.</p>
        <a href="ar_view.html">view</a>
    </div>

</div>

<footer>
    © 2026 | AR-Based Cultural Heritage Platform | Shahid Mulani
</footer>

</body>
</html>
