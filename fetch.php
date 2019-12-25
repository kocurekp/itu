<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$output = '';
$out = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM products 
  WHERE ID LIKE '%".$search."%'
  OR Type LIKE '%".$search."%' 
  OR Location LIKE '%".$search."%' 
  OR Description LIKE '%".$search."%' 
  OR Date LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM products ORDER BY ID DESC
 ";
}
$result = mysqli_query($connect, $query);
 $output .= '
  <div class="table-responsive" >
   <table class=" table bordered"><thead>
    <tr>
     <th></th>
     <th>ID</th>
     <th>Typ</th>
     <th>Umístění</th>
     <th>Popis</th>
     <th>Datum a čas přidání</th>
    <th></th>
    </tr></thead><tbody>
 ';
 $out = $output;
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr id="'.$row["ID"].'" class="clickable-row">
    <td>'.'<input type="checkbox" style="  position: relative;
  display: block;
  width: 20px;
  height: 20px;
  margin: 0 auto;
  background: #FFF;
  border: 1px solid #2E2E2E;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;"
   id="checkItem" name="myCheckboxes[]" value="'.$row["ID"].'">'.'</td>
    <td>'.$row["ID"].'</td>
    <td style="width: 120px;">'.$row["Type"].'</td>
    <td style="width: 180px;">'.$row["Location"].'</td>
    <td style="width:500px; ">'.$row["Description"].'</td>
    <td style="width:200px; ">'.$row["Date"].'</td>
    <td><input id="edit_btn" style="display: none;" type="button" class="btn btn-info" name="" value="Upravit"></td>
   </tr>
  ';
 }
 $output .= '</tbody></table>';
 echo $output;
}
else
{
 echo $out;
}

?>