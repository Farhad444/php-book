<?php
$search_string=$_POST["searchstr"];
 
$replace_string=$_POST["replacestr"];
 
$source_string = ("The str_replace method is used to perform replacement in targetted string by the given search term.<br> The str_replace is case-sensitive function.");
 
 
 
if ($search_string != ""){
 
$str_replaced = str_ireplace($search_string, "<span>" .$replace_string ."</span>", $source_string);
 
 
 
// echo "The source string: <BR>" .$source_string ."<BR><BR><BR>";
 
echo "<p class='replaced_string'><strong>The replaced string: <br /><br /></strong>" .$str_replaced . "</p>";
 
}
?>