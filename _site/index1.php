<!DOCTYPE html>
<body>
<head>
<script>
function disableContextMenu()
  {
    window.frames["fraDisabled"].document.oncontextmenu = function(){ return false;};   
    // Or use this
    // document.getElementById("fraDisabled").contentWindow.document.oncontextmenu = function(){alert("No way!"); return false;};;    
  }   
  if (! ('console' in window) || !('firebug' in console)) {
    var names = ['log', 'debug', 'info', 'warn', 'error', 'assert', 'dir', 'dirxml', 'group', 'groupEnd', 'time', 'timeEnd', 'count', 'trace', 'profile', 'profileEnd'];
    window.console = {};
    for (var i = 0; i < names.length; ++i) window.console[names[i]] = function() {};
}
document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
    document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
</script>
</head>
<body onload="disableContextMenu();" oncontextmenu="return false">
<iframe src="Responsive Square vCard.htm" width="100%" height="800"
id="fraDisabled" onload="disableContextMenu();" onMyLoad="disableContextMenu();"
>

</iframe>
</body>
</html>