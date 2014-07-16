<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $('#main_imag').load(function() {
            setTimeout(function() {
                $('#text1').animate({
                    left: 0
                })
            }, 1000);
            setTimeout(function() {
                $('#text2').animate({
                    left: 0
                })
            }, 2000);
            setTimeout(function() {
                $('#text3').animate({
                    left: 0
                })
            }, 3000);
        });
    });
</script>
<div id="slide-wrap">
    <img id="main_imag" src="image.jpeg" width="300px">
    <span id="text1">Lorem ipsum</span>
    <span id="text2">Lorem ipsum</span>
    <span id="text3">Lorem ipsum</span>
</div>
<style>
    #slide-wrap{
        width: 300px;
        position: relative;
    }
    #text1{
        position: absolute;
        top: 20px;
        left: -500px;
        display: block;
        text-align: center;
        width: 100%;
    }
    #text2{
        position: absolute;
        top: 50px;
        left: -500px;
        display: block;
        text-align: center;
        width: 100%;
    }
    #text3{
        position: absolute;
        top: 80px;
        left: -500px;
        display: block;
        text-align: center;
        width: 100%;
    }
</style>
