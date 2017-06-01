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
      <h1 class="title has-text-centered">Device</h1>
      <hr>

      <div class="columns">
        <div class="column is-one-quarter">
          <a href="/devices/create">
            <p class="notification is-success has-text-centered">   
              <span class="icon is-large">
                <i class="fa fa-plus"></i>
              </span>
              <br />
              Add new Device
            </p>
          </a>
        </div>
      </div>
      
@php
  $count = 1;
@endphp
@foreach ($devices as $device)
  @if (($count == 1) || (($count % 3) == 1))
      <div class="columns">
  @endif
        <div class="column is-one-third">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title">
                {{ $device->Device_Desc }}
              </p>
            </header>
            <div class="card-content">
              <div class="content has-text-centered">
  <!-- @if ($device->Device_ID == 1 || $device->Device_ID == 2 || $device->Device_ID == 3 || $device->Device_ID == 4)
                <img src="{{ asset('img/A.jpg') }}" width="64" height="64">
  @endif
  @if ($device->Device_ID == 5 || $device->Device_ID == 6)
                <img src="{{ asset('img/B.jpg') }}" width="64" height="64">
  @endif
  @if ($device->Device_ID == 7 || $device->Device_ID == 8 || $device->Device_ID == 9 || $device->Device_ID == 10 || $device->Device_ID == 11 || $device->Device_ID == 12)
                <img src="{{ asset('img/C.jpg') }}" width="64" height="64">
  @endif
  @if ($device->Device_ID == 13 || $device->Device_ID == 14 || $device->Device_ID == 15)
                <img src="{{ asset('img/D.jpg') }}" width="64" height="64">
  @endif
  @if ($device->Device_ID == 16 || $device->Device_ID == 17)
                <img src="{{ asset('img/E.jpg') }}" width="64" height="64">
  @endif -->
                <br>
                {{ $device->Action_Desc }}
              </div>
            </div>
            <footer class="card-footer">
              <a class="card-footer-item" href="/devices/{{ encrypt($device->Device_ID) }}">View</a>
              <a class="card-footer-item" href="/devices/{{ encrypt($device->Device_ID) }}/edit">Edit</a>
              <a class="card-footer-item" href="/devices/{{ encrypt($device->Device_ID) }}">Delete</a>
            </footer>
          </div>
        </div>
  @if ((($count % 3) == 0))
      </div>
  @endif
  @if ($count == count($devices))
      </div>
  @endif
  @php 
    $count++;
  @endphp
@endforeach
    </div>
  </section>
@endsection
