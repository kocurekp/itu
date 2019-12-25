<?php 
$tp = "";
$lc = "";
$recent = array();

$connect = mysqli_connect("localhost", "root", "", "testing");
    $query = "SELECT * FROM `products` ORDER BY `ID` DESC";

$type = array();
$location = array();
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result))
 {
	if (empty($recent)) {
		array_push($recent, $row[1], $row[2], $row[3]);
	}

 	if (!in_array($row[1], $type)) {
		array_push($type, $row[1]);
 	}		
 	if (!in_array($row[2], $location)) {
		array_push($location, $row[2]);
 	}
 }

foreach ($type as $key => $value) {
	$tp .= '<option value="'.$value.'">'.$value.'</option>';
}
foreach ($location as $key => $value) {
	$lc .= '<option value="'.$value.'">'.$value.'</option>';
}

$html = '     <form method="post" action="" id=form_add>
     <div id="div_type">
      <select id="type" name="type" class="form-control" style="           display: inline-block;
           width: calc(16% - 2px);
            float: left;
           box-sizing: border-box;
           margin-top: 5px;" 
           >
        '.$tp.'
      </select>
      </div>

      <div id="div_location">
      <select id="location" name="location" class="form-control" style="           display: inline-block;
           width: calc(16% - 2px);
            float: left;
           box-sizing: border-box;
           margin-top: 5px;" >
		'.$lc.'
      </select>
		</div>

      <textarea style="resize:none; 
      display: inline-block;
           width: calc(45% - 2px);
           box-sizing: border-box;
           margin-top: 5px;
           " type="text" class="form-control" name="description" id="" rows="1"  placeholder="Popis">'.$recent[2].'</textarea>

    </form>
    ';
echo $html;
    mysqli_close($connect);
 ?>