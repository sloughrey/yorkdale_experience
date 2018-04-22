

$(document).ready(function(){
    $(".categorybutton").click(function(){
        $(".categorybutton").removeClass('active');
        if(!this.classList.contains('active')){
            this.classList.add('active');
        }
        if($(this).text().indexOf('STORES') >= 0){
            $('#stores').css('display','unset');
            $('#categories').css('display','none');
        }
        if($(this).text().indexOf('CATEGORIES') >= 0){
            $('#stores').css('display','none');
            $('#categories').css('display','unset');
        }
    });
});
