<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
    <center>
        <form action = "insert.php" method = "post" id="CommentForm" >
            Name:<br>
            <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
            height:<br>
            <textarea rows="5" cols="20" name = "comment" id="idComment" placeholder="Enter height"></textarea><br>  
            weight:<br>
            <input type="text" name = "link" id="idLink" placeholder="Enter weight"> <br><br>
            <input type="submit" id="commentBtn">
        </form> 
    </center>
</body>
</html>
