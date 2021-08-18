<?php
    session_start();
    $allVoterArray=$_SESSION['allVoters']; //accessing student IDs who have already voted
    $allVotes=$_SESSION['voteCount']; //accessing vote count of each candidate 
    $VoterID=$_POST["studentID"]; 
    $_SESSION['currentVoterID']=$VoterID;

    function vote()
    {
        global $allVoterArray,$VoterID,$allVotes;
        array_push($allVoterArray,$VoterID); //add Student ID of voter to keep its record
        $_SESSION['allVoters']= $allVoterArray; //rewrite session array
        $voteTo=$_POST["CandidateName"]; //index of candidate for whom vote has been cast
        $allVotes[$voteTo]+=1; 
        $_SESSION['voteCount']=$allVotes;
    }

    $message="";
    if(in_array($VoterID,$allVoterArray)) //logic for checking if a student has already voted or not 
    {
        global $message;
        $message=$VoterID.", you have already voted!";
        $_SESSION['hasVotedBefore']=$message; //response for presentation layer stored
    }
    else
    {
        vote();  //allow to vote
        global $message;
        $message=$VoterID.",  your vote has been recorded successfully!";
        $_SESSION['hasVotedBefore']=$message;
    }

    function getLoser()
    {
        global $allVotes;
        $loserVotes=min($allVotes);
        $loserIndex=array_search($loserVotes,$allVotes,true);
        $_SESSION['loserCandidate']=$loserIndex;
    }

    function getWinner()
    {
        global $allVotes;
        $winnerVotes=max($allVotes);
        $winnerIndex=array_search($winnerVotes,$allVotes,true);
        $_SESSION['winnerCandidate']=$winnerIndex;
    }

    getLoser();
    getWinner();
    
    header("Location: ../views/index.html");
    exit();
?>