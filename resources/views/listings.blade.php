<h1>{{$heading}}</h1>
@foreach ($listings as $listing)
    <h2><a href="listing/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p>{{$listing['description']}}</p>
@endforeach