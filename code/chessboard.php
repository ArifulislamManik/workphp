
<table width="350px" spacing="0px" padding="0px" border="2px">

<?php



 for($i=1;$i<=8;$i++)
 {
     echo "<tr>";
     for($j=1;$j<=8;$j++)
     {
     $total=$i+$j;
     if($total%2==0)
     {
     echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
     }
     else
     {
     echo "<td height=50px width=50px bgcolor=#000000></td>";
     }
     }
     echo "</tr>";
}
    

?>
