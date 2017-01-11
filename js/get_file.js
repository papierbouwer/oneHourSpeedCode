var file = function(url) {
  this.url = url;
};


// Get page
file.prototype.get_page = function () {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     return document.getElementByClassName("avt_table").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", this.url, true);
  xhttp.send();
};
