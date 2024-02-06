@extends('layouts.admin')

@section('content')
 <ul>
    @foreach ($projects as $project)
        <li>TITOLO: {{$project->title}}</li>
        <li>AUTORE: {{$project->author}}</li>
        <li>DATA CREAZIONE: {{$project->creation_date}}</li>
        <li>DATA ULTIMO UPDATE: {{$project->last_update}}</li>
        <li>LINGUAGGI DI PROGRAMMAZIONE : {{$project->lang}}</li>
        <li>LINK GITHUB: {{$project->link_github}}</li>
        <br>
    @endforeach
  </ul>
@endsection