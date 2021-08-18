<?php
    session_start();
?>
<html>
    <head>
        <title>Poll Results</title>
        <link rel="stylesheet" href="../styles/style.css">
        <style>
            .pollResults
            {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .winnerSBG
            {
                background-color: lightgreen;
                border-radius: 10px;
                border-width: 3px;
                border-style: solid;
                border-color: rgb(255, 166, 0);
                padding: 10px 10px;
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-top:100px;
                text-align: center;
                justify-content: center;
                width:25vw;
                height:10vh;
                font-size:1.2em;
            }
            .loserSBG
            {
                background-color: lightcoral;
                border-radius: 10px;
                border-width: 3px;
                border-style: solid;
                border-color: rgb(255, 166, 0);
                padding: 10px 10px;
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-top:30px;
                text-align: center;
                justify-content: center;
                width:25vw;
                height:10vh;
                font-size:1.2em;
            }
        </style>
    </head>
    <body>
        <article>
            <section class="header">
                <section class="menu">
                    <img class="logo" alt="DAIICT Logo" src="../images/daiictLogo.jpg"/>
                    <h1 class="heading">SBG ELECTIONS 2021-22</h1>
                </section>    
            </section>
            <center><h2><u>POLL RESULTS</u></h2></center>
            <i><a class="backToHome" href="index.html"> Back To Home </a></i> <br><br>
            <section class="pollResults">
                <section class="winnerSBG">
                    <b> WINNER: &nbsp;</b> <?php $winIndex=(int)$_SESSION['winnerCandidate']; echo $_SESSION['AllCandidateNames'][$winIndex],"<br>"; ?> <br>
                </section>
                <section class="loserSBG">
                    <b> LOSER: &nbsp;</b> <?php $loseIndex=(int)$_SESSION['loserCandidate']; echo $_SESSION['AllCandidateNames'][$loseIndex],"<br>"; ?> </b>
                </section>
            </section>        
        </article>
    </body>
</html>