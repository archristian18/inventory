@extends('Auth.layout')
@section ('content')

    <div class="">
      <section class="login_content">
        <form action ="" method="post">
          <h1>Login Form</h1>
          <div>
            <input type="text" class="form-control" placeholder="Username" required="" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div>
            <a class="btn btn-default submit" href="index.html">Log in</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">New to site?
              <a href="{{ route('create.register') }}"> Create Account </a>
            </p>

          </div>
        </form>
      </section>
    </div>

@endsection