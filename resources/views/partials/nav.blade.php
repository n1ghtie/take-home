<div class="ui container">
    <div class="ui secondary menu">
        <a href="{{ route('home') }}" class="{{ Request::is('home') ? 'ui secondary basic button active' : 'ui secondary basic button' }} item">Home</a>
        <div class="right menu">
            <a href="#" onclick="document.querySelector('#logout').submit();return false;" class="ui item primary basic button">Logout</a>
            <form method="POST" id="logout" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
    </div>
</div>
<div class="ui divider"></div>