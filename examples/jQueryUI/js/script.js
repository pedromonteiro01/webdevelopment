$(function(){
    $('.box').draggable();
    $('#box1').draggable({ scroll: true, revert: "invalid" });
    $('#box2').draggable({ axis: "x"});
    $('#box3').draggable({ axis: "y"});
    $('#box4').draggable({ containment: ".container", revert: "invalid"});

    
    $('#droppable').droppable({
        accept: '#box1',
        drop: function () {
            $(this).text("When a box got attitude, drop it like it's hot!");
          }
    });

    $('#sortable').sortable({connectWith:"#sortableToo", placeholder:"placeholderBox"});
    $('#sortableToo').sortable({connectWith:"#sortable", placeholder:"placeholderBox"});


    $('#accordion').accordion({collapsible: true, heightStyle:"content"});


    $('.date').datepicker({
        showOtherMonths: true,
        selectOtherMonths:true,
        showButtonPanel: true,
        changeMonth: false,
        changeYear: false,
        numberOfMonths: 2,
        minDate: 0 /*can't chosse nothing in the past (other values: -1D, -2W)*/ 
    });

});