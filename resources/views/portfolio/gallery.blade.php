		<!-- Intro -->
        <article id="gallery">
            <h2 class="major gallery">Categories</h2>
            <section>
                <h4 class="gallery">Explore the Cave</h4>
                <ul class="alt ">
                    <li class="category" id="0">All</li>
                    @foreach (App\Category::all() as $category)
                        <li class="category" id="{{$category->id}}">{{$category->name}}</li>
                    @endforeach
                    
                  
                </ul>
            </section>

           
           
            <section class="gooniesection">
       
            </section>
            <section>
                <ul class="actions">
                 
                   
                </ul>
            </section>

        <script async="true" src="{{asset('js/goonies.js')}}">
     
        
        </script>

            {{-- <p>Explore  <a href="" onclick="window.history.back();">Go Back</a>.</p> --}}
            
        </article>
