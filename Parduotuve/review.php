<?php
  
   session_start();
   if(isset($_POST['submitt'])){
       $answer = $_POST['answer'];
       $answer2 = $_POST['answer2'];
       $answer3 = $_POST['answer3'];
       $answer4 = $_POST['answer4'];
       $answer5 = $_POST['answer5'];
       echo $answer;
       echo $answer2;
       echo $answer3;
       echo $answer4;
       echo $answer5;
       
     $_SESSION['average'] = $average = ($answer + $answer2 + $answer3 + $answer4 + $answer5) / 5;
       
      
  
   }
?>

  <form action="" method="POST">
      <p>Kaip vertinate siuntų pristatymą</p>
        <input type="radio" name="answer" value="1"/>Labai Blogai<br>
            <input type="radio" name="answer" value="2"/>Blogai<br>
            <input type="radio" name="answer" value="3"/>Gerai<br>
            <input type="radio" name="answer" value="4"/>Labai Gerai<br>
            <input type="radio" name="answer" value="5"/>Puikiai<br>

            
                  <p>Kaip vertinate puslapio dizainą</p>
        <input type="radio" name="answer2" value="1"/>Labai Blogai<br>
            <input type="radio" name="answer2" value="2"/>Blogai<br>
            <input type="radio" name="answer2" value="3"/>Gerai<br>
            <input type="radio" name="answer2" value="4"/>Labai Gerai<br>
            <input type="radio" name="answer2" value="5"/>Puikiai<br>          
            
                  <p>Kaip vertinate puslapio funkscionaluma</p>
        <input type="radio" name="answer" value="1"/>Labai Blogai<br>
            <input type="radio" name="answer3" value="2"/>Blogai<br>
            <input type="radio" name="answer3" value="3"/>Gerai<br>
            <input type="radio" name="answer3" value="4"/>Labai Gerai<br>
            <input type="radio" name="answer3" value="5"/>Puikiai<br>
            
                  <p>Kaip vertinate prekių kokybę</p>
        <input type="radio" name="answer4" value="1"/>Labai Blogai<br>
            <input type="radio" name="answer4" value="2"/>Blogai<br>
            <input type="radio" name="answer4" value="3"/>Gerai<br>
            <input type="radio" name="answer4" value="4"/>Labai Gerai<br>
            <input type="radio" name="answer4" value="5"/>Puikiai<br>
            
                  <p>Kaip vertinate darbuotojus</p>
        <input type="radio" name="answer5" value="1"/>Labai Blogai<br>
            <input type="radio" name="answer5" value="2"/>Blogai<br>
            <input type="radio" name="answer5" value="3"/>Gerai<br>
            <input type="radio" name="answer5" value="4"/>Labai Gerai<br>
            <input type="radio" name="answer5" value="5"/>Puikiai<br>
            
            <input type="submit" name="submitt" value="Pateikti">
            
            <p><?= $_SESSION['average'] ?></p> 
  </form>