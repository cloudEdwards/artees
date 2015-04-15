@foreach($statuses as $status)
	<article class="media status-media">
		<div class="pull-left">
			<img class="avatar status" src="{{gravatar_link($status->user->email) }}" alt="{{$status->user->username}}">
		</div>
		<div class="media-body">
			<h4 class="media-heading">
				{{$status->user->username}}
			</h4>
			<p>{{$status->created_at->diffForHumans()}}</p>

			<div id="status-body">{{$status->body}}</div>
		</div>
	</article>
@endforeach