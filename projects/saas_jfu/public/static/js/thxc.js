$(document).ready(function () {


    var urls = ['home', 'company', 'area'];
    var paths = window.location.pathname.split("/tv/thxc/");
    var now_module = paths[paths.length - 1];


    function jumpToPrev() {

        for (var i = 0; i < urls.length; i++) {
            if (urls[i] == now_module) {
                if (urls[i - 1]) {
                    location.href = '/tv/thxc/' + urls[i - 1];
                } else {
                    location.href = '/tv/thxc/' + urls[urls.length - 1];
                }
                break;
            }
        }
    }

    function jumpToNext() {
        for (var i = 0; i < urls.length; i++) {
            if (urls[i] == now_module) {
                if (urls[i + 1]) {
                    location.href = '/tv/thxc/' + urls[i + 1];
                } else {
                    location.href = '/tv/thxc/' + urls[0];
                }
                break;
            }
        }
    }


    $(document).keyup(function (e) {
        if (e.keyCode == '37') {
            //左
            jumpToPrev();
        } else if (e.keyCode == '39') {
            //右
            jumpToNext();
        } else if (e.keyCode == '33') {
            //左
            jumpToPrev();
        } else if (e.keyCode == '34') {
            //右
            jumpToNext();
        } else if (e.keyCode == '38') {
            //翻页笔小键左
            jumpToPrev();
        } else if (e.keyCode == '40') {
            //翻页笔小键右
            jumpToNext();
        }

        console.log(e.keyCode);

    });


});
