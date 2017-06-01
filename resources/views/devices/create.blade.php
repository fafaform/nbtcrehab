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
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured1_Name" name="Measured1_Name" placeholder="Measured1 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured1_Abbr" name="Measured1_Abbr" placeholder="Measured1 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured1_Desc" name="Measured1_Desc" placeholder="Measured1 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured2_Unit" name="Measured2_Unit" placeholder="Measured2 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured2_Name" name="Measured2_Name" placeholder="Measured2 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured2_Abbr" name="Measured2_Abbr" placeholder="Measured2 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured2_Desc" name="Measured2_Desc" placeholder="Measured2 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured2_Unit" name="Measured2_Unit" placeholder="Measured2 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured3_Name" name="Measured3_Name" placeholder="Measured3 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured3_Abbr" name="Measured3_Abbr" placeholder="Measured3 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured3_Desc" name="Measured3_Desc" placeholder="Measured3 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured3_Unit" name="Measured3_Unit" placeholder="Measured3 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured4_Name" name="Measured4_Name" placeholder="Measured4 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured4_Abbr" name="Measured4_Abbr" placeholder="Measured4 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured4_Desc" name="Measured4_Desc" placeholder="Measured4 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured4_Unit" name="Measured4_Unit" placeholder="Measured4 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured5_Name" name="Measured5_Name" placeholder="Measured5 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured5_Abbr" name="Measured5_Abbr" placeholder="Measured5 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured5_Desc" name="Measured5_Desc" placeholder="Measured5 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured5_Unit" name="Measured5_Unit" placeholder="Measured5 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured6_Name" name="Measured6_Name" placeholder="Measured6 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured6_Abbr" name="Measured6_Abbr" placeholder="Measured6 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured6_Desc" name="Measured6_Desc" placeholder="Measured6 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured6_Unit" name="Measured6_Unit" placeholder="Measured6 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured7_Name" name="Measured7_Name" placeholder="Measured7 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured7_Abbr" name="Measured7_Abbr" placeholder="Measured7 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured7_Desc" name="Measured7_Desc" placeholder="Measured7 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured7_Unit" name="Measured7_Unit" placeholder="Measured7 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured8_Name" name="Measured8_Name" placeholder="Measured8 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured8_Abbr" name="Measured8_Abbr" placeholder="Measured8 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured8_Desc" name="Measured8_Desc" placeholder="Measured8 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured8_Unit" name="Measured8_Unit" placeholder="Measured8 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured9_Name" name="Measured9_Name" placeholder="Measured9 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured9_Abbr" name="Measured9_Abbr" placeholder="Measured9 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured9_Desc" name="Measured9_Desc" placeholder="Measured9 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured9_Unit" name="Measured9_Unit" placeholder="Measured9 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured10_Name" name="Measured10_Name" placeholder="Measured10 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured10_Abbr" name="Measured10_Abbr" placeholder="Measured10 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured10_Desc" name="Measured10_Desc" placeholder="Measured10 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Measured10_Unit" name="Measured10_Unit" placeholder="Measured10 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold1_Name" name="Threshold1_Name" placeholder="Threshold1 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold1_Abbr" name="Threshold1_Abbr" placeholder="Threshold1 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold1_Desc" name=" Threshold1_Desc" placeholder="  Threshold1 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold1_Unit" name="Threshold1_Unit" placeholder="Threshold1 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold2_Name" name="Threshold2_Name" placeholder="Threshold2 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold2_Abbr" name="Threshold2_Abbr" placeholder="Threshold2 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold2_Desc" name=" Threshold2_Desc" placeholder="  Threshold2 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold2_Unit" name="Threshold2_Unit" placeholder="Threshold2 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold3_Name" name="Threshold3_Name" placeholder="Threshold3 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold3_Abbr" name="Threshold3_Abbr" placeholder="Threshold3 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold3_Desc" name=" Threshold3_Desc" placeholder="  Threshold3 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold3_Unit" name="Threshold3_Unit" placeholder="Threshold3 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold4_Name" name="Threshold4_Name" placeholder="Threshold4 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold4_Abbr" name="Threshold4_Abbr" placeholder="Threshold4 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold4_Desc" name=" Threshold4_Desc" placeholder="  Threshold4 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold4_Unit" name="Threshold4_Unit" placeholder="Threshold4 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold5_Name" name="Threshold5_Name" placeholder="Threshold5 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold5_Abbr" name="Threshold5_Abbr" placeholder="Threshold5 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold5_Desc" name=" Threshold5_Desc" placeholder="  Threshold5 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold5_Unit" name="Threshold5_Unit" placeholder="Threshold5 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold6_Name" name="Threshold6_Name" placeholder="Threshold6 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold6_Abbr" name="Threshold6_Abbr" placeholder="Threshold6 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold6_Desc" name=" Threshold6_Desc" placeholder="  Threshold6 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold6_Unit" name="Threshold6_Unit" placeholder="Threshold6 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold7_Name" name="Threshold7_Name" placeholder="Threshold7 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold7_Abbr" name="Threshold7_Abbr" placeholder="Threshold7 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold7_Desc" name=" Threshold7_Desc" placeholder="  Threshold7 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold7_Unit" name="Threshold7_Unit" placeholder="Threshold7 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold8_Name" name="Threshold8_Name" placeholder="Threshold8 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold8_Abbr" name="Threshold8_Abbr" placeholder="Threshold8 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold8_Desc" name=" Threshold8_Desc" placeholder="  Threshold8 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold8_Unit" name="Threshold8_Unit" placeholder="Threshold8 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold9_Name" name="Threshold9_Name" placeholder="Threshold9 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold9_Abbr" name="Threshold9_Abbr" placeholder="Threshold9 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold9_Desc" name=" Threshold9_Desc" placeholder="  Threshold9 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold9_Unit" name="Threshold9_Unit" placeholder="Threshold9 Unit">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold10_Name" name="Threshold10_Name" placeholder="Threshold10 Name">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold10_Abbr" name="Threshold10_Abbr" placeholder="Threshold10 Abbr">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="  Threshold10_Desc" name=" Threshold10_Desc" placeholder="  Threshold10 Desc">
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded">
            <input class="input is-large" type="text" id="Threshold10_Unit" name="Threshold10_Unit" placeholder="Threshold10 Unit">
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
