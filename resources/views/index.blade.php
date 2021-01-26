@extends('main')

<h1>All Titles</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $temp)

    <tr>
    	<td>{{$temp->id}}</td>
    	<td>{{$temp->title}}</td>
    </tr>
    @endforeach
  </tbody>
</table>