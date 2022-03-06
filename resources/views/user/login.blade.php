@extends('layouts.app')
@section('body')
<div class="flex w-full h-screen absolute top-0">
  <div class="m-auto">
    <form action="{{ url('/') }}" method="post" class="space-y-4">
      @csrf
      <div class="">
        <label for="name">Username</label><br/>
        <input type="text" name="name" id="name" class="border-2 rounded p-[2px]" required>
      </div>
      <div class="">
        <label for="pwd">Password</label><br/>
        <input type="password" name="password" id="pwd" class="border-2 rounded p-[2px]" required>
      </div>
      <div class="">
        <input type="submit" value="submit" class="border-2 rounded px-2 py-1">
      </div>
    </form>
  </div>
  <hr>
</div>
@endsection