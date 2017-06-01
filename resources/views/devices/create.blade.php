@extends('layouts.app')

@section('navbar')
  @parent

  <nav class="nav has-shadow">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item is-tab is-active">Device</a>
        <a class="nav-item is-tab" href="/staffs">Staff</a>
      </div>

      <div class="nav-right">
        <p class="nav-item is-tab">{{ auth()->user()->name }}</p>
        <a class="nav-item is-tab" href="/logout">
          <span class="icon is-medium">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </span>
        </a>
      </div>
    </div>
  </nav>
@endsection

@section('content')
  <section class="section">
    <div class="container">
      <br>
      <h1 class="title has-text-centered">Device Create</h1>
      <hr>

      <form action="devices/store" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Device_Group" name="Device_Group" placeholder="Device Group" autofocus required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Device_NO" name="Device_NO" placeholder="Device NO" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Device_NO" name="Device_NO" placeholder="Device NO" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Action_ID" name="Action_ID" placeholder="Action ID" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Device_Desc" name="Device_Desc" placeholder="Device Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Action_Desc" name="Action_Desc" placeholder="Action Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="number" id="Measured_Counter" name="Measured_Counter" placeholder="Measured Counter" min="1" max="10" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="number" id="Threshold_Counter" name="Threshold_Counter" placeholder="Threshold Counter" min="1" max="10" required>
          </p>
        </div>

        <div class="field">
          <p class="control">
            <button class="button is-success is-large is-fullwidth" type="submit">
              Save
            </button>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <button class="button is-large is-fullwidth">
              Cancel
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
