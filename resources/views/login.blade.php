@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="container">
      <br>
      <h1 class="title has-text-centered">nbtcrehab</h1>
      <hr>

      <form method="POST" action="/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
          <p class="control is-expanded">
            <span class="select is-large is-fullwidth">
              <select id="email" name="email" required>
                <option value="">Email</option>
@foreach ($users_email as $user_email)
                <option value="{{ $user_email }}">{{ $user_email }}</option>
@endforeach
              </select>
            </span>
          </p>
    <!--       <p class="control is-expanded has-icons-left">
            <input class="input is-large" type="text" id="email" name="email" placeholder="Email" required>
            <span class="icon is-medium is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </p> -->
        </div>
        <div class="field">
          <p class="control has-icons-left">
            <input class="input is-large" type="password" id="password" name="password" placeholder="Password" required>
            <span class="icon is-medium is-left">
              <i class="fa fa-lock"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <button class="button is-success is-large is-fullwidth" type="submit">
              Login
            </button>
          </p>
        </div>
      </form>

@if (count($errors) > 0)
      <div class="notification is-danger">
        <ul>
  @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
  @endforeach
        </ul>
      </div>
@endif
    </div>
  </section>
@endsection
