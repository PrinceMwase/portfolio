<article id="goon{{$goon->id}}">
    <h2 class="major">Post</h2>

    <div>
        <span class="image main">
            <img src="/{{$goon->image}}" alt=""  /> 
        </span> 
                      <blockquote>
                        {{$goon->words}}
                      </blockquote>

                      <ul class="icons">
                          <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                          <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                          <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                          <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                      </ul>
      </div>    

</article>