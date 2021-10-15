@extends('layouts.base')
@section('title','list')

@section('container')
  <main class="table_area">
      <table class="table_booklist">
        <tr class="tr_th_table_booklist">
          <th class="th_tr_table_booklist">titre</th>
          <th class="th_tr_table_booklist">auteur</th>
          <th class="th_tr_table_booklist">id</th>
        </tr>
        @foreach ($bookList as $book)
          <tr class="tr_td_table_booklist">
            <td class="td_tr_table_booklist">{{ $book->title  }}</td>
            <td class="td_tr_table_booklist">{{ $book->author }}</td>
            <td class="td_tr_table_booklist id">{{ $book->id }}</td>
          </tr>
        @endforeach

      </table>
    </main>

@endsection
