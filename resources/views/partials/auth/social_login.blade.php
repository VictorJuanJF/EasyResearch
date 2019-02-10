<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            {{__("Socialite")}}
        </div>
        <div class="card-body">
        <a href="{{route('social_auth',['driver'=>'github'])}}" class="btn btn-success btn-lg btn-block">
        {{__("Github")}} <i class="fab fa-github"></i>
        </a>
        <a href="{{route('social_auth',['driver'=>'facebook'])}}" class="btn btn-primary btn-lg btn-block">
        {{__("facebook")}} <i class="fab fa-facebook"></i>
        </a>
        </div>
    </div>
</div>