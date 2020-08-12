


                        <!-- Contact -->
                        <article id="contact">
                            <h2 class="major">Send a goon</h2>
                            <form method="post" action="{{route('goon.store')}}" enctype="multipart/form-data" >
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
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </form>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                            </ul>
                        </article>