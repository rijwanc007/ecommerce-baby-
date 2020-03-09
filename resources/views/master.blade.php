<html>
@include('includes.header')
<body>
@include('includes.navbar')
@include('includes.sidebar')

<div class="main">
    <div class="hipsum">
        @yield('content')
    </div>
</div>

@include('includes.footer')
</body>
<script>
    $('#menu-action').click(function() {
        $('.sidebar').toggleClass('active');
        $('.main').toggleClass('active');
        $(this).toggleClass('active');

        if ($('.sidebar').hasClass('active')) {
            $(this).find('i').addClass('fa-close');
            $(this).find('i').removeClass('fa-bars');
        } else {
            $(this).find('i').addClass('fa-bars');
            $(this).find('i').removeClass('fa-close');
        }
    });

    // Add hover feedback on menu
    $('#menu-action').hover(function() {
        $('.sidebar').toggleClass('hovered');
    });
</script>
<script>
    $('.sub-menu ul').hide();
    $(".sub-menu a").click(function () {
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
</script>
<script>
    var rellax = new Rellax('.rellax', {
        speed: -2,
        center: false,
        round: true,
        vertical: true,
        horizontal: false
    });
</script>
<script>
    function searchToggle(obj, evt){
        var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }
</script>
</html>


