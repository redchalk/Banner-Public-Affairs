//jQuery(function($) { Use this instead of the line below for WP installs
/*$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption').css('width', ($('#caption').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});

//jQuery(function($) { Use this instead of the line below for WP installs
$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption2 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption2').css('width', ($('#caption2').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption2 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption2').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);

});

//jQuery(function($) { Use this instead of the line below for WP installs
$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption3 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption3').css('width', ($('#caption3').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption3 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption3').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);

});

//jQuery(function($) { Use this instead of the line below for WP installs
$(function() {
	var ch = 0;
    var item = 0;
    var items = $('#caption4 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption4').css('width', ($('#caption4').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption4 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption4').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);

});

//jQuery(function($) { Use this instead of the line below for WP installs
$(function() {
	var ch = 0;
    var item = 0;
    var items = $('#caption5 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption5').css('width', ($('#caption5').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption5 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption5').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);

});*/

// Mobile Typewriter Text
$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption-m1').css('width', ($('#caption-m1').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption-m1 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption-m1').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});

$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption-m2').css('width', ($('#caption-m2').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption-m2 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption-m2').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});

$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption-m3 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption-m3').css('width', ($('#caption-m3').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption-m3 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption-m3').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});

$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption-m4 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption-m4').css('width', ($('#caption-m4').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption-m4 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption-m4').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});

$(function() {
	   var ch = 0;
    var item = 0;
    var items = $('#caption-m5 li').length;
    var time = 2000;
    var delay = 28;
    var wait = 3000
    var tagOpen = false;

$('#showCaption-m5').css('width', ($('#caption-m5').width()));

function tickInterval() {
    if (item >= items)
    {
      ch = 0;
      item = 0;
    }
  
    var text = $('#caption-m5 li:eq('+item+')').html();
    type(text);
  
    var tick = setTimeout(tickInterval, time);
}

function type(text) {
    time = delay;
    ch++;
    if(text.substr((ch - 1), 1) == '<') {
        if(text.substr(ch, 1) == '/') {
            tagOpen = false;
        }
        var tag = '';
        while(text.substr((ch - 1), 1) != '>') {
            tag += text.substr((ch - 1), 1);
            ch++;
        }
        ch++;
        tag += '>';
        var html = /\<[a-z]+/i.exec(tag);
        if(html !== null) {
            html = html[0].replace('<', '</') + '>';
            tagOpen = html;
        }
    }
    if(tagOpen !== false) {
        var t = text.substr(0, ch) + tagOpen;
    } else {
        var t = text.substr(0, ch);
    }

    $('#showCaption-m5').html(t);
    if(ch > text.length) {
        item++;
        ch = 0;
        time = wait;
    }
}

var tick = setTimeout(tickInterval, time);
});