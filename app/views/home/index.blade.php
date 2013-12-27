@extends('template.default')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Hareketler</div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Tarih</th>
            <th>Miktar</th>
            <th>Açıklama</th>
            <th>Kalan</th>
			<th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
		      @foreach ($rows as $row)
          <tr>
            <td width="150" title="{{date("d.m.Y H:i",strtotime($row->created_at))}}">{{  date("d.m.Y",strtotime($row->created_at)) }}</td>
            @if($row->status == "insert")
            <td class="text-success">{{ $row->amount}} TL</td>
            @else
            <td class="text-danger">{{ $row->amount}} TL</td>
            @endif
            <td>{{ $row->content}}</td>
            <td>{{ $row->remaining}} TL</td>
			<td width="80">{{ HTML::link(URL::route('deleterow', array('id' => $row->id)), 'Sil') }}</td>
          </tr>       
           @endforeach
        </tbody>
      </table>
    </div>
	{{ $rows->links() }}
</div>
@stop