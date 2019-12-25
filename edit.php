<?php 
$tp = "";
$lc = "";
$html = "";
$recent = array();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM products 
  WHERE ID LIKE '%".$search."%'
 ";
}

$type = array();
$location = array();
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result))
 {

if (!empty($row)) {
		array_push($recent, $row[1], $row[2], $row[3]);
$html = '     <form method="post" action="" id=form_add>
     <div id="div_type">
      <input type="text" value="'.$recent[0].'" id="type" name="type" class="form-control" style="           display: inline-block;
           width: calc(16% - 2px);
            float: left;
           box-sizing: border-box;
           margin-top: 5px;" 
           >
        
      </div>

      <div id="div_location">
      <input type="text" value="'.$recent[1].'" id="location" name="location" class="form-control" style="           display: inline-block;
           width: calc(16% - 2px);
            float: left;
           box-sizing: border-box;
           margin-top: 5px;" >
    
    </div>
    
      <textarea style="resize:none; 
      display: inline-block;
           width: calc(45% - 2px);
           box-sizing: border-box;
           margin-top: 5px;
           " type="text" class="form-control" name="description" id="" rows="1"  placeholder="Popis">'.$recent[2].'</textarea>

    </form>
    ';
}

 }

 echo $html;
 mysqli_close($connect);
 ?>