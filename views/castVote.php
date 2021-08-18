<?php
    session_start();
?>
<html>
    <head>
        <title>Cast Vote</title>
        <link rel="stylesheet" href="../styles/style.css">
        
    </head>
   <body>
        <article>
            <section class="header">
                <section class="menu">
                    <img class="logo" alt="DAIICT Logo" src="../images/daiictLogo.jpg"/>
                    <h1 class="heading">SBG ELECTIONS 2021-22</h1>
                </section>    
            </section>
            <center><h2><u>CAST YOUR VOTE</u></h2></center>
            <i><a class="backToHome" href="index.html"> Back To Home </a></i> <br>
            <form action="../controllers/voting.php" method="POST">
                <label> Student ID: </label> <input type="number" name="studentID"> <br><br>
                <section class="allCandidates">
                    <input type="radio" id="1" value="0" name="CandidateName"/> <label><?php echo $_SESSION['AllCandidateNames'][0] ?></label> <br>
                    <input type="radio" id="2" value="1" name="CandidateName"/> <label><?php echo $_SESSION['AllCandidateNames'][1] ?></label> <br>
                    <input type="radio" id="3" value="2" name="CandidateName"/> <label><?php echo $_SESSION['AllCandidateNames'][2] ?></label> <br>
                    <input type="radio" id="1" value="3" name="CandidateName"/> <label><?php echo $_SESSION['AllCandidateNames'][3] ?></label> <br>
                    <input type="radio" id="2" value="4" name="CandidateName"/> <label><?php echo $_SESSION['AllCandidateNames'][4] ?></label> <br>
                </section>
                <br><center><input type="submit" value="SUBMIT" onclick="clicked();" class="button"/></center>
            </form>
        </article>
    </body>
    <script type="text/javascript">
        function clicked() {
            var hasVoted=<?php echo json_encode($_SESSION['hasVotedBefore']); ?>               
            alert(hasVoted)
        }
    </script>
</html>