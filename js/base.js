{\rtf1\ansi\ansicpg1252\deff0\deflang1033{\fonttbl{\f0\fnil\fcharset0 Calibri;}}
{\*\generator Msftedit 5.41.21.2510;}\viewkind4\uc1\pard\sa200\sl276\slmult1\lang9\f0\fs22 $(document).ready(function()\{\par
    // Attach event listeners\par
    $('#home').on(\{\par
    'click': fClick,\par
    'mouseover':fMouseOver,\par
    'mouseout':fMouseOut,\par
    'mouseup':fMouseUp,\par
    'mousedown':fMouseDown,\par
    \});\par
\});\par
\par
function fClick(e)\{\par
    var target = (e.target) ? e.target : e.srcElement;\par
    if (this.id == 'home' ) \{\par
        window.location.href = '/';\par
    \}\par
\par
\}\par
\par
// Event Functions\par
function fMouseOver(e)\{ \par
\}\par
\par
function fMouseOut(e)\{ \par
\}\par
\par
function fMouseUp(e)\{ \par
\}\par
\par
function fMouseDown(e)\{ \par
\}\par
\par
function fShowUkModal(e)\{ \par
    //var target = (e.target) ? e.target : e.srcElement;\par
    //alert("Modal is visible.");\par
    //if (target.id == 'login')\{\par
        //alert(target.id);\par
        //$('main').append('http://app1-rhroyston.rhcloud.com/includes/views/test.php');\par
    //\}\par
\}\par
function fHideUkModal(e)\{\par
    //alert("emptyd.");\par
    //$('#ajax-loader').empty();\par
\}\par
//$(window).on('hide.uk.modal',function()\{\par
    //$('#ajax-loader').html('');\par
//\});\par
\par
\par
\par
}
 