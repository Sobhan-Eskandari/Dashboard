/**
 * Created by sobhaneskandari on 5/4/17.
 */

// ============[ Admin card dismissal button ]===========

$(".dismissAdminCardBtn").click(function () {
    $(this).parent().parent().parent().fadeOut();
});

// ============[ Table Row Delete ]===========

$(".deleteRowBtn").click(function () {
     $(this).parent().parent().fadeOut();
});

// ============[ Persian Date Picker ]===========
$(document).ready(function() {
    $(".example1").pDatepicker();
});

// ============[ Translate English digits to farsi ]===========
var translate = function (englishNumber) {
    var chars = englishNumber.split('');
    var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    for (var i = 0; i < chars.length; i++) {
        if (/\d/.test(chars[i])) {
            chars[i] = arabicNumbers[chars[i]];
        }
    }
    return chars.join('');
};

// ============[ Home page Grid System ]===========
// external js: packery.pkgd.js, draggabilly.pkgd.js
// var width = window.innerWidth - 300;
var widthofFirstCols = document.querySelector ('#firstCols')
        .getBoundingClientRect(),
    width = widthofFirstCols.right - widthofFirstCols.left;

var $grid = $('.grid').packery({
    itemSelector: '.grid-item',
    columnWidth: '#firstCols',
    percentPosition: true,
});

// make all grid-items draggable
$grid.find('.grid-item').each( function( i, gridItem ) {
    var draggie = new Draggabilly( gridItem );
    // bind drag events to Packery
    $grid.packery( 'bindDraggabillyEvents', draggie );
});

var widthOfCols = document.querySelector ('#gridWith')
        .getBoundingClientRect(),
    width = widthOfCols.right - widthOfCols.left;

var $grid2 = $('.gridOfNotif').packery({
    itemSelector: '.grid-notif',
    columnWidth: '#gridWith',
    percentPosition: true,
});

// make all grid-items draggable
$grid2.find('.grid-notif').each( function( i, gridItem ) {
    var draggie = new Draggabilly( gridItem );
    // bind drag events to Packery
    $grid2.packery( 'bindDraggabillyEvents', draggie );
});


// ============[ Home page Circular Progress ]===========


// ============[ Home page Stat1 Circular Progress ]===========
var integerValueOfStat1 = 12;
var fakeValueOfStat1 = 0.12;
var fakeValueofStat1 = fakeValueOfStat1 + 0.00000001;
if (integerValueOfStat1.toString().slice(-1) === '0'){
    var countOfDigits1 = fakeValueOfStat1.toString().length-1;
}else{
    var countOfDigits1 = fakeValueOfStat1.toString().length-2;
}
var stat1 = new ProgressBar.Circle('#stat1', {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 6,
    trailWidth: 2,
    easing: 'easeInOut',
    duration: 1400,
    text: {
        autoStyleContainer: false,
        className: 'statNumber'
    },
    from: { color: '#10E8C2', width: 4 },
    to: { color: '#10E8C2', width:6 },
    // Set default step function for all animate calls
    step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = circle.value();
        for (var i = 0;i < countOfDigits1;i++){
            value = value*10;
        }
        value = Math.round(value);
        var valueString = value.toString();

        valueString = translate(valueString);

        if (value === 0) {
            circle.setText('');
        } else {
            circle.setText(valueString);
        }

    }
});
stat1.animate(fakeValueofStat1);  // Number from 0.0 to 1.0
// =======[ Moving Stat number to its container ]========
var sat1Numb = $("#stat1 .statNumber");
$("#stat1Container").append(sat1Numb);

// ============[ Home page Stat2 Circular Progress ]===========
var integerValueOfStat2 = 234;
var fakeValueOfStat2 = 0.234;
var fakeValueofStat2 = fakeValueOfStat2 + 0.00000001;
if (integerValueOfStat2.toString().slice(-1) === '0'){
    var countOfDigits2 = fakeValueOfStat2.toString().length-1;
}else{
    var countOfDigits2 = fakeValueOfStat2.toString().length-2;
}
var stat2 = new ProgressBar.Circle('#stat2', {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 6,
    trailWidth: 2,
    easing: 'easeInOut',
    duration: 1400,
    text: {
        autoStyleContainer: false,
        className: 'statNumber'
    },
    from: { color: '#364ACE', width: 4 },
    to: { color: '#364ACE', width:6 },
    // Set default step function for all animate calls
    step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = circle.value();
        for (var i = 0;i < countOfDigits2;i++){
            value = value*10;
        }
        value = Math.round(value);
        var valueString = value.toString();

        valueString = translate(valueString);

        if (value === 0) {
            circle.setText('');
        } else {
            circle.setText(valueString);
        }

    }
});
stat2.animate(fakeValueofStat2);  // Number from 0.0 to 1.0
// =======[ Moving Stat number to its container ]========
var sat2Numb = $("#stat2 .statNumber");
$("#stat2Container").append(sat2Numb);

