# Poll Simulator (Lab 01 - Enterprise Computing)
- Student ID: 202012004
- Student Name: Niharika Srivastava
- Course: MSc IT (Semester-3)

Problem Definition: Implementing a Web-based "Poll Simulator” with appropriate factoring for Multi-tier application architecture into Presentation Layer and Business Layer

- Technologies Used for Presentation Layer: HTML, CSS, JavaScript
- Technology Used for Business Layer: PHP
- Functionalities Implemented in Source Files:
  1) Presentation Layer <br>
     - views <br>
      a. index.html - Homepage for displaying links to all the Polling Functionalities. <br>
      b. addCandidates.html - Allows Admin to add details of 5 Student Candidates who are contesting for the election (also shows popup after successful addition). <br>
      c. castVote.php - Allows Students to cast vote (only one time- popup shows status) for a candidate out of the 5 contesting candidates. Contains code for displaying the 
         list of candidates from the business Logic in file 'addCandidates.php'. <br>
      d. pollResults.php - Displays the Winner and Loser of the SBG Elections on the basis of the number of votes casted. Business Logic in 'voting.php' enables it to access the
         results through session variables. <br>
      e. resultAnalysisReport.php - Display the vote count for each candidate by retrieveing this result by use of session variables from the business logic in 'voting.php'. <br>
     - styles <br>
      a. style.css - Common CSS styling page for all the view pages (common header and background). <br>
        - Note: Specific CSS to a page has been included in <style> tag of its view page (pollResults.php, resultAnalysisReport.php). <br>
     - images (Contains image file for DAIICT Logo) <br> 
   2) Business Layer <br>
     - addCandidates.php - Uses Session and Session variables to store form data which contains details of all Candidates (ID,Name). <br>
       getID() function stores all 5 Candidate IDs and getName() function stores all Candidate Names in respective Session array variables. <br> 
       The setVotes() function initializes vote count and voters as 0 and empty respectively, for all new candidates when they are added. <br>
     - voting.php - Contains main business logic (through use of sessions) for counting of votes, storing IDs of voters (to check each time whether they are trying to vote more than once and not allowing them to do so),
       computing winner through getWinner() and loser through getLoser() functions (inside these two functions, built in max() and min() function and then array_search() function has been used to find the index of the candidate who got maximum and minimum votes). <br>
      - Note: I used Sessions in PHP for storing computed data for passing to views because session variables stores user information across multiple pages and by default, they last until the user closes the browser. <br>
- Screenshots - this folder contains all screenshots of the application and displays its entire working and all functionalitites.
          
