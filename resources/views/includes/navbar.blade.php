<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img class="logo" src="{{asset('assets/images/icons/setcolbd.png')}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li></li>
            </ul>
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search" />
                    <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                </div>
                <span class="close" onclick="searchToggle(this, event);"></span>
            </div>
        </div>
    </nav>
</div>
