<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
function validateNumberKey(event) {
	
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46
     || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9) {
        return true;
    }
    else if ( key < 48 || key > 57 ) {
        return false;
    }
    else return true;
}

function validateURL(event) 
{
	var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46
     || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9) {
        return true;
    }
	else if(key == 47 || key == 64 || key == 58 || key == 46)
	{
		return true;
	}
    else if ( key >= 48 && key <= 57 ) 
	{
        return true;
    }
	else if ( key >= 65 && key <= 90 ) 
	{
		return true;
	}
	else if ( key >= 97 && key <= 122 ) 
	{
		return true;
	}
    else return false;
}
function validateAlphaNumericKey(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46
     || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9) {
        return true;
    }
    else if ( key >= 48 && key <= 57 ) 
	{
        return true;
    }
	else if ( key >= 65 && key <= 90 ) 
	{
		return true;
	}
	else if ( key >= 97 && key <= 122 ) 
	{
		return true;
	}
    else return false;
}
function validateAlphabeticKey(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46
     || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9) {
        return true;
    }
	else if ( key >= 65 && key <= 90 ) 
	{
		return true;
	}
	else if ( key >= 97 && key <= 122 ) 
	{
		return true;
	}
    else return false;
}
</script>
</head>

<body>
Number : <input type="text" name="number" onkeypress="return validateNumberKey(event)"/><br />
AlphaNumeric : <input type="alphanumaric" name="an" onkeypress="return validateAlphaNumericKey(event)"/><br />
Alphabetic : <input type="text" name="fname" onkeypress="return validateAlphabeticKey(event)" /><br />
validateURL : <input type="text" name="fname" onkeypress="return validateURL(event)" /><br />
<div id="alrt_msg"></div>
</body>
</html>