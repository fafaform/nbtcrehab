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
      <h1 class="title has-text-centered">Patient Create</h1>
      <hr>

      <form action="patients/store" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Patient_ID" name="Patient_ID" placeholder="Patient ID" autofocus required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Patient_Name" name="Patient_Name" placeholder="Patient Name" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <label class="radio">
              <input type="radio" name="Patient_Sex">
              ชาย
            </label>
            <label class="radio">
              <input type="radio" name="Patient_Sex">
              หญิง
            </label>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Patient_Email" name="Patient_Email" placeholder="Patient Email" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="password" id="Patient_Password" name="Patient_Password" placeholder="Patient Password" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Patient_Tel" name="Patient_Tel" placeholder="Patient Tel" required>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Patient_Symtom" name="Patient_Symtom" placeholder="Patient Symtom" required>
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
