<h1>{{ $diary->title }}</h1>

<div>
  <a href="{{ route('diary.edit', $diary) }}">
    <button>編集</button>
  </a>
</div>

<div>
  <div>{{ $diary->body }}</div>
  <div>{{ $diary->date }}</div>
</div>

<form method="post" action="{{ route('diary.destroy', $diary) }}">
  @csrf
  @method('delete')
  <button>削除</button>
</form>