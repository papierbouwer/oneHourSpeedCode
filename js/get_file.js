var file = function(url) {
  this.url = url;
}


file.prototype.get_page = function () {
  // Get page
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementByClassName("").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", this.url, true);
  xhttp.send();
};
