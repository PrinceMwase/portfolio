<article id="goon{{$goon->id}}">
    <h2 class="major">Post</h2>

    <div>
        <span class="image main">
            <img src="http://{{$goon->image}}" alt=""  /> 
        </span> 
                      <blockquote>
                        {{$goon->words}} #{{$goon->category->name}}
                      </blockquote>

      </div>    

</article>