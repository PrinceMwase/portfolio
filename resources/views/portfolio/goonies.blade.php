		<!-- Intro -->
        <article id="goonies">
            <h2 class="major">Goonies</h2>
            <section>
                <h4>Explore the categories</h4>
                <ul class="alt ">
                    <li class="category" id="0">All</li>
                    @foreach (App\Category::all() as $category)
                        <li class="category" id="{{$category->id}}">{{$category->name}}</li>
                    @endforeach
                    
                  
                </ul>
            </section>

           
            <section class="gooniesection">
                {{-- <span class="image main"><img src="{{asset('main/images/pic01.jpg')}}" alt="" /> </span> 
                <blockquote>
                    Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. 
                    Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac 
                    adipiscing accumsan faucibus.      <span class="image main"><img src="{{asset('main/images/pic01.jpg')}}" alt="" /> </span> 
                <blockquote>
                    Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. 
                    Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac 
                    adipiscing accumsan faucibus. 
                    Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                </ul>
                    Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                </ul> --}}
            </section>

        <script src="{{asset('js/goonies.js')}}">
     
        
        </script>

            {{-- <p>Explore  <a href="" onclick="window.history.back();">Go Back</a>.</p> --}}
            
        </article>
