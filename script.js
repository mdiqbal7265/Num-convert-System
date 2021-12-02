;(function($){
    $(document).ready(function(){
        $("#num").on('click', function(){
            var num = $('#convertor').find(":selected").val();
            $("#action").val(num);
        })
    })
})(jQuery);