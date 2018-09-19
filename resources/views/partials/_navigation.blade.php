@if( Auth::check() == true)
<div class="non-register-user">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 col-md-offset-3">
                    <div class="notification-section text-center" style="padding-bottom: 10px;">
                        <ul class="list-inline">
                            <li>Welcome Admin</li>
                            <li><a href="/auth/logout">logout</a></li>
                        </ul>
                    </div>
            </div>
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</div> <!-- end .visitors-top-bar -->
<hr/>
<div class="non-register-user">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 col-md-offset-3">
                <div class="notification-section text-center" style="padding-bottom: 10px;">
                    <ul class="list-inline">
                        <li><a href="/admin/buy">Buy</a></li>
                        <li><a href="/admin/sell">Sell</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</div> <!-- end .visitors-top-bar -->
    @else
    <div class="non-register-user">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 col-md-offset-3">
                    <div class="notification-section text-center" style="padding-bottom: 10px;">
                        <ul class="list-inline">
                            <li><a href="/">Home</a></li>
                            <li><a href="/auth/login">Login</a></li>
                            <li><a href="/posts/registercategory">Register</a></li>
                            <li style="padding-bottom: 10px;padding-top: 10px;"><a href="/posts/contact">Contact Us</a></li>
                             </ul>
                    </div>
                </div>
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </div> <!-- end .visitors-top-bar -->
@endif