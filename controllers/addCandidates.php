<?php
    session_start();
    $CandidateID1=$_POST["studentID1"]; //fetching all Candidates ID and Names from form
    $CandidateName1=$_POST["studentName1"];
    
    $CandidateID2=$_POST["studentID2"];
    $CandidateName2=$_POST["studentName2"];
    
    $CandidateID3=$_POST["studentID3"];
    $CandidateName3=$_POST["studentName3"];
    
    $CandidateID4=$_POST["studentID4"];
    $CandidateName4=$_POST["studentName4"];

    $CandidateID5=$_POST["studentID5"];
    $CandidateName5=$_POST["studentName5"];

    function getID()
    {
        global $CandidateID1, $CandidateID2, $CandidateID3, $CandidateID4, $CandidateID5;
        $candidateIDs=array($CandidateID1,$CandidateID2,$CandidateID3,$CandidateID4,$CandidateID5);
        $_SESSION['AllCandidateIDs']=$candidateIDs; //creating session array for stroing all Candidate IDs
    }

    function getName()
    {
        global $CandidateName1,$CandidateName2,$CandidateName3,$CandidateName4,$CandidateName5;
        $candidateNames=array($CandidateName1,$CandidateName2,$CandidateName3,$CandidateName4,$CandidateName5);
        $_SESSION['AllCandidateNames']=$candidateNames; //creating session array for stroing all Candidate Names
    }

    getID();
    getName();

    function setVotes() //for all new candidates, we initialize their votes and voters to 0 
    {
        $voteCount=array(0,0,0,0,0);
        $allVoters=[];
        $_SESSION['voteCount']=$voteCount;
        $_SESSION['allVoters']=$allVoters;
    }

    setVotes();

    header("Location: ../views/index.html");
    exit();
?>
