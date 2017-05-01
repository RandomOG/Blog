@extends('main')

@section('title', '| contact')

@section('content')

  <div class="row">
    <div class="col-lg-9">
      <h3>Contact Us</h3>
      <hr>
      <form>
        <div class="form-group">
          <label name='email'>Email</label>
          <input id="email" type="" name="email" class="form-control">
        </div>   

        <div class="form-group">
          <label name='subject'>subject</label>
          <input id="subject" type="" name="subject" class="form-control">
        </div>  

        <div class="form-group">
          <label name='message'>message</label>
          <textarea id="message" type="" name="message" class="form-control" placeholder="enter msg here"></textarea>
        </div>  
        <input type="submit" value="submit" class="btn btn-success">

      </form>
    </div>
  </div>

  @endsection
