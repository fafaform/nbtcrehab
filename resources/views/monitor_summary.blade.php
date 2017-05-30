@extends('layouts.app')

@section('navbar')
  @parent

  <nav class="nav has-shadow">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item is-tab" href="/patients">Patient</a>
        <a class="nav-item is-tab" href="/devices/{{ encrypt($Patient_ID) }}">Device</a>
        <a class="nav-item is-tab" href="/monitor/{{ encrypt($Patient_ID) }}/{{ encrypt($Device_ID) }}">Monitor</a>
        <a class="nav-item is-tab is-active">Summary</a>
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
      <h1 class="title has-text-centered">Summary</h1>
      <hr>

      <table class="table">
        <thead>
          <tr>
            <th>Start DateTime</th>
            <th>End DateTime</th>
            <th>Week NO</th>
            <th>Day NO</th>
            <th>Set NO</th>
            <th>Time NO</th>
            <th>Measured Value 1</th>
            <th>Measured Value 2</th>
            <th>Measured Value 3</th>
            <th>Measured Value 4</th>
            <th>Measured Value 5</th>
            <th>Measured Value 6</th>
            <th>Measured Value 7</th>
            <th>Measured Value 8</th>
            <th>Measured Value 9</th>
            <th>Measured Value 10</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Start DateTime</th>
            <th>End DateTime</th>
            <th>Week NO</th>
            <th>Day NO</th>
            <th>Set NO</th>
            <th>Time NO</th>
            <th>Measured Value 1</th>
            <th>Measured Value 2</th>
            <th>Measured Value 3</th>
            <th>Measured Value 4</th>
            <th>Measured Value 5</th>
            <th>Measured Value 6</th>
            <th>Measured Value 7</th>
            <th>Measured Value 8</th>
            <th>Measured Value 9</th>
            <th>Measured Value 10</th>
          </tr>
        </tfoot>
        <tbody>
@foreach ($pws as $pw)
          <tr>
            <td>{{ date('d M Y H:i:s Z', $pw->Start_DateTime) }}</td>
            <td>{{ date('d M Y H:i:s Z', $pw->End_DateTime) }}</td>
            <td>{{ $pw->Week_NO }}</td>
            <td>{{ $pw->Day_NO }}</td>
            <td>{{ $pw->Set_NO }}</td>
            <td>{{ $pw->Time_NO }}</td>
            <td>{{ $pw->Measured_Value_1 }}</td>
            <td>{{ $pw->Measured_Value_2 }}</td>
            <td>{{ $pw->Measured_Value_3 }}</td>
            <td>{{ $pw->Measured_Value_4 }}</td>
            <td>{{ $pw->Measured_Value_5 }}</td>
            <td>{{ $pw->Measured_Value_6 }}</td>
            <td>{{ $pw->Measured_Value_7 }}</td>
            <td>{{ $pw->Measured_Value_8 }}</td>
            <td>{{ $pw->Measured_Value_9 }}</td>
            <td>{{ $pw->Measured_Value_10 }}</td>
          </tr>
@endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection
