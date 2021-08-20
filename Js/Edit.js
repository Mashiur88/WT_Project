function MyAjaxFunc()
{
    var search=  document.getElementById("search").value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("demo").innerHTML = this.statusText;
	}
  };
  xhttp.open("GET", "/Control/HomeAction.php?search="+search, true);
 
  xhttp.send();

}
