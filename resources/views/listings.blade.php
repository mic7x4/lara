<h2>{{$heading}}</h2>
 @foreach($listings as $listing )
    <h3>
      <a href="/listings/{{$listing['id']}}">
        {{$listing['title']}}
       </a>  
    </h3>
    <p>{{$listing['description']}}</p>
@endforeach