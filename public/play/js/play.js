var host = 'http://localhost:8000/public/';
var params = {'token' : token};
var index = 0;
var number = 0;
var soal = [];
var no = 1;
var jawaban = [];

function getParameter(theParameter) { 
    var params = window.location.search.substr(1).split('&');
    for (var i = 0; i < params.length; i++) {
        var p=params[i].split('=');
        if (p[0] == theParameter) {
        return decodeURIComponent(p[1]);
        }
    }
    return false;
}

function playSoal(data) {
$.get('http://localhost:8900/json/soal/?code=' + getParameter('code') + '&token_api=' + params['token'], function(data) {
        soal = data;
        console.log(data);
        show();
    });
}

function show() {
    if(index == 0) {
        console.log(index);        
        $("#tasks").html("<h4>" + no + ".</h4><p>" + soal[index].soal + "....")
        $("#a").html("<input type='radio' name='jawaban' value='a'>A. " + soal[index].a)
        $("#b").html("<input type='radio' name='jawaban' value='b'>B. " + soal[index].b)
        $("#c").html("<input type='radio' name='jawaban' value='c'>C. " + soal[index].c)
        $("#d").html("<input type='radio' name='jawaban' value='d'>D. " + soal[index].d)
        $("#e").html("<input type='radio' name='jawaban' value='e'>E. " + soal[index].e)
        index = index + 1;
        no = no + 1;
        val = $('input[name=jawaban]:checked').val();
        $("#next").click(function () {
            inputAnswer(val);
        });
    }
    else if(index < soal.length) {
        val = $('input[name=jawaban]:checked').val();
        $("#tasks").html("<h4>" + no + ".</h4><p>" + soal[index].soal + "....")
        $("#a").html("<input type='radio' name='jawaban' value='a'>A. " + soal[index].a)
        $("#b").html("<input type='radio' name='jawaban' value='b'>B. " + soal[index].b)
        $("#c").html("<input type='radio' name='jawaban' value='c'>C. " + soal[index].c)
        $("#d").html("<input type='radio' name='jawaban' value='d'>D. " + soal[index].d)
        $("#e").html("<input type='radio' name='jawaban' value='e'>E. " + soal[index].e)
        index = index + 1;
        no = no + 1;
    } else {
        val = $('input[name=jawaban]:checked').val();
        submitAnswer();
    }
}

function submitAnswer() {
    $("#btn").html("<button class='btn btn-primary' id='selesai' form='soal'>Selesai</button>");
    $("#selesai").submit();
}

function inputAnswer(val) {
    if(number == 0) {
        $("#d_jawaban").append("<input type='hidden' name='pilihan[" + number  + "]' value='" + val +"' id='select_jawaban'>");
        console.log(number + val);
        number = number + 1;
    } else {
        $("#d_jawaban").append("<input type='hidden' name='pilihan[" + number  + "]' value='" + val +"' id='select_jawaban'>");
        console.log(number + val);
        number = number + 1;
    }
}

function countdownTime() {
    $('#timer').countdown(time_end, function (event) {
        $(this).html(event.strftime('<h1><i>%H</i> Jam <i>%M</i> Menit %S Detik</h1>'));
    });
}

playSoal();