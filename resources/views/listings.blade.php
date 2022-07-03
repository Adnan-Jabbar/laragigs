<!-- <h1><?php //echo $heading ?></h1> -->
<!-- <?php //foreach($listings as $listing): ?> -->
    <!-- <h2><?php //echo $listing['title']; ?></h2> -->
    <!-- <p><?php //echo $listing['description']; ?></p> -->
<!-- <?php //endforeach; ?> -->

<h1>{{$heading}}</h1>

{{-- @if(count($listings) == 0)
    <p>No listing found</p>
@endif --}}

@unless(count($listings) == 0)
    @foreach($listings as $listing)
        <h2>
            <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
        </h2>
        <p>
            {{$listing['description']}}
        </p>
    @endforeach
@else
    <p>No listing found</p>
@endunless


