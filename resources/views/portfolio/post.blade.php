


                        <!-- Contact -->
                        <article id="post">
                            <h2 class="major">Create a post</h2>
                            <form method="post" action="{{route('goon.store')}}" id="goonForm" enctype="multipart/form-data" >
                                @csrf
                                <div class="fields">
                                    <div class="field half">
                                        <label for="category">Category</label>
                                        <select name="category" id="category">
                                               
                                            @foreach (App\Category::all() as $category)
                                               
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                
                                             @endforeach
                                        </select>
                                    </div>
                                    <div class="field half">
                                        
                                        <input type="file" name="image" onchange=" $('.imageLabel').text( this.value.split('\\')[2] )" id="image" style="    position: relative;
                                        z-index: 2;
                                      
                                        height: 0;
                                        margin: 0;
                                        opacity: 0;">
                                        <label for="image" class="custom-file-label imageLabel" style="    position: relative;
                                        
                                       right: 0;
    left: 0;
                                        z-index: 1;
                                        height: calc(1.5em + .75rem + 2px);
                                        padding: .375rem .75rem;
                                        font-weight: 400;
                                        line-height: 1.5;
                                        color: #ebebec;
                                        background-color: #24262a;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        margin-top: 1rem;
                                        ">Choose an Image</label>
                                        {{-- <input type="text" name="image" id="image" /> --}}
                                    </div>
                                    <div class="field">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" rows="4"></textarea>
                                    </div>
                                </div>

                                {{-- uploader bar --}}
                                <div class="field list" style="background-color:#696969; color:#FFF;padding:5px;display:none;border-radius:5px;    transition-duration: 1000ms; margin-bottom: 10px;">
                                </div>
                                <ul class="actions">
                                    <li><input type="submit" value="Send " class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </form>
                        
                            <script>
                                $(document).ready( function(){
                                   

                                  
                                    
                                    // This event will handle asynchronous upload of a goon
                                    $('#goonForm').on('submit', function(event){
                                        event.preventDefault();
                                        
                                        let formValues = $(this).serialize()
                                        let data = new FormData( $('#goonForm')["0"] )
                                       
                                        // dumb down ajax
                                      
                                        $('.list').fadeIn(100).css({"width":"50%", 'backgroundColor' : '#696969'}).text('sending...') ;
                                        
                                        $.ajax({
                                            url: "{{route('goon.store')}}",
                                            data:data,
                                            cache:false,
                                            contentType:false,
                                            processData:false,
                                            type:'POST',

                                            success: function(daa,status, jxHr){
                                                $('.list').css({ 'width': 100 + '%', 'backgroundColor' : '#ff2274' }).text(daa)
                                                
                                            },
                                            error:function(j,s,e){
                                          
                                                
                                                $('.list').css({ 'backgroundColor' : '#696969' }).text(s + " : " + e );
                                                
                                            },
                                        }).fail( function(jxHr){
                                            console.log(failed);
                                            
                                        } );

                            
                                       

                                       
                                    } );

                                    //end ofscript
                                } )
                            </script>
                        </article>