// ============[ Home page Stat3 Circular Progress ]===========
var integerValueOfStat3 = 4523;
var fakeValueOfStat3 = 0.4523;
var fakeValueofStat3 = fakeValueOfStat3 + 0.00000001;
if (integerValueOfStat3.toString().slice(-1) === '0'){
    var countOfDigits3 = fakeValueOfStat3.toString().length-1;
}else{
    var countOfDigits3 = fakeValueOfStat3.toString().length-2;
}
var stat3 = new ProgressBar.Circle('#stat3', {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 6,
    trailWidth: 2,
    easing: 'easeInOut',
    duration: 1400,
    text: {
        autoStyleContainer: false,
        className: 'statNumber'
    },
    from: { color: '#B336C6', width: 4 },
    to: { color: '#B336C6', width:6 },
    // Set default step function for all animate calls
    step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = circle.value();
        for (var i = 0;i < countOfDigits3;i++){
            value = value*10;
        }
        value = Math.round(value);
        var valueString = value.toString();

        valueString = translate(valueString);

        if (value === 0) {
            circle.setText('');
        } else {
            circle.setText(valueString);
        }

    }
});
stat3.animate(fakeValueofStat3);  // Number from 0.0 to 1.0
// =======[ Moving Stat number to its container ]========
var sat3Numb = $("#stat3 .statNumber");
$("#stat3Container").append(sat3Numb);


// ============[ Home page Stat4 Circular Progress ]===========
var integerValueOfStat4 = 124341;
var fakeValueOfStat4 = 0.124341;
var fakeValueofStat4 = fakeValueOfStat4 + 0.00000001;
if (integerValueOfStat4.toString().slice(-1) === '0'){
    var countOfDigits4 = fakeValueOfStat4.toString().length-1;
}else{
    var countOfDigits4 = fakeValueOfStat4.toString().length-2;
}
var stat4 = new ProgressBar.Circle('#stat4', {
    color: '#aaa',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 6,
    trailWidth: 2,
    easing: 'easeInOut',
    duration: 1400,
    text: {
        autoStyleContainer: false,
        className: 'statNumber'
    },
    from: { color: '#EA4C00', width: 4 },
    to: { color: '#EA4C00', width:6 },
    // Set default step function for all animate calls
    step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = circle.value();
        for (var i = 0;i < countOfDigits4;i++){
            value = value*10;
        }
        value = Math.round(value);
        var valueString = value.toString();

        valueString = translate(valueString);

        if (value === 0) {
            circle.setText('');
        } else {
            circle.setText(valueString);
        }

    }
});
stat4.animate(fakeValueofStat4);  // Number from 0.0 to 1.0
// =======[ Moving Stat number to its container ]========
var sat4Numb = $("#stat4 .statNumber");
$("#stat4Container").append(sat4Numb);


// =================[ To-do Button  ]=====================

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

$('body').on('keydown', 'input, select, textarea', function(e) {
    var self = $(this)
        , form = self.parents('form:eq(0)')
        , focusable
        , next
    ;
    if (e.keyCode == 13) {
        focusable = form.find('input,a,select,button,textarea').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});

$.fn.pressEnter = function(fn) {

    return this.each(function() {
        $(this).bind('enterPress', fn);
        $(this).keyup(function(e){
            if(e.keyCode == 13)
            {
                $(this).trigger("enterPress");
            }
        })
    });
};


var numberofTodos = 6;
$("#addTodo_addBtn").click(function () {
    var textOfTodo = $("#todoText").val();
    $("#listOfTodos ul").prepend(`
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="todo[`+(numberofTodos)+`]"/>
           <label for="todo[`+(numberofTodos)+`]" class="check--label">
              <span class="check--label-box"></span>
              <span class="check--label-text">`+textOfTodo+`</span>
           </label>
        </li>
    `);
    $(".list-item").animateCss('slideInDown');
});
$('#todoText').pressEnter(function(){
    var textOfTodo = $("#todoText").val();
    $("#listOfTodos ul").prepend(`
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="todo[`+(numberofTodos)+`]"/>
           <label for="todo[`+(numberofTodos)+`]" class="check--label">
              <span class="check--label-box"></span>
              <span class="check--label-text">`+textOfTodo+`</span>
           </label>
        </li>
    `);
    $(".list-item").animateCss('slideInDown');
});

