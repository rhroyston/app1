$(document).ready(function(){
    // Attach event listeners
    $('#home').on({
    'click': fClick,
    'mouseover':fMouseOver,
    'mouseout':fMouseOut,
    'mouseup':fMouseUp,
    'mousedown':fMouseDown,
    });
});

function fClick(e){
    var target = (e.target) ? e.target : e.srcElement;
    if (this.id == 'home' ) {
        window.location.href = '/';
    }

}

// Event Functions
function fMouseOver(e){ 
}

function fMouseOut(e){ 
}

function fMouseUp(e){ 
}

function fMouseDown(e){ 
}

function fShowUkModal(e){ 
    //var target = (e.target) ? e.target : e.srcElement;
    //alert("Modal is visible.");
    //if (target.id == 'login'){
        //alert(target.id);
        //$('main').append('http://app1-rhroyston.rhcloud.com/includes/views/test.php');
    //}
}
function fHideUkModal(e){
    //alert("emptyd.");
    //$('#ajax-loader').empty();
}
//$(window).on('hide.uk.modal',function(){
    //$('#ajax-loader').html('');
//});


