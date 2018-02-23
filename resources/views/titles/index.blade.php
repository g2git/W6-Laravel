@extends ('layout')

@section('content')

<div id="blog" class="row">
    @foreach ($titles as $title)
                <div class="col-md-10 blogShort">
                    <h1>{{$title -> article_title}}</h1>
                    <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

                    <article><p>
                        {{$title -> article}}
                        </p></article>
                    <a class="btn btn-blog pull-right marginBottom10" href="/titles/{{$title->id}}">READ MORE</a>
                </div>


                <div class="form-group">
  <form method = "POST" action="/titles">
    {{csrf_field()}}
    <input type="text" name="filterbyAuthor" placeholder="Choose an author">
    <button type = "submit" name = "filterAuthor">Filter</button>
  </form>
</div>


</div>
            <div class="form-group">
              <form method = "POST" action="/titles">
                {{csrf_field()}}
                <select class="form-control" name="filterbyCategory" required>
                  <option value="" selected disabled>Choose a category</option>
                  @foreach($items as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                <button type = "submit" name = "filterCategory">Filter</button>
              </form>
            </div>

      @endforeach
      <div class="col-md-12 gap10"></div>
      </div>
@endsection
