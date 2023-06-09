@extends('layouts.app')

@section('content')
<div class="contents row">
    <div class="content_post" style="background-image: url({{ $tweet->image }});">
      <div class="more">
        <span><img src="{{ asset('images/arrow_top.png') }}" alt="arrow"></span>
        <ul class="more_list">
          <li>
            <a href="{{ route('tweets.edit', $tweet->id) }}">編集</a>
          </li>
          <li>
            <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">削除</button>
            </form>
          </li>
        </ul>
      </div>
      <p>{{ $tweet->text }}</p>
      <span class="name">{{ $tweet->name }}</span>
    </div>
</div>
@endsection
