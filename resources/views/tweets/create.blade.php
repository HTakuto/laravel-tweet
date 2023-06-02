@extends('layouts.app')

@section('content')
<div class="contents row">
    <div class="container">
      <h3>投稿する</h3>
      <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <input type="text" name="name" placeholder="ニックネーム">
        <input type="text" name="image" placeholder="画像">
        <textarea name="text" placeholder="内容" rows="10"></textarea>
        <input type="submit" value="投稿する">
      </form>
    </div>
</div>
@endsection
