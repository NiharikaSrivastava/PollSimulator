<?php
    session_start();
?>
<html>
    <head>
        <title>Result Analysis Report</title>
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <style>
        .reportDetails
        {
            background-color: lightgreen;
            border-radius: 10px;
            border-width: 3px;
            border-style: solid;
            border-color: rgb(255, 166, 0);
            padding: 10px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top:80px;
            text-align: center;
            justify-content: center;
            width:25vw;
            height:35vh;
            font-size:1.2em;
        }
        .candidateReport
        {
            display: flex;
            flex-direction: row;
            margin: 10px 10px;
        }
        .report
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        </style>
    <body>
        <article>
            <section class="header">
                <section class="menu">
                    <img class="logo" alt="DAIICT Logo" src="../images/daiictLogo.jpg"/>
                    <h1 class="heading">SBG ELECTIONS 2021-22</h1>
                </section>    
            </section>
            <center><h2><u>RESULT ANALYSIS REPORT</u></h2></center>
            <i><a class="backToHome" href="index.html"> Back To Home </a></i> <br> <br>
            <section class="report">
                <section class="reportDetails">    
                <section class="candidateReport"> <b> <?php echo $_SESSION['AllCandidateNames'][0] ?> : </b> <?php echo $_SESSION['voteCount'][0] ?> <br> </section>
                <section class="candidateReport"> <b> <?php echo $_SESSION['AllCandidateNames'][1] ?> : </b> <?php echo $_SESSION['voteCount'][1] ?> <br> </section>
                <section class="candidateReport"> <b> <?php echo $_SESSION['AllCandidateNames'][2] ?> : </b> <?php echo $_SESSION['voteCount'][2] ?> <br> </section>
                <section class="candidateReport"> <b> <?php echo $_SESSION['AllCandidateNames'][3] ?> : </b> <?php echo $_SESSION['voteCount'][3] ?> <br> </section>
                <section class="candidateReport"> <b> <?php echo $_SESSION['AllCandidateNames'][4] ?> : </b> <?php echo $_SESSION['voteCount'][4] ?> <br> </section>
                </section>
            </section>        
        </article>
    </body>
</html>