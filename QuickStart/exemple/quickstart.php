<html>
<head>

</head>
<body>

<div id="oyst-1click-button"></div>
<script>
    window.__OYST__ = window.__OYST__ || {}
    window.__OYST__.getOneClickURL = function (cb) {
  	$(function () {
    	var form = new FormData();
      form.append("product_reference", "SonicTee");
      var settings = {
      	"async": true,
        "crossDomain": true,
        "url": "http://localhost/page_with_sdk_module.php",
        "method": "POST",
        "headers": {
        	"cache-control": "no-cache"
        },
        "processData": false,
        "contentType": false,
        "mimeType": "multipart/form-data",
        "data": form
   		}
      $.ajax(settings).done(function (data) {
      	data = JSON.parse(data)
        cb(null, data.url)
        console.log(data.url);
      })
 		})
  }
</script>
<script src="https://cdn.oyst.com/1click/script/script.min.js"> </script>

</body>