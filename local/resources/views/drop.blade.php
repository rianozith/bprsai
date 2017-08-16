<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>test drop down database table user</h1>
	<div class="form-group">
		
					
		{!! Form::select('drop', $drop); !!}
	<br>
	<select name="feeling">
  <optgroup label="Happy">
    <option value="0">Joyous</option>
    <option value="1">Glad</option>
    <option value="2">Ecstatic</option>
  </optgroup>
  <optgroup label="Sad">
    <option value="0">Bereaved</option>
    <option value="1">Pensive</option>
    <option value="2">Down</option>
  </optgroup>
</select>
	</div>
</body>
</html>