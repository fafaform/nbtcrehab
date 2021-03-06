@extends('layouts.app')

@section('navbar')
  @parent

  <nav class="nav has-shadow">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item is-tab" href="/devices">Device</a>
        <a class="nav-item is-tab is-active">Staff</a>
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
      <h1 class="title has-text-centered">Staff</h1>
      <hr>

      <div class="columns">
        <div class="column is-one-quarter">
          <a href="/staffs/create">
            <p class="notification is-success has-text-centered">   
              <span class="icon is-large">
                <i class="fa fa-plus"></i>
              </span>
              <br />
              Add new Staff
            </p>
          </a>
        </div>
      </div>

@php
  $count = 1;
@endphp
@foreach ($staffs as $staff)
  @if (($count == 1) || (($count % 4) == 1))
      <div class="columns">
  @endif
        <div class="column is-one-quarter">
          <a href="/staffs/{{ encrypt($staff->id) }}">
            <p class="notification is-primary has-text-centered">
              <span class="icon is-large">
                <i class="fa fa-user"></i>
              </span>
              <br />
              {{ $staff->name }}
              <br />
              {{ $staff->email }}
            </p>
          </a>
        </div>
  @if ((($count % 4) == 0))
      </div>
  @endif
  @if ($count == count($staffs))
      </div>
  @endif
  @php
    $count++;
  @endphp
@endforeach
    </div>
  </section>
@endsection
