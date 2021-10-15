@extends('layouts.base')
@section('title','ADD')

@section('container')
<form action="/booksAdd" method="post">
  @csrf
    <input type="text" name="titleAdd" value="" placeholder="Titre">
    <input type="text" name="authorAdd" value="" placeholder="Autheur">
    <input type="number" name="publicationYearAdd" value="" placeholder="Année de publication">
    <input type="text" name="genreAdd" value="" placeholder="Genre">
    <input type="text" name="synopsisAdd" value="" placeholder="Synopsis">
    <button type="submit" name="button">envoyer</button>
</form>
@endsection
