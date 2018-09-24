<?php

$file1 = fopen("my_resume.php", "w") or die("Unable to open file!");

$f = file_get_contents("Resume.docx");
//echo $f;//Displays the contents of file "Resume.docx"


echo copy("Resume.docx","my_resume.php"); //copies data of Resume.docx to my_resume.php and ouptuts to 1

$file2 = fopen("my_resume_copy.php", "w") or die("Unable to open file!");

echo copy("my_resume.php", "my_resume_copy.php");//displays the ouput as 1 i.e successfully copied

echo "      File copied successfully";

function files_are_equal($file1, $file2)
{
  // Check if filesize is different
  if(filesize($file1) == filesize($file2)){
      return true;
  } else {
  	return false;
  }
}

echo "<br/>";
echo "Both files are same in size?:" ;
echo "<br/>";
echo  var_dump(files_are_equal("my_resume.php","my_resume_copy.php"));//Display the output whether filesize isequal or not

echo "<br/>";

$f = "my_resume.php";
if (file_exists($f))  {

   $no_of_lines = count(file("$f"));
echo "there are $no_of_lines in $f";
 }
 else{
 	echo "File does not exists";
 }


 $file = "my_resume.php";
 $person = "Appended Contents at the end of the line\n";
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);


?>

<!DOCTYPE html>
<html>

<body>
<p> To open my_resume.php file on browser : <a href="my_resume.php"> my_resume.php</a></p>
<p> To open my_resume_copy.php file on browser : <a href="my_resume_copy.php">my_resume_copy.php</a></p>

</body>
</html>  
