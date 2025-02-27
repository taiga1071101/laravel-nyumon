<html>
<body>
  <h1>日記記事一覧</h1>
  <table style="border: 2px black solid;">
    <thead>
      <tr style="border: 2px black solid;">
        <th style="border: 2px black solid;">date</th>
        <th style="border: 2px black solid;">title</th>
      </tr>
    </thead>
    <tbody>
      @foreach($diaries as $diary)
      <tr style="border: 2px black solid;">
        <td style="border: 2px black solid;">{{ $diary->date }}</td>
        <td style="border: 2px black solid;"><a href="{{ route('diary.show', $diary) }}">{{ $diary->title }}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>